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
        $this->loadComponent('Auth', [
                'Form' => [
                    'fields' => [
                        'username' => 'login',
                        'password' => 'senha'
                    ]
                ],
                'authorize'=>[
                    'Controller',
                ],
            'loginAction' => [
                'action' => 'login',
                'authError' => 'Você deve fazer login para ter acesso a essa área!',
                'loginError'=> 'Combinação de usuário e senha errada!'
            ],
            'logoutAction' =>[
                'controller' => 'Users',
                'action' => 'logout'
            ]
        ]);
        $this->loadComponent('Flash');
        $this->Auth->allow(['Coordeador','Professor','Aluno']);

        // Permite a ação display, assim nosso pages controller
        // continua a funcionar.
        /*
        * Enable the following component for recommended CakePHP form protection settings.
        * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
        */
        //$this->loadComponent('FormProtection');
    }
    
    public function isAuthorized($user = null){
         // Qualquer usuário registrado pode acessar funções públicas
        if (!$this->request->getParam('prefix')) {
            return true;
        }
        // Somente administradores podem acessar funções 
        if ($this->request->getParam('prefix') === 'Coordenador') {
            return (bool)($user['role'] === 'Coordenador');
        }
        if ($this->request->getParam('prefix') === 'Professor') {
            return (bool)($user['role'] === 'Professor');
        }
        if ($this->request->getParam('prefix') === 'Aluno') {
            return (bool)($user['role'] === 'Aluno');
        }

        // Negação padrão
        return false;
    }
}
