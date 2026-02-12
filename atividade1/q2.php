<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get">
        <input type="number" name="num1" placeholder="Número 1">
        <input type="number" name="num2" placeholder="Número 2">
        <input type="submit" value="Somar">
        <
    </form>
    <?php
        if(isset($_GET['num1']) && isset($_GET['num2'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $soma = $num1 + $num2;
            echo "A soma de $num1 e $num2 é: $soma";

        }
    ?>
    <form action="get">
        <input type="number" name="num1" placeholder="Número 1">
        <input type="number" name="num2" placeholder="Número 2">
        <input type="submit" value="Subtrair">
    </form>
    <?php
        if(isset($_GET['num1']) && isset($_GET['num2'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $subtracao = $num1 - $num2;
            echo "A subtração de $num1 e $num2 é: $subtracao";

        }
    ?>
    <form action="get">
        <input type="number" name="num1" placeholder="Número 1">
        <input type="number" name="num2" placeholder="Número 2">
        <input type="submit" value="Multiplicar">
    </form>
    <?php
        if(isset($_GET['num1']) && isset($_GET['num2'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];  
            $multiplicacao = $num1 * $num2;
            echo "A multiplicação de $num1 e $num2 é: $multiplicacao";

        }
    ?>
    <form action="get">
        <input type="number" name="num1" placeholder="Número 1">
        <input type="number" name="num2" placeholder="Número 2">
        <input type="submit" value="Dividir">
    </form>
    <?php
        if(isset($_GET['num1']) && isset($_GET['num2'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            if($num2 != 0){
                $divisao = $num1 / $num2;
                echo "A divisão de $num1 e $num2 é: $divisao";
            } else 

                echo "Não é possível dividir por zero.";
        }
    ?>
</body>
</html>