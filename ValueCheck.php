<?php
$var1 = $_GET["hours"];
$var2 = $_GET["minutes"];
$var3 = $_GET["seconds"];
if (!is_numeric($var1) || !is_numeric($var2) || !is_numeric($var3)){
  echo 'wrong format';
}


