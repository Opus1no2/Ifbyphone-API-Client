<?php
require_once 'TestProvider.php';
/**
 * @group registerednumbers
 */
class RegisteredNumbersTest extends TestProvider
{
    private $_registeredNums;
    
    public function setup()
    {
        $this->_registeredNums = $this->getClient()->api('registerednumbers');
    }
    
    public function testAdd()
    {
        $result = $this->_registeredNums->add(self::$addNum);
        $this->_test($result);
    }
    
    public function testListNumbers()
    {
        $result = $this->_registeredNums->listNumbers();
        $this->_test($result);
    }
    
    public function testRemove()
    {
        $result = $this->_registeredNums->remove(self::$removeRegisteredNum);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_registeredNums = null;
    }
}