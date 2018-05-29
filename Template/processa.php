<?php

include_once("Folders/conexao.php");
//include_once("./index.php");
$email = "";
$assunto = "";
$mensagem = "";

$facebook = "";
$discord = "";
$youtube = "";

$nome = "";
$sobrenome = "";
$telefone = "";
if(!empty($_POST['email'])){
	$email = $_POST['email'];
}
if(!empty($_POST['assunto'])){
	$assunto = $_POST['assunto'];
}
if(!empty($_POST['mensagem'])){
	$mensagem = $_POST['mensagem'];
}

if(!empty($_POST['facebook'])){
	$facebook = $_POST['facebook'];
}
if(!empty($_POST['discord'])){
	$discord = $_POST['discord'];
}
if(!empty($_POST['youtube'])){
	$youtube =$_POST['youtube'];
}

if(!empty($_POST['nome'])){
	$nome =$_POST['nome'];
}
if(!empty($_POST['sobrenome'])){
	$sobrenome =$_POST['sobrenome'];
}
if(!empty($_POST['telefone'])){
	$telefone =$_POST['telefone'];
}

$sql ="insert into usuario (email,assunto,mensagem,facebook,discord,youtube,nome,sobrenome,telefone) values
('$email','$assunto','$mensagem','$facebook','$discord','$youtube','$nome','$sobrenome','$telefone')";

$salvar = mysqli_query($conexao,$sql);
mysqli_close($conexao);


?>
