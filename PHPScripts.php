<?php



    $isReminderSet;

class PHPScripts {
    
    function setReminder() {
      global $isReminderSet ;
      $isReminderSet = TRUE;
      et_time_limit(0);
          error_reporting(E_ALL & ~E_NOTICE);
          $var = $_GET["value"];
            if(!is_numeric($var))
            {
                echo 'wrong format';
                return;
            }
            elseif ($var<0 || $var >400) {
                 echo 'Values outside of range';
                 return;
            }   
            else {               
            require_once './Service1.php';  
            $TemperatureGetter = new Service1();
            $parameters = new GetLastOvenData();

            while ($isReminderSet) {
                $temperature = $TemperatureGetter->GetLastOvenData($parameters);           
                if($temperature->GetLastOvenDataResult == $var){
                echo 'Done';
                return FALSE;

          }
        }
            
    }
  
}
}

