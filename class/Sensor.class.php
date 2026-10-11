<?php

    /**
     * Sensor.class
     *
     * Cria a classe Sensor, que representa leituras de sensores industriais
     * (tipo, valor e unidade) Caso o sensor de temperatura registre valor acima 
     * de 60 °C, é exibido o alerta "ALERTA DE TEMPERATURA!".
     *
     * @package industria40_php
     * @author Manuella Maia Lopes
     * @version 1.0.0
     * @since 1.0.0
     */

class Sensor{
    /**
     * atributo publico do tipo string para armazenar o tipo do sensor
     *
     * @var string
     */
    public string $tipo;

    /**
     * atributo privado do tipo float(real) para armazenar o valor da leitura
     *
     * @var float
     */
    private float $valor;

    /**
     * atributo publico do tipo string para armazenar a unidade de medida
     *
     * @var string
     */
    public string $unidade;

    /**
     * Construtor da classe Sensor
     *
     * @param string $tipoSensor Tipo do sensor.
     * @param float $valorSensor Valor da leitura.
     * @param string $unidadeMedida Unidade de medida da leitura.
     * 
     */
    function __construct(string $tipoSensor, float $valorSensor, string $unidadeMedida)
    {
        $this->tipo = $tipoSensor;
        $this->valor = $valorSensor;
        $this->unidade = $unidadeMedida;
    }

    /**
     * Retorna o valor da leitura.
     *
     * @return float
     * 
     */
    public function getValor(): float{
        return $this->valor;
    }

    /**
     * Monta o texto com a leitura do sensor. Se for um sensor de
     * temperatura com valor superior a 60, inclui o alerta.
     *
     * @return string Texto formatado em HTML com a leitura.
     * 
     */
    public function exibirLeitura(): string
    {
        $mensagem = "Sensor: {$this->tipo}<br>Valor: {$this->valor} {$this->unidade}";

        if ($this->tipo === "Temperatura" && $this->valor > 60) {
            $mensagem .= "<br><strong>ALERTA DE TEMPERATURA!</strong>";
        }

        return $mensagem;
    }
}