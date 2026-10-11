<?php

    /**
     * Equipamento.class
     *
     * Representa um equipamento industrial com nome, horas de
     * funcionamento e limite de horas para manutenção. Possui o método
     * verificarManutencao(), que compara as horas com o limite e informa
     * a situação do equipamento.
     *
     * @package industria40_php
     * @author Manuella Maia Lopes
     * @version 1.0.0
     * @since 1.0.0
     */

class Equipamento{
    /** @var string Nome do equipamento. */
    private string $nome;

    /** @var float Horas de funcionamento acumuladas. */
    private float $horasFuncionamento;

    /** @var int Limite de horas para manutenção. */
    private int $limiteManutencao;

    /**
     * @param string $nomeEquipamento  Nome do equipamento.
     * @param float  $horas            Horas de funcionamento.
     * @param int    $limiteManutencao Limite de horas para manutenção.
     */
    public function __construct(string $nomeEquipamento, float $horas, int $limiteManutencao){
        $this->nome = $nomeEquipamento;
        $this->horasFuncionamento = $horas;
        $this->limiteManutencao = $limiteManutencao;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function getHorasFuncionamento(): float{
        return $this->horasFuncionamento;
    }

    public function getLimite(): int{
        return $this->limiteManutencao;
    }

    /**
     * Verifica se o equipamento precisa de manutenção, comparando as
     * horas de funcionamento com o limite definido.
     *
     * @return string "Necessita manutenção" ou "Normal".
     */
    public function verificarManutencao(): string{
        // Atingiu ou passou do limite de horas: precisa de manutenção
        if($this->horasFuncionamento >= $this->limiteManutencao){
            return "Necessita manutenção";
        }

        return "Normal";
    }
}