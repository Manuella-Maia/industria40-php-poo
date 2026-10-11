<?php

    /**
     * exercicio03
     *
     * Inicialização obrigatória de equipamento
     *
     * @package industria40_php
     * @author Maria Clara de Souza Cerqueira
     * @version 1.0.0
     * @since 1.0.0
     */

    $tentativas = 0; /* Declaração de variável e atribuição de seu valor 0,que representa
    a quantidades de tentativas.*/

    $status = false; /*Declaração de variável e atribuição do valor booleano, que será alterado para true quando 
    todas as 3 tentativas forem realizadas */

    do{ // Inicialização do operador DO
       $tentativas++; //Contador de tentativas, para cada vez que a condição do WHILE não for verdadeira
       echo "Tentativa {$tentativas} de conexão...<br>"; //Mensagem que deve ser retornada a cada repetição
    } while ($tentativas < 3); //Condição que define se o loop deve continuar ou encerrar

    if($tentativas == 3){ //Condicional que altera o status para true e exibe uma mensagem final, caso já tenha ocorrido as três tentativas
        $status = true;
        echo "<br><br>Equipamento conectado";
    }