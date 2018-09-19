<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: ../index.php");
}
echo "hello ".$_SESSION['username'];

require "../config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
$selected_id = -1;
$selected_name = "";
$selected_description = "";

if(isset($_GET['mid'])){
	$q = mysqli_query($conn,"select * from navigation where id = {$_GET['mid']}");
	$rw = mysqli_fetch_object($q);
	if($rw){
		$selected_id = $rw->id;
		$selected_name = $rw->name;
	}
} 


if(isset($_POST['btn_insert'])){
	$selected_name = $_POST['tb_name'];
	mysqli_query($conn,"insert into navigation values (null,'{$selected_name}')");
	$selected_id = mysqli_insert_id($conn);
}

if(isset($_POST['btn_update'])){
	$selected_name = $_POST['tb_name'];
	$selected_id = $_POST['selMenu'];
	mysqli_query($conn,"update navigation set name='{$selected_name}' where id = {$selected_id}");
}
if(isset($_POST['btn_delete'])){
    $selected_id = $_GET['mid'];
    mysqli_query($conn,"delete from navigation where id ={$selected_id}");
}

?>
<form method="post" action="">
<?php
$q = mysqli_query($conn,"select * from navigation");
?>
<select onchange="window.location='?mid='+this.value" name="selMenu">
<option value="-1">Select to edit</option>
<?php
while($rw=mysqli_fetch_object($q)){ 
	echo "<option " . ($selected_id==$rw->id?"selected":"") . " value='{$rw->id}'>{$rw->name}</option>";		
}
?>
</select>
<br />
Name:<br />
<input type="text" name="tb_name" value="<?php echo $selected_name; ?>" />
<br /> <br /> 
<input type="submit" name="btn_update" value="Update" />
<input type="submit" name="btn_delete" value="Delete" />
<input type="submit" name="btn_insert" value="Add new" />
</form>

<br><br><br>

<a href="../index.php">Go home</a>
<br>
<a href="adminpage.php">Go back</a>
<a href="logout.php">Logout</a>
