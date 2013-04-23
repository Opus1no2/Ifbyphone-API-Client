<?php
require_once 'TestProvider.php';
/**
 * @group routing
 */
class RoutingTest extends TestProvider
{
    private $_routing;
    
    public function setup()
    {
        $this->_routing = $this->getClient()->api('routing');
    }
    
    public function testAdvanced()
    {
        $result = $this->_routing->advanced(self::$advanced);
        $this->_test($result);
    }
    
    public function testConfigure()
    {
        $result = $this->_routing->configure(self::$configure);
        $this->_test($result);
    }
    
    public function testNumber()
    {
        $result = $this->_routing->numbers();
        $this->_test($result);
    }
    
    public function testUpdateLabel()
    {
        $result = $this->_routing->updateLabel(self::$updateLabel);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_routing = null;
    }
}