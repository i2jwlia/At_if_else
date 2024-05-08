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
            echo "<p>A temperatura de " . $temperatura . "°C é considerada: <strong>$mensagem</strong></p>";
        }
        ?>