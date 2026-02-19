<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Q11 - Preço de venda</title></head>
<body>
	<h2>Q11 - Preço de venda</h2>
	<form method="post">
		<label>Preço de custo (R$)<br><input type="number" name="c" step="any" required></label><br>
		<label>Acréscimo (%)<br><input type="number" name="pct" step="any" required></label><br>
		<input type="submit" value="Calcular">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$c=(float)$_POST['c']; $pct=(float)$_POST['pct'];
		$v = $c * (1 + $pct/100);
		echo "<p>Preço de venda: R$ ".round($v,2)."</p>";
	}
	?>
	<p><a href="q2.php">Voltar</a></p>
</body>
</html>
