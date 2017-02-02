<?php
/**
 * Created by PhpStorm.
 * User: Ale
 * Date: 29/12/2016
 * Time: 09:34
 */

namespace Auth\Controller\Factory;


use Auth\Controller\AuthController;
use Interop\Container\ContainerInterface;

class AuthControllerFactory
{

    public function __invoke(ContainerInterface $containerInterface)
    {
       return new AuthController($containerInterface);
    }
}