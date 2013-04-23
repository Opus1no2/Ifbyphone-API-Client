<?php
require_once 'TestProvider.php';
/**
 * @group general
 */
class GeneralTest extends TestProvider
{
    public function setup()
    {
        $this->_general = $this->getClient()->api('general');
    }
    
    public function testBuildingBlocks()
    {
        $result = $this->_general->buildingBlocks();
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_general = null;
    }
}