 <?php
 
     /**
     * exercicio06
     *
     * Classe Máquina
     *
     * @package industria40_php
     * @author Maria Clara de Souza Cerqueira
     * @version 1.0.0
     * @since 1.0.0
     */
    require_once __DIR__ . "/class/Maquina.class.php";
      
     //Criação de 3 Objetos instanciados da classe Máquina
     $maquina1 = new Maquina("Torno CNC","CNC-X20","Ligada");

     $maquina2 = new Maquina("Esteira Automatizada","EST-10","Desligada");

     $maquina3 = new Maquina("Empilhadora DIC","DIC-11","Ligada");

     //Criando um vetor de objetos
     $maquinas = [$maquina1, $maquina2, $maquina3];

     //Percorrendo cada objeto do vetor e exibindo suas informações que foram organizadas em um método(exibirDadosCompletos())
     foreach($maquinas as $maquinaUnitaria){
          echo $maquinaUnitaria ->exibirDadosCompletos()."<br><br>";
     }

