<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco(
    'Petrópolis',
    'bairro qualquer',
    'Minha rua',
    '71b'
);

$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua aí',
    '50'
);

$umEndereco->rua = 'Rua com um nome maroto';



echo $umEndereco . PHP_EOL;
echo $outroEndereco;