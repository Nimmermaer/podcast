<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xlf:tx_podcast_domain_model_sociallinks',
		'label' => 'uid',
		'label_alt' => 'link',
		'label_alt_force'=> 1,
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'icon, link,',
		'iconfile' => 'EXT:podcast/Resources/Public/Icons/Svg/sociallink.svg'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, icon, link',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden, --palette--;;1, icon, link, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_podcast_domain_model_sociallinks',
				'foreign_table_where' => 'AND tx_podcast_domain_model_sociallinks.pid=###CURRENT_PID### AND tx_podcast_domain_model_sociallinks.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'icon' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xlf:tx_podcast_domain_model_sociallinks.icon',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => $GLOBALS['TYPO3_CONF_VARS']['FONT_AWESOME'],
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'link' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xlf:tx_podcast_domain_model_sociallinks.link',
			'config' => array(
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
		'record' => [
			'config' => [
				'type' => 'passthrough',
			],
		],
		
	),
);