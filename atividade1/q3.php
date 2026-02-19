<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Q3 - Consumo médio</title></head>
<body>
	<h2>Q3 - Consumo médio (km/L)</h2>
	<form method="post">
		<label>Distância percorrida (km)<br><input type="number" name="dist" step="any" required></label><br>
		<label>Combustível gasto (L)<br><input type="number" name="litros" step="any" required></label><br>
		<input type="submit" value="Calcular">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$dist = (float)$_POST['dist']; $litros = (float)$_POST['litros'];
		if($litros <= 0) echo "<p>Erro: litros deve ser maior que zero.</p>";
		else echo "<p>Consumo médio: " . ($dist/$litros) . " km/L</p>";
	}
	?>
	<p><a href="q2.php">Voltar</a></p>
</body>
</html>
