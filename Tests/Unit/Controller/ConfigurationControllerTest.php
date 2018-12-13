<?php
namespace WorldDirect\Stagenote\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Klaus Hörmann-Engl <kho@world-direct.at>
 */
class ConfigurationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \WorldDirect\Stagenote\Controller\ConfigurationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\WorldDirect\Stagenote\Controller\ConfigurationController::class)
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
    public function showActionAssignsTheGivenConfigurationToView()
    {
        $configuration = new \WorldDirect\Stagenote\Domain\Model\Configuration();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('configuration', $configuration);

        $this->subject->showAction($configuration);
    }
}
