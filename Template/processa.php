<?php

include_once("conexao.php");
include_once("./index.php");
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$facebook = $_POST['facebook'];
$discord = $_POST['discord'];
$youtube =$_POST['youtube'];

$nome =$POST['nome'];
$sobrenome =$POST['sobrenome'];
$telefone =$POST['telefone'];

$sql ="insert into usuario (email,assunto,mensagem,facebook,discord,youtube,nome,sobrenome,telefone) values
('$email','$assunto','$mensagem','$facebook','$discord','$youtube','$nome','$sobrenome','$telefone')";

$salvar = mysqli_query($conexao,$sql);
mysqli_close($conexao);


?>
