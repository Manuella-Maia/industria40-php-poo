<?php

    /**
     * exercicio08
     *
     * Simula a produção de uma máquina industrial que fabrica 8 peças por
     * ciclo, com meta de 100 peças. Como não se depende de uma contagem
     * prévia de ciclos, e sim de uma condição (meta ainda não atingida),
     * utiliza-se a estrutura while. A cada ciclo, exibe a produção
     * acumulada e, ao final, informa que a meta foi atingida.
     *
     * @package industria40_php
     * @author Manuella Maia Lopes
     * @version 1.0.0
     * @since 1.0.0
     */

// Contador de ciclos executados pela máquina
$ContadorDeCiclos = 0;

// Total de peças produzidas até o momento
$PecasProduzidas = 0;

// Meta de produção da indústria
$Meta = 100;

// Quantidade de peças produzidas em cada ciclo
$PecaPorCiclo = 8;

// Repete enquanto a meta ainda não foi atingida
// (a condição usa < para parar quando a produção chegar a 100 ou mais)
while($PecasProduzidas < $Meta){
    // Registra mais um ciclo
    $ContadorDeCiclos++;

    // Soma as peças produzidas neste ciclo ao acumulado
    $PecasProduzidas+=$PecaPorCiclo;

    // Exibe o número do ciclo e a produção acumulada
    echo "Ciclo {$ContadorDeCiclos} - Produção acumulada: {$PecasProduzidas}\n";
}

// Executado apenas após o fim do laço, quando a meta foi atingida
echo "Meta atingida !";