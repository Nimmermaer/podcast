<?php
if ( ! defined('TYPO3_MODE')) {
    die( 'Access denied.' );
}
$boot = function ($extensionKey) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'PodcastTeam.' . $extensionKey,
        'Podcast',
        'Podcast'
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'PodcastTeam.' . $extensionKey,
        'RssFeed',
        'RssFeed'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'PodcastTeam.' . $extensionKey,
        'Related',
        'Related'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'PodcastTeam.' . $extensionKey,
        'Portfolio',
        'Portfolio'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'PodcastTeam.' . $extensionKey,
        'PortfolioDetail',
        'PortfolioDetail'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'PodcastTeam.' . $extensionKey,
        'Sociallinks',
        'Social Links'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript',
        'Podcast');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_podcast_domain_model_sociallinks',
        'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_sociallinks.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_podcast_domain_model_sociallinks');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_podcast_domain_model_portfolio',
        'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_portfolio.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_podcast_domain_model_portfolio');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_podcast_domain_model_projectdetail',
        'EXT:podcast/Resources/Private/Language/locallang_csh_tx_podcast_domain_model_projectdetail.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_podcast_domain_model_projectdetail');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
        'podcast',
        'tx_podcast_domain_model_projectdetails',
        'categories',
        array(
            'label' => 'LLL:EXT:podcast/Resources/Private/Language/locallang_db.xlf:tx_podcast_domain_model_projectdetails.categories',
            'exclude' => FALSE,
            'fieldConfiguration' => array(
                'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.title ASC',
            ),
            'l10n_mode' => 'exclude',
            'l10n_display' => 'hideDiff',
        )
    );


    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Imaging\IconRegistry::class
    );

    $newIcons = [
        'related' => 'EXT:podcast/Resources/Public/Icons/Svg/related.svg',
        'portfolio' => 'EXT:podcast/Resources/Public/Icons/Svg/portfolio.svg',
        'sociallink' => 'EXT:podcast/Resources/Public/Icons/Svg/sociallink.svg'
    ];

    foreach ($newIcons as $key => $icon) {
        $iconRegistry->registerIcon(
            $key, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => $icon]
        );
    }
};

$boot($_EXTKEY);
unset( $boot );
