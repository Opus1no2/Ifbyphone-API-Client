<?php
require_once 'TestProvider.php';
/**
 * @group locator
 */
class LocatorTest extends TestProvider
{
    private $_locator;
    
    public function setup()
    {
        $this->_locator = $this->getClient()->api('locator');
    }
    
    public function testAddLocation()
    {
        $result = $this->_locator->addLocation(self::$addLocation);
        $this->_test($result);
    }
    
    public function testGetDetails()
    {
        $result = $this->_locator->getDetails(self::$locatorDetails);
        $this->_test($result);
    }
    
    public function testListLocations()
    {
        $result = $this->_locator->listLocations(self::$locatorLocationList);
        $this->_test($result);
    }
    
    public function testRemoveLocation()
    {
        $result = $this->_locator->removeLocation(self::$removeLocation);
        $this->_test($result);   
    }
    
    public function testUpdateLocation()
    {   
        $result = $this->_locator->updateLocation(self::$updateLocation);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_locator = null;
    }
}