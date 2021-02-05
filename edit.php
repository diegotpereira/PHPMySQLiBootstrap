<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$endereco=$_POST['endereco'];
	
	mysqli_query($conn,"UPDATE usuario SET nome='$nome', sobrenome='$sobrenome', endereco='$endereco' where usuarioid='$id'");
	header('location:index.php');

?>