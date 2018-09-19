<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: ../index.php");
}
echo "hello ".$_SESSION['username'];

?>
<br>
<a href="../index.php">Go back</a>
<br>
<a href="menuEdit.php">Edit Navigation menu</a>
<br>
<a href="news.php">Edit News</a>
<br>
<a href="logout.php">Logout</a>