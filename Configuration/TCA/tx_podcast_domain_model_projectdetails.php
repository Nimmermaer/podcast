<?php
return array(
    'ctrl'      => array(
        'title'                    => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xlf:tx_podcast_domain_model_projectdetails',
        'label'                    => 'date',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'cruser_id'                => 'cruser_id',
        'dividers2tabs'            => true,
        'versioningWS'             => 2,
        'versioning_followPages'   => true,
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete'                   => 'deleted',
        'enablecolumns'            => array(
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
        ),
        'searchFields'             => 'date,author,categories,link,',
        'iconfile'                 => 'EXT:podcast/Resources/Public/Icons/Svg/details.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, date, author, categories, link',
    ),
    'types'     => array(
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden, --palette--;;1, date, author,  link,--div--;Kategorie,categories, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'),
    ),
    'palettes'  => array(
        '1' => array('showitem' => ''),
    ),
    'columns'   => array(

        'sys_language_uid' => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config'  => array(
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items'               => array(
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', - 1),
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
                ),
            ),
        ),
        'l10n_parent'      => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config'      => array(
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'items'               => array(
                    array('', 0),
                ),
                'foreign_table'       => 'tx_podcast_domain_model_projectdetails',
                'foreign_table_where' => 'AND tx_podcast_domain_model_projectdetails.pid=###CURRENT_PID### AND tx_podcast_domain_model_projectdetails.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource'  => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label'      => array(
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max'  => 255,
            )
        ),
        'hidden'           => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config'  => array(
                'type' => 'check',
            ),
        ),
        'starttime'        => array(
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config'    => array(
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime'          => array(
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config'    => array(
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'date'             => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xlf:tx_podcast_domain_model_projectdetails.date',
            'config'  => array(
                'dbType'   => 'datetime',
                'type'     => 'input',
                'size'     => 12,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => '0000-00-00 00:00:00'
            ),
        ),
        'author'           => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xlf:tx_podcast_domain_model_projectdetails.author',
            'config'  => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'categories'       => array(),
        'link'             => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xlf:tx_podcast_domain_model_projectdetails.link',
            'config'  => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'wizards' => [
                    'link' => [
                        'type' => 'popup',
                        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                        'icon' => 'actions-wizard-link',
                        'module' => [
                            'name' => 'wizard_link',
                        ],
                        'JSopenParams' => 'height=800,width=600,status=0,menubar=0,scrollbars=1',
                        'params' => [
                            'blindLinkOptions' => 'folder',
                            'blindLinkFields' => 'class, target',
                            'allowedExtensions' => 'jpg',
                        ],
                    ],
                ],
                'softref' => 'typolink',
            ),
        ),

    ),
);