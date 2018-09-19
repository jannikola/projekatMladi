<?php

/*
class Database {
    private static $instance=null;
    private function __construct(){}
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
            return self::$instance;
        }
    }
}
*/
//$pdo = null;
class Database {

    private static $instance;
    public $conn;
    private function __construct(){
           $this->conn = mysqli_connect("localhost","root","","projekatmladi");
    }
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Database;
        }
       
        return self::$instance;
    }
}

$a = Database::getInstance();
$b = Database::getInstance();

/*
public static function getInstance(){
    //echo "uzmi sve";
    global $pdo;
    if(!$pdo){
        $pdo = new PDO ("mysql:host=localhost;dbname=projekatmladi","root","");
    }
    $res = $pdo->query("select * from navigation");
    print_r($res->fetchAll());
}
*/