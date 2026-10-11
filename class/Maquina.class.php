<?php

/**
 * maquina_class
 *
 * Representa uma máquina industrial com nome, modelo e status. Possui o método
 * exibirStatus() e o exibirDadosCompletos(), que interpola todas as informações
 * da máquina e é chamado no laço foreach para exibir as informações de cada objeto.
 *
 * @package industria40_php
 * @author Maria Clara de Souza Cerqueira
 * @version 1.0.1
 * @since 1.0.0
 */

class Maquina
{
    protected string $nome;   // Nome da máquina
    protected string $modelo; // Seu modelo
    protected string $status; // Status de funcionamento

    public function __construct(string $nome, string $modelo, string $status)
    {
        $this->nome = $nome;
        $this->modelo = $modelo;
        $this->status = $status;
    }

    // Retorna o status da máquina
    public function exibirStatus(): string
    {
        return $this->status;
    }

    // Monta a mensagem com as informações da máquina
    public function exibirDadosCompletos(): string
    {
        return "Máquina: {$this->nome}<br>
                Modelo: {$this->modelo}<br>
                Status: {$this->exibirStatus()}";
    }
}