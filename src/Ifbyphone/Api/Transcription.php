<?php
/**
 *
 * Transcription class
 */
namespace Ifbyphone\Api;

class Transcription extends Base 
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
     * Create a transcription
     *
     * @param mixed $opts
     *
     * @return mixed
     */
    public function create(array $opts = array())
    {
        $this->action('transcription.create');
        return $this->request($opts);
    }
    
    /**
     *
     * Get an existing transcription
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function get(array $opts = array())
    {
        $this->action('transcription.get');
        return $this->request($opts);
    }
    
    /**
     *
     * Set path to audio to be transcribed
     *
     * @param string $path
     
     * @return object
     */
    public function setPath($path)
    {
        $this->_param['path'] = Util::validUrl($path);
        return $this;
    }
    
    /**
     *
     * Set the type of transcription quality
     *
     * @param int $type
     *
     * @return object
     */
    public function setType($type)
    {
        $validValue = array(1, 2, 3);
        
        if (in_array($type, $validValue)) {
            $this->_param['type'] = (int)$type;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Invalid transcription type given: [%d]', $type
            ));
        }
        return $this;
    }
    
    /**
     *
     * Select end date
     *
     * @param string $date
     * 
     * @return object
     */
    public function setEndDate($date)
    {
        $this->_param['end_date'] = (string)$date;
        return $this;
    }
    
    /**
     *
     * Set the Id of the transcription
     *
     * @param int $id
     *
     * @return object
     */
    public function setId($id)
    {
        $this->_param['id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set the start date
     *
     * @param string $date
     * @return object
     */
    public function setStartDate($date)
    {
        $this->_param['start_date'] = (string)$date;
        return $this;
    }
}