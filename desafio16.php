<?php 

/**
     * Desafio16
     *
     * Criacao de um incrementador, onde o seu intuito somar o valor 10 e exibir a cada roda do loop o valor atual
     *
     * @package insdustria40_php
     * @author Maria Clara de Souza Cerqueira
     * @version 1.0.0
     * @since 1.0.0
     */

     $contador = 1;//Inicializa o contador com o valor 1

     while ($contador <=10){//Enquando o contador for menor ou igual a 10,o loop deve acontecer

        echo $contador . "<br>";//Exibe o valor atual do contador

        $contador++;//Incrementa o contador em 1 a ao final de cada repeticao

     }
?>