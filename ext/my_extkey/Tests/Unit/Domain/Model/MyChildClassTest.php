<?php
namespace MyVendor\MyExtkey\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class MyChildClassTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \MyVendor\MyExtkey\Domain\Model\MyChildClass
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MyVendor\MyExtkey\Domain\Model\MyChildClass();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSubTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubTitle()
        );
    }

    /**
     * @test
     */
    public function setSubTitleForStringSetsSubTitle()
    {
        $this->subject->setSubTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subTitle',
            $this->subject
        );
    }
}
