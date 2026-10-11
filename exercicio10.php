<?php

    /**
     * exercicio10
     *
     * Gera um relatório de manutenção a partir de um array associativo
     * que relaciona o nome de cada máquina às suas horas de funcionamento.
     * Conforme a regra da indústria, classifica cada máquina em "Normal"
     * (até 500 h), "Programar manutenção" (501 a 1000 h) ou
     * "Manutenção urgente" (acima de 1000 h).
     *
     * @package industria40_php
     * @author Manuella Maia Lopes
     * @version 1.0.0
     * @since 1.0.0
     */

// Array associativo: chave = nome da máquina, valor = horas de funcionamento
$Maquinas = [
    "CNC01" => 920,
    "CNC02" => 430,
    "ROB01" => 1200,
    "EST01" => 680,
    "PRE01" => 1500
];

// Percorre cada máquina pegando a chave (nome) e o valor (horas)
foreach($Maquinas as $NomeMaquina => $HorasFuncionamento){
    $Status = "";

    // Classifica conforme as faixas de horas de funcionamento
    if($HorasFuncionamento <= 500){
        $Status = "Normal";
    }else if($HorasFuncionamento <= 1000){
        $Status = "Programar manutenção";
    }else{
        $Status = "Manutenção urgente";
    }

    // Linha do relatório
    echo "{$NomeMaquina} - {$HorasFuncionamento} horas - {$Status}<br>";
}