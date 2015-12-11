<?php
ignore_user_abort(FALSE);
set_time_limit(0);
error_reporting(E_ALL & ~E_NOTICE);

   require_once './Service1.php';
$ReminderStopper = new Service1;
$parameters = new StopReminder();
$response =  $ReminderStopper->StopReminder($parameters);

if($response == 1){
    echo 'Done';

}
elseif ($response == 0) {
    echo 'Error';
}
