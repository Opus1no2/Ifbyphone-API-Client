<?php
/**
 *
 * Base class for testing
 */
use Ifbyphone\Client;

class TestProvider extends \PHPUnit_Framework_TestCase
{
    protected $_client;
    protected $_key = '{YOUR API KEY}';
    
    /**
     * @sms
     */
    public static $testSendMessage = array(
        'to' => '',
        'from' => '',
        'message' => ''
    );
    public static $testDeleteMessage = array(
        'msg_id'=> ''
    );
    public static $testRegisterNumber = array(
        'number' => ''
    );
    public static $testUnregisterNumber = array(
        'number' => ''
    );
    
    /**
     * @addons
     */
    public static $testPurchase = array(
        'item_id' => '', 
        'qty' => '', 
        'send_receipt' => ''
    );
    
    /**
     * @broadcast
     */
    public static $testVbCreate = array(
        'name' => 'foo',
        'recording_phone_number' => '',
        'phone' => '',
        'machine_detection' => '',
        'use_transfer' => '',
        'transfer_number' => '',
        'simul' => '',
        'recording_cid' => '',
        'desc' => 'test broadcast'
    );
    public static $testVbSchedule = array(
        'phone_number_list' => '',
        'audio_dialog_id' => '', 
        'timestamp' => '',
        'type' => '',
        'attempts' => '',
        'retry' => '',
        'cid' => '',
        'simul' => '',
        'desc'  => ''
    );
    public static $testGetActiveOptout = array(
        'active' => '',
        'broadcast_id' => ''
    );
    public static $testGetInactiveOptout = array(
        'active' => '', 
        'broadcast_id' => ''
    );
    public static $testVBoptout = array(
        'phone_number' => ''
    );
    public static $testStatus = array(
        'basic_broadcast_id' => ''
    );
    public static $testVbStop = array(
        'basic_broadcast_id' => ''
    );
    public static $testAddAttendee = array(
        'usr_conference_id' => '',
        'attendee_list' => '', 
        'invitations' => '', 
        'immediate' => ''
    );
    
    /**
     * @findme
     */
    public static $testAddNumber = array(
        'findme_id' => '',
        'phone_number' => ''
    );
    public static $findmeCreate = array(
        'name' => 'foobar',
        'list_type' => '',
        'loop_count' => '',
        'distribution_type' => '',
        'record' => '',
        'screen_method' => '',
        'screen_prompt' => '',
        'dtmf_only' => '',
        'holdrepeat' => '',
        'timeout' => '',
        'whisper_phrase' => '',
        'findme_action' => '',
        'numbers' => '',
        'auto_accept' => '',
        'simul' => ''
    );
    public static $findmeDelete = array(
        'findme_id' => ''
    );
    public static $findmeDeleteNum = array(
        'findme_id' => '',
        'findme_number_id' => ''
    );
    public static $findmeDeleteRecordedCall = array(
        'findme_id' => '',
        'recording_name' => ''
    );
    public static $emptyFindme = array(
        'findme_id' => ''
    );
    public static $getPhoneList = array(
        'findme_id' => ''
    );
    public static $getRecordedCalls = array(
        'findme_id' => ''
    );
    
    /**
     * @conference
     */
    public static $addAttendee = array(
        'usr_conference_id' => '',
        'attendee_list' => '', 
        'invitations' => '', 
        'immediate' => ''
    );
    public static $callAttendee = array(
        'usr_conference_id' => '',
        'usr_conference_attendee_id' => '',
        'usr_conference_participation_id' => ''
    );
    public static $attendeeDetails = array(
        'usr_conference_id' => '', 
        'usr_conference_attendee_id' => ''
    );
    public static $kickAttendee = array(
        'usr_conference_id' => '',
        'user_number' => ''
    );
    public static $listAttendees = array(
        'usr_conference_id' => ''
    );
    public static $muteAttendee = array(
        'usr_conference_id' => '',
        'user_number' => ''
    ); 
    public static $removeAttendee = array(
        'usr_conference_id' => '',
        'usr_conference_attendee_id' => ''
    );
    public static $unMute = array(
        'usr_conference_id' => '',
        'user_number' => ''
    );
    public static $confDetails = array(
        'usr_conference_id' => ''
    );
    public static $confRemove = array(
        'usr_conference_id' => ''
    );
    public static $scheduleConf = array(
        'attendee_list' => '',
    );
    
    /**
     * @group
     */
    public static $createGroup = array(
        'group_name' => ''
    );
    public static $groupDetails = array(
        'group_id' => ''
    );
    public static $emptyGroup = array(
        'group_id' => ''
    );
    public static $addMember = array(
        'group_id' => '',
        'member_name' => '',
        'member_phone' => '',
        'member_email' => ''
    );
    public static $removeMember = array(
        'member_id' => ''
    );
    public static $removeGroup = array(
        'group_id' => ''
    );
    public static $renameGroup = array(
        'group_id' => '',
        'name' => 'new name'
    );
    
    /**
     * @locator
     */
    public static $addLocation = array(
        'usr_locator_id' => '',
        'location_destination' => '',
        'location_zipcode' => '',
        'location_name' => '',
        'location_address' => '',
        'location_description' => '',
        'location_city' => '',
        'location_state' => '',
        'location_call_timeout' => '',
        'location_email_addresses' => '',
        'location_action_parameter' => '',
        'geocode_method' => ''
    );
    public static $locatorDetails = array(
        'usr_locator_id' => '',
        'usr_location_id' => ''
    );
    public static $locatorLocationList = array(
        'usr_locator_id' => ''
    );
    public static $removeLocation = array(
        'usr_locator_id' => '',
        'usr_location_id' => ''
    );
    public static $updateLocation = array(
        'usr_locator_id' => '',
        'usr_location_id' => '',
        'location_destination' => '',
        'location_zipcode' => '',
        'location_name' => '',
        'location_address' => '',
        'location_description' => '',
    );
    
    /**
     * @numbers
     */
    public static $order = array(
        'quantity' => '',
        'type' => '',
        'search' => '',
        'fill_quantity' => ''
    );
    public static $removeNum = array(
        'number' => ''
    );
    public static $searchNum = array(
        'type' => '',
        'quantity' => '',
        'value' => ''
    );
    
    /**
     * @recording
     */
    public static $download = array(
        'type' => '',
        'sid' => '',
        'format' => '',
        'sample_rate' => ''
    );
    public static $list = array(
        'type' => '',
        'id' => ''
    );
    public static $remove = array(
        'sid' => '',
        'delete_now' => ''
    );
    public static $upload = array(
        'type' => '',
        'path' => '',
        'id' => ''
    );
    /**
     * registerednumbers
     */
    public static $addNum = array(
        'phone' => '',
        'description' => ''
    );
    public static $removeRegisteredNum = array(
        'phone' => ''
    );
    
    /**
     * @reports
     */
    public static $broadcast = array(
        'start_date' => '',
        'end_date' => '',
        'broadcast_id' => '',
        'type' => '',
        'format' => '',
        'number' => ''
    );
    public static $cdr = array(
        'start_date' => '',
        'end_date' => '',
    );
    public static $clickTo = array(
        'start_date' => '',
        'end_date' => '',
        'click_id' => ''
    );
    public static $survo = array(
        'start_date' => '',
        'end_date' => '',
        'id' => ''
    );
    
    /**
     * @routing
     */
    public static $advanced = array(
        'phone_number' => '',
        'reverse_lookup' => '',
        'record_call' => '',
        'record_warning' => '',
        'caller_audio' => '',
        'recipient_audio' => '',
        'always_ring' => '',
        'ga_referrer' => '',
        'ga_content' => '',
        'ga_campaign' => '',
        'ga_term' => '',
        'ga_medium' => ''
    );
    public static $configure = array(
        'phone_number' => '',
        'routing_type' => '',
        'parameter1' => '',
        'description' => '',
        'record_call' => '',
        'record_warning' => '',
        'reverse_lookup' => '',
        'play_ring' => '',
        'parameter2' => '',
        'parameter3' => '',
        'parameter4' => ''
    );
    public static $updateLabel = array(
        'phone_number' => '',
        'description' => ''
    );
    
    /**
     * @survo
     */
    public static $deleteResults = array(
        'survo_id' => '',
        'before_date' => ''
    );
    public static $survoRecording = array(
        'format' => '', 
        'survo_id' => '',
        'unique_id' => '',
        'question' => '',
        'sample_rate' => ''
    );
    
    /**
     * @transcription
     */
    public static $createTranscription = array(
        'path' => '',
        'type' => ''
    );
    public static $getTranscription = array(
        'id' => '',
        'start_date' => '',
        'end_date' => ''
    );
    
    /**
     * @verifymenow
     */
    public static $transcriptionRecording = array(
        'format' => '',
        'verify_id' => '',
        'sid' => '',
        'sample_rate' => ''
    );
    public static $verify = array(
        'verify_id' => '',
        'phone_number' => '',
        'pin' => ''
    );
    
    /**
     * @voicemail
     */
    public static $createBox = array(
        'name' => '',
        'pin' => '',
        'email_address' => '',
        'send_email' => '',
        'envelope' => ''
    );
    public static $deleteBox = array(
        'box_id' => ''
    );
    public static $deleteMessage = array(
        'box_id' => '',
        'message_id' => ''
    );
    public static $msgId = array(
        'vmail_id' => ''    
    );
    public static $msbBySid = array(
        'vmail_sid' => '',
        'vmail_id' => ''
    );
    public static $getMessages = array(
        'box_id' => '',
        'greetings' => ''
    );
    public static $recordGreeting = array(
        'box_id' => '',
        'recording_type' => '',
        'phone_to_call' => ''
    ); 
    
    /**
     * @Clicktocall
     */
    public static $ctc = array(
        'type' => '',
        'id' => '',
        'phone_to_call' => '',
        'page' => '',
        'ref' => '',
        'first_callerid' => '',
        'second_callerid' => ''
    );
    
    /**
     * @clicktofindme
     */
    public static $ctf = array(
        'phone_to_call' => '',
        'findme_id' => '',
        'type' => '',
        'no_answer_email' => '',
        'no_answer_sms' => '',
        'no_answer_url' => '',
        'no_answer_phone' => ''
    );
    
    /**
     * @clicktofindmelist
     */
    public static $ctfl = array(
        'list' => '',
        'phone_to_call' => '',
        'screen_prompt' => '',
        'type' => '',
        'usr_findme_type' => '',
        'loop_count' => '',
        'randomize' => '',
        'record' => '',
        'use_screen' => '',
        'dtmf_only' => '',
        'holdmusic' => '',
        'holdrepeat' => '',
        'timeout' => '',
        'whisper_phrase' => '',
        'nextaction' => '',
        'nextactionitem' => '',
        'page' => '',
        'ref' => '',
        'no_answer_email' => '',
        'no_answer_sms' => '',
        'no_answer_url' => '',
        'no_answer_phone' => ''
    );
    
    /**
     * @clicktovr
     */
    public static $ctvr = array(
        'menu_id' => '',
        'phone_to_call' => '',
        
    );
    
    /**
     * @clicktovm
     */
    public static $ctvm = array(
        'vmail_box_id' => '',
        'phone_to_call' => ''
    );  
    
    /**
     * @clicktosurvo
     */
    public static $cts = array(
        'survo_id' => ''
    );
    public function __construct()
    {
        $this->_client = new Client($this->_key);
    }
    
    public function _test($result)
    {
        $this->assertEquals('success', (string)$result->result);
    }

    public function getClient()
    {
        return $this->_client;
    }
}
