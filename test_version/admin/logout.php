<?php
session_start();
session_destroy();
header("location: loginForm.php");

echo "hello from logout page";