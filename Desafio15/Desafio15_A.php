<?php 
/**
     * Desafio15_A
     *
     * Inspeção de 50 produtos, utilizando o comando de repeticao FOR
     *
     * @package insdustria40_php/Desafio15
     * @author Maria Clara de Souza Cerqueira
     * @version 1.0.0
     * @since 1.0.0
     */

     //Laço de repeticao que irá rodar 50 vezes e irá retornar uma mensagem a cada volta
     for($i=0; $i<50; $i++){
        echo "Inspecionando produto " . ($i + 1) . "<br>";
     }
?>