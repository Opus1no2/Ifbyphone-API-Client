<?php
/**
 *
 * Class for all things conference related
 */
namespace Ifbyphone\Api;

class Conference extends Base 
{
    /**
     *
     * Class constructor
     *
     * @param object $arg
     *
     * @return void
     */
    public function __construct($arg)
    {
        parent::__construct($arg);
    }
    
    /**
     *
     * Add an attendee
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function addAttendee(array $opts = array())
    {
        $this->action('conference.attendee.add');
        return $this->request($opts);
    }
    
    /**
     *
     * Call an attendee
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function callAttendee(array $opts = array())
    {
        $this->action('conference.attendee.call');
        return $this->request($opts);
    }
    
    /**
     *
     * Get details about a conference attendee
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function getAttendeeDetails(array $opts = array())
    {
        $this->action('conference.attendee.details');
        return $this->request($opts);
    }
    
    /**
     *
     * Boot an attendee from a live conference
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function kickAttendee(array $opts = array())
    {
        $this->action('conference.attendee.kick');
        return $this->request($opts);        
    }
    
    /** 
     *
     * Get a list of attendees
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function listAttendees(array $opts = array())
    {
        $this->action('conference.attendee.list');
        return $this->request($opts);
    }
    
    /**
     *
     * Mute an existing attendee
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function muteAttendee(array $opts = array())
    {
        $this->action('conference.attendee.mute');
        return $this->request($opts);
    }
    
    /**
     *
     * Un-mute a muted attendee
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function unMuteAttendee(array $opts = array())
    {
        $this->action('conference.attendee.unmute');
        return $this->request($opts);
    }
    /**
     *
     * Remove an attendee from an scheduled conference
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function removeAttendee(array $opts = array())
    {
        $this->action('conference.attendee.remove');
        return $this->request($opts);
    }
    
    /**
     *
     * Get details about a conference call
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function details(array $opts = array())
    {
        $this->action('conference.details');
        return $this->request($opts);
    }
    
    /**
     *
     * List existing conferences
     * 
     * @param array $opts
     *
     * @return mixed
     */
    public function listConferences(array $opts = array())
    {
        $this->action('conference.list');
        return $this->request($opts);
    }
    
    /**
     *
     * Remove an existing conference
     *
     * @param array $opts
     *
     * @retrun mixed
     */
    public function remove(array $opts = array())
    {
        $this->action('conference.remove');
        return $this->request($opts);;
    }
    
    /**
     *
     * Schedule a conference
     *
     * @param array $opts
     * @return request
     */
    public function schedule(array $opts = array())
    {
        $this->action('conference.schedule');
        return $this->request($opts);
    }
    
    /**
     *
     * Set conference Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setUsrConferenceId($id)
    {
        $this->_param['usr_conference_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set attendee list
     *
     * @param string $list
     *
     * @return object
     */
    public function setAttendeeList($list)
    {
        $this->_param['attendee_list'] = (string)$list;
        return $this;
    }
    
    /**
     *
     * Determine if attendess will receive an email invitation
     *
     * @param int $flag
     *
     * @return object
     */
    public function setInvitations($flag = null)
    {
        $this->_param['invitations'] = (int)$flag;
        return $this;
    }
    
    /**
     *
     * Determine if attendees are to be called immediately
     * and notified of the scheduled conference call
     *
     * @param int $flag
     *
     * @return object
     */
    public function setImmediate($flag = null)
    {
        $this->_param['immediate'] = (int)$flag;
        return $this;
    }
    
    /**
     *
     * Set the attendee Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setUsrConferenceAttendeeId($id)
    {
        $this->_param['usr_conference_attendee_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set the participation Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setUsrConferenceParticipationId($id)
    {
        $this->_param['usr_conference_participation_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set the user number for kicking an attendee
     *
     * @param int $num
     
     * @return object
     */
    public function setUserNumber($num)
    {
        $this->_param['user_number'] = (int)$num;
        return $this;
    }
    
    /**
     *
     * Set a time for the conference to begin
     *
     * @param string $time
     *
     * @return object
     */
    public function setScheduledTime($time)
    {
        $this->_param['scheduled_time'] = (string)$time;
        return $this;
    }
    
    /**
     *
     * Set the length of the conference in minutes
     *
     * @param int $length
     *
     * @return object
     */
    public function setConferenceLenght($length)
    {
        $this->_param['conference_length'] = (int)$legth;
        return $this;
    }
    
    /**
     *
     * Set the name of the conference
     *
     * @param string $name
     *
     * @return object
     */
    public function setConferenceName($name)
    {
        $this->_param['conference_name'] = (string)$name;
        return $this;
    }
    
    /**
     *
     * Set the pin number attendees can use to join the conference
     *
     * @param int $pin
     *
     * @return object
     */
    public function setPin($pin)
    {
        if (strlen($pin) == 4) {
            $this->_param['pin'] = (int)$pin;
        } else {
            throw new \InvalidArgumentException('Invalid pin value');
        }
        return $this;
    }
    
    /**
     *
     * Set whether attendees can only join by calling in
     *
     * @param int $flag
     *
     * @return object
     */
    public function setInboundonly($flag)
    {
        $this->_param['inboundonly'] = (int)$flag;
        return $this;
    }
    
    /** 
     *
     * Set a description of the notification
     *
     * @param string $desc
     *
     * @return object
     */
    public function setDesc($desc)
    {
        $this->_param['desc'] = (string)$desc;
        return $this;
    }
}