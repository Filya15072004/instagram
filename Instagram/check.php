<?php $connect = mysqli_connect('127.0.0.1','root','','dany_ch_15'); 
$query = mysqli_query($connect,"SELECT * FROM tab WHERE email = '" . $_POST['email'] ."' AND pass = '". $_POST['pass'] . " '"); 
$res = $query->fetch_assoc();
if ($query->num_rows == 0) {
	
	header('Location: http://filya/instagram/voiti.php?er=нет такого пользователя');
}
else{
	header('Location: http://filya/instagram/main.php?id=' . $res['id']);
}

