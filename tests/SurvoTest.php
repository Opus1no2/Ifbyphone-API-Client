<?php
require_once 'TestProvider.php';
/**
 * @group
 */
class SurvoTest extends TestProvider
{
    private $_survo;
    
    public function setup()
    {
        $this->_survo = $this->getClient()->api('survo');
    }
    
    public function testDeleteResults()
    {
        $result = $this->_survo->deleteResults(self::$deleteResults);
        $this->_test($result);
    }
    
    public function testGetSurvoRecording()
    {
        $result = $this->_survo->getSurvoRecording(self::$survoRecording);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_survo = null;
    }
}