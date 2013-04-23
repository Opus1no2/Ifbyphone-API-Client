<?php
require_once 'TestProvider.php';
/**
 * @group sms
 */
class SmsTest extends TestProvider
{
    public $_sms;
    
    public function setUp()
    {
        $this->_sms = $this->getClient()->api('sms');
    }
    
    public function testSendMessage()
    {
        $result = $this->_sms->sendMessage(self::$testSendMessage);
        $this->_test($result);
    }

    public function testDeleteMessage()
    {
        $result = $this->_sms->deleteMessage(self::$testDeleteMessage);
        $this->_test($result);
    }

    public function testRegisterNumber()
    {   
        $result = $this->_sms->registerNumber(self::$testRegisterNumber);
        $this->_test($result);
    }

    public function testUnRegisterNumber()
    {   
        $result = $this->_sms->unRegisterNumber(self::$testUnregisterNumber);
        $this->_test($result);
    }

    public function tearDown()
    {
        $this->_sms = null;
    }
}