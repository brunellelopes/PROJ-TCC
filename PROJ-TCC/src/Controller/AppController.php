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

use App\Model\Entity\Aluno;
use App\Model\Entity\Coordenador;
use App\Model\Entity\Professor;
use Cake\Controller\Controller;
use Cake\Event\EventInterface;
use Cake\Http\Session;



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

    public function isAuthorized($user)
    {
        // Here is where we should verify the role and give access based on role

        return true;
    }
    
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => 'Controller',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'login',
                        'password' => 'password'
                    ]
                ],
            ],
            'loginAction' => [
                'plugin' => false,
                'controller' => 'Login',
                'action' => 'login'
            ],
            'logoutRedirect' => [
                'plugin' => null,
                'controller' => 'Login',
                'action' => 'logout'
            ],
            'unauthorizedRedirect' => [
                'controller' => 'Login',
                'action' => 'login',
                'prefix' => false
            ],
            'authError' => 'Voce precisa se autenticar para acessar!',
            'flash' => [
                'element' => 'error'
            ]
        ]);
        // Always enable the CSRF component.

        // Allow the display action so our pages controller
        // continues to work.
        $this->Auth->allow(['display']);
    }
    // Permite a ação display, assim nosso pages controller
    // continua a funcionar.
    /*
        * Enable the following component for recommended CakePHP form protection settings.
        * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
        */
}
