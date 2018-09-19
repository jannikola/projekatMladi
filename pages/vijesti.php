<?php

$q = mysqli_query($conn,"select * from news order by id desc");


?>

<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<title></title>
</head>

<body>     

 

    <div id="page">
        <?php
        while($rw=mysqli_fetch_object($q)){
        ?>
            <div class="summx" id="<?php echo $rw->id; ?>" style="text-align:center;" >
                <a href="index.php?mid=2&nid=<?php echo $rw->id; ?>">
                
                    <div class="summ" >
                        
                        <h2 class="title" data-keywords="<?php echo $rw->title; ?>"><?php echo $rw->title; ?></h2>
                            <img src="<?php echo "img/".$rw->img1; ?>" alt="logo" style="display:block;height:100px;width:200px;;margin:auto;">
                            <p>
                                <?php echo $rw->summary; ?>
                            </p>
                          
                            <p><em><?php echo "Objavljeno: ".$rw->date." u: ".$rw->time; ?></em></p>
                    </div>
                </a>  
            </div>
        <?php
        }
        ?>
    </div>

      
    
    <div id="pagg" >
        <nav aria-label=...>
        <ul class=pagination>
            <li id="previous-page"><a href="javascript:void(0)" aria-label=Previous><span aria-hidden=true>&laquo;</span></a></li>
        </ul>
        </nav>
    </div>
  

</body>

</html>
