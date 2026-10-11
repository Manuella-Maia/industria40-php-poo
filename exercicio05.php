 <?php
 
/**
     * exercicio05
     *
     * Controle de estoque automatizado
     *
     * @package industria40_php
     * @author Maria Clara de Souza Cerqueira
     * @version 1.0.0
     * @since 1.0.0
     */

    $estoque = [//Criação do vetor "$estoque"
        "Sensor indutivo" => 8, //Definicão dos pares de chave(item) e valor(quantidade no estoque) 
        "Sensor capacitivo" => 4,
        "Cabo Ethernet" => 25,
        "Motor Elétrico" => 2,
        "CLP" => 3
    ];

    foreach ($estoque as $item => $quantidade){ /* Criação do laço FOREACH que deve percorrer cada item do vetor "$estoque", foi criada também a 
    variável "$quantidade" que representa o valor atribuido à chave(item) */

        if($item == "Cabo Ethernet"){ //Condição que determina que se o item for um cabo, a unidade de medida da mensagem retornada deve ser em metro, senao em unidade
        echo "{$item}: {$quantidade} metros<br>"; //Mensagem interpolada que deve ser retornada a cada volta do loop
        }else{
        echo "{$item}: {$quantidade} unidades<br>"; //Mensagem interpolada que deve ser retornada a cada volta do loop
        }
    }
