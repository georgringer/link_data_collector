<?php

namespace GeorgRinger\LinkDataCollector\Service;

use TYPO3\CMS\Core\Mail\MailMessage;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class MailService
{

    /**
     * Creates a fluid instance with given template-file
     *
     * @param array $arguments
     * @param string $template Path below Template-Root-Path
     * @param string $format
     * @return string
     */
    public function getFluidTemplate(array $arguments, $template, $format = 'txt')
    {
        /** @var StandaloneView $renderer */
        $renderer = GeneralUtility::makeInstance(StandaloneView::class);
        $renderer->setFormat($format);
        $path = GeneralUtility::getFileAbsFileName('EXT:link_data_collector/Resources/Private/Templates/Mail/' . $template);
        $renderer->setTemplatePathAndFilename($path);
        $renderer->assignMultiple($arguments);
        return trim($renderer->render());
    }

    public function sendMail(MailMessage $mailMessage, $plainContent, $htmlContent = '')
    {
        $mailMessage->setBody($plainContent)->setContentType('text/plain');
        if (!empty($htmlContent)) {
            $mailMessage->addPart($htmlContent, 'text/emailText');
        }
        return $mailMessage->send();
    }

}
