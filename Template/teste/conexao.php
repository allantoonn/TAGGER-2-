<?php
$hostname ="localhost";
$user ="root";
$password ="";
$database ="teste";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if (!$conexao){
    echo "falha conexao bd";
}


?>