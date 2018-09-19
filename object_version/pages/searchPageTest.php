
<div id="page">
    <?php
    $title = $_POST['searchBox'];
    $q = mysqli_query($conn,"SELECT * FROM news WHERE title LIKE '%" . $title ."%' order by id desc");
    $condition = mysqli_fetch_object($q);
    if(empty($condition)){
        $q = mysqli_query($conn,"SELECT * FROM test WHERE title LIKE '%" . $title ."%' order by id desc");
        $condition1 = mysqli_fetch_object($q);
        if(!empty($condition1)){
            while($res = mysqli_fetch_object($q)){
                ?>
                <a href="?test=<?php echo $res->id ?>" ><?php echo $res->title. "<br>"; ?></a> 
                <?php
            }
        }else{
            
            echo "nothing found";
        }
        
    }else{
        while($res = mysqli_fetch_object($q)){
            ?>
            <a href="?mid=2&nid=<?php echo $res->id ?>" ><?php echo $res->title."<br>"; ?></a> 
            <?php
        }
    }
    ?>
</div>