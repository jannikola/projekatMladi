
<?php
require "config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
?>

<form action="" method="post" style="margin-top:10px;margin:left:20px;">
                <input class="sbox" type="text" name="searchBox" id="searchBox"  placeholder="Pretraži sajt..." />
                <input class="sbox" type="submit" name="btn_search" value="Traži" >
                
<form>

<?php

if(isset($_POST['btn_search'])){

    $title = $_POST['searchBox'];
    $q = mysqli_query($conn,"SELECT * FROM news WHERE title LIKE '%" . $title ."%'");
    $res = mysqli_fetch_object($q);
    if(empty($res)){
        $q = mysqli_query($conn,"SELECT * FROM test WHERE title LIKE '%" . $title ."%'");
        while($res = mysqli_fetch_object($q)){
            ?>
            <a href="?test=<?php echo $res->id ?>" ><?php echo $res->title; ?></a> 
            <?php
        }
        
    }else{
        while($res = mysqli_fetch_object($q)){
            ?>
            <a href="?vijest=<?php echo $res->id ?>" ><?php echo $res->title; ?></a> 
            <?php
        }
    }
    
}



