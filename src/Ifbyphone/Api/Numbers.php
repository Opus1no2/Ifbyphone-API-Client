<?php
/**
 *
 * Class for ordering, searching, and searching numbers
 */
namespace Ifbyphone\Api;

class Number extends Base
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
     * Order numbers
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function orderNumbers(array $opts = array())
    {
        $this->action('numbers.order');
        return $this->request($opts);
    }
    
    /**
     *
     * Remove a number (use with caution)
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function removeNumbers(array $opts = array())
    {
        $this->action('numbers.remove');
        return $this->request($opts);
    }
    
    /**
     *
     * Search for available local or tollfree numbers
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function searchNumbers(array $opts = array())
    {
        $this->action('numbers.search');
        return $this->request($opts);
    }
    
    /**
     *
     * Set Value
     *
     * @param string $value
     *
     * @return object
     */
    public function setValue($value)
    {
        $this->_param['value'] = (string)$value;
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
    public function setNumber($number)
    {
        $this->_param['number'] = Util::cleanNumber($number);
        return $this;
    }
    
    /**
     *
     * Set the quantity of numbers to order
     *
     * @param int $num
     *
     * @return object
     */
    public function setQuantity($num)
    {
        $this->_param['quantity'] = (int)$num;
        return $this;
    }
    
    /**
     *
     * Set the type of number:
     * local || tollfree || true800
     *
     * @param string $type
     *
     * @return object
     *
     * @throws RunTimeException
     */
    public function setType($type)
    {
        if ($type == 'local' || $type == 'tollfree' || $type == 'true800') {
            $this->_param['type'] = $type;
        } else {
            throw new \RunTimeException('Invalid number type');
        }
        return $this;
    }
}