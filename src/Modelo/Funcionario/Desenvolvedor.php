<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeNivel():void
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}