<?php
	require_once "../conn.php";
$query = "SELECT * FROM animals";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title> Guests</title>
<style>
	h1{
		text-align:center;	
	}
	.pic{
		border-radius:50%;	
		box-shadow:#333 2px 2px 5px;
	}
	.even{
		background-color:#DDD;
	}
	
	.odd{
		background-color:#AAA;
	}
	
	thead td{
		background-color:coral;
		color:white;
		font-family:Tahoma;
		font-size:20px;
	}
	body{
		background-color: snow;
	}

</style>
</head>

<body>
<h1> Our Guests </h1>
<table border="0" cellpadding="10" align="center" class="table table-hover">
<thead>
	<tr>
    	<td> Name   </td>
        <td> Age    </td>
        <td> Gender </td>
        <td> Breed  </td>
        <td> Colors </td>
        <td> Health </td>
        <td> Photo  </td>
		<td> Edit  </td>
        <td> Delete </td>
		<td> Add </td>
    </tr>
</thead>

<tbody>
<?php
	$bg = '';
	while($row = mysqli_fetch_assoc($result)){
		
		$id     = $row['Admin'];
		$name   = $row['Name'];
		$age    = $row['Age'];
		$gender = $row['Gender'];
		$breed  = $row['Breed'];
		$colors = $row['Colors'];
		$health =$row['Health'];
		$photo  = $row['Photo'];
		$pic_tag="";
		if($photo){
			$pic_tag = "<img src='$photo' class='images'>";
		}
?>		

        <tr class="<?= $bg ?>">
            <td> <?php print $name ?></td>
            <td> <?= $age?></td>
            <td> <?=$gender?></td>
			<td> <?=$breed?></td>
            <td> <?=$colors?></td>
			<td> <?=$health?></td>
			<td>
	         <img src="./animals/<?= $photo ?>" width="20%">
			</td>
            <td align="center"> 
            	<a href="edit_member.php"><img src="images/edit.png"></a>     
            </td>
            <td align="center"> 
			<a href="delete_member.php?id=<?= $id ?>"  onClick="return confirm('Deleted Succesfully!')"> <img src="images/delete.png" width="32"> </a>  
            </td>
			<td align="center"> 
            	<a href="add_member.php"><img src="images/add.png" width="30px"height="30px"></a> 
				
            </td>
        </tr>
		
	<?php			
	}
    ?>
 </tbody>
</table>

</body>
</html>