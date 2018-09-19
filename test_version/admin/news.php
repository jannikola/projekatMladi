<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location: ../index.php");
}
echo "hello ".$_SESSION['username']."<br>";

require "../config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
$selected_id = -1;
$selected_title = "";
$selected_image = "";
$selected_summary = "";
$selected_full_text = "";

if(isset($_GET['nid'])){
    $q = mysqli_query($conn,"select * from news where id={$_GET['nid']}");
    $rw = mysqli_fetch_object($q);
    if($rw){
        $selected_id=$rw->id;
        $selected_title=$rw->title;
        $selected_image=$rw->img1;
        $selected_summary=$rw->summary;
        $selected_full_text=$rw->full_text;
    }
}

if(isset($_POST['btn_insert'])){
    $selected_title = $_POST['tb_title'];

    if(isset($_FILES['fup_image'])){
        move_uploaded_file($_FILES['fup_image']['tmp_name'],"../img/".$_FILES['fup_image']['name']);
        $selected_img = $_FILES['fup_image']['name'];
    }
    $selected_summary = $_POST['tb_summary'];
    $selected_full_text = $_POST['tb_full_text'];

    date_default_timezone_set("Europe/Sarajevo");
    $date = date("Y/m/d");
    $time = date("H:i:s");

    mysqli_query($conn,"insert into news values (null,'{$selected_title}','{$selected_summary}','{$selected_full_text}','{$selected_img}','{$date}','{$time}')");
    $selected_id = mysqli_insert_id($conn);
}

if(isset($_POST['btn_delete'])){
    //$selected_id = $_POST['cid'];
    $selected_title = $_POST['tb_title'];
    mysqli_query($conn,"delete from news where title='{$selected_title}' ");
}

if(isset($_POST['btn_update'])){
	$selected_title = $_POST['tb_title'];
    $selected_summary = $_POST['tb_summary'];
    $selected_full_text = $_POST['tb_full_text'];
    $selected_id = $_POST['selNews'];
    if(isset($_FILES['fup_image'])){
        
        move_uploaded_file($_FILES['fup_image']['tmp_name'],"../img/".$_FILES['fup_image']['name']);
        $selected_image = $_FILES['fup_image']['name'];
        
        if(!isset($_FILES['fup_image'])){
            $selected_image = "null";
        }
    }

    date_default_timezone_set("Europe/Sarajevo");
    $date = date("Y/m/d");
    $time = date("H:i:s");

	mysqli_query($conn,"update news set title='{$selected_title}',summary='{$selected_summary}',full_text='{$selected_full_text}',img1='{$selected_image}',date='{$date}',time='{$time}' where id = {$selected_id}");
}

?>
<br>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link href="admin.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <select onchange="window.location='?nid='+this.value" name="selNews">
        <option value ="-1">Izaberi vijest</option>
        <?php
        
        $q = mysqli_query($conn,"select * from news");
        while ($rw=mysqli_fetch_object($q)){
			
            echo "<option ".($selected_id==$rw->id?"selected":"")." value='{$rw->id}'>{$rw->title}</option>";
        
        }
        
        ?>
    </select>
    <p>Naslov: </p>
    <input type="text" name="tb_title" value="<?php echo $selected_title; ?>">
    <br>
    <p>Kratki tekst:</p>
    <textarea  name="tb_summary" value=""><?php echo $selected_summary; ?></textarea>
    <br>
    <p>Puni tekst:</p>
    <textarea name="tb_full_text" value=""><?php echo $selected_full_text; ?></textarea>
    <br>
    <img src="../img/<?php echo $selected_image; ?>" width ="300" height="100">
    <p>Slika:</p>
    <input type="file" name="fup_image">

    <br><br>
    <input type="submit" name="btn_insert" value="Dodaj">
    <input type="submit" name="btn_update" value="Azuriraj">
    <input type="submit" name="btn_delete" value="Izbrisi">
    
<br><br><br>
</form>
<a href="../indexTest.php">Go home</a>
<br>
<a href="adminpage.php">Go back</a>
<br>
<a href="logout.php">Logout</a>
    </body>