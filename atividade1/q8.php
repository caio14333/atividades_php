<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Q8 - US$ para R$</title></head>
<body>
	<h2>Q8 - Conversão US$ -> R$</h2>
	<form method="post">
		<label>Cotação do dólar (R$)<br><input type="number" name="cot" step="any" required></label><br>
		<label>Quantidade em US$<br><input type="number" name="usd" step="any" required></label><br>
		<input type="submit" value="Converter">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$cot=(float)$_POST['cot']; $usd=(float)$_POST['usd'];
		echo "<p>R$ " . ($cot * $usd) . "</p>";
	}
	?>
	<p><a href="q2.php">Voltar</a></p>
</body>
</html>
