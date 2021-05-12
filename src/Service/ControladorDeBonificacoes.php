<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

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