<?php
/**
 * Created by PhpStorm.
 * User: Ale
 * Date: 29/12/2016
 * Time: 09:54
 */

namespace Auth\Model\Factory;


use Auth\Model\Users;
use Auth\Model\UsersRepository;
use Interop\Container\ContainerInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class UserRepositoryFactory
{
    function __invoke(ContainerInterface $containerInterface)
    {
        $resultPrototype=new ResultSet();
        $resultPrototype->setArrayObjectPrototype($containerInterface->get(Users::class));
        return new UsersRepository(new TableGateway('tbl_users',$containerInterface->get(AdapterInterface::class),null,$resultPrototype));
    }

}