<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,text,context,host,color,size,position',
        'iconfile' => 'EXT:stagenote/Resources/Public/Icons/tx_stagenote_domain_model_configuration.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, text, context, host, color, size, position',
    ],
    'palettes' => [
        'basic' => ['showitem' => 'hidden'],
        'text' => ['showitem' => 'title, text'],
        'filter' => ['showitem' => 'context, host'],
        'display' => ['showitem' => 'color, size, position']
    ],
    'types' => [
        //'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource'],
        '1' => ['showitem' => '--palette--;LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.palette.basic;basic, --palette--;LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.palette.text;text, --palette--;LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.palette.filter;filter, --palette--;LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.palette.display;display']
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_stagenote_domain_model_configuration',
                'foreign_table_where' => 'AND tx_stagenote_domain_model_configuration.pid=###CURRENT_PID### AND tx_stagenote_domain_model_configuration.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.text',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'context' => [
            'exclude' => true,
            'label' => 'LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.context',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'host' => [
            'exclude' => true,
            'label' => 'LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.host',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'color' => [
            'exclude' => true,
            'label' => 'LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.color',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'wizards' => array(
                    '_PADDING' => 2,
                    'color' => array(
                        'title' => 'LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.color.color',
                        'type' => 'colorbox',
                        'dim' => '16x12',
                        'tableStyle' => 'border:solid 1px black;',
                        'script' => 'wizard_colorpicker.php',
                        'JSopenParams' => 'height=300,width=250,status=0,menubar=0,scrollbars=1'
                    ),
                ),
            ],
        ],
        'size' => [
            'exclude' => true,
            'label' => 'LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.size',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.size.fullNote', 0],
                    ['LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.size.headerOnly', 1]
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ],
        ],
        'position' => [
            'exclude' => true,
            'label' => 'LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.position',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.position.top', 0],
                    ['LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.position.middle', 1],
                    ['LLL:EXT:stagenote/Resources/Private/Language/locallang_db.xlf:tx_stagenote_domain_model_configuration.position.bottom', 2]
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ],
        ],
    
    ],
];
