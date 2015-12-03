<?php
class CompositeType {
  public $BoolValue; // boolean
  public $StringValue; // string
}

class char {
}

class duration {
}

class guid {
}

class DateTimeOffset {
  public $DateTime; // dateTime
  public $OffsetMinutes; // short
}

class TableEntity {
  public $ETag; // string
  public $PartitionKey; // string
  public $RowKey; // string
  public $Timestamp; // DateTimeOffset
}

class SensorEntity {
  public $light; // int
  public $teperature; // int
}

class GetData {
  public $value; // int
}

class GetDataResponse {
  public $GetDataResult; // string
}

class GetDataUsingDataContract {
  public $composite; // CompositeType
}

class GetDataUsingDataContractResponse {
  public $GetDataUsingDataContractResult; // CompositeType
}

class SaveData {
  public $sensor; // SensorEntity
}

class SaveDataResponse {
}

class SetReminder {
  public $temperature; // int
}

class SetReminderResponse {
  public $SetReminderResult; // boolean
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
                                    'CompositeType' => 'CompositeType',
                                    'char' => 'char',
                                    'duration' => 'duration',
                                    'guid' => 'guid',
                                    'DateTimeOffset' => 'DateTimeOffset',
                                    'TableEntity' => 'TableEntity',
                                    'SensorEntity' => 'SensorEntity',
                                    'GetData' => 'GetData',
                                    'GetDataResponse' => 'GetDataResponse',
                                    'GetDataUsingDataContract' => 'GetDataUsingDataContract',
                                    'GetDataUsingDataContractResponse' => 'GetDataUsingDataContractResponse',
                                    'SaveData' => 'SaveData',
                                    'SaveDataResponse' => 'SaveDataResponse',
                                    'SetReminder' => 'SetReminder',
                                    'SetReminderResponse' => 'SetReminderResponse',
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
   * @param GetData $parameters
   * @return GetDataResponse
   */
  public function GetData(GetData $parameters) {
    return $this->__soapCall('GetData', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetDataUsingDataContract $parameters
   * @return GetDataUsingDataContractResponse
   */
  public function GetDataUsingDataContract(GetDataUsingDataContract $parameters) {
    return $this->__soapCall('GetDataUsingDataContract', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param SaveData $parameters
   * @return SaveDataResponse
   */
  public function SaveData(SaveData $parameters) {
    return $this->__soapCall('SaveData', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param SetReminder $parameters
   * @return SetReminderResponse
   */
  public function SetReminder(SetReminder $parameters) {
    return $this->__soapCall('SetReminder', array($parameters),       array(
            'uri' => 'http://tempuri.org/',
            'soapaction' => ''
           )
      );
  }

}

?>
