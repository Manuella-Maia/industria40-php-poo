<?php

/**
 * painel.php
 *
 * Painel Industrial 4.0: monitora máquinas, exibindo temperatura,
 * status e necessidade de manutenção.
 *
 * @package industria40_php
 * @author Manuella Maia Lopes
 * @version 1.0.0
 * @since 1.0.0
 */

require_once __DIR__ . "/class/MaquinaIndustrial.class.php";

// Parâmetros: nome, modelo, status, setor, temperatura, horas
$maquina1 = new MaquinaIndustrial("Torno CNC", "TC-200", "Operação", "Usinagem", 55, 420);
$maquina2 = new MaquinaIndustrial("Robô de Soldagem", "RS-500", "Operação", "Soldagem", 84, 760);
$maquina3 = new MaquinaIndustrial("Esteira Industrial", "EI-80", "Operação", "Logística", 38, 1250);
$maquina4 = new MaquinaIndustrial("Prensa Hidráulica", "PH-300", "Parada", "Estamparia", 62, 300);
$maquina5 = new MaquinaIndustrial("Máquina de Corte", "MC-45", "Operação", "Corte", 71, 980);

$maquinas = [
    $maquina1,
    $maquina2,
    $maquina3,
    $maquina4,
    $maquina5
];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Industrial 4.0</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 20px;
        }
        .maquina {
            background-color: #ffffff;
            border-left: 6px solid #2e8b57;
            padding: 12px;
            margin-bottom: 15px;
            width: 380px;
        }
        .atencao {
            border-left-color: #c0392b;
            background-color: #fdecea;
        }
    </style>
</head>
<body>

    <h1>Painel de Monitoramento Industrial</h1>

    <?php foreach ($maquinas as $maquina): ?>
        <div class="maquina <?= $maquina->exigeAtencao() ? 'atencao' : '' ?>">
            <?= $maquina->exibirDados() ?>
        </div>
    <?php endforeach; ?>

</body>
</html>