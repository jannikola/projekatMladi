<?php
require "config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Istočno Sarajevo</title>
<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
        <div id="header">
            Omladinski savjet Istočna Ilidža
        </div>
        <div id="navigation">
            <ul>
                <?php
                        $q = mysqli_query($conn,"select * from navigation");
                        while($rw=mysqli_fetch_object($q)){
                ?>
                <li><a href="index.php?mid=<?php echo $rw->id?>"><?php echo $rw->name; ?></a></li>
            </ul>
        </div>
        <div id="main"></div>
        <div id="sidebar"></div>
        <div id="footer"></div>
    </div>

</body>
</html>
