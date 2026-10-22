<?php
$horas = (int) $_POST['horas'];
$veiculo = (int) $_POST['veiculo'];

if (isset($_POST['lavagem'])) {
    $lavagem = "sim";
} else {
    $lavagem = "não";
}

if ($veiculo == 0) {
    $tipo = "Carro";
    $primeiraHora = 10;
    $horaAdicional = 6;
} else {
    $tipo = "Moto";
    $primeiraHora = 6;
    $horaAdicional = 3;
}

$total = $primeiraHora;

for ($H = 2; $H <= $horas; $H++) {
    $total = $total + $horaAdicional;
}

if ($total > 50) {
    $total = 50;
}

if ($lavagem == "sim") {
    $total += 20;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor a Pagar</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Valor a Pagar</h1>
        <div class="resultado">
            <p>Veículo: <?= $tipo ?></p>
            <p>Horas: <?= $horas ?></p>
            <p>Lavagem: <?= $lavagem ?></p>
            <p class="destaque">Total a pagar: R$ <?= number_format($total, 2, ',', '.') ?></p>
        </div>
        <a class="voltar" href="index.html">Novo cálculo</a>
    </div>
</body>
</html>