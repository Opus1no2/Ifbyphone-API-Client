<?php
require_once 'TestProvider.php';
/**
 * @group recording
 */
class RecordingTest extends TestProvider
{
    private $_recording;
    
    public function setup()
    {
        $this->_recording = $this->getClient()->api('recording');
    }
    
    public function testDownload()
    {
        $result = $this->_recording->download(self::$download);
        $this->_test($result);
    }
    
    public function testListRecordings()
    {
        $result = $this->_recording->listRecordings(self::$list);
        $this->_test($result);
    }
    
    public function testRemove()
    {
        $result = $this->_recording->remove(self::$remove);
        $this->_test($result);
    }
    
    public function testUpload()
    {
        $result = $this->_recording->upload(self::$upload);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_recording = null;
    }
}