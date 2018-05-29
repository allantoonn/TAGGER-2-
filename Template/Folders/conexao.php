<?php
$hostname ="localhost";
$user ="root";
$password ="";
$database ="tagger";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if (!$conexao){
    echo "falha conexao bd";
}


?>