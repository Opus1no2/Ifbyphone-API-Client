<?php
/**
 *
 * Reporting class
 */
namespace Ifbyphone\Api;

class Report extends Base
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
     * Get broadcast data
     *
     * @param array $opts
     * 
     * @return mixed
     */
    public function broadcast(array $opts = array())
    {
        $this->action('report.broadcast');
        return $this->request($opts);
    }
    
    /**
     *
     * Get call detail report data
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function callDetail(array $opts = array())
    {
        $this->action('report.call_detail');
        return $this->request($opts);
    }
    
    /**
     *
     * Get call detail information in CSV format
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function callDetailCsv(array $opts = array())
    {
        $this->action('report.call_detail_csv');
        return $this->request($opts);
        
    }
    
    /**
     *
     * Get click to report data
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function clickTo(array $opts = array())
    {
        $this->action('report.clickto');
        return $this->request($opts);   
    }
    
    /**
     *
     * Get survo data
     * 
     * @param array $opts
     *
     * @return mixed
     */
    public function survo(array $opts = array())
    {
        $this->action('report.survo');
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
        $this->_param['id'] = $id;
        return $this;
    }
    
    /**
     *
     * Set click Id
     * 
     * @param mixed $clickId
     *
     * @return object
     */
    public function setClickId($clickId)
    {
        $this->_param['click_id'] = $clickId;
        return $this;
    }
    
    /**
     *
     * Set Ref Data
     * 
     * @param string $ref
     *
     * @return object
     */
    public function setRef($ref)
    {
        $this->_param['ref'] = $ref;
        return $this;
    }
    
    /**
     *
     * Set broadcast Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setBroadcastId($id)
    {
        $this->_param['id'] = $id;
        return $this;
    }
    
    /**
     *
     * Set call type
     *
     * @param string $value
     *
     * @return object
     */
    public function setCallTypeValue($value) 
    {
        $this->_param['call_type_value'] = $value;
        return $this;
    }
    
    /**
     *
     * Set call type filter
     *
     * @param string $filter
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setCallTypeFilter($filter)
    {
        if ($filter == 'Inbound' || $filter == 'Outbound' || $filter == 'Click-To') {
            $this->_param['call_type_filter'] = $filter;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Invalid call type filter: [%s]', $filter
            ));
        }
        return $this;
    }
    
    /**
     *
     * Set the type of report
     *
     * @param string $type
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setType($type)
    {
        if ($type == 'survo' || $type == 'basic' || $type = 'all') {
            $this->_param['type'] = $type;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Invalid broadcast type: [%s]', $type
            ));
        }
        return $this;
    }
    
    /**
     *
     * Set number
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
     * Set the format for return data
     *
     * @param string $format
     *
     * @return object
     *
     * @throws InvalidArgumentException
     */
    public function setFormat($format)
    {
        if ($format == 'xml' || $format == 'csv' || $format == 'text') {
            $this->_param['format'] = $format;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Invalid format given: [%s]', $format
            ));
        }
        return $this;
    }
    
    /**
     *
     * Set start date
     *
     * @param string $startDate
     *
     * @return object
     */
    public function setStartDate($startDate)
    {
        $this->_param['start_date'] = $startDate;
        return $this;
    }
    
    /**
     *
     * Set end date
     *
     * @param string $endDate
     *
     * @return object
     */
    public function setEndDate($endDate)
    {
        $this->_param['end_date'] = $endDate;
        return $this;
    }
    
    /**
     *
     * Set the start time
     *
     * @param string $startTime
     *
     * @return object
     */
    public function setStartTime($startTime)
    {
        $this->_param['start_time'] = $startTime;
        return $this;
    }
    
    /**
     *
     * Set end time
     *
     * @param string $endTim
     *
     * @return object
     */
    public function setEndTime($endTime)
    {
        $this->_param['end_time'] = $endTime;
        return $this;
    }
}