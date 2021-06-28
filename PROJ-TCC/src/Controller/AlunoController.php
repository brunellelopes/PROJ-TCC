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

    public function painel(){
        //MESMA FUNCAO DO INDEX
    }

    public function mural(){
        //
    }

    public function addDoc($doc = null){
        $send = $doc;
        //RECEBER O PARAMETRO DO OBJETO A SER ENVIADO
        //FAZER O ENVIO DO OBJETO PARA O BANCO DE DADOS,OU ENVIAR O NOME PARA O BANCO 
        //E ARMAZENAR O ARQUIVO EM UM LOCAL DE ARMAZENAMENTO
    }

    public function viewDoc(){
        //ARCHTETCTURE
            //DEFINIR UMA VARIAVEL DE CONTROLE
            //SWITCH CASE()
            //CASE 1: --VISUALIZAR HISTORICO
                //QUERY PRA VISUALIUZAR
            //CASE 2: --VISUALIZAR DOCUMENTO ENVIADO
                //QUERY PARA VISUALIZAR OU APENAR RESGATAR O DOCUMENTO
    }


    public function logout($id = null){
        $this->Flash->success('You are now logged out.');
        return $this->redirect(([
            'controller' => 'Users',
            'action' => 'login'
        ]));
    }
}
