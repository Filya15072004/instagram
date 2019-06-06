 <!DOCTYPE html>
<html> 
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body> 

<form action ="check.php" method="POST">
	<h5>Email</h5>
<input type="" name="email">
	<h5>Password</h5>	 
<input type="" name = "pass"> 
    <button>OK</button>

</form>
<?php echo $_GET['er'] ?>
</body>
</html>