<?php
    include( 'conn.php' );
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $endereco = $_POST['endereco'];

    mysqli_query($conn, "INSERT INTO usuario (nome, sobrenome, endereco) VALUES ('$nome', '$sobrenome', '$endereco')");
    header('location:index.php');

?>