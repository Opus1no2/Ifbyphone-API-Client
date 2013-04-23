<?php
/**
 *
 * SMS class
 */
namespace Ifbyphone\Api;

class Sms extends Base
{
    /**
     * 
     * Class contstructor
     * 
     * @param object $opt
     *
     * @return void
     */
    public function __construct($arg)
    {
        parent::__construct($arg);
    }
    
    /**
     *
     * Send an outbound SMS message
     *
     * @param array $opts
     * 
     * @return mixed
     */
    public function sendMessage(array $opts = array())
    {     
        $this->action('sms.send_message');
        return $this->request($opts);
    }
    
    /**
     *
     * Delete an existing SMS message
     *
     * @param array $opts
     * 
     * @return mixed
     */
    public function deleteMessage(array $opts = array())
    {   
        $this->action('sms.delete_message');
        return $this->request($opts);
    }
    
    /**
     *
     * Retrieve an existing SMS message
     *
     * @param array $opts
     * 
     * @return mixed
     */
    public function getMessage(array $opts = array())
    {
        $this->action('sms.get_message');
        return $this->request($opts);
    }
    
    /**
     *
     * Retrieve all messages for a single number
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function getMessages(array $opts = array())
    {
        $this->action('sms.get_messages');
        return $this->request($opts);
    }
    
    /**
     *
     * Retrieve SMS registered numbers
     *
     * @param array $opts
     * 
     * @return mixed
     */
    public function getNumbers(array $opts = array())
    {
        $this->action('sms.get_numbers');
        return $this->request($opts);
    }
    
    /**
     *
     * Register existing numbers to send/recieve SMS
     *
     * @param array $opts
     * 
     * @return mixed
     */
    public function registerNumber(array $opts = array())
    {
        $this->action('sms.register_number');
        return $this->request($opts);
    }
    
    /**
     *
     * Un-register an existing SMS enabled number
     *
     * @param array $opts
     * 
     * @return mixed
     */
    public function unregisterNumber(array $opts = array())
    {
        $this->action('sms.unregister_number');
        return $this->request($opts);
    }
    
    /**
     *
     * Set the number receiving SMS message
     *
     * @param int $to
     *
     * @return void
     */
    public function setTo($to)
    {   
        $this->_param['to'] = Util::cleanNumber($to);
        return $this;
    }
    
    /**
     *
     * Set the number the SMS message is from
     *
     * @param int $from
     * 
     * @return void
     */
    public function setFrom($from)
    {
        $this->_param['from'] = Util::cleanNumber($from);
        return $this;
    }
    
    /**
     *
     * Set generic number
     *
     * @param int $number
     *
     * @return void
     */
    public function setNumber($number)
    {
        $this->_param['number'] = Util::cleanNumber($number);
        return $this;
    }
    
    /**
     *
     * Set SMS messages
     *
     * @param string $message
     *
     * @return void
     */
    public function setMessage($message)
    {
        $this->_param['message'] = $message;
        return $this;
    }
    
    /**
     *
     * Set Message ID
     *
     * @param int $id
     *
     * @return void
     */
    public function setMsgId($id)
    {
        $this->_param['msg_id'] = $id;
        return $this;
    }
    
    /**
     *
     * Set start date
     *
     * @param int $startDate
     *
     * @return void
     */
    public function setStartDate($startDate)
    {
        $this->_param['start_date'] = $startDate;
        return $this;
    }
    
    /**
     *
     * Set end date
     *
     * @param int $endDate
     *
     * @return void
     */
    public function setEndDate($endDate)
    {   
        $this->_param['end_date'] = $endDate;
        return $this;
    }
    
    /**
     *
     * Set URL for inbound SMS
     *
     * @param string $url
     *
     * @return object
     */
    public function setUrl($url)
    {
        $this->_param['url'] = Util::validUrl($url);
        return $this;
    }
}