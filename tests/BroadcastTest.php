<?php
require_once 'TestProvider.php';
/**
 * @group broadcast
 */
class BroadcastTest extends TestProvider
{
    private $_broadcast;
    
    public function setup()
    {
        $this->_broadcast = $this->getClient()->api('broadcast');
    }
    
    public function testCreate()
    {   
        $result = $this->_broadcast->create(self::$testVbCreate);
        $this->_test($result);
    }
    
    public function testGetActiveOptOut()
    {
        $result = $this->_broadcast->getOptOut(self::$testGetActiveOptout);
        $this->_test($result);
    }
    
    public function testGetInactiveOptOut()
    {
        $result = $this->_broadcast->getOptOut(self::$testGetInactiveOptout);
        $this->_test($result);
    }
    
    public function testGetHistory()
    {
        $result = $this->_broadcast->getHistory();
        $this->_test($result);
    }
    
    public function testBroadcastOptOut()
    {
        $result = $this->_broadcast->addOptOut(self::$testVBoptout);
        $this->_test($result);
    }
    
    public function testSchedule()
    {
        $result = $this->_broadcast->schedule(self::$testVbSchedule);   
        $this->_test($result);
    }
    
    public function testStatus()
    {
        $result = $this->_broadcast->status(self::$testStatus);
        $this->_test($result);
    }
    
    public function testStop()
    {
        $result = $this->_broadcast->stop(self::$testVbStop);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_broadcast = null;
    }
}