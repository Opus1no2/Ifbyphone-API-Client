<?php
require_once 'TestProvider.php';
/**
 * @group verifymenow
 */
class VerifymenowTest extends TestProvider
{
    private $_verify;
    
    public function setup()
    {
        $this->_verify = $this->getClient()->api('verifymenow');
    }
    
    public function testGetRecording()
    {
        $result = $this->_verify->getRecording(self::$transcriptionRecording);
        $this->_test($result);
    }
    
    public function testVerify()
    {
        $result = $this->_verify->verify(self::$verify);
        $this->_test($result);        
    }
    
    public function tearDown()
    {
        $this->_verify = null;
    }
}