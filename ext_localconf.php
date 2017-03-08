<?php
if ( ! defined('TYPO3_MODE')) {
    die( 'Access denied.' );
}
$boot = function ($extensionKey) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'PodcastTeam.' . $extensionKey,
        'Podcast',
        array(
            'Player' => 'show, edit, sendNotificationMail, sendInviteMail',
            'Move'   => 'delete',

        ),
        // non-cacheable actions
        array(),
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'PodcastTeam.' . $extensionKey,
        'Related',
        array(
            'Player' => 'show, edit, sendNotificationMail, sendInviteMail',
            'Move' => 'delete',

        ),
        // non-cacheable actions
        array(
            'Portfolio' => 'create, update, delete',
            'ProjectDetail' => 'create, update, delete',

        ),
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'PodcastTeam.' . $extensionKey,
        'Portfolio',
        array(
            'Portfolio' => 'list, show',

        ),
        // non-cacheable actions
        array(
            'Portfolio' => 'list, show',

        ),
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'PodcastTeam.' . $extensionKey,
        'PortfolioDetail',
        array(
            'Portfolio' => 'show',

        ),
        // non-cacheable actions
        array(
            'Portfolio' => 'show',

        )
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'PodcastTeam.' . $extensionKey,
        'RssFeed',
        array(
            'Rss' => 'list',

        ),
        // non-cacheable actions
        array(
            'Rss' => 'list',

        )
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'PodcastTeam.' . $extensionKey,
        'Sociallinks',
        array(
            'SocialLinks' => 'list',

        ),
        // non-cacheable actions
        array(
            'SocialLinks' => 'create, update, delete',
            'Portfolio' => 'create, update, delete',
            'ProjectDetails' => 'create, update, delete',

        ),
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    if (TYPO3_MODE === 'BE') {
        $backendLayoutFileProviderDirectory = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName(
            'EXT:podcast/Configuration/TypoScript/Setup/Backendlayouts'
        );
        $beFiles  = \TYPO3\CMS\Core\Utility\GeneralUtility::getFilesInDir($backendLayoutFileProviderDirectory,
            'ts');
        foreach ($beFiles as $beLayoutFileName) {
            $beLayoutPath = $backendLayoutFileProviderDirectory . DIRECTORY_SEPARATOR . $beLayoutFileName;
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(file_get_contents($beLayoutPath));
        }
    }
};
$boot($_EXTKEY);
unset( $boot );
