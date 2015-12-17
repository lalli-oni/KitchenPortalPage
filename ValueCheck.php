<?php
error_reporting(E_ALL & ~E_NOTICE);
$var1 = $_GET["hours"];
$var2 = $_GET["minutes"];
$var3 = $_GET["seconds"];


if (is_numeric($var1) and is_numeric($var2) and is_numeric($var3)){
  echo 'Good';
  return;
}
else{
    echo 'Wrong format';
    return;
}


