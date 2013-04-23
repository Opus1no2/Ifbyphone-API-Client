<?php
/**
 *
 * Class for initiate click to calls
 */
namespace Ifbyphone\Api;

class ClickToCall extends Base
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
     * Execute API call
     * 
     * @return request
     */
    public function call(array $opts = array())
    {
        $this->app('ctc');
        return $this->request($opts);
    }
    
    /**
     *
     * Set the phone to call
     *
     * @para int $id
     *
     * @return object
     */
    public function setId($phone)
    {
        $this->_param['id'] = Util::cleanNumber($phone);
        return $this;
    }
    
    /**
     *
     * Set caller Id for second leg of the call
     *
     * @param int $number
     *
     * @return object
     */
    public function setSecondCid($number)
    {
        $this->_param['second_callerid'] = Util::cleanNumber($number);
        return $this;
    }
}