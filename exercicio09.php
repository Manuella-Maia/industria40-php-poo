<?php

    /**
     * exercicio09
     *
     * Analisa o consumo de energia de oito máquinas de uma fábrica,
     * armazenado em um array. O programa exibe o consumo de cada máquina,
     * calcula o consumo total (acumulador), a média de consumo e conta
     * quantas máquinas consumiram mais de 50 kWh (contador).
     *
     * @package industria40_php
     * @author Manuella Maia Lopes
     * @version 1.0.0
     * @since 1.0.0
     */

// Consumo de cada máquina em kWh (cada posição é uma máquina)
$Consumos = [32, 40, 28, 55, 61, 38, 72, 49];

// Numera as máquinas ao exibir cada consumo
$ContadorMaquinas = 0;

// Acumulador do consumo total
$ConsumoTotal = 0;

// Contador de máquinas com consumo acima do limite
$QdtMaquinasAcimaLimite = 0;

// Limite de consumo em kWh
$Limite = 50;

// Percorre o array uma única vez: soma o consumo e conta as máquinas acima do limite
for($i = 0; $i < count($Consumos); $i++){
    $ConsumoTotal += $Consumos[$i];

    if($Consumos[$i] > $Limite){
        $QdtMaquinasAcimaLimite++;
    }
}

// Média = consumo total dividido pela quantidade de máquinas
$MediaConsumo = $ConsumoTotal / count($Consumos);

// Exibe o consumo de cada máquina
foreach($Consumos as $ConsumoMaquina){
    $ContadorMaquinas++;

    echo "Máquina {$ContadorMaquinas}: {$ConsumoMaquina} kWh<br>";
}

// Exibe os resultados finais
echo "<br>Consumo total: {$ConsumoTotal} kWh";
echo "<br>Consumo médio: {$MediaConsumo} kWh";
echo "<br>Máquinas acima de {$Limite} kWh: {$QdtMaquinasAcimaLimite}";