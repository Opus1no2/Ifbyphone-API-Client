<?php
/**
 *
 * Recording class
 */
namespace Ifbyphone\Api;

class Recording extends Base 
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
     * Download existing recordings
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function download(array $opts = array())
    {
        $this->action('recording.download');
        return $this->request($opts);
    }
    
    /**
     *
     * List recordings
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function listRecordings(array $opts = array())
    {
        $this->action('recording.list');
        return $this->request($opts);
    }
    
    /**
     *
     * Remove recordings
     *
     * @param mixed $opts
     *
     * @return mixed
     */
    public function remove($opts = null)
    {
        $this->action('recording.remove');
        return $this->request($opts);
    }
    
    /**
     *
     * Upload a recording
     *
     * @param mixed $opts
     *
     * @return mixed
     */
    public function upload(array $opts = array())
    {
        $this->action('recording.upload');
        return $this->request($opts);
    }

    /**
     *
     * Set Type
     *
     * @param string $type
     *
     * @return object
     */
    public function setType($type)
    {
        $this->_param['type'] = (string)$type;
        return $this;
    }
    
    /**
     *
     * Set the session Id
     *
     * @param string $sid
     *
     * @return object
     */
    public function setSid($sid)
    {
        $this->_param['sid'] = (string)$sid;
        return $this;
    }
    
    /**
     *
     * Set the sample rate
     *
     * @param int $rate
     *
     * @return object
     */
    public function setSampleRate($rate)
    {
        $this->_param['sample_rate'] = (int)$rate;
        return $this;
    }
    
    /**
     *
     * Set Id
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
     * Set path to upload recording
     *
     * @param string $path
     *
     * @return object
     */
    public function setPath($path)
    {
        $this->_param['path'] = Util::validUrl($path);
        return $this;
    }
    
    /**
     *
     * Set format | 'wav' or 'mp3'
     *
     * @param string $format
     *
     * @return object
     */
    public function setFormat($foramt)
    {
        $this->_param['format'] = $format;
        return $this;
    }
}