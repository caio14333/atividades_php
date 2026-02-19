<?php
$n = $_POST["n"];
if($n > 10){
echo "Maior que 10";
}
?>

<form method="post">
Número <input type="number" name="n">
<input type="submit">
</form>
