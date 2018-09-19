<?php
include "config.php";

class Navigation extends ActiveRecord{
    public static $table = "navigation";
    public static $key = "id";
}

//$nav = Navigation::get(2);
$nav = new Navigation();
//$nav = Navigation::get(2);

//print_r($nav);
$nav->name = "VijestiNove222343nikolajj";

$nav->saveTest(2);
//$nav = Navigation::getAll("where id = 2");
//$nav1 = Navigation::get(3);

echo "<br>";
//print_r($nav);
echo "<br>";
//print_r($nav1);

//$nnn = new Navigation();
//$nnn -> test();