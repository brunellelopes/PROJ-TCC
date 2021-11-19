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
use App\Model\Entity\Login;
use App\Model\Entity\Professor;
use Cake\Controller\Controller;
use Cake\Event\EventInterface;
use Cake\Http\Session;
use Cake\Utility\Security;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Table;
use Cake\Utility\Text;



/**
 * Application Controller
 * 
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */

class LoginTable extends Table{
    
    public function beforeSave(EventInterface $event)
    {
        $entity = $event->getData('entity');

        if ($entity->isNew()) {
            $hasher = new DefaultPasswordHasher();

            // Gera uma API 'token'
            $entity->api_key_plain = Security::hash(Security::randomBytes(32), 'sha256', false);

            // Criptografe o token para que BasicAuthenticate
            // possa verificá-lo durante o login.
            $entity->api_key = $hasher->hash($entity->api_key_plain);
        }
        return true;
    }
}

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
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Basic' => [
                    'fields' => [
                        'login' => 'login', 'password' => 'password',
                        'userModel' => 'Login'
                ],
            ],
        ],
        'loginRedirect' =>[
            'controller' => 'Login',
            'action' => 'index'
        ],
        'logoutRedirect' => [
            'controller' => 'Login',
            'action' => 'logout'
        ],
        'authError' => 'Voce precisa se autenticar para acessar!',
        'flash' => [
            'element' => 'error'
            ]
        ]);
        $this->Auth->allow(['login','index']);
        // Permite a ação display, assim nosso pages controller
        // continua a funcionar.
        /*
        * Enable the following component for recommended CakePHP form protection settings.
        * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
        */
        //$this->loadComponent('FormProtection');
    }
}