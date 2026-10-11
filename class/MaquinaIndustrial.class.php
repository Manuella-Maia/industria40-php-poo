<?php

/**
 * MaquinaIndustrial
 *
 * Estende Maquina acrescentando setor, temperatura e horas de funcionamento,
 * com métodos para verificar temperatura e manutenção.
 *
 * @package industria40_php
 * @author Manuella Maia Lopes
 * @version 1.0.0
 * @since 1.0.0
 */

require_once __DIR__ . "/Maquina.class.php";

class MaquinaIndustrial extends Maquina
{
    private string $setor;
    private float $temperatura;
    private int $horasFuncionamento;

    public function __construct(
        string $nome,
        string $modelo,
        string $status,
        string $setor,
        float $temperatura,
        int $horasFuncionamento
    ) {
        // Reaproveita o construtor da classe pai
        parent::__construct($nome, $modelo, $status);

        $this->setor = $setor;
        $this->temperatura = $temperatura;
        $this->horasFuncionamento = $horasFuncionamento;
    }

    // true se a temperatura passar de 80 °C
    public function verificarTemperatura(): bool
    {
        return $this->temperatura > 80;
    }

    // "Necessária" se passou de 1000 h ou está em alerta de temperatura
    public function verificarManutencao(): string
    {
        if ($this->horasFuncionamento > 1000 || $this->verificarTemperatura()) {
            return "Necessária";
        }

        return "Normal";
    }

    // Sobrescreve exibirStatus(): se estiver quente, vira ALERTA
    public function exibirStatus(): string
    {
        return $this->verificarTemperatura() ? "ALERTA" : $this->status;
    }

    // Monta os dados completos, aproveitando o que a classe pai já tem
    public function exibirDados(): string
    {
        return "<strong>Máquina:</strong> {$this->nome}<br>
                <strong>Modelo:</strong> {$this->modelo}<br>
                <strong>Setor:</strong> {$this->setor}<br>
                <strong>Temperatura:</strong> {$this->temperatura}°C<br>
                <strong>Status:</strong> {$this->exibirStatus()}<br>
                <strong>Horas de funcionamento:</strong> {$this->horasFuncionamento} h<br>
                <strong>Manutenção:</strong> {$this->verificarManutencao()}";
    }

    // Usado para destacar o card no painel
    public function exigeAtencao(): bool
    {
        return $this->verificarTemperatura() || $this->verificarManutencao() === "Necessária";
    }
}