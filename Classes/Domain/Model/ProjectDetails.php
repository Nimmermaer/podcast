<?php
namespace PodcastTeam\Podcast\Domain\Model;

    /***************************************************************
     *  Copyright notice
     *  (c) 2017 Michael Blunck <mi.blunck@gmail.com>
     *           Mirco Winkler <mirco.winkler@gmail.com>
     *  All rights reserved
     *  This script is part of the TYPO3 project. The TYPO3 project is
     *  free software; you can redistribute it and/or modify
     *  it under the terms of the GNU General Public License as published by
     *  the Free Software Foundation; either version 3 of the License, or
     *  (at your option) any later version.
     *  The GNU General Public License can be found at
     *  http://www.gnu.org/copyleft/gpl.html.
     *  This script is distributed in the hope that it will be useful,
     *  but WITHOUT ANY WARRANTY; without even the implied warranty of
     *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *  GNU General Public License for more details.
     *  This copyright notice MUST APPEAR in all copies of the script!
     ***************************************************************/

/**
 * Projectdetails
 */
class ProjectDetails extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * date
     * @var \DateTime
     */
    protected $date = null;

    /**
     * author
     * @var string
     */
    protected $author = '';

    /**
     * categories
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
     */
    protected $categories = '';

    /**
     * link
     * @var string
     */
    protected $link = '';


    public function __construct()
    {
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the date
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     *
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the author
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param string $author
     *
     * @return void
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Adds a Category
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\Category $category
     *
     * @return void
     */
    public function addCategory(
        \TYPO3\CMS\Extbase\Domain\Model\Category $category
    ) {
        $this->categories->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\Category $categoryToRemove
    The Category to be removed
     *
     * @return void
     */
    public function removeCategory(
        \TYPO3\CMS\Extbase\Domain\Model\Category $categoryToRemove
    ) {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
     * $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
     * $categories
     *
     * @return void
     */
    public function  setCategories(
        \TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories
    ) {
        $this->categories = $categories;
    }

    /**
     * Returns the link
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
     *
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

}