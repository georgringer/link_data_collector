<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'GeorgRinger.LinkDataCollector',
            'Ldc',
            'Link Data Collector'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_linkdatacollector_domain_model_data');
    },
    $_EXTKEY
);
