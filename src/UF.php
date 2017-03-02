<?php
namespace Ufox\Validators;


use Ufox\Validators\Contracts\UFoxValidator;

class UF extends UFoxValidator
{
    public function __construct ()
    {
        parent::__construct ( "", "UF Inválida." );
    }

    public function validate ( $attribute, $value, $parameters, $validator )
    {
        $validator->setCustomMessages ( ["uf" => $this->errorMessage] );
        $listaUFs = [
            "AC", "AL", "AP", "AM", "BA",
            "CE", "DF", "ES", "GO", "MA",
            "MT", "MS", "MG", "PA", "PB",
            "PR", "PE", "PI", "RJ", "RN",
            "RS", "RO", "RR", "SC", "SP",
            "SE", "TO"
        ];

        return in_array ( $value, $listaUFs );
    }
}