<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de dígitos</title>
</head>
<body>
    <h1>Soma de dígitos</h1>
    <h3>Insira um número INTEIRO (longo) e mostraremos a soma de todos os dígitos.</h3>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<table>
			<tr>
				<td>
					<label>Número Inteiro</label>
				</td>
				<td>
					<input type="number" name="numint" required>
				</td>
		</table>

		<input type="submit" name="numero" value="Somar">
	</form>

    <?php 
		if (isset($_POST['numero'])) {
            $num =$_POST['numint'];
            function sum($num) {
                $sum = 0;
                for ($i = 0; $i < strlen($num); $i++){
                    $sum += $num[$i];
                }
                return $sum;
            }

            echo "A soma de todos os dígitos do seu número é:" . sum($num);
        }
	?>

</body>
</html>