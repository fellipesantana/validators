<?php

require_once "/../vendor/autoload.php";

use Ufox\Validators\Cep;
use Ufox\Validators\CPF;
use Ufox\Validators\Data;
use Ufox\Validators\DDD;
use Ufox\Validators\Linha;
use Ufox\Validators\Nome;
use Ufox\Validators\UF;

$cep 	= new Cep ();
$cpf 	= new CPF ();
$data 	= new Data ();
$ddd  	= new DDD ();
$linha 	= new Linha ();
$nome  	= new Nome ();
$uf    	= new UF ();

var_dump ( $cep, $cpf, $data, $ddd, $linha, $nome, $uf );