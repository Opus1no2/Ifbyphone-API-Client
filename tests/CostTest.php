<?php
require_once 'TestProvider.php';
/**
 * @group cost
 */
class ConstTest extends TestProvider
{
    private $_cost;
    
    public function setup()
    {
        $this->_client = new Client($this->_key);
        $this->_cost = $this->_client->api('cost');
    }
    
    public function testGetSurcharge()
    {
        $result = $this->_cost->getSurcharge(
            array(
                'phone_list' => 8888303587
            )
        );
        $this->assertEquals('success', (string)$result->result);
    }
    
    public function tearDown()
    {
        $this->_cost = null;
    }
}