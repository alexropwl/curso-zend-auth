<?php
/**
 * Created by PhpStorm.
 * User: Ale
 * Date: 29/12/2016
 * Time: 10:48
 */

namespace Auth\Form\Factory;


use Auth\Form\LoginForm;
use Interop\Container\ContainerInterface;

class LoginFormFactory
{
    public function __invoke(ContainerInterface $containerInterface)
    {
        return new LoginForm($containerInterface);
    }
}