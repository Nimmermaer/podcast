<?php
namespace PodcastTeam\Podcast\Domain\Model;

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
 * Portfolio
 */
class Portfolio extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     */
    protected $title = '';
    
    /**
     * description
     * 
     * @var string
     */
    protected $description = '';
    
    /**
     * podcast
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $podcast = null;
    
    /**
     * image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * details
     * 
     * @var \PodcastTeam\Podcast\Domain\Model\ProjectDetails
     */
    protected $details = null;
    
    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the podcast
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $podcast
     */
    public function getPodcast()
    {
        return $this->podcast;
    }
    
    /**
     * Sets the podcast
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $podcast
     * @return void
     */
    public function setPodcast(\TYPO3\CMS\Extbase\Domain\Model\FileReference $podcast)
    {
        $this->podcast = $podcast;
    }
    
    /**
     * Returns the image
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
    
    /**
     * Returns the details
     * 
     * @return \PodcastTeam\Podcast\Domain\Model\ProjectDetails details
     */
    public function getDetails()
    {
        return $this->details;
    }
    
    /**
     * Sets the details
     * 
     * @param \PodcastTeam\Podcast\Domain\Model\ProjectDetails $details
     * @return void
     */
    public function setDetails(\PodcastTeam\Podcast\Domain\Model\ProjectDetails $details)
    {
        $this->details = $details;
    }

}