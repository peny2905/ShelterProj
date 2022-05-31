<?php
 require_once "../conn.php";
 if(isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
	$query = "DELETE FROM animals WHERE Admin ='$id' ";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
}

header("location:browse.php");
?>
