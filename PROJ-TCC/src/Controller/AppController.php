<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        /*$this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);*/
        $this->loadComponent('Flash');

        // Permite a ação display, assim nosso pages controller
        // continua a funcionar.
        //$this->Auth->allow(['display']);
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    public function Login(){
        if ($this->request->is('post')) {
            $coordenador = $this->Auth->identify();
            $professor = $this->Auth->identify();
            $aluno = $this->Auth->identify();
            if ($coordenador) {
                $this->Auth->setUser($coordenador);
                return $this->redirect($this->Auth->redirectUrl());
            }else if($professor){
                $this->Auth->setUser($professor);
                return $this->redirect($this->Auth->redirectUrl());
            }else if($aluno){
                $this->Auth->setUser($aluno);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Usuario e/ou senha incorretos.');
            
        }
    }
}
