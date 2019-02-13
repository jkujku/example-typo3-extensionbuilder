<?php
namespace MyVendor\MyExtkey\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class MyParentClassTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \MyVendor\MyExtkey\Domain\Model\MyParentClass
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MyVendor\MyExtkey\Domain\Model\MyParentClass();
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
}
