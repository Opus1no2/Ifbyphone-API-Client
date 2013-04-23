<?php
/**
 *
 * Verify Me Now class
 */
namespace Ifbyphone\Api;

class VerifyMeNow extends Base
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
     * Get verify me now recording
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function getRecording(array $opts = array())
    {
        $this->action('verifymenow.get_recording');
        return $this->request($opts);
    }
    
    /**
     *
     * Verify
     * 
     * @param array $opts
     *
     * @return mixed
     */
    public function verify(array $opts = array())
    {
        $this->action('verifymenow.verify');
        return $this->request($opts);
    }
    
    /**
     *
     * Set Format
     *
     * @param string $format
     *
     * @return object
     */
    public function setFormat($format)
    {
        $this->_param['format'] = (string)$format;
        return $this;
    }
    
    /**
     *
     * Set Pin
     * 
     * @param int $pin
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setPin($pin)
    {
        if (strlen($pin) >= 1 && strlen($pin) <= 10) {
            $this->_param['pin'] = $pin;
        } else {
            throw new \InvalidArgumentException('Invalid pin');
        }
        return $this;
    }
    
    /**
     *
     * Set phone number
     * 
     * @param int $number
     *
     * @return object
     */
    public function setPhoneNumber($number)
    {
        $this->_param['phone_number'] = Util::cleanNumber($number);
        return $this;
    }
    /**
     *
     * Establish existing verify me now Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setVerifyId($id)
    {
        $this->_param['verify_id'] = $id;
        return $this;
    }
    
    /**
     *
     * Set session Id
     *
     * @param string $sid
     *
     * @return object
     */
    public function setSid($sid)
    {
        $this->_param['sid'] = $sid;
        return $this;
    }
    
    /**
     *
     * Set sample rate
     *
     * @param string sample rate
     *
     * @return object
     */
    public function setSampleRate($rate)
    {
        $this->_param['sample_rate'] = $rate;
        return $this;
    }
}