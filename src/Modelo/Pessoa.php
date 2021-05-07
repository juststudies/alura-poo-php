<?php

namespace Modelo;

class Pessoa{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf){
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function recuperaNome():string{
        return $this->nome;
    }

    protected function recuperaCpf():string{
        return $this->cpf->recuperaNumero();
    }
}