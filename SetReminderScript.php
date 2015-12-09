<?php
ignore_user_abort(false);
set_time_limit(0);
error_reporting(E_ALL & ~E_NOTICE);
$var = $_GET["value"];
function get(){
        $TemperatureGetter = new Service1();
        $parameters = new GetLastOvenData();
        $temperature = $TemperatureGetter->GetLastOvenData($parameters);
        return $temperature->GetLastOvenDataResult;
    }
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
require './Service1.php';  

    while (TRUE){  
        if(get() == $var){
            echo 'Done';
            return FALSE;
        }
        session_write_close();
    }
    
}
