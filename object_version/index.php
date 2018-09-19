<?php
require "config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Omladinski savjet Istocna Ilidza</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="okvir">
        <div id="zaglavlje">
        
            Omladinski savjet Istočna Ilidža
        </div>
        <div id="meni">
            <table id="tabelaMeni">
                <th>Meni</th>
                <?php
                    $q = mysqli_query($conn,"select * from navigation");
                    while($rw=mysqli_fetch_object($q)){
                ?>
                <tr>
                    <td><a href = "index.php?mid=<?php echo $rw->id?>"><?php echo $rw->name; ?></a></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
        <div id="radnaPovrsina">
            <div id="vijest" >
                <div id="sazetak" style ="border:1px solid black">
                 <?php include "view.php"; ?> 
                 <div id="readMore" style="border:1px solid #b3ffb3;float: right; width:50;"><p><i class="fas fa-ellipsis-h"></i></p></div>
                </div>
                 <div id ="opis" style="border:1px solid red;display:none">
                     <p>neki opis</p>
                     <div id="exit" style="border:1px solid #b3ffb3;float: right; width:50;"><i class="fas fa-times-circle"></i></div>
                 </div>
            </div>
        </div>
        
        <div id="footer" style="border:1px solid #b3ffb3;clear:both;">
            <a href="https://www.facebook.com/Omladinski-savjet-Isto%C4%8Dna-Ilid%C5%BEa-126475727404920/?ref=br_rs"><i class="fab fa-facebook"></i></a>
            <a href="mailto:jannikola@gmail.com"><i class="far fa-envelope"></i></a>
        <i class="fas fa-phone"></i>
        </div>
    </div>
 

    <script src="myscript2.js"></script>
</body>
</html>