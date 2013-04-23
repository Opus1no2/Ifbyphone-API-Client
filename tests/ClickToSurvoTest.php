<?php
require_once 'TestProvider.php';
/**
 * @cts
 */
class ClickToSurvoTest extends TestProvider
{
    private $_cts;
    
    public function setup()
    {
        $this->_cts = $this->getClient()->api('cts');
    }
    
    public function testCall()
    {
        $result = $this->_cts->call(self::$cts);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_cts = null;
    }
}