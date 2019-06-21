<?php
//  OpenEMR
//  MySQL Config
//  Referenced from /library/sqlconf.php.

global $disable_utf8_flag;
$disable_utf8_flag = false;

$host	= 'openemrserver.mysql.database.azure.com';
$port	= '3306';
$login	= 'openemr@openemrserver';
$pass	= 'Password1@345';
$dbase	= 'openemr';

$sqlconf = array();
global $sqlconf;
$sqlconf["host"]= $host;
$sqlconf["port"] = $port;
$sqlconf["login"] = $login;
$sqlconf["pass"] = $pass;
$sqlconf["dbase"] = $dbase;

//////////////////////////
//////////////////////////
//////////////////////////
//////DO NOT TOUCH THIS///
$config = 0; /////////////
//////////////////////////
//////////////////////////
//////////////////////////
?>
