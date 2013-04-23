<?php
/**
 *
 * Class for initiating click to findme
 */
namespace Ifbyphone\Api;

class ClickToFindme extends Base
{
    /**
     *
     * Class construct
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
     * Execute API request
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function call(array $opts = array())
    {
        $this->app('ctf');
        $this->request($opts);
    }
    
    /**
     *
     * Set the findme Id 
     *
     * @param int $id
     *
     * @return object
     */
    public function setFindmeId($id)
    {
        $This->_param['findme_id'] = $id;
        return $this;
    }
}