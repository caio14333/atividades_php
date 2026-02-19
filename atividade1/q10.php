<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Q10 - Prestações</title></head>
<body>
	<h2>Q10 - 5 prestações sem juros</h2>
	<form method="post">
		<label>Valor da compra (R$)<br><input type="number" name="val" step="any" required></label><br>
		<input type="submit" value="Calcular">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$v=(float)$_POST['val'];
		echo "<p>5 prestações de R$ ".round($v/5,2)."</p>";
	}
	?>
	<p><a href="q2.php">Voltar</a></p>
</body>
</html>
