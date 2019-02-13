<?php
namespace MyVendor\MyExtkey\Tests\Unit\Controller;

/**
 * Test case.
 */
class MyParentClassControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \MyVendor\MyExtkey\Controller\MyParentClassController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MyVendor\MyExtkey\Controller\MyParentClassController::class)
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
    public function listActionFetchesAllMyParentClassesFromRepositoryAndAssignsThemToView()
    {

        $allMyParentClasses = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $myParentClassRepository = $this->getMockBuilder(\MyVendor\MyExtkey\Domain\Repository\MyParentClassRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $myParentClassRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMyParentClasses));
        $this->inject($this->subject, 'myParentClassRepository', $myParentClassRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('myParentClasses', $allMyParentClasses);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenMyParentClassToView()
    {
        $myParentClass = new \MyVendor\MyExtkey\Domain\Model\MyParentClass();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('myParentClass', $myParentClass);

        $this->subject->showAction($myParentClass);
    }
}
