<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color:  #78c9ff;
            color: #333;
        }
        .back {
            background: rgb(229, 247, 255);;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 285px;
            height: 100px;
            margin-top: 18%;
        }
        input[type="number"], button {
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
<body>
<center> 
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperatura = $_POST["temperatura"];
            $mensagem = "";
            if ($temperatura < 0) {
                $mensagem = "Congelante";
            } elseif ($temperatura >= 0 && $temperatura < 15) {
                $mensagem = "Muito frio";
            } elseif ($temperatura >= 15 && $temperatura < 25) {
                $mensagem = "Razoável";
            } elseif ($temperatura >= 25) {
                $mensagem = "Calor";
            }
            echo "<p class='back'>A temperatura de " . $temperatura . "°C é considerada:<br><br> <strong>$mensagem</strong></p>";
        }
        ?>
</center>
</body>
</html>

