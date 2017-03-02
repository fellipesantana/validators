<?php
namespace Ufox\Validators;


use Ufox\Validators\Contracts\UFoxValidator;

class Linha extends UFoxValidator
{
    public function __construct()
    {
        $regexp = "/^([0-9]{10,11})$/";
        parent::__construct ( $regexp, "Linha Inválida." );

        return $this;
    }

    public function validate ( $attribute, $value, $parameters, $validator )
    {
        $valido = false;
        if ( strlen ( $value ) >= 10 && strlen ( $value ) <= 11 && preg_match ( $this->regexp, $value ) ) {

            $telefone       = substr ( $value, 2, strlen ( $value ) );
            $regexpTelefone = "/(^([2-8]{1}|[7]{1})[0-9]{7}$)|(^[9]{1}[0-9]{8}$)/";

            $validatorDDD   = new DDD ();

            if ( $validatorDDD->validate ( $attribute, substr ( $value, 0, 2 ), $parameters, $validator ) == false ) {

                $this->setErrorMessage ( $validatorDDD->getErrorMessage () );
            } else if ( preg_match ( $regexpTelefone, $telefone ) == false ) {

                $this->setErrorMessage ( "Telefone Inválido." );
            } else {

                $valido = true;
            }
        }

        $validator->setCustomMessages ( ["linha" => $this->errorMessage] );
        return $valido;
    }
}