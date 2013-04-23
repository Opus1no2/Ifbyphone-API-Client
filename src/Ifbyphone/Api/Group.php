<?php
/**
 *
 * Class for creating and modifying groups 
 */
namespace Ibfbyphone\Api;

class Group extends Base
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
     * Create new group
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function create(array $opt = array())
    {
        $this->action('group.create');
        return $this->request($opt);
    }
    
    /**
     *
     * Get group details
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function getDetails(array $opt = array())
    {
        $this->action('group.details');
        return $this->request($opt);
    }
    
    /**
     *
     * Empty group
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function emptyGroup(array $opt = array())
    {
        $this->action('group.empty');
        return $this->request($opt);
    }
    
    /**
     *
     * List availabl groups
     *
     * @return mixed
     */
    public function listGroups()
    {
        $this->action('group.list');
        return $this->request();
    }
    
    /**
     *
     * Add member(s) to an existing group
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function addMember(array $opt = array())
    {
        $this->action('group.memberadd');
        return $this->request($opt);
    }
    
    /**
     *
     * Remove a member from a group
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function removeMember(array $opt = array())
    {
        $this->action('group.memberremove');
        return $this->request($opt);
    }
    
    /**
     *
     * Remove an existing group
     * 
     * @param array $opts
     *
     * @return mixed
     */
    public function removeGroup(array $opt = array())
    {
        $this->action('group.remove');
        return $this->request($opt);
    }
    
    /**
     *
     * Rename group
     *
     * @param array $opts
     *
     * @return mixed
     */
    public function renameGroup(array $opt = array())
    {
        $this->action('group.rename');
        return $this->request($opt);
    }
    
    /**
     *
     * Set new group name
     *
     * @param string $name
     *
     * @return object
     */
    public function setName($name)
    {
        $this->_param['name'] = (string)$name;
        return $this;
    }
    
    /**
     *
     * Set member Id
     *
     * @param int $id
     *
     * @return object
     */
    public function setMemberId($id)
    {
        $this->_param['member_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set member name
     *
     * @param string $name
     *
     * @return object
     */
    public function setMemberName($name)
    {
        $this->_param['member_name'] = (string)$name;
        return $this;
    }
    
    /**
     *
     * Sent member phone number
     *
     * @param int $number
     *
     * @return object
     */
    public function setMemberPhone($number)
    {
        $this->_param['member_phone'] = (int)$number;
        return $this;
    }
    
    /**
     *
     * Set multiple members
     *
     * @param mixed $list | John Doe|8475551234|john@example.com
     *
     * @return mixed
     */
    public function setMembers($list)
    {
        $this->_param['members'] = $list;
        return $this;
    }
    
    /**
     *
     * Set member email address
     *
     * @param string $email
     *
     * @return object
     */
    public function setMemberEmail($email)
    {
        $this->_param['member_email'] = Util::validEmail($email);
        return $this;
    }
    
    /**
     *
     * Set group Id
     * 
     * @param int $id
     *
     * @return object
     */
    public function setGroupId($id)
    {
        $this->_param['group_id'] = (int)$id;
        return $this;
    }
    
    /**
     *
     * Set group name
     *
     * @param string $name
     *
     * @return object
     */
    public function setGroupName($name)
    {
        $this->_param['group_name'] = (string)$name;
        return $this;
    }
}