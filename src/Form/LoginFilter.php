<?php
/**
 * Created by PhpStorm.
 * User: Ale
 * Date: 29/12/2016
 * Time: 10:48
 */

namespace Auth\Form;


use Interop\Container\ContainerInterface;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\InputFilter\InputFilter;
use Zend\Validator\EmailAddress;
use Zend\Validator\NotEmpty;

class LoginFilter extends  InputFilter
{


    /**
     * LoginFilter constructor.
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        //############################################ informações da coluna email ##############################################:
        $this->add([
            'name' => 'email',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
                [
                    'name' => EmailAddress::class,
                    'options' => [
                        'messages' => [EmailAddress::INVALID_FORMAT => "Formato Do Email Não Esta Correto!"]
                    ],
                ],
            ],
        ]);
        //############################################ informações da coluna password ##############################################:
        $this->add([
            'name' => 'password',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
            ],
        ]);
    }
}