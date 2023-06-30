<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Operadores Aritméticos</h2>
    <ul>
        <li>+ soma<br>
            <?php
                $a = 5;
                $b = 4;
                $c = $a + $b;
                echo "$a + $b = $c<br>";
            ?>
        </li>
        <li>* multiplicação<br>
            <?php
                $a = 11;
                $b = 12;
                $c = $a * $b;
                echo "$a * $b = $c<br>";
            ?>
        <li>/ divisão<br>
            <?php
                $a = 5;
                $b = 4;
                $c = $a / $b;
                echo "$a / $b = $c<br>";
            ?>
        </li>
        <li>% Módulo de divisão<br>
            <?php
                $a = 5;
                $b = 4;
                $c = $a % $b;
                echo "$a % $b = $c<br>";
            ?>
        </li>
    </ul>
    <h2>Operadores Atribuição</h2>
    <ul>
        <li>= atribuição simples (recebe)<br>
            <?php
                $a = "PHP: ";
                $b = "Hypertext Preprocessor";
                echo "$a$b<br>";
            ?>
        </li>
        <li>+=atribuição com soma<br>
            <?php
                $n = 10;
                $n += 5;
                echo "$n<br>"; //$n = $n + 5;
            ?>
        </li>
        <li>-=atribuição com subtração<br>
            <?php
                $n = 10;
                $n -= 5;
                echo "$n<br>"; //$n = $n - 5;
            ?>
        </li>
        <li>*=atribuição com multiplicação<br>
            <?php
                $n = 100;
                $n *= 99;
                echo "$n<br>"; //$n = $n * 99;
            ?>
        </li>
        <li>/=atribuição com divisão<br>
            <?php
                $n = 144;
                $n /= 12;  
                echo "$n<br>"; //$n = $n / 99;
            ?>
        </li>
    </ul>
</body>
</html>