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
use PDO;

/**
 * Professor Controller
 *
 * @property \App\Model\Table\ProfessorTable $Professor
 * @property \App\Model\Table\ProjetoTable $Projeto
 * @method \App\Model\Entity\Professor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfessorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $professor = $this->paginate($this->Professor);

        $projeto = $this->loadModel('Projeto');
        $projeto = $this->paginate($this->Projeto);
        $this->set(compact('professor'));
        $this->set(compact('projeto'));
    }

    /**
     * View method
     *
     * @param string|null $id Professor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function view($id = null)
    {
        $professor = $this->Professor->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('professor'));
    }*/

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    /*public function add()
    {
        $professor = $this->Professor->newEmptyEntity();
        if ($this->request->is('post')) {
            $professor = $this->Professor->patchEntity($professor, $this->request->getData());
            if ($this->Professor->save($professor)) {
                $this->Flash->success(__('The professor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The professor could not be saved. Please, try again.'));
        }
        $this->set(compact('professor'));
    }*/

    /**
     * Edit method
     *
     * @param string|null $id Professor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function edit($id = null)
    {
        $professor = $this->Professor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $professor = $this->Professor->patchEntity($professor, $this->request->getData());
            if ($this->Professor->save($professor)) {
                $this->Flash->success(__('The professor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The professor could not be saved. Please, try again.'));
        }
        $this->set(compact('professor'));
    }*/

    /**
     * Delete method
     *
     * @param string|null $id Professor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $professor = $this->Professor->get($id);
        if ($this->Professor->delete($professor)) {
            $this->Flash->success(__('The professor has been deleted.'));
        } else {
            $this->Flash->error(__('The professor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);*/

    public function logout($id = null)
    {
        return $this->redirect(([
            'controller' => 'Login',
            'action' => 'logout'
        ]));
    }

    public function loadpj($id = null)
    {
        return $this->redirect([
            'controller' => 'Projeto',
            'action' => 'loadpj'
        ]);
    }
}
