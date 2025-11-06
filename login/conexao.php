<?php

$host = ' localhost';
$usuario = 'root';
$senha = '';
$database = 'login';

$mysqli = new mysqli($host, $usuario, $senha);
 if($conn->connect_error){
    die ("Não deu certo fazer a conexão");
 }





?>