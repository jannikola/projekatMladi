<?php
require "config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Istočno Sarajevo</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="css/styleTest.css" type="text/css" rel="stylesheet">
</head>

<body>

            <div id="navigation">
                <ul>
                    <?php
                            $q = mysqli_query($conn,"select * from navigation");
                            while($rw=mysqli_fetch_object($q)){
                    ?>
                    <li><a href="indexTest.php?mid=<?php echo $rw->id?>"><?php echo $rw->name; ?></a></li>
                    <?php
                            }
                    ?>
                </ul>
                <div id="contact">
                <a id="fb" target="_blank" href="https://www.facebook.com/Omladinski-savjet-Isto%C4%8Dna-Ilid%C5%BEa-126475727404920/?ref=br_rs"><i class="fab fa-facebook"></i></a>
                <a id="mail" href="mailto:jannikola@gmail.com"><i class="far fa-envelope"></i></a>
                </div>

                <form action="?search" method="post" style="margin-top:10px;margin:left:20px;">
                <input class="sbox" type="text" name="searchBox" id="searchBox" style="display:none; border:none; border-radius:10px; padding:5px;" placeholder="Pretraži sajt..." />
                <input class="sbox" type="submit" name="btn_search" value="Traži" style="display:none;border:none;border-radius:10px;background-color:white;color:blue;">
                <span id="search-trigger"><i class="fas fa-search"></i></span>
                <form>
                    <script>
                        /*
                        $("#search-trigger").click(function () {
                            $("#searchBox").animate({
                                "width":"200px",
                                "height":"20px"
                                },2000)
                            });
                            */
                            $("#search-trigger").click(function () {
                                $(".sbox").toggle();
                            });
                    </script>
            </div>
     
    

    <div id="wrapper">
        
      <!-- 
    <div id="header">
          
            <h1>Omladinski savjet Istočna Ilidža</h1>
            
        </div>
                        -->
         

        <div id="main">
                            
      
        
            <div id="vijest" >
               
                    <?php require "view.php";
                    if(isset($_GET['mid'])&&$_GET['mid']=="2"){
                        ?>
                            <script src="pagination.js"></script>
                        <?php
                    }
                    if(isset($_GET['nid'])){
                        ?>
                        <script>
                            function dissapear(){
                                $(".summx").css({"display":"none"});
                                $(".pagination").css({"display":"none"});
                            }
                            dissapear();
                        </script>
                        <?php
                        include "pages/punaVijest.php";
                    }
                     ?>
                     
            </div>

            <?php
                if(isset($_POST['btn_search'])){
                    //include "pages/searchPage.php";
                    include "pages/searchPageTest.php";
                    ?>
                        <script>
                        $("#vijest").hide();
                        </script>
                    <?php
                }
            ?>
            
            
        </div>

        <div id="sidebar">
        <!--   
        <a href="https://www.accuweather.com/en/ba/banja-luka/35546/weather-forecast/35546" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
<!--
</a><div id="awcc1527712675766" class="aw-widget-current"  data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1527712675766"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
                -->   
<div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/timezone/europe--sarajevo"><span style="color:gray;">Current local time in</span><br />Europe/Sarajevo</a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=Europe%2FSarajevo" width="100%" height="90" frameborder="0" seamless></iframe> </div>
        </div>
        <div id="footer">
                
                <i class="fas fa-phone"></i>
        </div>
    </div>
</body>
</html>
