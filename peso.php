<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Multa</title>
</head>
<body>
    <h1>Calcule o valor da multa pelo peso do seu peixe</h1>
    <h3>Toda vez que o peso de um peixe for maior que o estabelecido pelo regulamento de pesca do Estado de São Paulo que hoje é de 50 quilos, ele deve pagar uma 
        multa de R$ 4,00 para cada 5 quilos excedentes.
    </h3>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<table>
				<tr>
					<td>
						<label>Peso do peixe</label>
					</td>	
					<td>
						<input type="number" name="pesoPeixe" required>
					</td>
				</tr>
			</table>

			<input type="submit" name="peso" value="Calcular Multa">
	</form>
	<br>
	<br>

    <?php
        if (isset($_POST['peso'])){

            $pesoPeixe = $_POST['pesoPeixe'];
            $excesso = 0;
            $multa = 0;

            if ($pesoPeixe <= 50){
            echo "Excesso de peso: ".$excesso;
            echo "<br>";
            echo "Multa: ".$multa;
            }
        else {
            $excesso = $peso - 50;
            $multa = $excesso * 4;

            echo "Excesso de peso: ".round($excesso, 2)." kg";
            echo "<br>";
            echo "Multa: R$".round($multa, 2);

        };
    };
    ?>

</body>
</html>