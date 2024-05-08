<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <title>Resultado</title>
</head>
<body>
    
<center>
<div>
<?php

$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

$me = ($n1 + $n2 + $n3) / 3;

if ($me < 7){
    echo "<br>$nome...<br>Você está reprovado...";
}
else if ($me >= 7){
    echo "<br>$nome...<br>Você está aprovado!";
}

?>
</div>
</center>

</body>
</html>