<?php 
// require "config.php";
if(isset($_POST['btnSubmit'])){
if(!isset($_POST['tbUsername'])||!isset($_POST['tbPassword'])){
    echo "invalid parameters";
}else{
    $username = $_POST['tbUsername'];
    $password = $_POST['tbPassword'];
    $username = str_replace("'","",$username);
    $username = str_replace("-","",$username);
    $password = str_replace("'","",$password);
    $password = str_replace("-","",$password);

}
}




if(isset($username)&&isset($password)&&isset($_POST['btnSubmit'])){
    $conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
    $q = "select * from users where username ='{$username}' and password='{$password}' limit 1";
    $res = mysqli_query($conn,$q);
    $user = mysqli_fetch_object($res);
        if($user){

            session_start();
            $_SESSION['username'] = $user->username;
                if($_SESSION['username']==="jannikola"||$_SESSION['username']==="ogikeza"){
                    header("location: adminpage.php");
                }else{
                    ?>
                    <script src="myscript.js"></script>
                    <?php
                    echo "welcome ".$_SESSION['username'];
                }
            }   else {
            echo "invalid user";
        }
} 
    

?>