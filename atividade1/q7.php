<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Q7 - Celsius para Fahrenheit</title></head>
<body>
	<h2>Q7 - Converter °C para °F</h2>
	<form method="post">
		<label>Temperatura em °C<br><input type="number" name="c" step="any" required></label><br>
		<input type="submit" value="Converter">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$c = (float)$_POST['c'];
		$f = $c * 1.8 + 32;
		echo "<p>$c °C = $f °F</p>";
	}
	?>
	<p><a href="q2.php">Voltar</a></p>
</body>
</html>
