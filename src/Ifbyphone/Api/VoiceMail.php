<?php
/**
 *
 * Voice Mail Class
 */
namespace Ifbyphone\Api;

class VoiceMail extends Base
{
    /**
     *
     * Class Constructor
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
     * Create new voice mail box
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function createBox(array $opts = array())
    {
        $this->action('vmail.createbox');
        return $this->request($opts);
    }
    
    /**
     *
     * Delete an existing voice mail box
     *
     * @param int $id
     *
     * @return mixed     
     */
    public function deleteBox($id)
    {
        $this->action('vmail.deletebox');
        return $this->request($id);
    }
    
    /**
     *
     * Delete a voice mail message
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function deleteMessage(array $opts = array())
    {
        $this->action('vmail.deletemessage');
        return $this->request($opts);;
    }
    
    /**
     *
     * Retrieve a message by it's unique Id
     *
     * @param int $id
     *
     * @return request
     */
    public function getMessageById($id)
    {
        $this->action('getmessagebyid');
        return $this->request($id);
    }
    
    /**
     *
     * Get voice mail message by session Id
     *
     * @param string $sid
     *
     * @return mixed
     */
    public function getMessageBySid($sid)
    {
        $this->action('getmessagebysid');
        return $this->request($sid);
    }
    
    /**
     *
     * Get all messages
     *
     * @param array $opts
     * @return request
     */
    public function getMessages(array $opts = array())
    {
        $this->action('vmail.getmessages');
        return $this->request($opts);
    }
    
    /** 
     *
     * Record a greeting over the phone
     *
     * @param array $opts
     * @return request
     */
    public function recordGreeting(array $opts = array())
    {
        $this->action('vmail.recordgreeting');
        return $this->request($opts);
    }
    
    /**
     *
     * Set recording type
     *
     * @param string $type | 'greeting', 'vaction'
     *
     * @return object
     */
    public function setRecordingType($type)
    {
        if ($type == 'greeting' || $type == 'vaction') {
            $this->_param['type'] = $type;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Invalid recording type provided: [%s]', $type
            ));
        }
        return $this;
    }
    
    /**
     *
     * Set the phone number call for the greeting
     *
     * @param int $number
     *
     * @return object
     */
    public function setPhoneToCall($number)
    {
        $this->_param['phone_to_call'] = Util::cleanNumber($number);
        return $this;
    }
    
    /**
     *
     * Set Greeting to retrieve 'Greetings' presented
     * to inbound callers
     *
     * @param int $flag
     *
     * @return object
     */
    public function setGreetings($flag)
    {
        $this->_param['greetings'] = (int)$flag;
        return $this;
    }
    
    /**
     *
     * Set session Id for retrieving a message
     *
     * @param string $sid
     *
     * @return object
     */
    public function setVmailSid($sid)
    {
        $this->_param['vmail_sid'] = (string)$sid;
        return $this;
    }
    
    /**
     *
     * Set voice mail Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setVmailId($id)
    {
        $this->_param['vmail_id'] = (int)$id;
        return $this;
    }
    /**
     *
     * Set message Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setMessageId($id)
    {
        $this->_param['message_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set voice mail box Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setBoxId($id)
    {
        $this->_param['box_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set voice mail box name
     *
     * @param string $name
     *
     * @return object
     */
    public function setName($name)
    {
        $this->_param['name'] = (string)$name;
        return $this;
    }
    
    /**
     *
     * Set pin
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
            throw new \InvalidArgumentException(
                'Pin must be exactly four digits in length'
            );
        }
        return $this;
    }
    
    /**
     *
     * Set email address
     *
     * @param string $email
     *
     * @return object
     */
    public function setEmailAddress($email)
    {
        $this->_param['email_address'] = Util::validEmail($email);
        return $this;
    }
    
    /**
     *
     * Determine whether or not to send voicemail recording in email
     *
     * @param int $flag
     *
     * @return object
     */
    public function setSendEmail($flag)
    {
        if ($flag == 1 || $flag == 0) {
            $this->_param['send_email'] = $flag;
        } else {
            throw new \InvalidArgumentException('Invalid send email option');
        }
        return $this;
    }
    
    /**
     *
     * Determine whether or not an email 'envelope' is read
     * when voice mail is checked via a call
     *
     * @param int $flag
     * @return object
     */
    public function setEnvelope($flag)
    {
        if ($flag == 0 || $flag == 1) {
            $this->_param['envelope'] = $flag;
        } else {
            throw new \InvalidArgumentException('Invalid envelope option');
        }
        return $this;
    }
}