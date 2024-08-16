<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

    $nome = $_POST["nome"];
    echo "Nome Completo: ", $nome,"<br>";

    $data = $_POST["data"];
    echo "Data de Nascimento: ", $data,"<br>";

    $sexo = $_POST["sexo"];
    echo "Sexo: ", $sexo,"<br>";

    $es = $_POST["es"];
    echo "Estado Civil: ", $es,"<br>";

    $naci = $_POST["naci"];
    echo "Nacionalidade: ", $naci,"<br>";

    $rg = $_POST["rg"];
    echo "RG: ", $rg,"<br>";

    $cpf = $_POST["cpf"];
    echo "CPF: ", $cpf,"<br>";

    $adress = $_POST["adress"];
    echo "Endereço Completo:", $adress,"<br>";




    
    

    ?>
</body>
</html>
