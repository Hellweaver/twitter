<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10');
$query = mysqli_query($connect, "INSERT INTO tweet (logo, title, text, img) VALUES ('post1.jpg', 'Habr @habr_com три часа назад', '" . $_POST['damir'] . "', 'roscosmos.jpg')");
header('Location: http://damirzabolotskiy/twitter/index.php');
 ?>