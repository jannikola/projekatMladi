
<div id="page">
<?php
$title = $_POST['searchBox'];
$q = mysqli_query($conn,"select * from news where title='{$title}'");
while($rw=mysqli_fetch_object($q)){
?>
    <div class="summx" id="<?php echo $rw->id; ?>">
        <a href="index.php?mid=2&nid=<?php echo $rw->id; ?>">
        
            <div class="summ" >
                
                <h2 class="title" data-keywords="<?php echo $rw->title; ?>"><?php echo $rw->title; ?></h2>
                   
                  
                    <p><em><?php echo "Objavljeno: ".$rw->date." u: ".$rw->time; ?></em></p>
            </div>
        </a>  
    </div>
<?php
}
?>
</div>