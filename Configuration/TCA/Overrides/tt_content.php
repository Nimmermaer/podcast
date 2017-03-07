<?php

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2015-2016 Michael <mi.blunck@gmail.com>,
 */

if ( ! defined('TYPO3_MODE')) {
    die( 'Access denied.' );
}


$newTtContentColumns = [
    'tx_podcast_icon'                            => [
        'exclude'     => 0,
        'displayCond' => [
            'OR' => [
                'FIELD:layout:=:1',
                'FIELD:layout:=:2'
            ],
        ],
        'label'       => 'LLL:EXT:podcast/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_podcast_class',
        'config'      => [
            'type'  => 'select',
            'renderType' => 'selectSingle',
            'items' => $GLOBALS['TYPO3_CONF_VARS']['FONT_AWESOME'],
        ],
    ],
    'tx_podcast_icon_movement'                         => [
        'exclude'     => 0,
        'displayCond' => [
            'OR' => [
                'FIELD:layout:=:1',
                'FIELD:layout:=:2'
            ],
        ],
        'label'       => 'LLL:EXT:podcast/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_podcast_movement',
        'config'      => [
            'type'  => 'select',
            'renderType' => 'selectSingle',
            'items' => $GLOBALS['TYPO3_CONF_VARS']['ANIMATED'],
        ],
    ],
    'subheader'     => [
        'exclude'     => 0,
        'displayCond' => [
            'OR' => [
                'FIELD:CType:=:header'
            ],
        ],
        'config' => array(
            'type' => 'text',
            'cols' => '40',
            'rows' => '15'
        )
    ],
    'tx_podcast_social'                         => [
        'exclude'     => 0,
        'displayCond' => [
            'AND' => [
                'FIELD:layout:=:4',
                'FIELD:CType:=:textmedia'
            ],
        ],
        'label'       => 'LLL:EXT:podcast/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_podcast_social',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_podcast_domain_model_sociallinks',
            'foreign_field' => 'record',
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => array(
                'collapseAll' => 0,
                'expandSingle ' => 1,
                'newRecordLinkAddTitle' => 1
            ),
        ),
    ],
];

$GLOBALS['TCA']['tt_content']['palettes']['fonts']['showitem'] = 'tx_podcast_icon,tx_podcast_icon_movement';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $newTtContentColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', '--palette--;;fonts,', '',
    'after:header');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_podcast_social', '',
    'after:header');

$contentelements = [
    'related',
    'portfolio',
    'sociallink'
];
foreach ($contentelements as $contentelement) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:podcast/Resources/Private/Language/locallang_be.xlf:podcast_' . $contentelement . '.title',
            'podcast_' . $contentelement,
        ],
        'textmedia',
        'after'
    );
}
$GLOBALS['TCA']['tt_content']['types'] ['podcast_portfolio'] = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header'
];
$GLOBALS['TCA']['tt_content']['ctrl']['requestUpdate'] = 'layout';

$GLOBALS['TCA']['tt_content']['columns']['image']['config']['max_size'] = 100000;
$GLOBALS['TCA']['tt_content']['columns']['media']['config']['max_size'] = 100000;
$GLOBALS['TCA']['tt_content']['columns']['multimedia']['config']['max_size'] = 100000;

