<?php
namespace Ufox\Validators;


use Ufox\Validators\Contracts\UFoxValidator;

class Nome extends UFoxValidator
{
    public function __construct ()
    {
        $regexp = "/^([\D]{2,} [\D]{1,})$/";
        parent::__construct ( $regexp, "Nome Inválido." );

        return $this;
    }

    public function validate ( $attribute, $value, $parameters, $validator )
    {
        $validator->setCustomMessages ( ["nome" => "O campo :ATTRIBUTE é inválido."] );

        return preg_match ( $this->regexp, $value );
    }
}