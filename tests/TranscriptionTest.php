<?php
require_once 'TestProvider.php';
/**
 * @group transcription
 */
class TranscriptionTest extends TestProvider
{
    private $_transcription;
    
    public function setup()
    {
        $this->_transcription = $this->getClient()->api('transcription');
    }
    
    public function testCreate()
    {
        $result = $this->_transcription->create(self::$createTranscription);
        $this->_test($result);
    }
    
    public function testGet()
    {
        $result = $this->_transcription->get(self::$getTranscription);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_transcription = null;
    }
}