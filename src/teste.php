<?php

require_once 'src/Funcionario.php';
require_once 'src/CPF.php';

$funcionario = new Funcionario('Zecaria', new CPF('123.456.789-10'), 'Matador de bugs');
var_dump($funcionario);