<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Calculadora Simples.css">
    <title>Calculadora simples PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Readex+Pro:wght@200&display=swap"
        rel="stylesheet"> <!-- Font h1-->

</head>

<body>
    <div>

        <div>
            <h2> Resultado: </h2>
        </div>
        <?php
            $v1 = 0; 
            $v2 = 0;
            $vl1 = isset($_GET["v1"])?$_GET["v1"]:0;
            $vl2 = isset($_GET["v2"])?$_GET["v2"]:1;
            $op = $_GET["operação"];
            if ($op == 'Somar'){
                $tot = $vl1 + $vl2;
            }
            elseif ($op == 'Subtrair'){
                $tot = $vl1 - $vl2;
            }
            elseif ($op == 'Multiplicar'){
                $tot = $vl1 * $vl2;
            }
            elseif ($op == 'Dividir'){
                $tot = $vl1 / $vl2;
            }
            else{
                echo"<br/>ERROR";
            }
            echo "<br/> ".number_format($tot,2);

        ?>
        <br /><a href="Calculadora simples.html">Voltar</a>
    </div>
</body>

</html>