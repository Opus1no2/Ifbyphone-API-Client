<?php
/**
 *
 * Survo class
 */
namespace Ifbyphone\Api;

class Survo extends Base 
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
     * Delete Survo results
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function deleteResults(array $opts = array())
    {
        $this->action('survo.delete_survey_results');
        return $this->request($opts);
    }
    
    /**
     *
     * Get Survo recordings
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function getSurvoRecording(array $opts = array())
    {
        $this->action('survo.get_recording');
        return $this->request($opts);
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
        $this->_param['survo_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Restricts the delete operation to results prior to the specified date
     *
     * @param string $date
     *
     * @return object
     */
    public function setBeforeDate($date)
    {
        $this->_param['before_date'] = (string)$date;
        return $this;
    }
    
    /**
     *
     * Set the unique Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setUniqueId($id)
    {
        $this->_param['unique_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set the question number
     *
     * @param int $num
     *
     * @return object
     */
    public function setNumber($num)
    {
        $this->_param['question'] = (int)$num;
        return $this;
    }
    
    /**
     *
     * Set question
     *
     * @param int $question
     *
     * @return object
     */
    public function setQuestion($question)
    {
        $this->_param['question'] = (int)$question;
        return $this;
    }
    
    /**
     *
     * Set the sample rate for the recording
     *
     * @param int $rate
     *
     * @return object
     */
    public function setSampleRate($rate)
    {
        $validValues = array(8000, 11000, 22050, 44100);
        
        if (in_array($rate, $validValues)) {
            $this->_param['sample_rate'] = (int)$rate;
        } else {
            throw new \InvalidArgumentException('Invalid sample rate');
        }
        return $this;
    }
}