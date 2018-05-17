<?php

$login =$_POST['email'];
$login =$_POST['assunto'];
$login =$_POST['mensagem'];

$login =$_POST['facebook'];
$login =$_POST['Discord'];
$login =$_POST['googleplus'];

$login =$_POST['nome'];
$login =$_POST['sobrenome']
$login =$_POST['telefone']
/*
$login =$_POST['login'];
$senha =MD5($_POST['senha']);
*/

$connect = mysql_connect('client','root','');
$db = mysql_select_db('tagger');
$query_select = "SELECT email FROM usuario WHERE email = '$email'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$emailray = $array['email'];
 
  if($email == "" || $assunto == "" || $mensagem ==""){
    echo"<script language='javascript' type='text/javascript'>alert('O campo email, assunto e mensagem deve ser preenchidos, já os demais são opcionais');window.location.href='index.html';</script>";
 
    }else{
      if($emailray == $email){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='index.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuario (email,assunto,mensagem,facebook,discord,googleplus,nome,sobrenome,telefone) VALUES ('$email','$assunto','$mensagem','$facebook','$discord','$googleplus','$nome','$sobrenome','$telefone')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert(' enviados os dados com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar ');window.location.href='cadastro.html'</script>";
        }
      }
    }
?>