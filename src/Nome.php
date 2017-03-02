<?php
namespace FS\Validators;


use FS\Validators\Contracts\AbstractValidator;

class Nome extends AbstractValidator
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