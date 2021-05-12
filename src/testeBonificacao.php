<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Zeca Do Pagode', 
    new CPF('456.123.789-58'), 
    'Manipulador de mentes fracas', 
    15000
);

$otoFuncionario = new Gerente(
    'Jamirami Zeustáquio', 
    new CPF('789.456.123-00'), 
    'Gerente', 
    19000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($otoFuncionario);

echo $controlador->recuperaBonificacoes();