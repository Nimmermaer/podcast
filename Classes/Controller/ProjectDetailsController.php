<?php
namespace PodcastTeam\Podcast\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Michael Blunck <mi.blunck@gmail.com>
 *           Mirco Winkler <mirco.winkler@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * ProjectDetailsController
 */
class ProjectDetailsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * projectDetailsRepository
     * 
     * @var \PodcastTeam\Podcast\Domain\Repository\ProjectDetailsRepository
     * @inject
     */
    protected $projectDetailsRepository = NULL;
    
    /**
     * action list
     * 
     * @param PodcastTeam\Podcast\Domain\Model\ProjectDetails
     * @return void
     */
    public function listAction()
    {
        $projectdetails = $this->projectdetailsRepository->findAll();
        $this->view->assign('projectdetails', $projectdetails);
    }
    
    /**
     * action show
     * 
     * @param PodcastTeam\Podcast\Domain\Model\ProjectDetails
     * @return void
     */
    public function showAction(\PodcastTeam\Podcast\Domain\Model\ProjectDetails $projectDetails)
    {
        $this->view->assign('projectdetails', $projectdetails);
    }
    
    /**
     * action new
     * 
     * @param PodcastTeam\Podcast\Domain\Model\ProjectDetails
     * @return void
     */
    public function newAction()
    {
        
    }
    
    /**
     * action create
     * 
     * @param PodcastTeam\Podcast\Domain\Model\ProjectDetails
     * @return void
     */
    public function createAction(\PodcastTeam\Podcast\Domain\Model\ProjectDetails $newProjectDetails)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->projectdetailsRepository->add($newProjectdetails);
        $this->redirect('list');
    }
    
    /**
     * action edit
     * 
     * @param PodcastTeam\Podcast\Domain\Model\ProjectDetails
     * @ignorevalidation $projectDetails
     * @return void
     */
    public function editAction(\PodcastTeam\Podcast\Domain\Model\ProjectDetails $projectDetails)
    {
        $this->view->assign('projectdetails', $projectdetails);
    }
    
    /**
     * action update
     * 
     * @param PodcastTeam\Podcast\Domain\Model\ProjectDetails
     * @return void
     */
    public function updateAction(\PodcastTeam\Podcast\Domain\Model\ProjectDetails $projectDetails)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->projectdetailsRepository->update($projectdetails);
        $this->redirect('list');
    }
    
    /**
     * action delete
     * 
     * @param PodcastTeam\Podcast\Domain\Model\ProjectDetails
     * @return void
     */
    public function deleteAction(\PodcastTeam\Podcast\Domain\Model\ProjectDetails $projectDetails)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->projectdetailsRepository->remove($projectdetails);
        $this->redirect('list');
    }

}