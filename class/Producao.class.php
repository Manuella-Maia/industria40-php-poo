<?php

    /**
     * Producao.class
     *
     * Representa a produção de um produto, com meta e quantidade já
     * produzida. O método produzir() soma peças ao total, e o sistema
     * identifica automaticamente quando a meta é atingida.
     *
     * @package industria40_php
     * @author Manuella Maia Lopes
     * @version 1.0.0
     * @since 1.0.0
     */

class Producao{
    /** @var string Nome do produto fabricado. */
    private string $produto;

    /** @var int Meta de produção. */
    private int $meta;

    /** @var int Quantidade produzida até o momento. */
    private int $quantidadeProduzida;

    /** @var bool Indica se a meta já foi atingida. */
    private bool $metaAtingida = false;

    /**
     * @param string $nomeProduto    Nome do produto.
     * @param int    $metaEstipulada Meta de produção.
     * @param int    $quantidade     Quantidade já produzida (normalmente 0).
     */
    public function __construct(string $nomeProduto, int $metaEstipulada, int $quantidade)
    {
        $this->produto = $nomeProduto;
        $this->meta = $metaEstipulada;
        $this->quantidadeProduzida = $quantidade;
    }

    /**
     * Aumenta a produção e verifica se a meta foi atingida.
     *
     * @param int $quantidade Peças produzidas neste ciclo.
     */
    public function produzir(int $quantidade): void{
        $this->quantidadeProduzida += $quantidade;

        $this->verificarProducao();
    }

    /**
     * Compara a produção com a meta e atualiza o status.
     */
    private function verificarProducao(): void{
        if($this->quantidadeProduzida >= $this->meta){
            $this->setStatusMeta();
        }
    }

    /**
     * Marca a meta como atingida.
     */
    private function setStatusMeta(): void{
        $this->metaAtingida = true;
    }

    /**
     * Informa se a meta já foi atingida (usado na condição do while).
     */
    public function isMetaAtingida(): bool{
        return $this->metaAtingida;
    }

    /**
     * Retorna o status atual da produção.
     *
     * @return string Quantidade produzida e, se for o caso, aviso de meta atingida.
     */
    public function exibirStatus(): string{
        $texto = "Quantidade produzida: {$this->quantidadeProduzida}";

        if($this->metaAtingida){
            $texto .= "<br>META DE PRODUÇÃO ATINGIDA!";
        }

        return $texto;
    }
}