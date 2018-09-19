<?php
require "../config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
?>
<link rel="stylesheet" href="../style.css">
<div id="logovanje">
    <form id="formLog" action = "" method = "post"  >
    Korisnicko ime: <br /> <input type="text" name="tbUsername" placeholder = "Korisnicko ime" /><br />
    Lozinka: <br /> <input type="password" name="tbPassword" placeholder = "Lozinka" /><br />
    <input id="login" type="submit" name="btnSubmit" value="Login" />
</form>
<p>
   <?php include "login.php"; ?>
</p>
<p id="logout">
<a href="logout.php">Logout</a>
</p>
</div>