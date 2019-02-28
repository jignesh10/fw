<?php
/*
*
*SYstem path
*/
define("ROOT_DIR",__DIR__);
include_once 'system/autoload.php';
//$database = DB::getInstance();
print_r($database);
$autoload = new autoload();
autoload::loadModule('user');
echo "Working";
