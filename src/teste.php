<?php

use Alura\Banco\Modelo\Conta\Conta;
// use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('123.456.789-10'),
        'Niconho Maroto',
        new Endereco('Cidade de Townsville', 'Centro', 'Travessa dos travessados', '606')
    )
);

$conta->depositar(500);
$conta->sacar(110);

echo $conta->recuperaSaldo();