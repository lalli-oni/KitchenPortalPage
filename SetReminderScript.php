<?php
require './Service1.php';

ignore_user_abort(false);
set_time_limit(0);
error_reporting(E_ALL & ~E_NOTICE);
$var = $_GET["value"];
$isReminderActive = false;

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
  $isReminderActive = true;
    while ($isReminderActive){
              $TemperatureGetter = new Service1();
              $parameters = new GetLastOvenData();
              $temperature = $TemperatureGetter->GetLastOvenData($parameters);
              $response = $temperature->GetLastOvenDataResult;
              if($response >= $var){
                echo $response . "";
                  $isReminderActive = false;
                  echo 'Done';
              }
              session_write_close;
              sleep(2);
            }
}
