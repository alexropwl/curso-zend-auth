<?php
/**
 * Created by PhpStorm.
 * User: Ale
 * Date: 29/12/2016
 * Time: 10:48
 */

namespace Auth\Form;


use Interop\Container\ContainerInterface;
use Zend\Form\Form;

class LoginForm extends Form
{
    public function __construct(ContainerInterface $containerInterface,$name="Login", array $options=[])
    {
        parent::__construct($name, $options);
        $this->setInputFilter($containerInterface->get(LoginFilter::class));
        $this->setAttribute('action','login');
        $this->setAttribute('class','form-signin');
        $this->add(['name'=>'email',
        'type'=>'email',
        'options'=>[
            'label'=>'E-Mail'
        ],
        'attributes'=>[
            'id'=>'email',
            'required'=>true,
            'class'=>'form-control',
            'placeholder'=>'Digite Seu E-Mail'
        ]]);

        $this->add(['name'=>'password',
            'type'=>'password',
            'options'=>[
                'label'=>'Senha'
            ],
            'attributes'=>[
                'id'=>'password',
                'required'=>true,
                'class'=>'form-control',
                'placeholder'=>'Digite Sua Senha'
            ]]);

    }


}