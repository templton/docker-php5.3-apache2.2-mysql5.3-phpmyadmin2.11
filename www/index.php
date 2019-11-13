<?php

$connectdb = "yii_db";
$hostdb = "mysql";
$userdb = "user";
$passdb = "root";

mysql_connect($hostdb, $userdb, $passdb) or die("Could not connect: " . mysql_error());
mysql_select_db("$connectdb");

phpinfo();
