<?php $connect = mysqli_connect('127.0.0.1','root','','dany_ch_15');

$query = mysqli_query($connect,"INSERT INTO tabkar (idludei,header,img) VALUES ('". $_POST['idludei'] . "','". $_POST['header'] . "','images/" . $_FILES['img']['name'] ."')");

move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']); 

header('Location:http://filya/instagram/main.php?id=' . $_POST['idludei']);   
?>