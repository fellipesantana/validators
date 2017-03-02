<?php
namespace Ufox\Validators;


use Ufox\Validators\Contracts\UFoxValidator;

class CPF extends UFoxValidator
{
    public function __construct ()
    {
        $regexp = "/^[0-9]{11}$/";

        parent::__construct ( $regexp, "CPF Inválido." );
        return $this;
    }

    public function validate ( $attribute, $value, $parameters, $validator )
    {
        $validator->setCustomMessages ( ["cpf" => $this->errorMessage] );
        $invalidos = [
            "00000000000", "11111111111", "22222222222", "33333333333", "44444444444",
            "55555555555", "66666666666", "77777777777", "88888888888", "99999999999",
        ];

        if ( preg_match ( $this->regexp, $value ) == true && !in_array ( $value, $invalidos ) ) {

            // Algoritmo original => http://www.geradorcpf.com/script-validar-cpf-php.htm
            for ( $t = 9; $t < 11; $t++ ) {

                for ( $d = 0, $c = 0; $c < $t; $c++ ) {

                    $d += $value{$c} * ( ( $t + 1 ) - $c );
                }

                $d = ( ( 10 * $d ) % 11 ) % 10;

                if ( $value{$c} != $d ) {

                    return false;
                }
            }

            return true;
        }

        return false;
    }
}