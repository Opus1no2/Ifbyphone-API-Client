<?php
/**
 *
 * HTTP Client
 */
namespace Ifbyphone\HttpClient;

class Request
{
    const BASE = 'https://secure.ifbyphone.com/';
    const USERAGENT = 'Ifbyphone-PHP-Client';
    
    /**
     *
     * Http Request
     *
     * @param string $path
     * @param array $opts
     *
     * @return void
     */
    public function _request($path, array $opts = array())
    {   
        $ch = curl_init($this->_getUrl($path));
        curl_setopt($ch, CURLOPT_USERAGENT, self::USERAGENT);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $opts);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $result = curl_exec($ch);
        curl_close($ch);
        
        return $this->_processResult($result);
    }
    
    /**
     *
     * Process result of API request
     *
     * @param string $result
     *
     * @return $xml
     *
     * @throws RunTimeException
     */
    protected function _processResult($result)
    {   
        $xml = simplexml_load_string($result);
        
        if (isset($xml->result)) {
            if ($xml->result == 'failed') {
                $failure = $xml->result_description;
                throw new \RunTimeException(sprintf(
                    'Request failure: [%s]', $failure
                ));
            }
        return $xml;
        }
    }
    
    /**
     *
     * Assemble URL for request
     *
     * @param string $path
     *
     * @return string
     */
    protected function _getUrl($path)
    {
        $url = self::BASE . $path;
        return $url;
    }
}