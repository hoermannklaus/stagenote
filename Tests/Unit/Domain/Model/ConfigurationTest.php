<?php
namespace WorldDirect\Stagenote\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Klaus Hörmann-Engl <kho@world-direct.at>
 */
class ConfigurationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \WorldDirect\Stagenote\Domain\Model\Configuration
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \WorldDirect\Stagenote\Domain\Model\Configuration();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTextReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getText()
        );
    }

    /**
     * @test
     */
    public function setTextForStringSetsText()
    {
        $this->subject->setText('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'text',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContextReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContext()
        );
    }

    /**
     * @test
     */
    public function setContextForStringSetsContext()
    {
        $this->subject->setContext('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'context',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHostReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHost()
        );
    }

    /**
     * @test
     */
    public function setHostForStringSetsHost()
    {
        $this->subject->setHost('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'host',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getColorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getColor()
        );
    }

    /**
     * @test
     */
    public function setColorForStringSetsColor()
    {
        $this->subject->setColor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'color',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSizeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSize()
        );
    }

    /**
     * @test
     */
    public function setSizeForIntSetsSize()
    {
        $this->subject->setSize(12);

        self::assertAttributeEquals(
            12,
            'size',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPositionReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPosition()
        );
    }

    /**
     * @test
     */
    public function setPositionForIntSetsPosition()
    {
        $this->subject->setPosition(12);

        self::assertAttributeEquals(
            12,
            'position',
            $this->subject
        );
    }
}
