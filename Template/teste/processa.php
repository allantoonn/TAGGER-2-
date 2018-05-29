<?php

include_once("conexao.php");


$nome = $_POST['nome'];


$sql ="insert into pessoa (nome) values
('$nome')";

$salvar = mysqli_query($conexao,$sql);
mysqli_close($conexao);


?>
