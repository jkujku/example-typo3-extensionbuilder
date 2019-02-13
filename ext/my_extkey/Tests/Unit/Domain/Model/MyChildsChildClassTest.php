<?php
namespace MyVendor\MyExtkey\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class MyChildsChildClassTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \MyVendor\MyExtkey\Domain\Model\MyChildsChildClass
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MyVendor\MyExtkey\Domain\Model\MyChildsChildClass();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSubSubTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubSubTitle()
        );
    }

    /**
     * @test
     */
    public function setSubSubTitleForStringSetsSubSubTitle()
    {
        $this->subject->setSubSubTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subSubTitle',
            $this->subject
        );
    }
}
