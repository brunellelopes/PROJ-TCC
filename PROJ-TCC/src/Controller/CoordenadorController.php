<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\EntityInterface;
use Cake\Datasource\FactoryLocator;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\ORM\TableRegistry;
use Cake\ORM\Query;
use Cake\Core\App;
use Cake\ORM\Locator\TableLocator;

/**
 * Coordenador Controller
 *
 * @property \App\Model\Table\CoordenadorTable $Coordenador
 * @property \App\Model\Table\AlunoTable $Aluno
 * @property \App\Model\Table\ProfessorTable $Professor
 * @property \App\Model\Table\ProjetoTable $Projeto
 * @property \App\Model\Table\LoginTable $Login
 * @method \App\Model\Entity\Coordenador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 * @method \App\Model\Entity\Professor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */


class CoordenadorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $aluno = $this->loadModel('Aluno');
        $professor = $this->loadModel('Professor');
        $login = $this->loadModel('Login');
        $projeto = $this->loadModel('Projeto');
        $coordenador = $this->paginate($this->Coordenador);
        $professor = $this->paginate($this->Professor);
        $aluno = $this->paginate($this->Aluno);
        $login = $this->paginate($this->Login);
        $projeto = $this->paginate($this->Projeto);
        $this->set(compact('coordenador'));
        $this->set(compact('professor'));
        $this->set(compact('aluno'));
        $this->set(compact('login'));
        $this->set(compact('projeto'));
    }

    /**
     * View method
     *
     * @param string|null $id Coordenador id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coordenador = $this->Coordenador->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('coordenador'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coordenador = $this->Coordenador->newEmptyEntity();
        if ($this->request->is('post')) {
            $coordenador = $this->Coordenador->patchEntity($coordenador, $this->request->getData());
            if ($this->Coordenador->save($coordenador)) {
                $this->Flash->success(__('The coordenador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordenador could not be saved. Please, try again.'));
        }
        $this->set(compact('coordenador'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coordenador id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coordenador = $this->Coordenador->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coordenador = $this->Coordenador->patchEntity($coordenador, $this->request->getData());
            if ($this->Coordenador->save($coordenador)) {
                $this->Flash->success(__('The coordenador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordenador could not be saved. Please, try again.'));
        }
        $this->set(compact('coordenador'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coordenador id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coordenador = $this->Coordenador->get($id);
        if ($this->Coordenador->delete($coordenador)) {
            $this->Flash->success(__('The coordenador has been deleted.'));
        } else {
            $this->Flash->error(__('The coordenador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function addp(){
        $professor = $this->loadModel('Professor');
        $login = $this->loadModel('Login');
        $professor = $this->Professor->newEmptyEntity();
        if ($this->request->is('post')) {//Registra o evento de post para enviar os dados pro banco
            $professor = $this->Professor->patchEntity($professor, $this->request->getData());
            //variavel professor recebeu os dados do formulario por meio do request ser post 
            if ($this->Login->save($this->Professor['loginProf'])) {
                //$this->Flash->success(__('The professor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The professor could not be saved. Please, try again.'));
        }
        $this->set(compact('professor')); 
    }

    public function editp($id = null){
        $professor = $this->loadModel('Professor');
        $login = $this->loadModel('Login');
        $professor = $this->Professor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $professor = $this->Professor->patchEntity($professor, $this->request->getData());
            if ($this->Professor->save($professor)) {
                $this->Login->save($login);
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('professor'));
    }

    public function adda($id = null){
        $aluno = $this->loadModel('Aluno');
        $login = $this->loadModel('Login');
        $aluno = $this->Aluno->newEmptyEntity();
        if ($this->request->is('post')) {
            $professor = $this->Aluno->patchEntity($aluno, $this->request->getData());
            if ($this->Aluno->save($aluno)) {
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The Aluno could not be saved. Please, try again.'));
        }
        $this->set(compact('aluno')); 
    }

    public function edita($id = null){
        $aluno = $this->loadModel('Aluno');
        $login = $this->loadModel('Login');
        $aluno = $this->Aluno->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aluno = $this->Aluno->patchEntity($aluno, $this->request->getData());
            if ($this->Aluno->save($aluno)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('aluno'));
    }

    public function addpj($id = null){
        $projeto = $this->loadModel('Projeto');
        $projeto = $this->Projeto->newEmptyEntity();
        if ($this->request->is('post')) {
            $projeto = $this->Projeto->patchEntity($projeto, $this->request->getData());
            if ($this->Projeto->save($projeto)) {
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The Aluno could not be saved. Please, try again.'));
        }
        $this->set(compact('projeto')); 
    }

    public function editpj($id = null){
        $projeto = $this->loadModel('Projeto');
        $projeto = $this->Projeto->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projeto = $this->Projeto->patchEntity($projeto, $this->request->getData());
            if ($this->Projeto->save($projeto)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('projeto'));
    }

    
    public function logout($id = null){
        return $this->redirect(([
            'controller' => 'Login',
            'action' => 'logout'
        ]));
    }
}
