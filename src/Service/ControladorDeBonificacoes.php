<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{

    private $totalBonificacoes = 0;

    public function recuperaBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }
}