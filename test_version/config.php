<?php
define("DB","projekatMladi");
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASS","");
define("APP_DIR","c:/wamp64/www/projekat_mladi/test_version");

function __autoload($class){
    require_once APP_DIR . "/classes/".$class.".php";
}