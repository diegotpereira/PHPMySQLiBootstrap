<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"DELETE FROM usuario WHERE usuarioid='$id'");
	header('location:index.php');

?>