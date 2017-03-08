<?php

require_once "/../vendor/autoload.php";

use FellipeSantana\Validators\Cep;
use FellipeSantana\Validators\CPF;
use FellipeSantana\Validators\Data;
use FellipeSantana\Validators\DDD;
use FellipeSantana\Validators\Linha;
use FellipeSantana\Validators\Nome;
use FellipeSantana\Validators\UF;

$cep 	= new Cep ();
$cpf 	= new CPF ();
$data 	= new Data ();
$ddd  	= new DDD ();
$linha 	= new Linha ();
$nome  	= new Nome ();
$uf    	= new UF ();

var_dump ( $cep, $cpf, $data, $ddd, $linha, $nome, $uf );