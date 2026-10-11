<?php

    /**
     * exercicio12
     *
     * Sistema de monitoramento de produção. Cria um objeto da classe
     * Producao e chama produzir() a cada ciclo, usando while, pois a
     * repetição depende de uma condição (meta ainda não atingida) e não
     * de uma quantidade conhecida de ciclos.
     *
     * @package industria40_php
     * @author Manuella Maia Lopes
     * @version 1.0.0
     * @since 1.0.0
     */

require_once __DIR__ . "/class/Producao.class.php";

// Produto, meta de 100 peças, começando com 0 produzidas
$Producao = new Producao("Peça A", 100, 0);

// Peças produzidas em cada ciclo
$PecasPorCiclo = 10;
$Ciclo = 0;

// Continua enquanto a meta não for atingida
while(!$Producao->isMetaAtingida()){
    $Ciclo++;

    $Producao->produzir($PecasPorCiclo);

    echo "Ciclo {$Ciclo}<br>";
    echo $Producao->exibirStatus() . "<br><br>";
}