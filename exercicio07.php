<?php

    /**
     * exercicio07
     *
     * resumo do que faz
     *
     * @package industria40_php
     * @author Manuella Maia Lopes
     * @version 1.0.0
     * @since 1.0.0
     */

require_once __DIR__ . "/class/Sensor.class.php";

// Armazenando todos os sensores em um array
$sensores = [
    new Sensor("Temperatura", 68, "°C"),
    new Sensor("Pressão", 90, "PSI"),
    new Sensor("Umidade", 45, "%"),
    new Sensor("Vibração", 22, "Hz"),
];

// Percorrendo os objetos e apresentando as leituras
foreach($sensores as $sensor){
    echo $sensor->exibirLeitura() . "<br>";
}
