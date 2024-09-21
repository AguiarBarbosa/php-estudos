<?php

//Configurações de credenciais
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'aula_formulario';


//Conexão com o banco de dados
$conn = new mysqli('localhost','root','','aula_formulario');

//Verificar Conexão
if($conn->connect_error){
    die("Falha ao se comunicar com banco de dados: ".$conn->connect_error);
}