<?php
/**
 * Created by PhpStorm.
 * User: Ale
 * Date: 29/12/2016
 * Time: 10:49
 */

namespace Auth\Form\Factory;


use Auth\Form\LoginFilter;
use Interop\Container\ContainerInterface;

class LoginFilterFactory
{

    public function __invoke(ContainerInterface $containerInterface)
    {
       return new LoginFilter($containerInterface);
    }
}