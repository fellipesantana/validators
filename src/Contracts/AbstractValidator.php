<?php
namespace FellipeSantana\Validators\Contracts;

abstract class AbstractValidator
{
    /**
     * @var string
     */
    protected $regexp;

    /**
     * @var string
     */
    protected $errorMessage;

    /**
     * AbstractValidator constructor.
     * @param string $regexp
     * @param string $errorMessage
     */
    public function __construct ( $regexp, $errorMessage )
    {
        $this->regexp       = $regexp;
        $this->errorMessage = $errorMessage;
    }

    /**
     * @param $attribute
     * @param $value
     * @param $parameters
     * @param $validator
     * @return bool
     */
    public abstract function validate ( $attribute, $value, $parameters, $validator );

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage ( $errorMessage )
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * @return string
     */
    public function getErrorMessage ()
    {
        return $this->errorMessage;
    }
}