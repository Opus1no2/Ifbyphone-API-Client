<?php
require_once 'TestProvider.php';
/**
 * Group ctf
 */
class ClickToFindmeTest extends TestProvider
{
    private $_ctf;
    
    public function setup()
    {
        $this->_ctf = $this->getClient()->api('ctf');
    }
    
    public function testCall()
    {
        $result = $this->_ctf->call(self::$ctf);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_ctf = null;
    }
}