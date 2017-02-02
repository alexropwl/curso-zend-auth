<?php
/**
 * Created by PhpStorm.
 * User: Ale
 * Date: 29/12/2016
 * Time: 10:42
 */

namespace Auth\Controller\Factory;


use Auth\Controller\LoginController;
use Interop\Container\ContainerInterface;

class LoginControllerFactory
{

    public function __invoke(ContainerInterface $containerInterface)
    {
        return new LoginController($containerInterface);
    }

}