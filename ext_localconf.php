<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'GeorgRinger.LinkDataCollector',
            'Ldc',
            [
                'Data' => 'new,create'
            ],
            // non-cacheable actions
            [
                'Data' => 'new,create'
            ]
        );

    },
    $_EXTKEY
);
