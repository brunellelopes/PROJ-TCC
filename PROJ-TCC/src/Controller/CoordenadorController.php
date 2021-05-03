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
        $coordenador = $this->paginate($this->Coordenador);
        $professor = $this->paginate($this->Professor);
        $aluno = $this->paginate($this->Aluno);
        $this->set(compact('coordenador'));
        $this->set(compact('professor'));
        $this->set(compact('aluno'));
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
        $professor = $this->Professor->newEmptyEntity();
        if ($this->request->is('post')) {
            $professor = $this->Professor->patchEntity($professor, $this->request->getData());
            if ($this->Professor->save($professor)) {
                //$this->Flash->success(__('The professor has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The professor could not be saved. Please, try again.'));
        }
        $this->set(compact('professor')); 
    }

    public function editp($id = null){
        $professor = $this->loadModel('Professor');
        $professor = $this->Professor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $professor = $this->Professor->patchEntity($professor, $this->request->getData());
            if ($this->Professor->save($professor)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('professor'));
    }

    public function addAluno($id = null){

    }

    
    public function logout($id = null){
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }
}
