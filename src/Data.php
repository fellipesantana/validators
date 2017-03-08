<?php
namespace FellipeSantana\Validators;


use FellipeSantana\Validators\Contracts\AbstractValidator;
use Carbon\Carbon;

class Data extends AbstractValidator
{
    public function __construct ()
    {
        parent::__construct ( "", "O campo :ATTRIBUTE não possui uma data válida." );
        return $this;
    }

    public function validate ( $attribute, $value, $parameters, $validator )
    {
        $validator->setCustomMessages ( ["data" => $this->errorMessage] );

        $formato  = null;
        $formatos = [
            [ "format" => "d/m/Y", "regexp" => "/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}$/" ],
            [ "format" => "d-m-Y", "regexp" => "/^[0-9]{2}[-]{1}[0-9]{2}[-]{1}[0-9]{4}$/" ],
            [ "format" => "Y-m-d", "regexp" => "/^[0-9]{4}[-]{1}[0-9]{2}[-]{1}[0-9]{2}$/" ]
        ];

        for ( $i = 0; $i < count ( $formatos ); $i++ ) {

            if ( preg_match ( $formatos[$i]["regexp"], $value ) ) {

                $formato = $formatos[$i]["format"];
                break;
            }
        }

        if ( !empty ( $formato ) ) {

            try {

                $data = Carbon::createFromFormat ( $formato, $value )->format ( $formato );

                if ( $data == $value ) {

                    return true;
                }

            } catch ( \Exception $e ) {}
        }

        return false;
    }
}