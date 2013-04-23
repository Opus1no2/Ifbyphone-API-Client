<?php
require_once 'TestProvider.php';
/**
 * @group ctvm
 */
class ClickToVoiceMailTest extends TestProvider
{
    private $_ctvm;
    
    public function setup()
    {
        $this->_ctvm = $this->getClient()->api('ctvm');
    }
    
    public function testCall()
    {
        $result = $this->_ctvm->call(self::$ctvm);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_ctvm = null;
    }
}