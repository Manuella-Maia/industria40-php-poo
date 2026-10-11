<?php 
/**
     * Desafio15_D
     *
     * Uma lista de equipamentos contidas em um array que precisam ser exibidos,para isso usa-se o operador ForEach para percorre-lo
     *
     * @package insdustria40_php/Desafio15
     * @author Maria Clara de Souza Cerqueira
     * @version 1.0.0
     * @since 1.0.0
     */

     $i=0;//Criacao de um contador apenas para exibir de forma organizada qual posicao esta o equipamento

     $equipamentos = ["CLP", "CNC", "Robô", "Esteira", "Sensor"];//Array que contem os equipamentos 

     foreach($equipamentos as $item){//Operador para percorrer cada posicao do array
        $i++; //Incremento de mais 1 a cada analise de posicao do array
        echo "Equipamento $i: {$item}<br>"; //Exibe de forma enumerada os equipamentos contidos
        
     }
?>