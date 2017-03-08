<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 08.03.2017
 * Time: 21:23
 */

namespace PodcastTeam\Podcast\Controller;


use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class RssController
 * @package PodcastTeam\Podcast\Controller
 */
class RssController extends ActionController
{
    /**
     * portfolioRepository
     * @var \PodcastTeam\Podcast\Domain\Repository\PortfolioRepository
     * @inject
     */
    protected $portfolioRepository;


    public function initializeListAction()
    {
        $this->request->setFormat('xml');
    }

    /**
     *
     */
    public function listAction()
    {

        $podcasts = $this->portfolioRepository->findAll();
        /** @var \TYPO3\CMS\Fluid\View\StandaloneView $rss */
        $rss                           = $this->objectManager->get('TYPO3\\CMS\\Fluid\\View\\StandaloneView');
        $extbaseFrameworkConfiguration = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
        $templateRootPath              = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($extbaseFrameworkConfiguration['view']['templateRootPaths'][0]);
        $templatePathAndFilename       = $templateRootPath . 'Feed/Rss.xml';

        $rss->setTemplatePathAndFilename($templatePathAndFilename);
        $rss->assignMultiple(['podcasts' => $podcasts]);


        printf($rss->render());
        die('tt');
    }
}