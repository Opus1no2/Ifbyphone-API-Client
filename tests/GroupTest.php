<?php
require_once 'TestProvider.php';
/**
 * @group group
 */
class GroupTest extends TestProvider
{
    private $_group;
    
    public function setup()
    {
        $this->_group = $this->getClient()->api('group');
    }
    
    public function testCreate()
    {
        $result = $this->_group->create(self::$createGroup);
        $this->_test($result);
    }
    
    public function testGetDetails()
    {
        $result = $this->_group->getDetails(self::$groupDetails);
        $this->_test($result);
    }
    
    public function testEmptyGroup()
    {
        $result = $this->_group->emptyGroup(self::$emptyGroup);
        $this->_test($result);
    }
    
    public function testListGroups()
    {
        $result = $this->_group->listGroups();
        $this->_test($result);
    }
    
    public function testAddMember()
    {
        $result = $this->_group->addMember(self::$addMember);
        $this->_test($result);
    }
    
    public function testRemoveMember()
    {
        $result = $this->_group->removeMember(self::$removeMember);
        $this->_test($result);
    }
    
    public function testRemove()
    {
        $result = $this->_group->removeGroup(self::$removeGroup);
        $this->_test($result);
    }
    
    public function testRename()
    {
        $result = $this->_group->renameGroup(self::$renameGroup);
        $this->_test($result);
    }
    
    public function tearDown()
    {
        $this->_group = null;
    }
}