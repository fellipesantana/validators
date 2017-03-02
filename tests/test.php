<?php

require_once "/../vendor/autoload.php";

use FS\Validators\Cep;
use FS\Validators\CPF;
use FS\Validators\Data;
use FS\Validators\DDD;
use FS\Validators\Linha;
use FS\Validators\Nome;
use FS\Validators\UF;

$cep 	= new Cep ();
$cpf 	= new CPF ();
$data 	= new Data ();
$ddd  	= new DDD ();
$linha 	= new Linha ();
$nome  	= new Nome ();
$uf    	= new UF ();

var_dump ( $cep, $cpf, $data, $ddd, $linha, $nome, $uf );