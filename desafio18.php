<?php

/**
 * desafio18
 *
 * Percorre um array de objetos Sensor com foreach e chama
 * o método exibirLeitura() de cada um.
 *
 * @package industria40_php
 * @author Manuella Maia Lopes
 * @version 1.0.4
 * @since 1.0.0
 */

require_once __DIR__ . "/class/Sensor.class.php";

$sensor1 = new Sensor("Temperatura", 25.5, "°C");
$sensor2 = new Sensor("Umidade", 60.0, "%");
$sensor3 = new Sensor("Pressão", 1013.2, "hPa");
$sensor4 = new Sensor("Temperatura", 75.0, "°C"); // dispara o alerta

$sensores = [
    $sensor1,
    $sensor2,
    $sensor3,
    $sensor4
];

foreach ($sensores as $sensor) {
    echo $sensor->exibirLeitura() . "<br><br>";
}