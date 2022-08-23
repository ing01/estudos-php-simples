<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="number" name="valorEmprestimo" placeholder="Valor do empréstimo" required>

<input type="number" name="valorJuros" placeholder="Valor dos Juros" required>

<input type="number" name="parcelas" placeholder="Parcelas" required>

<input type="submit" name="calcular" value="Calcular">

</form>

<?php
if (isset($_POST['calcular'])) {

    $juros = $_POST['valorJuros'];
    $parcelas = $_POST['parcelas'];
    
    $valorJuros =  $juros/100;
    $valorEmprestimo = $_POST['valorEmprestimo'];

    $saldoDevedor = $valorEmprestimo;

    $totalJurosPago = 0 ;          
    
    $valorParcela = $saldoDevedor * ($juros/100 * (1+$juros/100) ** $parcelas / ((1+$juros/100) ** $parcelas - 1));
    
    for ($i = 0; $i < $parcelas; $i++){

        $p = $saldoDevedor * ($juros/100 * (1+$juros/100) ** $parcelas / ((1+$juros/100) ** $parcelas - 1));
       
        $jurosFinal = $saldoDevedor * $valorJuros;
        $valorAmort = $valorParcela - $jurosFinal;  
        $total = $saldoDevedor - $valorAmort;
        
        $totalJurosPago += $jurosFinal;
        $saldoDevedor = $total;
        
        echo "<strong>Parcela</strong>: ".$i+1 ."x ".round($valorParcela, 2). " // <strong>Amortização</strong>: R$".round($valorAmort, 2) ." // <strong>Juros</strong>: R$".round($jurosFinal,2)." // <strong>Saldo devedor:</strong> R$".round($saldoDevedor,2);
        echo "<br>";
        
    }

    echo "<br>";
    echo "<strong>Total de juros pago:</strong> R$".round($totalJurosPago,2);
}
?>
</body>
</html>