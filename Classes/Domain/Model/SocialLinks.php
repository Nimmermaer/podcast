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
 * SocialLinks
 */
class SocialLinks extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * icon
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $icon = 0;
    
    /**
     * link
     * 
     * @var string
     */
    protected $link = '';
    
    /**
     * Returns the icon
     * 
     * @return string $icon
     */
    public function getIcon()
    {
        return $this->icon;
    }
    
    /**
     * Sets the icon
     * 
     * @param string $icon
     * @return void
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }
    
    /**
     * Returns the link
     * 
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }
    
    /**
     * Sets the link
     * 
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

}