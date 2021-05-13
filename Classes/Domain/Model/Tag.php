<?php
namespace GeorgRinger\News\Domain\Model;

/**
 * This file is part of the "news" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * Tag model
 */
class Tag extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{

    /**
     * @var \DateTime
     */
    protected $crdate;

    /**
     * @var \DateTime
     */
    protected $tstamp;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $seoTitle;

    /**
     * @var string
     */
    protected $seoDescription;

    /**
     * @var string
     */
    protected $seoHeadline;

    /**
     * @var string
     */
    protected $seoText;

    /** @var string */
    protected $slug;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\News>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $news;

    /**
     * Initialize news relation
     *
     * @return \GeorgRinger\News\Domain\Model\Tag
     */
    public function __construct()
    {
        $this->news = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Get crdate
     *
     * @return \DateTime
     */
    public function getCrdate()
    {
        return $this->crdate;
    }

    /**
     * Set crdate
     *
     * @param \DateTime $crdate crdate
     */
    public function setCrdate($crdate)
    {
        $this->crdate = $crdate;
    }

    /**
     * Get Tstamp
     *
     * @return \DateTime
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    /**
     * Set tstamp
     *
     * @param \DateTime $tstamp tstamp
     */
    public function setTstamp($tstamp)
    {
        $this->tstamp = $tstamp;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param string $title title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * @param string $seoTitle
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seoTitle = $seoTitle;
    }

    /**
     * @return string
     */
    public function getSeoDescription()
    {
        return $this->seoDescription;
    }

    /**
     * @param string $seoDescription
     */
    public function setSeoDescription($seoDescription)
    {
        $this->seoDescription = $seoDescription;
    }

    /**
     * @return string
     */
    public function getSeoHeadline()
    {
        return $this->seoHeadline;
    }

    /**
     * @param string $seoHeadline
     */
    public function setSeoHeadline($seoHeadline)
    {
        $this->seoHeadline = $seoHeadline;
    }

    /**
     * @return string
     */
    public function getSeoText()
    {
        return $this->seoText;
    }

    /**
     * @param string $seoText
     */
    public function setSeoText($seoText)
    {
        $this->seoText = $seoText;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get News
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set News
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $news news
     */
    public function setTags($news)
    {
        $this->news = $news;
    }

    /**
     * Adds a news
     *
     * @param \GeorgRinger\News\Domain\Model\News $news
     */
    public function addNews(\GeorgRinger\News\Domain\Model\News $news)
    {
        $this->news->attach($news);
    }

    /**
     * Removes a news
     *
     * @param \GeorgRinger\News\Domain\Model\News $news
     */
    public function removeTag(\GeorgRinger\News\Domain\Model\News $news)
    {
        $this->news->detach($news);
    }
}
