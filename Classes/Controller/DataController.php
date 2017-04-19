<?php

namespace GeorgRinger\LinkDataCollector\Controller;

/***
 *
 * This file is part of the "Link Data collector" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/
use GeorgRinger\LinkDataCollector\Service\MailService;
use TYPO3\CMS\Core\Mail\MailMessage;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * DataController
 */
class DataController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * dataRepository
     *
     * @var \GeorgRinger\LinkDataCollector\Domain\Repository\DataRepository
     * @inject
     */
    protected $dataRepository = null;

    /**
     */
    public function newAction()
    {
        $this->view->assign('file', GeneralUtility::_GET('file'));
    }

    /**
     * action create
     *
     * @param \GeorgRinger\LinkDataCollector\Domain\Model\Data $data
     * @return void
     */
    public function createAction(\GeorgRinger\LinkDataCollector\Domain\Model\Data $data = null)
    {

        if ($data !== null) {
            $data->setPid($this->settings['pidForNewRecord']);
            $this->dataRepository->add($data);

            $arguments = [
                'data' => $data
            ];

            $settings = $this->settings['mail'];
            if ((int)$settings['enable'] === 1 && GeneralUtility::validEmail($settings['to'])) {

                $mailService = GeneralUtility::makeInstance(MailService::class);
                $plainContent = $mailService->getFluidTemplate($arguments, 'MailToAdmin.txt');
                /** @var MailMessage $mailMessage */
                $mailMessage = GeneralUtility::makeInstance(MailMessage::class);
                $mailMessage
                    ->setSubject($settings['subject'])
                    ->addFrom($settings['fromMailAddress'], $settings['fromMailName'])
                    ->setTo($settings['to']);
                $mailService->sendMail($mailMessage, $plainContent);
            }
        }
    }

    protected function addErrorFlashMessage()
    {
    }


}
