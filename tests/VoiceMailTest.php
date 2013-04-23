<?php
require_once 'TestProvider.php';
/**
 * @group voicemail
 */
class VoiceMailTest extends TestProvider
{
    private $_vm;
    
    public function setup()
    {
        $this->_vm = $this->getClient()->api('voicemail');
    }
    
    public function testCreateBox()
    {
        $result = $this->_vm->createBox(self::$createBox);
        $this->_test($result);
    }
    
    public function testDeleteBox()
    {
        $result = $this->_vm->deleteBox(self::$deleteBox);
        $this->_test($result);
    }
    
    public function testDeleteMessage()
    {
        $result = $this->_vm->deleteMessage(self::$deleteMessage);
        $this->_test($result);
    }
    
    public function testGetMessageById()
    {
        $result = $this->_vm->getMessageById(self::$msgId);
        $this->_test($result);
    }
    
    public function testGetMessageBySid()
    {
        $result = $this->_vm->getMessageBySid(self::$msbBySid);
        $this->_test($result);
    }
    
    public function testGetMessages()
    {
        $result = $this->_vm->getMessages(self::$getMessages);
        $this->_test($result);
    }
    
    public function testRecordGreeting()
    {
        $result = $this->_vm->recordGreeting(self::$recordGreeting);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_vm = null;
    }
}