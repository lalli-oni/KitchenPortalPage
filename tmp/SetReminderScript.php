<?php
ignore_user_abort(FALSE);
set_time_limit(0);
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
$ReminderSetter = new Service1;
$parameters = new StartReminder($var);
$response =  $ReminderSetter->StartReminder($parameters);
$response2 = $response->StartReminderResult;

if($response2 == 1){
    echo "Done";
    return;

}
elseif ($response2 == 0) {
    echo 'No data available';
    return;
}
}
