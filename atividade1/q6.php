<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Q6 - Troca A e B</title></head>
<body>
	<h2>Q6 - Troca de valores</h2>
	<form method="post">
		<label>A<br><input type="text" name="a" required></label><br>
		<label>B<br><input type="text" name="b" required></label><br>
		<input type="submit" value="Trocar">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$a = $_POST['a']; $b = $_POST['b'];
		$temp = $a; $a = $b; $b = $temp;
		echo "<p>Após troca: A = ".htmlspecialchars($a)."<br>B = ".htmlspecialchars($b)."</p>";
	}
	?>
	<p><a href="q2.php">Voltar</a></p>
</body>
</html>
