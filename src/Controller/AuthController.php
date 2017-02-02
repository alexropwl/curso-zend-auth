<?php
/**
 * Created by PhpStorm.
 * User: Ale
 * Date: 29/12/2016
 * Time: 09:31
 */

namespace Auth\Controller;


use Auth\Model\UsersRepository;
use Interop\Container\ContainerInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{
    /**
     * @var ContainerInterface
     */
    private $containerInterface;

    /**
     * AuthController constructor.
     * @param ContainerInterface $containerInterface
     */
public function __construct(ContainerInterface $containerInterface)
    {
     $this->containerInterface = $containerInterface;

    }

    public function indexAction()
    {
        if (!$this->identity()) {
            return $this->redirect()->toRoute('login');
        }
        $users=$this->containerInterface->get(UsersRepository::class)->select();
        return new ViewModel(compact(['users']));
    }

    public function createAction(){
        $name=date('His');
        $data=['name'=>"Meu Nome {$name}",'email'=>"admin@gmail.com",'password'=>md5('123456')];
        $this->containerInterface->get(UsersRepository::class)->insert($data);
        return $this->redirect()->toRoute('auth');
    }

    public function updateAction(){
        $id=$this->params()->fromRoute('id');
        $name=date('His');
        $data=['name'=>"Meu Nome {$name}",'email'=>"{$name}@gmail.com",'password'=>md5('123456')];
        $this->containerInterface->get(UsersRepository::class)->update($data,['id'=>$id]);
        return $this->redirect()->toRoute('auth');
    }

    public function deleteAction(){
        $id=$this->params()->fromRoute('id');
        $this->containerInterface->get(UsersRepository::class)->delete(['id'=>$id]);
        return $this->redirect()->toRoute('auth');
    }
}