<?php
/**
 *
 * Class for initiating a clickt to Vr
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
    public function execCtc()
    {
        $this->app('ctvr');
        $this->request($opts);
    }
    
    /** 
     *
     * Set the Id of the Vr the caller will connect to
     *
     * @param int $id
     *
     * @return object
     */
    public function setMenuId($id)
    {
        $this->_param['menu_id'] = $id;
        return $this;
    }
}