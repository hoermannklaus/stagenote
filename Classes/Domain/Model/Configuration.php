<?php
namespace WorldDirect\Stagenote\Domain\Model;

/***
 *
 * This file is part of the "Staging Note" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Klaus Hörmann-Engl <kho@world-direct.at>
 *
 ***/

/**
 * A configuration object, which represents a single configuration for a specific
 * stage.
 */
class Configuration extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * The title of the stage. Only used for internal naming.
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * The text shown with this stage note.
     *
     * @var string
     * @validate NotEmpty
     */
    protected $text = '';

    /**
     * Which context should trigger this note?
     *
     * @var string
     * @validate NotEmpty
     */
    protected $context = '';

    /**
     * The host on which the stage note is shown.
     *
     * @var string
     * @validate NotEmpty
     */
    protected $host = '';

    /**
     * The color of the stage note. Must contain HEX color code with leading hash.
     *
     * @var string
     * @validate NotEmpty
     */
    protected $color = '';

    /**
     * The size of the stage note. It can be small or large. Small only contains the
     * text and a little bit of padding, large is 100% width.
     *
     * @var int
     * @validate NotEmpty
     */
    protected $size = 0;

    /**
     * Determines the position of the stage note. Whether on top of the browser or at
     * the bottom.
     *
     * @var int
     * @validate NotEmpty
     */
    protected $position = 0;

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
     * Returns the host
     *
     * @return string $host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the host
     *
     * @param string $host
     * @return void
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * Returns the color
     *
     * @return string $color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets the color
     *
     * @param string $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Returns the size
     *
     * @return int $size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets the size
     *
     * @param int $size
     * @return void
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * Returns the position
     *
     * @return int $position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets the position
     *
     * @param int $position
     * @return void
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * Returns the text
     *
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the text
     *
     * @param string $text
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Returns the context
     *
     * @return string $context
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets the context
     *
     * @param string $context
     * @return void
     */
    public function setContext($context)
    {
        $this->context = $context;
    }
}
