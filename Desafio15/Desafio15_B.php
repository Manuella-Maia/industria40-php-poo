<?php 

/**
     * Desafio15_B
     *
     * Inspeção de uma máquina que deve permanecer ligada enquanto a temperatura for menor que 80 graus
     *
     * @package insdustria40_php/Desafio15
     * @author Maria Clara de Souza Cerqueira
     * @version 1.0.0
     * @since 1.0.0
     */

    $temperatura = 45;
    //Variável que representa a temperatura
    $maquinaLigada = true; //Variável booleana que representa o estado da máquina,que posteriormente se tornará falsa, caso a temperatura fique elevada

    //Operador de repeticao WHILE,que possui como condicao permanecer no loop enquanto a temperatura for inferior a 80 graus
    while($temperatura < 80){
        echo "Máquina Ligada - Temperatura: {$temperatura}°C<br>"; //Mensagem que será a cada vez que a condicao for verdadeira
        
        $temperatura += 2; //Soma de mais 2 no valor da temperatura, para simular o aumento da temperatura
    }

    $maquinaLigada = false; //Recebeu o valor de falso,pois representa que a maquina está desligada

    echo "<br><br>Máquina desligada - Temperatura Elevada: {$temperatura} °C";//Mensagem interpolada que retorna o status da máquina e sua atual temperatura
?>