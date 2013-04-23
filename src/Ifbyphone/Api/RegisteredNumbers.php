<?php
/**
 *
 * Registered numbers class
 */
namespace Ifbyphone\Api;

class RegisteredNumbers extends Base
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
     * Add a number
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function add(array $opts = array())
    {   
        $this->action('registerednumbers.add');
        return $this->request($opts);
    }
    
    /**
     *
     * List existing registered numbers
     *
     * @return request
     */
    public function listNumbers()
    {
        $this->action('registerednumbers.list');
        return $this->request();
    }
    
    /**
     *
     * Remove a number
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function remove(array $opts = array())
    {
        $this->action('registerednumbers.remove');
        return $this->request($opts);
    }

    /**
     *
     * Set the description of a number
     *
     * @param string $description
     *
     * @return object
     */
    public function setDescription($description)
    {
        $this->_param['description'] = (string)$description;
        return $this;
    }
    
    /**
     *
     * Set number to be registered
     *
     * @param int $number
     *
     * @return object 
     */
    public function setNumber($number)
    {
        $this->_param['phone'] = Util::cleanNumber($number);
        return $this;
    }
}

