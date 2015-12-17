<?php

error_reporting(E_ALL & ~E_NOTICE);

require_once './Service1.php';
$statusgetter = new Service1();
$parameters = new GetLastRoomData();
$response = $statusgetter->GetLastRoomData($parameters);
$array =  (array) $response-> GetLastRoomDataResult;
$array2 = $array["int"];
//echo $array;
echo $array2[0],",",$array2[1];

