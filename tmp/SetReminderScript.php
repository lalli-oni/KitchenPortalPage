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

if($response == 1){
    echo 'Done';

}
elseif ($response == 0) {
    echo 'Error';
}
}
