<?php 

/**
     * Desafio15_C
     *
     * Equipamento que precisa executar um teste de comunicacao pelo menos uma vez e repetir enquanto não conseguir conexão,este cenario se encaixa o laco DO...WHILE
     *
     * @package insdustria40_php/Desafio15
     * @author Maria Clara de Souza Cerqueira
     * @version 1.0.0
     * @since 1.0.0
     */

     $tentativas = 0; //Variável que vai contar as tentativas até a conexao
     $conectado = false; //Variável que representa o estado da conexao

     do{
        $tentativas ++;//O ++ incrementa de 1 em 1 o número de tentativas 
        echo "Tentativa {$tentativas}<br>";//Exibe o número da tentativa realizada a cada repetição do loop

        if($tentativas == 3){//Verifica se foram realizadas 3 tentativas e, nesse caso, simula uma conexão estabelecida
            $conectado = true;//Altera o estado da variavel para estabelecida
        }
     }while(!$conectado);//enquanto a condicao nao for estabelecida(false),o loop deve continuar
        echo "<br>Conexão Estabelecida";//Mensagem exibida após a conexao estiver estabelecida e o loop encerrado
?>