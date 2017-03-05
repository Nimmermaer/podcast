<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 26.02.2017
 * Time: 22:34
 */

namespace PodcastTeam\Podcast\Domain\Repository;


class Repository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * initialize repository
     */
    public function initializeObject()
    {
        /** @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
        $querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
        $querySettings->setRespectStoragePage(false);
        $querySettings->setRespectSysLanguage(false);
        $this->setDefaultQuerySettings($querySettings);

    }
}