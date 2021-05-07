<?php

namespace Alura\Banco\Modelo;

require_once 'src/Pessoa.php';
class Funcionario extends Pessoa{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo){
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string{
        return $this->cargo;
    }
}