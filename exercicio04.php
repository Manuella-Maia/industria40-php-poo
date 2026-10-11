<?php

    /**
     * exercicio04
     *
     * Lista de sensores industriais
     *
     * @package industria40_php
     * @author Maria Clara de Souza Cerqueira
     * @version 1.0.0
     * @since 1.0.0
     */

    $sensores = ["Temperatura", "Pressão", "Proximidade", "Unidade", "Vibração"]; //Criação de um vetor, que contém tipos de sensores(chaves)

    foreach ($sensores as $tiposSensor){ //Laço de repetição FOREACH para percorrer o vetor "$sensores" e a declaracao de uma variável que representa um item do vetor($tipoSensor)
            echo "Sensor: {$tiposSensor} <br>"; //Código executado para cada item do vetor
    }