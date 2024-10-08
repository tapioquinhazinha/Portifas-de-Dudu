<?php
include "config.php";

if(!$conn){
    die("Falha na Conexão {mysqli_connect_error()}");

    $nome = "";

    $dtnasc = "";

    $celular = "";

    $email = "";

    $ra = "";

    $endereco = "";

    $num_end = "";

    $bairro = "";

    $cidade = "";

    $sql = "";


  $sql ="INSERT INTO `leitores`
    (`Nome`, `DtNasc`, `Celular`, `Email`, `RA`, `Endereco`, `NumEnd`, `Bairro`, `CidadeUF`) VALUES 
    ('$nome','$dtnasc','$celular','$email','$ra','$endereco','$num_end','$bairro','$cidade')";
    

$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error(mysql: $db));
}
