<?php
/**
 *
 * Class for initiate click to calls
 */
namespace Ifbyphone\Api;

class Cost extends Base
{
    const PREFIX = 011;
    
    /**
     *
     * Class constructor
     *
     * @return void
     */
    public function __construct($arg)
    {   
        parent::__construct($arg);
    }
    
    /**
     *
     * Get a surcharge for a pone number
     *
     * @param int $numbers
     *
     * @return mixed
     */
    public function getSurcharge($numbers)
    {
        $this->action('cost.get_surcharge');
        return $this->request($numbers);
    }
    
    /**
     *
     * Set phone list to retrieve surcharges
     *
     * @param mixed $list
     *
     * @return object
     */
    public function setPhoneList($list)
    {
        $this->_param['phone_list'] = $list;
        return $this;
    }
    
    /**
     *
     * Format numbers
     *
     * @param int $numbers
     *
     * @return void
     */
    protected function formattNumbers($numbers)
    {
        if (is_array($numbers)) {
            $formattedNumbers = array();
            foreach ($numbers as $number) {
                $formattedNumbers[] = self::PREFIX . $number;
            }
            $formattedNumberList = implode('|', $formattedNumbers);
            $this->_param['phone_list'] = $formattedNumberList;
        } else {
            $formattedNumber = self::PREFIX . $numbers[0];
            $this->_param['phone_list'] = $formattedNumber;
        }
    }
}