<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
// $diretor = new Diretor(
//     'Espiroqueta Enfadonha',
//     new CPF('132.456.789-55'),
//     5500
// );

$gerente = new Gerente(
    'Zezo Manéas',
    new CPF('456.123.789-50'),
    5500
);

$autenticador->tentaLogin($gerente, '4321');