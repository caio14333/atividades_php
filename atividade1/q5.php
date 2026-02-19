<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Q5 - Média de 3 provas</title></head>
<body>
	<h2>Q5 - Média de 3 provas</h2>
	<form method="post">
		<label>Nome do aluno<br><input type="text" name="nome" required></label><br>
		<label>Nota 1<br><input type="number" name="n1" step="any" required></label><br>
		<label>Nota 2<br><input type="number" name="n2" step="any" required></label><br>
		<label>Nota 3<br><input type="number" name="n3" step="any" required></label><br>
		<input type="submit" value="Calcular média">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$nome = htmlspecialchars($_POST['nome']);
		$n1=(float)$_POST['n1']; $n2=(float)$_POST['n2']; $n3=(float)$_POST['n3'];
		$media = ($n1+$n2+$n3)/3;
		echo "<p>Aluno: $nome<br>Média: ".round($media,2)."</p>";
	}
	?>
	<p><a href="q2.php">Voltar</a></p>
</body>
</html>
