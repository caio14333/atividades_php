<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Q9 - Rendimento poupança</title></head>
<body>
	<h2>Q9 - Rendimento 0,70% a.m.</h2>
	<form method="post">
		<label>Valor depositado (R$)<br><input type="number" name="val" step="any" required></label><br>
		<input type="submit" value="Calcular">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$v=(float)$_POST['val'];
		$final = $v * 1.007;
		echo "<p>Valor após 1 mês: R$ ".round($final,2)."</p>";
	}
	?>
	<p><a href="q2.php">Voltar</a></p>
</body>
</html>
