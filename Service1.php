<?php
class DataModel {
  public $Light; // int
  public $SensorName; // string
  public $Temperature; // int
  public $TimeOfData; // dateTime
}

class SaveDataAsync {
  public $data; // DataModel
}

class SaveDataAsyncResponse {
  public $SaveDataAsyncResult; // boolean
}

class CancelReminder {
}

class CancelReminderResponse {
  public $CancelReminderResult; // boolean
}

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

class ReminderAsync {
  public $desiredTemperature; // int
}

class ReminderAsyncResponse {
  public $ReminderAsyncResult; // boolean
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
                                    'DataModel' => 'DataModel',
                                    'SaveDataAsync' => 'SaveDataAsync',
                                    'SaveDataAsyncResponse' => 'SaveDataAsyncResponse',
                                    'CancelReminder' => 'CancelReminder',
                                    'CancelReminderResponse' => 'CancelReminderResponse',
                                    'GetLastRoomData' => 'GetLastRoomData',
                                    'GetLastRoomDataResponse' => 'GetLastRoomDataResponse',
                                    'GetLastOvenData' => 'GetLastOvenData',
                                    'GetLastOvenDataResponse' => 'GetLastOvenDataResponse',
                                    'ReminderAsync' => 'ReminderAsync',
                                    'ReminderAsyncResponse' => 'ReminderAsyncResponse',
                                    'char' => 'char',
                                    'duration' => 'duration',
                                    'guid' => 'guid',
                                   );

  public function Service1($wsdl = "http://localhost:51211/Service1.svc?wsdl", $options = array()) {
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
   * @param SaveDataAsync $parameters
   * @return SaveDataAsyncResponse
   */
  public function SaveDataAsync(SaveDataAsync $parameters) {
    return $this->__soapCall('SaveDataAsync', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param CancelReminder $parameters
   * @return CancelReminderResponse
   */
  public function CancelReminder(CancelReminder $parameters) {
    return $this->__soapCall('CancelReminder', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
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
   * @param ReminderAsync $parameters
   * @return ReminderAsyncResponse
   */
  public function ReminderAsync(ReminderAsync $parameters) {
    return $this->__soapCall('ReminderAsync', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

}

?>
