<?php
class GetLastRoomData {
}

class GetLastRoomDataResponse {
  public $GetLastRoomDataResult; // ArrayOfint
}

class GetLastOvenData {
}

class GetLastOvenDataResponse {
  public $GetLastOvenDataResult; // int
}

class StartReminder {
  public $desiredTemperature; // int
}

class StartReminderResponse {
  public $StartReminderResult; // boolean
}

class StopReminder {
}

class StopReminderResponse {
  public $StopReminderResult; // boolean
}

class char {
}

class duration {
}

class guid {
}


/**
 * Service1 class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class Service1 extends SoapClient {

  private static $classmap = array(
                                    'GetLastRoomData' => 'GetLastRoomData',
                                    'GetLastRoomDataResponse' => 'GetLastRoomDataResponse',
                                    'GetLastOvenData' => 'GetLastOvenData',
                                    'GetLastOvenDataResponse' => 'GetLastOvenDataResponse',
                                    'StartReminder' => 'StartReminder',
                                    'StartReminderResponse' => 'StartReminderResponse',
                                    'StopReminder' => 'StopReminder',
                                    'StopReminderResponse' => 'StopReminderResponse',
                                    'char' => 'char',
                                    'duration' => 'duration',
                                    'guid' => 'guid',
                                   );

  public function Service1($wsdl = "http://kitchenportal.cloudapp.net/Service1.svc?wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param GetLastRoomData $parameters
   * @return GetLastRoomDataResponse
   */
  public function GetLastRoomData(GetLastRoomData $parameters) {
    return $this->__soapCall('GetLastRoomData', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetLastOvenData $parameters
   * @return GetLastOvenDataResponse
   */
  public function GetLastOvenData(GetLastOvenData $parameters) {
    return $this->__soapCall('GetLastOvenData', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param StartReminder $parameters
   * @return StartReminderResponse
   */
  public function StartReminder(StartReminder $parameters) {
    return $this->__soapCall('StartReminder', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param StopReminder $parameters
   * @return StopReminderResponse
   */
  public function StopReminder(StopReminder $parameters) {
    return $this->__soapCall('StopReminder', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

}

?>
