<?php
/**
 *
 * Class for initiating a click to voice mail
 */
namespace Ifbyphone\Api;

class ClickToVr extends Base
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
     * @param array $opts
     *
     * @return mixed
     */
    public function call(array $opts = array())
    {
        $this->app('ctvm');
        $this->request($opts);
    }
    
    /**
     *
     * Set voice mail box Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setVmailBoxId($id)
    {
        $this->_param['vmail_box_id'] = $id;
        return $this;
    }
    
    /**
     *
     * Set phone to call
     *
     * @param int $phone
     *
     * @return object
     */
    public function setPhoneToCall($phone)
    {
        $this->_param['phone_to_call'] = Util::cleanNumber($phone);
        return $this;
    }
}