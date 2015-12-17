<?php

include_once('GetLastRoomData.php');
include_once('GetLastRoomDataResponse.php');
include_once('GetLastOvenData.php');
include_once('GetLastOvenDataResponse.php');
include_once('StartReminder.php');
include_once('StartReminderResponse.php');
include_once('StopReminder.php');
include_once('StopReminderResponse.php');

class Service1 extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'GetLastRoomData' => '\GetLastRoomData',
      'GetLastRoomDataResponse' => '\GetLastRoomDataResponse',
      'GetLastOvenData' => '\GetLastOvenData',
      'GetLastOvenDataResponse' => '\GetLastOvenDataResponse',
      'StartReminder' => '\StartReminder',
      'StartReminderResponse' => '\StartReminderResponse',
      'StopReminder' => '\StopReminder',
      'StopReminderResponse' => '\StopReminderResponse');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'http://localhost:51211/Service1.svc?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
  
  parent::__construct($wsdl, $options);
    }

    /**
     * @param GetLastRoomData $parameters
     * @access public
     * @return GetLastRoomDataResponse
     */
    public function GetLastRoomData(GetLastRoomData $parameters)
    {
      return $this->__soapCall('GetLastRoomData', array($parameters));
    }

    /**
     * @param GetLastOvenData $parameters
     * @access public
     * @return GetLastOvenDataResponse
     */
    public function GetLastOvenData(GetLastOvenData $parameters)
    {
      return $this->__soapCall('GetLastOvenData', array($parameters));
    }

    /**
     * @param StartReminder $parameters
     * @access public
     * @return StartReminderResponse
     */
    public function StartReminder(StartReminder $parameters)
    {
      return $this->__soapCall('StartReminder', array($parameters));
    }

    /**
     * @param StopReminder $parameters
     * @access public
     * @return StopReminderResponse
     */
    public function StopReminder(StopReminder $parameters)
    {
      return $this->__soapCall('StopReminder', array($parameters));
    }

}
