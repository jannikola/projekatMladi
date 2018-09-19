<?php
session_start();
session_destroy();
header("location: indexTest.php");

echo "hello from logout page";