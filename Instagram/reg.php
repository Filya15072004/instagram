<?php $connect = mysqli_connect('127.0.0.1','root','','dany_ch_15'); 
$query = mysqli_query($connect,"INSERT INTO tab (name, email, pass,) VALUES ('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['pass'] . "')");

mail( $_POST['email'],'Welcome','login:'. $_POST['email'] .'parol:' . $_POST['pass']);

header('Location: http://filya/instagram/voiti.php');  
?> 
