<?php
/**
 *
 * Ifbyphone API client
 */
namespace Ifbyphone;

use Ifbyphone\Api;
use Ifbyphone\HttpClient\Request;

class Client
{   
    /**
     * @var string $_key
     */
    protected $_key;
    /**
     * @var object $_httpClient
     */
    protected $_httpClient;

    /**
     *
     * Inject API key 
     *
     * @param string $key
     *
     * @return void
     */
    public function __construct($key = null)
    {
        if ($key) {
            $this->_key = (string)$key;
        }
    }
    
    /**
     *
     * Factory method for instantiating API instance
     *
     * @param string $arg
     *
     * @return instance
     *
     * @throws InvalidArgumentException
     */
    public function api($arg)
    {   
        switch (strtolower($arg)) {
            case 'ctc':
            case 'clicktocall':
            case 'click_to_call':
                return new Api\Ctc($this);
                break;
            case 'ctf':
            case 'clicktofindme':
            case 'click_to_findme':
                return new Api\Ctf($this);
                break;
            case 'ctfl':
            case 'clicktofindmelist':
            case 'click_to_findme_list':
                return new Api\Ctfml($this);
                break;
            case 'ctvr':
            case 'clicktovr':
            case 'click_to_vr':
                return new Api\Ctvr($this);
                break;
            case 'ctvm':
            case 'clicktovoicemail':
            case 'click_to_voicemail':
                return new Api\Ctvm($this);
                break;
            case 'cts':
            case 'clicktosurvo':
            case 'click_to_survo':
                return new Api\Cts($this);
                break;
            case 'addons':
                return new Api\Addons($this);
                break;
            case 'broadcast':
                return new Api\Broadcast($this);
                break;
            case 'conference':
                return new Api\Conference($this);
                break;
            case 'cost':
                return new Api\Cost($this);
                break;
            case 'findme':
                return new Api\FindMe($this);
                break;
            case 'general':
                return new Api\General($this);
                break;
            case 'group':
                return new Api\Group($this);
                break;
            case 'locator':
                return new Api\Locator($this);
                break;
            case 'numbers':
                return new Api\Numbers($this);
                break;
            case 'recording':
                return new Api\Recording($this);
                break;
            case 'registerednumbers':
                return new Api\RegisteredNumbers($this);
                break;
            case 'report':
                return new Api\Report($this);
                break;
            case 'sms':
                return new Api\Sms($this);
                break;
            case 'survo':
                return new Api\Survo($this);
                break;
            case 'transcription':
                return new Api\Transcription($this);
                break;
            case 'verifymenow':
                return new Api\VerifyMeNow($this);
                break;
            case 'vmail':
                return new Api\Vmail($this);
                break;
            default:
                throw new \InvalidArgumentException(sprintf("Invalid instance [%s]", $arg));
        }
    }
    
    /**
     *
     * Set API key
     *
     * @param string $key
     *
     * @return obj
     */
    public function setKey($key)
    {
        $this->_key = (string)$key;
        return $this;
    }
    
    /**
     *
     * Get API key
     *
     * @return string
     */
    public function getKey()
    {
        return (string)$this->_key;   
    }
    
    /**
     *
     * Get HTTP client
     *
     * @return obj
     */
    public function getHttpClient()
    {   
        $this->_httpClient = new Request();
        return $this->_httpClient;
    }
    
    /**
     *
     * Set HTTP client
     * 
     * @param mixed $arg
     *
     * @return void 
     */
    public function setHttpClient($arg)
    {
        $this->_httpClient = $arg;
    }   
}