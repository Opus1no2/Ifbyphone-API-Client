<?php
/**
 *
 * Class for retrieving Ibp application Id's
 */
namespace Ifbyphone\Api;

class General extends Base
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
     * Get application Id's
     *
     * @param mixed $options
     * 
     * @return mixed
     */
    public function buildingBlocks()
    {
        $this->action('general.buildingblockids');
        return $this->request();
    }
}