<?php

$conn = mysqli_connect("localhost", "root", "root", "db_php_mysqli_bootstrap");
if (!$conn) {
    # code...
    die("Falha na Conexão" . mysqli_connect_error());
}else {
    # code...
   #  echo("Conexão Realizada com sucesso");
}
?>