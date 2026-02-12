<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="num1" placeholder="Número 1">
        <input type="number" name="num2" placeholder="Número 2">
        <input type="submit" value="Somar">

</form>
    <?php
        if(isset($_GET['num1']) && isset($_GET['num2'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $soma = $num1 + $num2;
            echo "A soma de $num1 e $num2 é: $soma";
        }
    ?>
</html>