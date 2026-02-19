<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Q12 - Custo ao consumidor</title></head>
<body>
	<h2>Q12 - Custo ao consumidor do carro</h2>
	<form method="post">
		<label>Custo de fábrica (R$)<br><input type="number" name="c" step="any" required></label><br>
		<input type="submit" value="Calcular">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$c=(float)$_POST['c'];
		$comImposto = $c * 1.45;
		$final = $comImposto * 1.28;
		echo "<p>Custo ao consumidor: R$ ".round($final,2)."</p>";
	}
	?>
	<p><a href="q2.php">Voltar</a></p>
</body>
</html>
