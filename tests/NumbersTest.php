<?php
require_once 'TestProvider.php';
/**
 * @group numbers
 */
class NumberTest extends TestProvider
{
    private $_number;
    
    public function setup()
    {
        $this->_number = $this->getClient()->api('numbers');
    }
    
    public function testOrderNumbers()
    {
        $result = $this->_number->orderNumbers(self::$order);
        $this->_test($result);
    }
    
    public function testRemoveNumbers()
    {
        $result = $this->_number->removeNumbers(self::$removeNum);
        $this->_test($result);
    }
    
    public function testSearchNumbers()
    {
        $result = $this->_number->searchNumbers(self::$searchNum);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_number = null;
    }
}