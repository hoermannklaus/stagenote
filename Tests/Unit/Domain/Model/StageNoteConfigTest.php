<?php
namespace WorldDirect\Stagenote\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Klaus Hörmann-Engl <kho@world-direct.at>
 */
class StageNoteConfigTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \WorldDirect\Stagenote\Domain\Model\StageNoteConfig
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \WorldDirect\Stagenote\Domain\Model\StageNoteConfig();
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
}
