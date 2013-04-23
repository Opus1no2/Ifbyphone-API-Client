<?php
/**
 *
 * Findme Class
 */
namespace Ifbyphone\Api;

class FindMe extends Base
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
     * Add number(s) to Findme
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function addNumber(array $opts = array())
    {
        $this->action('findme.add_number');
        return $this->request($opts);
    }
    
    /**
     *
     * Create new Findme
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function create(array $opts = array())
    {
        $this->action('findme.create');
        return $this->request($opts);
    }
    
    /**
     *
     * Delete Findme
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function delete(array $opts = array())
    {
        $this->action('findme.delete');
        return $this->request($opts);
    }
    
    /**
     *
     * Delete number from Findme
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function deleteNumber(array $opts = array())
    {
        $this->action('findme.delete_number');
        return $this->request($opts);
    }
    
    /**
     *
     * Delete a recorded call
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function deleteRecordedCall(array $opts = array())
    {
        $this->action('findme.delete_recorded_call');
        return $this->request($opts);
    }
    
    /**
     *
     * Empty findme list
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function emptyFindMe(array $opts = array())
    {
        $this->action('findme.empty');
        return $this->request($opts);
    }
    
    /**
     *
     * Get findme list
     *
     * @return mixed
     */
    public function getFindmeList()
    {
        $this->action('findme.get_findme_list');
        return $this->request();
    }
    
    /**
     *
     * Get phone list
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function getPhoneList(array $opts = array())
    {
        $this->action('findme.get_phone_list');
        return $this->request($opts);
    }
    
    /**
     *
     * Retrieve a list of recorded calls
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function getRecordedCallsList(array $opts = array())
    {
        $this->action('findme.get_recorded_calls_list');
        return $this->request($opts);
    }
    
    /**
     *
     * Set findme Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setFindmeId($id)
    {
        $this->_param['findme_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set findme phone number
     *
     * @param int $number
     *
     * @return object
     */
    public function setphoneNumber($number)
    {
        $this->_param['phone_number'] = Util::cleanNumber($number);
        return $this;
    }
    
    /**
     *
     * Set findme name
     *
     * @param string $name
     *
     * @return object
     */
     public function setName($name)
     {
        $this->_param['name'] = (string)$name;
        return $this;
     }
     
    /**
     *
     * Set findme list type
     *
     * @param int $type
     *
     * @return object
     */
    public function setListType($type)
    {
        $this->_param['list_type'] = (int)$type;
        return $this;
    }
    
    /**
     *
     * Set loop count
     *
     * @param int $count
     *
     * @return object
     */
    public function setLoopCount($count)
    {
        $this->_param['loop_count'] = (int)$count;
        return $this;
    }
    
    /**
     *
     * Set distribution type
     *
     * @param int $type
     *
     * @return object
     */
    public function setDistributionType($type)
    {
        $this->_param['distribution_type'] = (int)$type;
        return $this;
    }
    
    /**
     *
     * Set findme to record calls
     *
     * @param int $record
     *
     * @return object
     */
    public function setRecord($record)
    {
        $this->_param['record'] = (int)$record;
        return $this;
    }
    
    /**
     *
     * Set screening method
     *
     * @param int $method
     *
     * @return object
     */
    public function setScreenMethod($method)
    {
        $this->_param['method'] = (int)$method;
        return $this;
    }
    
    /**
     *
     * Set screening prompt
     *
     * @param string $prompt
     *
     * @return object
     */
    public function setScreenPrompt($prompt)
    {
        $this->_param['screen_prompt'] = (string)$prompt;
        return $this;
    }
    
    /**
     *
     * Enable DTMF
     *
     * @param int $dtmf
     *
     * @return object
     */
    public function setDtmfOnly($dtmf)
    {
        $this->_param['dtmf_only'] = (int)$dtmf;
        return $this;
    }
    
    /**
     *
     * Set hold music
     * 
     * @param string $music
     *
     * @return object
     */
    public function setHoldmusic($music)
    {
        $this->_param['holdmusic'] = (string)$music;
        return $this;
    }
    
    /**
     *
     * Determine how often hold music is played ot the caller
     *
     * @param int $repeat
     *
     * @return object
     */
    public function setHoldRepeat($repeat)
    {
        $this->_param['holdrepeat'] = (int)$repeat;
        return $this;
    }
    
    /**
     *
     * Set the amount of time each number is 'called'
     *
     * @param int $timeout
     *
     * @return object
     */
    public function setTimeout($timeout)
    {
        $this->_param['timeout'] = (int)$timeout;
        return $this;
    }
    
    /**
     *
     * Set whisper phrase
     * 
     * @param string $phrase
     *
     * @return object
     */
    public function setWhisperPhrase($phrase)
    {
        $this->_param['whisper_phrase'] = (string)$phrase;
        return $this;
    }
    
    /**
     *
     * Set the action that occurs when 
     * the end of the find me list is reached
     *
     * @param string $action
     *
     * @return object
     */
    public function setFindmeAction($action)
    {
        $this->_param['findme_action'] = (string)$action;
        return $this;
    }
    
    /**
     *
     * Set the findme action parameter
     * 
     * @param int $param
     *
     * @return object
     */
    public function setFindmeActionParameter($param)
    {
        $this->_param['findme_action_parameter'] = (int)$param;
        return $this;
    }
    
    /**
     *
     * Set Id of advanced audio prompt configuration
     *
     * @param int $id
     *
     * @return object
     */
    public function setAdvancedAudioId($id)
    {
        $this->_param['advanced_audio_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Create numbers a findme will use to transfer
     *
     * @param mixed $numbers
     *
     * @return object
     */
    public function setNumbers($numbers)
    {
        $this->_param['numbers'] = $numbers;
        return $this;
    }
    
    /**
     *
     * Enable auto accept
     *
     * @param int $accept
     *
     * @return object
     */
    public function setAutoAccept($accept)
    {
        $this->_param['auto_accept'] = (int)$accept;
        return $this;
    }
    
    /**
     *
     * Configure number of simultaneous calls
     *
     * @param int $simul
     *
     * @return object
     */
    public function setSimul($simul)
    {
        $this->_param['simul'] = (int)$simul;
        return $this;
    }
    
    /**
     *
     * Set whisper audio
     *
     * @param string $audio
     *
     * @return object
     */
    public function setWhisperAudio($audio)
    {
        $this->_param['whisper_audio'] = (string)$audio;
        return $this;
    }
    
    /**
     *
     * Set findme id
     *
     * @param int $id
     *
     * @return object
     */
    public function setFindmeNumberId($id)
    {
        $this->_param['findme_number_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set recording name
     *
     * @param string $name
     *
     * @return object
     */
    public function setRecordingName($name)
    {
        $this->_param['recording_name'] = (string)$name;
        return $this;
    }
}