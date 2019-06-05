<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'damir_pn_10');
$redactor = mysqli_query( $connect , "UPDATE tweet SET text = '" . $_POST['text'] . "' WHERE id = " . $_POST['id']);
header('Location: http://damirzabolotskiy/twitter/index.php');
?>