<?php

$timestamp=$_SERVER["REQUEST_TIME"];

date_default_timezone_set("Asia/Amman");

echo date("Y-m-d H:i:s",$timestamp);