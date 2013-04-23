<?php
require_once 'TestProvider.php';
/**
 * @group ctc
 */
class CtcTest extends TestProvider
{
    private $_ctc;
    
    public function setup()
    {
        $this->_ctc = $this->getClient()->api('ctc');
    }
    
    public function testCall()
    {
        $result = $this->_ctc->call(self::$ctc);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_ctc = null;
    }
}