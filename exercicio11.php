<?php

    /**
     * exercicio11
     *
     * Gera um relatório de manutenção a partir de objetos da classe
     * Equipamento armazenados em um array. Para cada equipamento, exibe
     * o nome, as horas de funcionamento e a situação (normal ou
     * necessita manutenção).
     *
     * @package industria40_php
     * @author Manuella Maia Lopes
     * @version 1.0.0
     * @since 1.0.0
     */

// Importa a classe Equipamento
require_once __DIR__ . "/class/Equipamento.class.php";

// Array de objetos (nome, horas de funcionamento, limite de manutenção)
$Equipamentos = [
    new Equipamento("Robô ABB", 1100, 1000),
    new Equipamento("Esteira 01", 450, 500),
    new Equipamento("Braço robotico", 750, 800)
];

echo "===== RELATÓRIO DE MANUTENÇÃO ===== <br><br>";

// Percorre cada equipamento e exibe seus dados
foreach($Equipamentos as $Equipamento){
    echo "Equipamento: {$Equipamento->getNome()}
    <br>Horas: {$Equipamento->getHorasFuncionamento()}
    <br>Situação: {$Equipamento->verificarManutencao()}<br><br>";
}