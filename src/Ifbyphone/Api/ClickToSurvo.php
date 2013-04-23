<?php
/**
 *
 * Class for initiating a click to Survo
 */
namespace Ifbyphone\Api;

class ClickToSurvo extends Base
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
        $this->app('cts');
        $this->request($opts);
    }
    
    /**
     *
     * Set Survo Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setSurvoId($id)
    {
        $this->_param['survo_id'] = $id;
        return $this;
    }
    
    /**
     *
     * Set user parameters
     *
     * @param string $params
     *
     * @return object
     */ 
    public function setUserParameters($params)
    {
        $this->_param['user_parameters'] = $params;
        return $this;
    }
    
    /**
     *
     * Set passthrough data
     *
     * @param string $p_t
     *
     * @return object
     */
    public function setPT($p_t)
    {
        $this->_param['p_t'] = $p_t;
        return $this;
    }
    
    /**
     *
     * Set flag for schedule only
     *
     * @param int $flag
     *
     * @return object
     */
    public function setScheduleonly($flag)
    {
        $this->_param['scheduleonly'] = $flag;
        return $this;
    }
    
    /**
     *
     * Set start date
     *
     * @param string $sdate
     *
     * @return object
     */
    public function setSdate($sdate)
    {
        $this->_param['sdate'] = $sdate;
        return $this;
    }
    
    /**
     *
     * Set end date
     *
     * @param string $edate
     *
     * @return object
     */
    public function setEdate($edate)
    {
        $this->_param['edate'] = $edate;
        return $this;
    }
    
    /**
     *
     * Set the timezone
     *
     * @param string $tz
     *
     * @return object
     */
    public function setTz($tz)
    {
        $this->_param['tz'] = $tz;
        return $this;
    }
    
    /**
     *
     * Set the type of broadcast
     *
     * @param int $type
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setType($type)
    {
        if ($type == 1 || $type == 0) {
            $this->_param['type'] = $type;
        } else {
            throw new \InvalidArgumentException('Invalid Type');
        }
        return $this;
    }
    
    /**
     *
     * Set the amount of times a person will be
     * called if the broadcast doesn't connect 
     * with an answering machine or live person
     *
     * @param int $attempts
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setAttempts($attempts)
    {
        if ($attempts == 1 || $attempts == 2) {
            $this->_param['attempts'] = $attempts;
        } else {
            throw new \InvalidArgumentException('Invalid amount of attempts');
        }
        return $this;
    }
    
    /**
     *
     * Set the amount of time between attempts
     * 
     * @param int $retry
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setRetry($retry)
    {
        $validValues = array(5,10,15,30,60,90,120);
        if (in_array($retry, $validValues)) {
            $this->_param['retry'] = $retry;
        } else {
            throw new \InvalidArgumentException('Invalid retry value');
        }
        return $this;
    }
    
    /**
     *
     * Set the amount of simultaneous calls
     * 
     * @param int $simul
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setSimul($simul)
    {
        if ($simul <= 9) {
            $this->_param['simul'] = $simul;
        } else {
            throw new \InvalidArgumentException('Invalid amount of simultaneous calls');
        }
        return $this;
    }
    
    /**
     *
     * Set the caller Id that will display to recipients
     *
     * @param int $cid
     *
     * @return object
     */
    public function setCid($cid)
    {
        $this->_param['cid'] = Util::cleanNumber($cid);
        return $this;
    }
}