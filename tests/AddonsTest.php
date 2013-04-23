<?php
require_once 'TestProvider.php';
/**
 * @group addons
 */
class AddonsTest extends TestProvider
{
    private $_addons;

    public function setup()
    {
        $this->_addons = $this->getClient()->api('addons');
    }
    public function testListAddons()
    {
        $result = $this->_addons->listAddons();
        $this->_test($result);
    }

    public function testPurchaseAddons()
    {   
        $result = $this->_addons->purchase(self::$testPurchase);
        $this->_test($result);
    }

    public function tearDown()
    {
        $this->_addons = null;
    }
}