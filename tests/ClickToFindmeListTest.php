<?php
require_once 'TestProvider.php';
/**
 * @group ctfl
 */
class ClickToFindmeList extends TestProvider
{
    private $_ctfl;
    
    public function setup()
    {
        $this->_ctfl = $this->getClient()->api('ctfl');
    }
    
    public function testCall()
    {
        $result = $this->_ctfl->call(self::$ctfl);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_ctfl = null;
    }
}   