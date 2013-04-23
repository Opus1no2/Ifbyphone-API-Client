<?php
/**
 *
 * Class for listing and purchasing addons
 */
namespace Ifbyphone\Api;

class Addons extends Base
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
     * List available addons
     *
     * @return mixed
     */
    public function listAddons()
    {
        $this->action('addons.list');
        return $this->request();
    }
    
    /**
     *
     * Purchase additional addons
     *
     * @param array $opts
     *e
     * @return mixed
     */
    public function purchase(array $opts = array())
    {
        $this->action('addons.purchase');
        return $this->request($opts);
    }
    
    /**
     *
     * Set the item Id of the addon to be purchased
     *
     * @param int $id
     *
     * @return object
     */
    public function setItemId($id)
    {
        $this->_param['item_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set the quantity of an item to be purchased
     *
     * @param int $qty
     *
     * @return object
     */
    public function setQty($qty)
    {
        $this->_param['qty'] = (int)$qty;
        return $this;
    }
    
    /**
     *
     * Set the option to receive a receipt of purchase
     *
     * @param int $flag
     *
     * @return object
     */
    public function setSendReceipt($flag = 1)
    {
        $this->_param['send_receipt'] = (int)$flag;
        return $this;
    }
}