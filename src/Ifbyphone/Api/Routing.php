<?php
/**
 *
 * Routing class
 */
namespace Ifbyphone\Api;

class Routing extends Base 
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
     * Configure advanced routing options
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function advanced(array $opts = array())
    {
        $this->action('routing.advanced');
        return $this->request($opts);
    }
    
    /**
     *
     * Configure routing
     * 
     * @param array $opts
     *
     * @return mixed
     */
    public function configure(array $opts = array())
    {
        $this->action('routing.configure');
        return $this->request($opts);
    }
    
    /**
     *
     * Retrieve a list of numbers and labels
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function numbers(array $opts = array())
    {
        $this->action('routing.numbers');
        return $this->request($opts);
    }
    
    /**
     *
     * Update phone lable
     * 
     * @param array $opts
     *
     * @return mixed
     */
    public function updateLabel(array $opts = array())
    {
        $this->action('recording.update_label');
        return $this->request($opts);
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
     * Set Audio for inbound caller
     *
     * @param string $audio
     *
     * @return object
     */
    public function setCallerAudio($audio)
    {
        $this->_param['caller_audio'] = (string)$audio;
        return $this;
    }
    
    /**
     *
     * Set audio for recipient
     *
     * @param string $audio
     *
     * @return object
     */
    public function setRecipientAudio($audio)
    {
        $this->_param['recipient_audio'] = (string)$audio;
        return $this;
    }
    
    /**
     *
     * Set Google Analytics referrer
     *
     * @param string $referrer
     *
     * @return object
     */
    public function setGaReferrer($referrer)
    {
        $this->_param['ga_referrer'] = (string)$referrer;
        return $this;
    }
    
    /**
     *
     * Set Google Analytics content
     *
     * @param string $content
     *
     * @return object
     */
    public function setGaContent($content)
    {
        $this->_param['ga_content'] = (string)$content;
        return $this;
    }
    
    /**
     *
     * Set Google Analytics campaign
     *
     * @param string $campaign
     *
     * @return object
     */
    public function setGaCampaign($campaign)
    {
        $this->_param['ga_compaign'] = (string)$campaign;
        return $this;
    }
    
    /**
     *
     * Set Google Anlytics term
     *
     * @param string $term
     *
     * @return object
     */
    public function setGaTerm($term)
    {
        $this->_param['ga_term'] = (string)$term;
        return $this;
    }
    
    /**
     *
     * Set Google Analytics medium
     *
     * @param string $medium
     *
     * @return object
     */
    public function setGaMedium($medium)
    {
        $this->_param['medium'] = (string)$medium;
        return $this;
    }
    
    /**
     *
     * Set routing type
     *
     * @param string $type
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setRoutingType($type)
    {
        $validTypes = array(
            'findme', 'transfer', 'transfer_w_whisper',
            'survo', 'locator', 'broadcast_from_phone',
            'call_distributor', 'phone_directory', 'vmail'
        );
        
        if (in_array($type, $validTypes)) {
            $this->_param['routing_type'] = (string)$type;
        } else {
            throw new \InvalidArgumentException('Invalid routing type');
        }
        return $this;
    }
    
    /**
     *
     * Set parameter for a routing type
     *
     * @param int $param
     *
     * @return object
     */
    public function setParameter($num, $value)
    {
        $this->_param['parameter' . $param] = (int)$value;
        return $this;
    }
    
    /**
     *
     * Set phone label
     *
     * @param string $label
     *
     * @return object
     */
    public function setDescription($label)
    {
        $this->_param['description'] = (string)$label;
        return $this;
    }
    
    /**
     *
     * Set to record call
     *
     * @param int $flag
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setRecordCall($flag)
    {
        if ($flag == 0 || $flag == 1) {
            $this->_param = (int)$flag;
        } else {
            throw new \InvalidArgumentException('Invalid set record value');
        }
        return $this;
    }
    
    /**
     *
     * Set type of call record warning
     *
     * @param int $type
     *
     * @return object
     */
    public function setRecordWarning($type)
    {
        $validType = array(0, 1, 2, 3);
        if (in_array($type, $validTypes)) {
            $this->_param['recording_warning'] = (int)$type;
        } else {
            throw new \InvalidArgumentException('Invalid record warning type');
        }
        return $this;
    }
    
    /**
     *
     * Set the format for the numbers respnose
     *
     * @param string $format
     *
     * @return object
     */
    public function setFormat($format)
    {
        $this->_param['format'] = (string)$format;
        return $this;
    }
}
