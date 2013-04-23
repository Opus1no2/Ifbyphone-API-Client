<?php
require_once 'TestProvider.php';
/**
 * @group conference
 */
class ConferenceTest extends TestProvider
{
    private $_conf;
    
    public function setup()
    {
        $this->_conf = $this->getClient()->api('conference');
    }
    
    public function testAddAttendee()
    {
        $result = $this->_conf->addAttendee(self::$addAttendee);
        $this->_test($result);
    }
    
    public function testCallAttendee()
    {
        $result = $this->_conf->callAttendee(self::$callAttendee);
        $this->_test($result);
    }
    
    public function testGetAttendeeDetails()
    {
        $result = $this->_conf->getAttendeeDetails(self::$attendeeDetails);
        $this->_test($result);
    }
    
    public function testKickAttendee()
    {
        $result = $this->_conf->kickAttendee(self::$kickAttendee);
        $this->_test($result);
    }
    
    public function testListAttendees()
    {
        $result = $this->_conf->listAttendees(self::$listAttendees);
        $this->_test($result);
    }
    
    public function testMuteAttendee()
    {
        $result = $this->_conf->muteAttendee(self::$muteAttendee);
        $this->_test($result);
    }
    
    public function testRemoveAttendee()
    {
        $result = $this->_conf->removeAttendee(self::$removeAttendee);
        $this->_test($result);
    }
    
    public function testUnmuteAttenee()
    {
        $result = $this->_conf->unMuteAttendee(self::$unMute);
        $this->_test($result);
    }
    
    public function testDetails()
    {
        $result = $this->_conf->details(self::$confDetails);
        $this->_test($result);
    }
    
    public function testListConferences()
    {
        $result = $this->_conf->listConferences();
        $this->_test($result);
    }
    
    public function testRemove()
    {
        $result = $this->_conf->remove(self::$confRemove);
        $this->_test($result);
    }
    
    public function testSchedule()
    {
        $result = $this->_conf->schedule(self::$scheduleConf);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_conf = null;
    }
}