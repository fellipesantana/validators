<?php
namespace FellipeSantana\Validators;


use FellipeSantana\Validators\Contracts\AbstractValidator;

class Cep extends AbstractValidator
{
    public function __construct()
    {
        $regexp = "/(^[0-9]{8}$)|(^[0-9]{5}[-]{1}[0-9]{3}$)/";

        parent::__construct ( $regexp, "CEP Inválido." );

        return $this;
    }

    public function validate ( $attribute, $value, $parameters, $validator )
    {
        $validator->setCustomMessages ( ["cep" => $this->errorMessage] );

        return ( !starts_with ( $value, "00" ) && preg_match ( $this->regexp, $value ) );
    }
}