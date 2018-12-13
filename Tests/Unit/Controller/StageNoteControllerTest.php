<?php
namespace WorldDirect\Stagenote\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Klaus Hörmann-Engl <kho@world-direct.at>
 */
class StageNoteControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \WorldDirect\Stagenote\Controller\StageNoteController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\WorldDirect\Stagenote\Controller\StageNoteController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenStageNoteToView()
    {
        $stageNote = new \WorldDirect\Stagenote\Domain\Model\StageNote();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('stageNote', $stageNote);

        $this->subject->showAction($stageNote);
    }
}
