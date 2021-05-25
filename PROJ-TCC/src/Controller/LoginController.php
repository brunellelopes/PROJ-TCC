<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Login;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

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
    // public function index()
    // {
    //     $login = $this->paginate($this->Login);

    //     $this->set(compact('login'));
    // }

    /**
     * View method
     *
     * @param string|null $id Login id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    public function login()
    {
        $this->paginate($this->Login);
        $user = $this->Auth->identify();
        $Login = $this->loadModel('Login');
        if ($user) {
            if ($Login('cdAccount') == 1) {
                $this->Auth->redirectUrl();
            }
            /*if($user['cdAccount'] === 1){
                    return print_r($user['login']);
                }
                if($user['cdAccount'] === 2){
                    return $this->redirect($this->professor);
                }
                if($user['cdAccount'] === 3){
                    return $this->redirect($this->aluno);
                }*/
        } else {
            $this->Flash->error(__('Usuário ou senha inválido. Tente novamente.'));
        }
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
