<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Aluno;

/**
 * Aluno Controller
 *
 * @property \App\Model\Table\AlunoTable $Aluno
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlunoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $aluno = $this->paginate($this->Aluno);
        $this->set(compact('aluno'));
    }

    /**
     * View method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aluno = $this->Aluno->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('aluno'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aluno = $this->Aluno->newEmptyEntity();
        if ($this->request->is('post')) {
            $aluno = $this->Aluno->patchEntity($aluno, $this->request->getData());
            if ($this->Aluno->save($aluno)) {
                $this->Flash->success(__('The aluno has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
        }
        $this->set(compact('aluno'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aluno = $this->Aluno->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aluno = $this->Aluno->patchEntity($aluno, $this->request->getData());
            if ($this->Aluno->save($aluno)) {
                $this->Flash->success(__('The aluno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
        }
        $this->set(compact('aluno'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aluno = $this->Aluno->get($id);
        if ($this->Aluno->delete($aluno)) {
            $this->Flash->success(__('The aluno has been deleted.'));
        } else {
            $this->Flash->error(__('The aluno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function mural()
    {
        //
    }


    public function viewDocs($obj = null)
    {
        $doc = $obj;
        switch ($doc) {
            case 1:
                //Ver historico
                $this->request->getQuery("SELECT * FROM historico WHERE id= 3");
                break;
            case 2:
                //ver doc enviado
                //$this->request-> --Inserir comando para localizar todos os arquivos de uma pasta 
                break;
        }
    }

    /*public function isAuthorized($user)
    {
        $action = $this->request->params['action'];

        // As ações add e index são permitidas sempre.
        if (in_array($action, ['index'])) {
            return true;
        }
        // Todas as outras ações requerem um id.
        if (!$this->request->getParam('pass.3')) {
            return false;
        }

        // Checa se o bookmark pertence ao user atual.
        $id = $this->request->getParam('pass.0');
        $aluno = $this->Aluno->get($id);
        if ($aluno->user_id == $user['id']) {
            return true;
        }
        return parent::isAuthorized($user);
    }*/


    public function logout($id = null)
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect(([
            'controller' => 'Login',
            'action' => 'login'
        ]));
    }
}
