<?php

$id = $_GET['nid'];
$q = mysqli_query($conn,"select * from news where id=$id");
while($rw=mysqli_fetch_object($q)){



?>

  <div id="full" style="text-align:center;" >
        
        <h2><?php echo $rw->title; ?></h2>
            <img src="<?php echo "img/".$rw->img1; ?>" alt="logo" style="display:block;height:200px;width:300px;margin:auto;" >
            <p style="text-align:left;">
               <?php echo $rw->full_text; ?>
            </p>

            <p><em><?php echo "Objavljeno: ".$rw->date." u: ".$rw->time; ?></em></p>
            
    </div>

    

<?php
}
?>