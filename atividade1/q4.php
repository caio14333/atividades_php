<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Q4 - Salário e Comissão</title></head>
<body>
	<h2>Q4 - Vendedor (15% comissão)</h2>
	<form method="post">
		<label>Nome<br><input type="text" name="nome" required></label><br>
		<label>Salário fixo (R$)<br><input type="number" name="sal" step="any" required></label><br>
		<label>Total de vendas (R$)<br><input type="number" name="vendas" step="any" required></label><br>
		<input type="submit" value="Calcular">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$nome = htmlspecialchars($_POST['nome']);
		$sal = (float)$_POST['sal']; $vendas = (float)$_POST['vendas'];
		$com = $vendas * 0.15; $final = $sal + $com;
		echo "<p>Nome: $nome<br>Salário fixo: R$ $sal<br>Comissão: R$ $com<br>Salário final: R$ $final</p>";
	}
	?>
	<p><a href="q2.php">Voltar</a></p>
</body>
</html>
