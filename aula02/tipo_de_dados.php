<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_SERVER['HTTP_USER_AGENT'];
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false)
        {
            echo "<h2>Parabéns! Você está utilizando melhor</h2>";
        }
    //String
    $x = "Olá Mundo!";
    $y = "Está é uma string PHP";
    echo "<h2>$x</h2><br>";
    echo "<h1>$y</h1>";
    //Inteiro - Números entre: - 2.147.483.648 e 2.147.483.648
    $a = 687995;
    echo "<br>$a<br>";
    $b = 987621;
    echo "<br>$b<br><br>";
    echo "A soma entre $a e $b é: ";
    $c = $a + $b;
    var_dump($c); //A função var_dump mostra o tipo de dado e o valor
    //Float
    $x = 23869.342;
    $y = 6.02E-18;
    echo "<br><h1>";
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "</h1>";
    //Boleano
    $x = true;
    $y = false;
    //Array - Matriz
    $alunos = array("Eduardo", "Paula", "Filype", "Danilo", "Lucas", "Thiago");
    echo "<br><br>";
    var_dump($alunos);
    ?>
</body>
</html>