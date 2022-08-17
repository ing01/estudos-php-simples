<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preço de Custo</title>
</head>
<body>
    <h1>Determine o preço de custo de um produto</h1>
    <h3>Com o valor de venda e a porcentagem de lucro, é possível calcular o preço de custo de um produto. Insira os dados necessário para descobrir</h3>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td>
                        <label>Produto</label>
                    </td>
                    <td>
                        <input type="text" name="produto" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Valor de venda do produto</label>
                    </td>
                    <td>
                        <input type="number" name="venda" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Porcentagem de lucro</label>
                    </td>
                    <td>
                        <input type="number" name="porcentagem" required>
                    </td>
                </tr>
            </table>

            <input type="submit" name="custo" value="Calcular">
	</form>
	<br>

	<?php 
		if (isset($_POST['custo'])) {
            $Produto =$_POST['produto'];
			$Venda =$_POST['venda'];
			$Porcent =$_POST['porcentagem'];
            $PorcentInt = $Porcent / 100;

            echo "Produto: " . $Produto;
            echo "<br>";
			echo "Preço de venda: " . $Venda;
			echo "<br>";
			echo "Porcentagem: " . $PorcentInt;
			echo "<br>";
			echo "Preço de custo: ". $Venda - ($Venda * $PorcentInt);
	}
	?>
</body>
</html>