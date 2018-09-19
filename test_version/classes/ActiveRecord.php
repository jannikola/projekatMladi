<?php
/*
abstract class ActiveRecord {
    public static function getAll($filter=""){
        $q = mysqli_query(Database::getInstance(),"select * from ".static::$table . " " . $filter);
        $res = array();
        while($rw=mysqli_fetch_object($q,get_called_class())){
            $res[] = $rw;
        }
         return $res;
    }
    public static function get($id){
        $q = mysqli_query(Database::getInstance(),"select * from ".static::$table . " where ".static::$key."= " . $id);
        return mysqli_fetch_object($q,get_called_class());
    }
    
    public function save(){
        
        $q = "update " . static::$table . " set ";
        foreach($this as $k=>$v){
            if($k==static::$key) continue;
            $q.=$k."='".$v."',";
           }
        $q = rtrim($q,",");
        $keyField = static::$key;
        $q.= " where ".static::$key." = " . $this->$keyField;
        //$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
        mysqli_query(Database::getInstance(),$q);
        
        
        $q = "update navigation set name='VijestiNove' where id = 2 ";
        mysqli_query(Database::getInstance(),$q);
        
        echo $q;
    }

 
}
*/

abstract class ActiveRecord{

    public static function get($id){
        $q = mysqli_query(Database::getInstance()->conn,"select * from ".static::$table . " where ".static::$key."= " . $id);
        return mysqli_fetch_object($q,get_called_class());
      
    }

    public function saveTest($value=""){
        
        $q = "update " . static::$table . " set ";
        foreach($this as $k=>$v){
            if($k==static::$key) continue;
            $q.=$k."='".$v."',";
           }
        $q = rtrim($q,",");
        /*
        $keyField = static::$key;
        $q.= " where ".static::$key." = " . $this->$keyField;
        */
        $id = 2;
        $q.= " where ".static::$key." = " . $value;
        //$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
        /*
        $pdo = Database::getInstance()->conn;
        $pdo->query($q);
        */
        $q = mysqli_query(Database::getInstance()->conn,$q);
        
        /*
        $q = "update navigation set name='VijestiNove' where id = 2 ";
        mysqli_query(Database::getInstance(),$q);
        */
        
        //echo $q;
    }
}
