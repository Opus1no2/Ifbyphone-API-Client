<?php
require_once 'TestProvider.php';
/**
 * @group vr
 */
class ClickToVirtualReceptionistTest extends TestProvider
{
    private $_ctvr;
    
    public function setup()
    {
        $this->_ctvr = $this->getCient()->api('ctvr');
    }
    
    public function testCall()
    {
        $result = $this->_ctvr->call(self::$ctvr);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_ctvr = null;
    }
}