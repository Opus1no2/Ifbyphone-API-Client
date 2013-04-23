<?php
require_once 'TestProvider.php';
/**
 * @group findme
 */
class FindmeTest extends TestProvider
{
    private $_findme;
    
    public function setup()
    {
        $this->_findme = $this->getClient()->api('findme');
    }
    
    public function testAddNumber()
    {
        $result = $this->_findme->addNumber(self::$testAddNumber);
        $this->_test($result);
    }
    
    public function testCreate()
    {
        $result = $this->_findme->create(self::$findmeCreate);
        $this->_test($result);
    }
    
    public function testDelete()
    {
        $result = $this->_findme->delete(self::$findmeDelete);
        $this->_test($result);
    }
    
    public function testDeleteNumber()
    {
        $result = $this->_findme->deleteNumber(self::$findmeDeleteNum);
        $this->_test($result);
    }
    
    public function testDeleteRecordedCall()
    {
        $result = $this->_findme->deleteRecordedCall(self::$findmeDeleteRecordedCall);
        $this->_test($result);
    }
    
    public function testEmpty()
    {
        $result = $this->_findme->emptyFindMe(self::$emptyFindme);
        $this->_test($result);
    }
    
    public function testGetFindmeList()
    {
        $result = $this->_findme->getFindmeList();
        $this->_test($result);
    }
    
    public function testGetPhoneList()
    {
        $result = $this->_findme->getPhoneList(self::$getPhoneList);
        $this->_test($result);
    }
    
    public function testGetRecordedCallsList()
    {
        $result = $this->_findme->getRecordedCallsList(self::$getRecordedCalls);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_findme = null;
    }
}