<?php
/**
 *
 * Base class:
 * 
 * Where the magic happens
 */
namespace Ifbyphone\Api;
use Ifbyphone\Client;

class Base
{
    /**
     * @var string $_action
     */
    protected $_action;
    /**
     * @var array $_param
     */
    protected $_param = array();
    /**
     * @var array $_admin
     */
    protected $_admin = array(
        'Ctc', 'Ctfm', 'Ctfml',
        'Ctvr', 'Ctvm', 'Cts'
    );
    /**
     * @var obj $_client
     */
    protected $_client;
    
    /**
     * @var string $_endpoint
     */
    protected $_endpoint;

    /**
     *
     * Inject Client Object
     *
     * @param obj $client
     */
    public function __construct($client)
    {   
        $this->_client = $client;
        $this->_setEndpoint($this);
    }
    
    /**
     *
     * Http Request
     *
     * @param string $url
     * @param array $opts
     *
     * @return string
     */ 
    public function request(array $args = array())
    {
        $this->setArgs($args);
        return $this->_client->getHttpClient()
            ->_request($this->_endpoint, $this->_param);
    }
    
    /**
     *
     * Set action
     *
     * @param string $action
     *
     * @return void
     */
    protected function action($action)
    {
        $this->_param['action'] = (string) $action;
    }
    
    /**
     *
     * Set application type
     *
     * @param string $app
     *
     * @return void
     */
    public function app($app)
    {
        $this->_param['app'] = (string) $app;
    }
    
    /**
     *
     * Set the appropriate endoint based on type of API request
     *
     * @param object $arg
     *
     * @return string
     */
    protected function _setEndpoint($arg)
    {        
        if (class_exists(get_class($arg))) {
            if (in_array(get_class($arg), $this->_admin)) {
                $this->_param['key'] = $this->_client->getKey();
                $this->_endpoint = 'click_to_xyz.php'; 
            } else {    
                $this->_param['api_key'] = $this->_client->getKey();
                $this->_endpoint = 'ibp_api.php';
            }
        }
    }
    
    /**
     *
     * Set options for request
     *
     * @param array $args
     *
     * @return void
     */
    public function setArgs($args)
    {
        $vals = array(
            'reverse_lookup'  , 'record_caller',
            'play_warning'    , 'always_ring',
            'start_date'      , 'end_date', 
            'format'          , 'start_time', 
            'end_time'        , 'call_type_value',
            'call_type_filter', 'play_ring',
            'delete_now'      , 'inboundonly',
            'phone_label'
        );
        
        if (is_array($args) && count($args) > 0) {
            foreach ($args as $k => $v) {
                if (!is_int($k)) {
                    $tempRay[$k] = $v;
                } else {
                    if (in_array($v, $vals) && is_int($k)) {
                        $this->_param[$v] = 1;
                    }
                }
            }
            foreach ($tempRay as $key => $value) {
                $temp = explode('_', $key);
                $mkey = 'set' . implode('', array_map('ucfirst', $temp));
                $methodArg[$mkey] = $value;
            }
            foreach ($methodArg as $method => $arg) {
                if (method_exists($this, $method)) {
                    $this->$method($arg);
                } else {
                    throw new \RunTimeException(sprintf(
                        'Invalid method [%s] given', $method
                    ));
                }
            }
        }
    }
}