<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculadora de Áreas</title>
</head>
<body>
	<h1>Calculadora de áreas</h1>
	<h3>Área de um círculo</h3>
	<p>A área de um círculo é calculada por Pi multiplicado por raio ao quadrado.</p>
	<h5>Fórmula: 3.1416 * (Raio²)</h5>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<table>
			<tr>
				<td>
					<label>PI</label>
				</td>
				<td>
					<input type="number" name="Pi" value="3.1416" disabled>
				</td>
			</tr>
			<tr>
				<td>
					<label>Valor do Raio</label>
				</td>
				<td>
					<input type="number" step="0.00001"name="Raio" required>
				</td>
				<td>
					<label>Cm²</label>
				</td>
			</tr>
		</table>

		<input type="submit" name="circulo" value="Calcular Área">
		
	</form>
	<br>
	<br>

	<?php 
		if (isset($_POST['circulo'])) {
			$Raio =$_POST['Raio'];
			$Pi=3.1416;

			echo "Pi: " .$Pi;
			echo "<br>";
			echo "Raio: " .$Raio;
			echo "<br>";
			echo "Raio ao quadrado: " . $Raio *$Raio;
			echo "<br>";
			echo "A área do círculo é: ". $Pi  * ($Raio *$Raio) . " Cm²";
	}
	?>

	<br>
	<h3>Área de um triângulo</h3>
	<p>A área de um triângulo é calculada pela metade do valor de base multiplicado por altura.</p>
	<h5>Fórmula: (Base * Altura) / 2</h5>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<table>
				<tr>
					<td>
						<label>Valor da Base</label>
					</td>	
					<td>
						<input type="number" name="Base" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Valor da Altura</label>
					</td>
					<td>
						<input type="number" name="Altura" required>
					</td>
				</tr>
			</table>

			<input type="submit" name="triangulo" value="Calcular Área">
	</form>
	<br>
	<br>

	<?php 
		if (isset($_POST['triangulo'])) {
			$Base = $_POST['Base'];
			$Altura =$_POST['Altura'];

			echo "Base: " .$Base;
			echo "<br>";
			echo "Altura: " .$Altura;
			echo "<br>";
			echo "A área do triângulo é: ". ($Base * $Altura) / 2;
		}
	?>

	<br>
	<h3>Área de um quadrado</h3>
	<p> Para calcular a área de um quadrado e de um retângulo, todas as medidas devem estar na mesma unidade de comprimento.</p>
	<h5>Fórmula: Base * Altura</h5>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<table>
				<tr>
					<td>
						<label>Valor da Base</label>
					</td>	
					<td>
						<input type="number" name="BaseQuad" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Valor da Altura</label>
					</td>
					<td>
						<input type="number" name="AlturaQuad" required>
					</td>
				</tr>
			</table>

			<input type="submit" name="quadrado" value="Calcular Área">
	</form>
	<br>
	<br>

	<?php 
		if (isset($_POST['quadrado'])) {
			$BaseQuad = $_POST['BaseQuad'];
			$AlturaQuad =$_POST['AlturaQuad'];

			echo "Base: " .$BaseQuad;
			echo "<br>";
			echo "Altura: " .$AlturaQuad;
			echo "<br>";
			echo "A área do quadrado é: ". $BaseQuad * $AlturaQuad;
		}
	?>

	<br>
	<h3>Área de um retângulo</h3>
	<h5>Fórmula: Base * Altura</h5>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<table>
				<tr>
					<td>
						<label>Valor da Base</label>
					</td>	
					<td>
						<input type="number" name="BaseRet" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Valor da Altura</label>
					</td>
					<td>
						<input type="number" name="AlturaRet" required>
					</td>
				</tr>
			</table>

			<input type="submit" name="retangulo" value="Calcular Área">
	</form>
	<br>
	<br>

	<?php 
		if (isset($_POST['retangulo'])) {
			$BaseRet = $_POST['BaseRet'];
			$AlturaRet =$_POST['AlturaRet'];

			echo "Base: " .$BaseRet;
			echo "<br>";
			echo "Altura: " .$AlturaRet;
			echo "<br>";
			echo "A área do Retângulo é: ". $BaseRet * $AlturaRet;
		}
	?>

</body>
</html>