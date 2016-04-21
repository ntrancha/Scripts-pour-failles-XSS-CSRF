<?php
$arr = get_defined_vars();
$ip=$_SERVER["REMOTE_ADDR"];
$log = "";
foreach ($arr["_SERVER"] as $key => $value) {$log .= "SERVER:$key=$value\n";}
foreach ($arr["_POST"]   as $key => $value) {$log .=   "POST:$key=$value\n";}
foreach ($arr["_GET"]    as $key => $value) {$log .=    "GET:$key=$value\n";}
foreach ($arr["_COOKIE"] as $key => $value) {$log .= "COOKIE:$key=$value\n";}
$monfichier = fopen('log.txt', 'w+');
fputs($monfichier, $log);
fclose($monfichier);
?>
