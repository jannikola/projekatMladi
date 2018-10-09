<?php
define("DB","projekatMladi");
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASS","");

class Singleton {
    public static $conn;
    private function __construct(){}

    public static function getInstance(){
        if(!self::$conn){
            self::$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
            return self::$conn;
        }
    }
}
$conn = Singleton::getInstance();
