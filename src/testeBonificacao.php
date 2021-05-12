<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Funcionario, CPF};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
    'Zeca Do Pagode', 
    new CPF('456.123.789-58'), 
    'Manipulador de mentes fracas', 
    15000
);

$otoFuncionario = new Funcionario(
    'Jamirami Zeustáquio', 
    new CPF('789.456.123-00'), 
    'RH', 
    19000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($otoFuncionario);

echo $controlador->recuperaBonificacoes();