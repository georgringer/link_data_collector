<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:link_data_collector/Resources/Private/Language/locallang_db.xlf:tx_linkdatacollector_domain_model_data',
        'label' => 'last_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'enablecolumns' => [

        ],
        'searchFields' => 'last_name,first_name,file_path,email,',
        'iconfile' => 'EXT:link_data_collector/Resources/Public/Icons/tx_linkdatacollector_domain_model_data.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'last_name, first_name, file_path, email',
    ],
    'types' => [
        '1' => ['showitem' => 'last_name, first_name, file_path, email, '],
    ],
    'columns' => [
        'last_name' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:link_data_collector/Resources/Private/Language/locallang_db.xlf:tx_linkdatacollector_domain_model_data.last_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'first_name' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:link_data_collector/Resources/Private/Language/locallang_db.xlf:tx_linkdatacollector_domain_model_data.first_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'file_path' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:link_data_collector/Resources/Private/Language/locallang_db.xlf:tx_linkdatacollector_domain_model_data.file_path',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'email' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:link_data_collector/Resources/Private/Language/locallang_db.xlf:tx_linkdatacollector_domain_model_data.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],

        ],
    ],
];
