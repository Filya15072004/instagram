 <!DOCTYPE html>
<html>
<head>
	<title>ГЛАВНАЯ</title> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<meta charset="utf-8">
</head>
<body>
<?php $connect = mysqli_connect('127.0.0.1','root','','dany_ch_15'); ?>
<?php $query = mysqli_query($connect,"SELECT * FROM tabkar INNER JOIN tab ON tab.id=tabkar.idludei ORDER BY tabkar.id DESC"); ?>

<?php $query1 = mysqli_query($connect,"SELECT * FROM tab WHERE id = '". $_GET['id'] ."'");
$res1 = $query1->fetch_assoc()?>

<form action="sozdat.php" method="POST" enctype="multipart/form-data">
	<?php echo '<input type="hidden" name="idludei" value="' . $res1['id'] . '">' ?>
	<input placeholder="text" type="" name="header">
	<input type="file" name="img">
	<button>ДОБАВИТЬ</button>
</form>
<?php  echo'<img src="' . $res1['ava'] . '">'?>
<h4><?php echo $res1['name']; ?></h4>
<h4><?php echo $res1['email']; ?></h4>

<?php for ($i=0; $i < $query->num_rows; $i++) { 
	$res = $query->fetch_assoc();?> 
	<?php echo '<img src="'. $res['ava'] . '">';?>
	<h5><?php echo $res['name'] ?></h5>
	<?php echo '<img src="' . $res['img'] . '">'; ?>
	<p><?php echo $res['header']; ?></p>
<?php } ?>


</body>
</html>