<?php
//session_start();
require_once './Service1.php';
error_reporting(E_ALL & ~E_NOTICE);
$ReminderCanceler = new Service1();
$parameters = new CancelReminder();
$response = $ReminderCanceler->CancelReminder($parameters);
$response->CancelReminderResult;
if ($response == 0){
    echo 'Reminder was successfully calcelled';
}
 else {
    echo 'Error';
}
//session_write_close();


