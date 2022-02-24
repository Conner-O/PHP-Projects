<?php

#$serverName = "vwh-host-db01d.its.iastate.edu";
#$dBUserName = "centralstores_loginsystem";
#$dBPassword = "XWX7S64ZzK5tdHD";
#$dBName = "centralstores_loginsystem";

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "loginsystem";

$conn = mysqli_connect($serverName,$dBUserName,$dBPassword,$dBName);

if (!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}