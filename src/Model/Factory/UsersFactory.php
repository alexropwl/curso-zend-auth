<?php
/**
 * Created by PhpStorm.
 * User: Ale
 * Date: 29/12/2016
 * Time: 09:54
 */

namespace Auth\Model\Factory;


use Auth\Model\Users;
use Interop\Container\ContainerInterface;

class UsersFactory
{

    public function __invoke(ContainerInterface $containerInterface)
    {
        return new Users();
    }
}