<?php

$connectdb = "my_app_db";
$hostdb = "172.16.238.13";
$userdb = "my_app";
$passdb = "root";

mysql_connect($hostdb, $userdb, $passdb) or
die("Could not connect: " . mysql_error());
mysql_select_db("$connectdb");

phpinfo();