<?php
require_once 'TestProvider.php';
/**
 * @group report
 */
class ReportTest extends TestProvider
{
    private $_report;
    
    public function setup()
    {
        $this->_report = $this->getClient()->api('report');
    }
    
    public function testBroadcast()
    {
        $result = $this->_report->broadcast(self::$broadcast);
        $this->_test($result);
    }
    
    public function testCallDetail()
    {
        $result = $this->_report->callDetail(self::$cdr);
        $this->_test($result);
    }
    
    public function testCallDetailCsv()
    {   
        $result = $this->_report->callDetailCsv(self::$cdr);
        $this->_test($result);
    }
    
    public function testClickTo()
    {
        $result = $this->_report->clickTo(self::$clickTo);
        $this->_test($result);
    }
    
    public function testSurvo()
    {   
        $result = $this->_report->survo(self::$survo);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_report = null;
    }
}