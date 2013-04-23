<?php
/**
 *
 * Class for initiating Click to findme list
 */
namespace Ifbyphone\Api;

class ClickToFindmeList extends Base
{
    /**
     *
     * Class construct
     *
     * @param object $args
     *
     * @return void
     */
    public function __construct($args)
    {
        parent::__construct($args);
    }
    
    /**
     *
     * Execute API request
     *
     * @return mixed
     */
    public function call(array $opts = array())
    {
        $this->app('ctfl');
        return $this->request($opts);
    }
    
    /**
     *
     * Set the findme phone list
     *
     * @param string $list | ex: 1112223333|4445556666
     *
     * @return object
     */
    public function setList($list)
    {
        $this->_param['list'] = $list;
        return $this;
    }
    
    /**
     *
     * Set a message to be played to the inbound caller
     * 
     * @param string $prompt
     *
     * @return object
     */
    public function setScreenPrompt($prompt)
    {
        $this->_param['screen_prompt'] = $prompt;
        return $this;
    }
    
    /**
     *
     * Set the findme type
     *
     * @param int $type
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setUsrFindmeType($type)
    {
        if ($type == 1 || $type == 2) {
            $this->_param['usr_param_type'] = $type;
        } else {
            throw new \InvalidArgumentException('Invalid type');
        }
        return $this;
    }
    
    /**
     *
     * Set the amount of times a caller will
     * loop through the find me list
     *
     * @param int $count
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setLoopCount($count)
    {
        $validCounts = array(1, 2, 3, 4, 5);
        if (in_array($count, $validCounts)) {
            $this->_param['loop_count'] = $count;
        } else {
            throw new \InvalidArgumentException('Invalid loop count');
        }
        return $this;
    }
       
    /**
     *
     * Randomize who receives the findme call
     *
     * @param int $flag
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setRandomize($flag)
    {
        if ($flag == 1 || $flag == 2) {
            $this->_param['randomize'] = $flag;
        } else {
            throw new \InvalidArgumentException('Invalid randomize value');
        }
        return $this;
    }
    
    /**
     *
     * Set recording on or off for the call
     *
     * @param int $flag
     *
     * @return object
     */
    public function setRecord($flag)
    {
        $this->_param['record'] = $flag;
        return $this;
    }
    
    /**
     *
     * Detemine whether or not the caller is screened
     *
     * @param int $flag
     *
     * @return object
     */
    public function setUseScreen($flag)
    {
        $this->_param['use_screen'] = $flag;
        return $this;
    }
    
    /**
     *
     * Enable DTMF only
     *
     * @param int $flag
     * 
     * @return object
     */
    public function setDtmfOnly($flag)
    {
        $this->_param['dtmf_only'] = $flag;
        return $this;
    }
    
    /**
     *
     * Set the hold music
     * 
     * @param string $path
     *
     * @return object
     */
    public function setHoldmusic($path)
    {
        $this->_param['holdmusic'] = $path;
        return $this;
    }
    
    /**
     *
     * Set holdrepeat
     *
     * @param int $flag
     *
     * @return object
     */
    public function setHoldrepeat($flag)
    {
        $this->_param['holdrepeat'] = $flag;
        return $this;
    }
    
    /**
     *
     * Set the no answer timeout
     *
     * @param int $timeout
     *
     * @return object
     */
    public function setTimeout($timeout)
    {
        $this->_param['timeout'] = $timeout;
        return $this;
    }
    
    /** 
     *
     * Set the whisper phrase
     *
     * @param string $phrase
     *
     * @return object
     */
    public function setWhisperPhrase($phrase)
    {
        $this->_param['whisper_phrase'] = $phrase;
        return $this;
    }
    
    /**
     *
     * Set the next action
     *
     * @param int $value
     *
     * @return object
     */
    public function setNextaction($value)
    {
        $this->_param['nextaction'] = $value;
        return $this;
    }
    
    /**
     *
     * Set next action item
     *
     * @param int $item
     * 
     * @return object
     */
    public function setNextactionitem($item)
    {
        $this->_param['nextactionitem'] = $item;
        return $this;
    }
}