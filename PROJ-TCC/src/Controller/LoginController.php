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
 * @property \App\Model\Table\loginTable $login
 * @method \App\Model\Entity\Login[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 * @method \App\Model\Entity\Coordenador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 * @method \App\Model\Entity\Professor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])

/**
 */
class LoginController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['controller' => 'Coordenador', 'action' => 'index']);
            } else {
                $this->Flash->error('Usuario ou senha incorretos.');
            }
        }
    }

    public function index()
    {
        $login = $this->paginate($this->Login);
        $this->set(compact('login'));
    }

    /**
     * View method
     *
     * @param string|null $id Login id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    public function beforeFilter(EventInterface $event)
    {

        //Verifica se ocorreu erro de autenticaçao
        if (!$this->Auth->user()) {
            $this->Auth->setConfig('authError', false);
            $this->Auth->setConfig('authError', "Oops. Você nao tem autorizaçao para acessar essa página.");
        }
    }

    public function add()
    {
        $login = $this->Login->newEmptyEntity();
        if ($this->request->is('post')) {
            $login = $this->Login->patchEntity($login, $this->request->getData());
            if ($this->Login->save($login)) {
                $this->Flash->success(__('The login has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The login could not be saved. Please, try again.'));
        }
        $this->set(compact('login'));
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
