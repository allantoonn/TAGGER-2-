<?php

include_once("conexao.php");

$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$facebook = $_POST['facebook'];
$discord = $_POST['discord'];
$youtube =$_POST['youtube'];

$nome =$_POST['nome'];
$sobrenome =$_POST['sobrenome'];
$telefone =$_POST['telefone'];

$sql ="insert into usuario (email,assunto,mensagem,facebook,discord,youtube,nome,sobrenome,telefone) values
('$email','$assunto','$mensagem','$facebook','$discord','$youtube','$nome','$sobrenome','$telefone')";

$salvar = mysqli_query($conexao,$sql);
mysqli_close($conexao);


?>
