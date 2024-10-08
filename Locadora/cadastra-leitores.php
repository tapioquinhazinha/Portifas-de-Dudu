<?php
include "config.php";

if(!$conn){
    die("Falha na Conexão {mysqli_connect_error()}");
}

$nome = "Teste Nome";

$dtnasc = "1900-12-01";

$celular = "(81) 999998888";

$email = "jsdjnwa@gmail.com";

$ra = "09091289";

$endereco = "Rua Teste";

$num_end = "99";

$bairro = "Revorve";

$cidade = "Paulista/PE";


$sql ="INSERT INTO `leitores`
(`Nome`, `DtNasc`, `Celular`, `Email`, `RA`, `Endereco`, `NumEnd`, `Bairro`, `CidadeUF`) VALUES 
('$nome','$dtnasc','$celular','$email','$ra','$endereco','$num_end','$bairro','$cidade')";

$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error(mysql: $db));

if($query){
    echo "<center>";
    echo "Cadastro Realizado Com Sucesso!!<br>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}else{
    echo "<center>";
    echo "Erro ao Cadastrar!!<br>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}
/?>
