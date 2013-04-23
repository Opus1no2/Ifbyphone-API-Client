<?php
/**
 *
 * Voice broadcast class
 */
namespace Ifbyphone\Api;

class Broadcast extends Base
{
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
     * Create a voice broadcast
     *
     * @param mixed $options
     *
     * @return mixed
     */
    public function create(array $opts = array())
    {
        $this->action('broadcast.create');
        return $this->request($opts);
    }
    
    /**
     *
     * Get opt-out list
     *
     * @param mixed $options
     *
     * @return mixed
     */
    public function getOptOut(array $opts = array())
    {
        $this->action('broadcast.get_optout');
        return $this->request($opts);
    }
    
    /**
     *
     * Get a history of previous VB's
     *
     * @param mixed $options
     *
     * @return mixed
     */
    public function getHistory(array $opts = array())
    {
        $this->action('broadcast.history');
        return $this->request($opts);
    }
    
    /**
     *
     * Add a number to the opt-out list
     *
     * @param int $number
     *
     * @return mixed
     */
    public function addOptOut($number)
    {
        $this->action('broadcast.optout');
        return $this->request($number);
    }
    
    /**
     *
     * Schedule a voice broadcast
     *
     * @param mixed $options
     *
     * @return mixed
     */
    public function schedule(array $opts = array())
    {
        $this->action('broadcast.schedule');
        return $this->request($opts);
    }
    
    /**
     *
     * Get the status of a scheduled broadcast
     *
     * @param mixed $options
     *
     * @return mixed
     */
    public function status($id)
    {
        $this->action('broadcast.status');
        return $this->request($id);
    }
    
    /** 
     *
     * Stop a processing broadcast
     *
     * @param int $id
     *
     * @return mixed
     */
    public function stop($id)
    {
        $this->action('broadcast.stop');
        return $this->request($id);
    }
    
    /**
     *
     * Set the name of the voice broadcast
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
     * Set the option to record and answering machine message
     *
     * @param int $flag
     *
     * @return object
     */
    public function setMachineDetection($flag = null)
    {
        $this->_param['machine_detection'] = (int)$flag;
        return $this;
    }
    
    /**
     *
     * Set to use transfer option
     *
     * @param int $flag
     *
     * @return object
     */
    public function setUseTransfer($flag)
    {
        $this->_param['use_transfer'] = (int)$flag;
        return $this;
    }
    
    /**
     *
     * Set the option to include a transfer number
     *
     * @param int $phone
     *
     * @return object
     */
    public function setTransferNumber($phone)
    {
        $this->_param['transfer_number'] = Util::cleanNumber($phone);
        return $this;
    }
    
    /**
     *
     * Set the Schedul flag
     * 
     * @param int $flag
     *
     * @return object
     */
    public function setSchedule($flag = null)
    {
        $this->_param['schedule'] = (int)$flag;
        return $this;
    }
    
    /**
     *
     * Set the amount of simultaneous calls.
     * The maximum is 25 
     * 
     * @param int $simul
     *
     * @return object
     */
    public function setSimul($simul)
    {
        if ($simul <= 25) {
            $this->_param['simul'] = $simul;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Invalid amount of simultaneous calls: [%d]', $simul
            ));
        }
        return $this;
    }
    
    /**
     *
     * Set the timestamp for the beginning of the broadcast
     *
     * @param string $timestamp
     *
     * @return object
     */
    public function setTimestamp($timestamp)
    {
        $this->_param['timestamp'] = (string)$timestamp;
        return $this;
    }
    
    /**
     *
     * Set the caller ID that will displayed to 
     * to the person receiving the call to record the broadcast message
     *
     * @param int $cid
     *
     * @return object
     */
    public function setRecordingCid($cid)
    {
        $this->_param['recording_cid'] = Util::cleanNumber($cid);
        return $this;
    }
    
    /**
     *
     * Set the flag to display only active broadcasts
     * when retrieving the opt-out list
     *
     * @param int $flag
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setActive($flag)
    {
        if ($flag == 1 || $flag == 0) {
            $this->_param['active'] = (int)$flag;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Invalid active value: [%d]', $flag
            ));
        }
        return $this;
    }
    
    /**
     *
     * Set the broadcast Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setBroadcastId($id)
    {
        $this->_param['broadcast_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set the created data of the broadcast
     *
     * @param string $date
     *
     * @return object
     */
    public function setCreatedDate($date)
    {
        $this->_param['created_date'] = (string)$date;
        return $this;
    }
    
    /**
     *
     * Set the phone number list for the broadcast
     *
     * @param mixed $list
     *
     * @return object
     */
    public function setPhoneNumberList($list)
    {
        $this->_param['phone_number_list'] = $list;
        return $this;
    }
    
    /**
     *
     * Set the audio dialog Id of a pre-recorded message
     *
     * @param int $id
     *
     * @return object
     */
    public function setAudioDialogId($id)
    {
        $this->_param['audio_dialog_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set basic broadcast Id to get the status of the VB
     *
     * @param int $id
     *
     * @return object
     */
    public function setBasicBroadcastId($id)
    {
        $this->_param['basic_broadcast_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set recording phone number
     *
     * @param int $number
     *
     * @return object
     */
    public function setRecordingPhoneNumber($number)
    {
        $this->_param['recording_phone_number'] = Util::cleanNumber($number);
        return $this;
    }
    
    /**
     *
     * Set phone list to receive broadcast
     *
     * @param int $number
     *
     * @return object
     */
    public function setPhone($number)
    {
        $this->_param['phone'] = Util::cleanNumber($number);
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
    public function setPhoneNumber($number)
    {
        $this->_param['phone_number'] = Util::cleanNumber($number);
        return $this;
    }
    
    /**
     *
     * Set type
     *
     * @param int $flag
     *
     * @return object
     */
    public function setType($flag)
    {
        $this->_param['type'] = (int)$flag;
        return $this;
    }
    
    /**
     *
     * Set the amount of time (seconds) between retries
     *
     * @param int $seconds
     *
     * @return object
     */
    public function setRetry($seconds)
    {
        $this->_param['retry'] = (int)$seconds;
        return $this;
    }
    
    /**
     *
     * Set the caller ID
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
    /**
     *
     * Set max attempts for retry
     * 
     * @param int $attempts
     *
     * @return object
     */
    public function setAttempts($attempts)
    {
        if (count($attempts) > 3) {
            throw new \RunTimeException('Invalid amount of attempts');
        } else {
            $this->_param['attempts'] = $attempts;
        }
    }
    /**
     *
     * Set timezone
     *
     * @param string $tz
     *
     * @return object
     */
    public function setGmt($tz)
    {
        $this->_param['gmt'] = (string)$tz;
        return $this;
    }
    
    /**
     *
     * Set ending date of broadcast
     *
     * @param string $date
     *
     * @return object
     */
    public function setEdate($date)
    {
        $this->_param['edate'] = $date;
        return $this;
    }
    
    /**
     *
     * Set start time
     *
     * @param string $time
     *
     * @return object
     */
    public function setDstime($time)
    {
        $this->_param['dstime'] = $time;
        return $this;
    }
    
    /**
     *
     * Set end time
     *
     * @param string $time
     *
     * @retrun object
     */
    public function setDetime($time)
    {
        $this->_param['detime'] = $time;
        return $this;
    }
    
    /**
     *
     * Provide description of voice broadcast
     *
     * @param string $desc
     *
     * @return object
     */
    public function setDesc($desc)
    {
        $this->_param['desc'] = (string)$desc;
        return $this;
    }
}