<?php

    /**
     * exercicio02
     *
     * Monitoramento de temperatura
     *
     * @package industria40_php
     * @author Maria Clara de Souza Cerqueira
     * @version 1.0.0
     * @since 1.0.0
     */

    $temperatura = 40; //Declaração de variável e atribuição do valor da temperatura

    while($temperatura <= 70){ /*Laço de repetição WHILE, com a condição de que ENQUANTO a
    temperatura for maior ou igua a 70 graus deve executar o conteúdo que está no escopo do laço/repetição */

    //Conteúdo que deve ser executado cada vez que a condição for verdadeira(somar 5 no valor da temperatura e retornar o resultado)  
     $temperatura += 5; 
        echo "Temperatura atual: {$temperatura}<br>";
    }

    echo "<br><br>ALERTA: temperatura elevada."; //Mensagem que é retornada quando o valor da temperatura não atender mais as condições