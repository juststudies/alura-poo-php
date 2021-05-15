<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, EditorVideo, Gerente};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Zeca Do Pagode', 
    new CPF('456.123.789-58'), 
     
    15000
);

$otoFuncionario = new Gerente(
    'Jamirami Zeustáquio', 
    new CPF('789.456.123-00'), 
    
    19000
);

$editor = new EditorVideo(
    'Zabuza Momochi',
    new CPF('456.789.123-50'),
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($otoFuncionario);
$controlador->adicionaBonificacaoDe($editor);

echo $controlador->recuperaBonificacoes();