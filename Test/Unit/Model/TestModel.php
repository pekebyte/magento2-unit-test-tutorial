<?php
namespace Pekebyte\UnitTests\Test\Unit\Model;
 
class TestModel extends \PHPUnit\Framework\TestCase
{
    protected $_objectManager;
    protected $_model;
    /**
     * This function is called before the test runs.
     * Ideal for setting the values to variables or objects.
     */
    protected function setUp()
    {
        $this->_objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->_model = $this->_objectManager->getObject("Pekebyte\UnitTests\Model\TestModel");
    }

    /**
     * This function is called after the test runs.
     * Ideal for setting the values to variables or objects.
     */
    public function tearDown()
    {
    }

    /**
     * this function tests the result of the addition of two numbers
     *
     */
    public function testAdd()
    {
        $result = $this->_model->add(5.0, 5.0);
        $expectedResult = 10.0;
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * this function tests the result of the subtraction of two numbers
     *
     */
    public function testSubtract()
    {
        $result = $this->_model->subtract(5.0, 2.0);
        $expectedResult = 3.0;
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * this function tests the result of the multiplication of two numbers
     *
     */
    public function testMultiply()
    {
        $result = $this->_model->multiply(5.0, 10.0);
        $expectedResult = 50.0;
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * this function tests the result of the division of two numbers
     */
    public function testDivide()
    {
        $result = $this->_model->divide(6.0, 2.0);
        $expectedResult = 3.0;
        $this->assertEquals($expectedResult, $result);
    }
}
