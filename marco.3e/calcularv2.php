<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>
    <?php

   $n1 = $_POST["n1"];
   $n2 = $_POST["n2"];
   $resultado = $n1 + $n2;

   echo "A soma é: ",$resultado;
   header("Location: aula09v2.php?res=$resultado&n1=$n1&n2=$n2");
    ?>
</body>
</html>
