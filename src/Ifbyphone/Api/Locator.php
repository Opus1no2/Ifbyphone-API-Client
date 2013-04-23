<?php
/**
 *
 * Class for Store Locator 
 */
namespace Ifbyphone\Api;

class Locator extends Base
{
    /**
     *
     * Class constructor
     *
     * @return null
     */
    public function __construct($arg)
    {
        parent::__construct($arg);
    }
    
    /**
     *
     * Add a location to an existing locator
     *
     * @param mixed $opts
     *
     * @return mixed
     */
    public function addLocation(array $opts = array())
    {
        $this->action('locator.location.add');
        return $this->_request($opts);
    }
    
    /**
     *
     * Get details about a specifica location
     *
     * @param $mixed $opts
     *
     * @return mixed
     */
    public function getDetails(array $opts = array())
    {
        $this->action('locator.location.details');
        return $this->_request($opts);
    }
    
    /**
     *
     * List locations associated with a store locator
     *
     * @param mixed $opts
     *
     * @return mixed
     */
    public function listLocations(array $opts = array())
    {
        $this->action('locator.location.list');
        return $this->_request($opts);
    }
    
    /** 
     *
     * Remove a location from a locator
     *
     * @param mixed $opts
     *
     * @return mixed
     */
    public function removeLocation(array $opts = array())
    {
        $this->action('locator.location.remove');
        return $this->_request($opts);
    }
    
    /**
     *
     * Update an existing location
     *
     * @param mixed $opts
     *
     * @return mixed
     */
    public function updateLocation(array $opts = array())
    {
        $this->action('locator.location.update');
        return $this->_request($opts);
    }
    
    /**
     *
     * Set location Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setLocationId($id)
    {
        $this->_param['location_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set the locator Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setUsrLocatorId($id)
    {
        $this->_param['usr_locator_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set the destination of the location
     *
     * @param string $dest
     *
     * @return object
     */
    public function setDestination($dest)
    {
        $this->_param['location_destination'] = (string)$dest;
        return $this;
    }
    
    /**
     *
     * Set the location Zip Code
     *
     * @param int $zip
     *
     * @return object
     */
    public function setLocationZipcode($zip)
    {
        $this->_param['location_zipcode'] = (int)$zip;
        return $this;
    }
    
    /**
     *
     * Set the location name
     *
     * @param string $name
     *
     * @return object
     */
    public function setLocationName($name)
    {
        $this->_param['location_name'] = (string)$name;
        return $this;
    }
    
    /**
     *
     * Set the location address
     *
     * @param string $address
     *
     * @return object
     */
    public function setLocationAddress($address)
    {
        $this->_param['location_address'] = (string)$address;
        return $this;
    }
    
    /**
     *
     * Set a description of the location
     *
     * @param string $desc
     *
     * @return object
     */
    public function setLocationDescription($desc)
    {
        $this->_param['location_description'] = (string)$desc;
        return $this;
    }
    
    /**
     *
     * Set location city
     *
     * @param string $city
     *
     * @return object
     */
    public function setLocationCity($city)
    {
        $this->_param['location_city'] = (string)$city;
        return $this;
    }
    
    /**
     *
     * Set location state
     *
     * @param string $state
     *
     * @return object
     */
    public function setLocationState($state)
    {
        $this->_param['location_state'] = (string)$state;
        return $this;
    }
    
    /**
     *
     * Set email address for location
     *
     * @param string $email
     *
     * @return object
     */
    public function setLocationEmailAddress($email)
    {
        $this->_param['location_email_address'] = Util::validEmail($email);
        return $this;
    }
    
    /**
     *
     * Set location action param
     *
     * @param string $param
     *
     * @return object
     */
    public function setLocationActionParameter($param)
    {
        $this->_param['location_action_parameter'] = (string)$param;
        return $this;
    }
    
    /**
     *
     * Set the location timeout in seconds
     *
     * @param int $seconds
     *
     * @return object
     */
    public function setLocationCallTimeout($seconds)
    {
        $this->_param['laction_call_timout'] = (int)$seconds;
        return $this;
    }
}