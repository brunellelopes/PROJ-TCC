<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Login;
use Cake\Core\Configure;
use Cake\Event\EventInterface;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

use function PHPSTORM_META\type;

/**
 * Application Controller and Login Controller
 *
 * @property \App\Model\Table\CoordenadorTable $coordenador
 * @property \App\Model\Table\ProfessorTable $professor
 * @property \App\Model\Table\AlunoTable $aluno
 * @property \App\Model\Table\LoginTable $Login
 * @method \App\Model\Entity\Login[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 * @method \App\Model\Entity\Coordenador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 * @method \App\Model\Entity\Professor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])


/**
 */
class LoginController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    
    public function index()
    {
        $login = $this->paginate($this->Login);
        $session = $this->request->getSession();
        $this->set(compact('login'));
    }

    /**
     * View method
     *
     * @param string|null $id Login id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */


    public function login()
    {
        // Permite a ação display, assim nosso pages controller
        // continua a funcionar.
        $this->Auth->allow(['display']);
        $login = $this->paginate($this->Login);
        $session = $this->request->getSession();
        $usuario = $login;
        $this->set(compact('login'));
        $this->loadComponent('Flash');
        if($this->request->is('post')){
            $usuario = $this->Auth->identify();
            $acesso = $usuario;
            if($acesso['cdAccount'] === '1'){         
                $this->redirect(array('controller' => 'coordenador', 'action' => 'index')); 
            }
            else{
                $this->Flash->error(__('Usuario ou senha incorretos.'));
            } 
            $this->Flash->error(__('Preencha com o usuario e a senha.'));
        }
        /*
        if ($this->request->is('post')) {
            $log = $this->paginate($this->Login);
        $session = $this->request->getSession();
        $login = $log;
        $this->set(compact('login'));
        $this->loadComponent('Flash');
        /*if ($this->request->is('post')) {
             $usuario = $this->Auth->identify();
                $this->Auth->setUser($usuario);
                if($login('cdAccount') === 1 && $usuario('cdAccount') === 1){
                    $this->redirect(array('controller' => 'coordenador', 'action' => 'index'));      
                }
                else{
                    $this->Flash->error(__('Usuario ou senha incorretos.'));
                }
                return $this->redirect($this->Auth->redirectUrl());
                 }
            $this->Flash->error(__('Preencha com o usuario e a senha.'));
            */
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
}
