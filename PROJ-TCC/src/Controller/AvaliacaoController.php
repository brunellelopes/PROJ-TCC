<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Avaliacao Controller
 *
 * @property \App\Model\Table\AvaliacaoTable $Avaliacao
 * @method \App\Model\Entity\Avaliacao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AvaliacaoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $avaliacao = $this->paginate($this->Avaliacao);

        $this->set(compact('avaliacao'));
    }

    /**
     * View method
     *
     * @param string|null $id Avaliacao id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avaliacao = $this->Avaliacao->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('avaliacao'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avaliacao = $this->Avaliacao->newEmptyEntity();
        if ($this->request->is('post')) {
            $avaliacao = $this->Avaliacao->patchEntity($avaliacao, $this->request->getData());
            if ($this->Avaliacao->save($avaliacao)) {
                $this->Flash->success(__('The avaliacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avaliacao could not be saved. Please, try again.'));
        }
        $this->set(compact('avaliacao'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Avaliacao id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avaliacao = $this->Avaliacao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avaliacao = $this->Avaliacao->patchEntity($avaliacao, $this->request->getData());
            if ($this->Avaliacao->save($avaliacao)) {
                $this->Flash->success(__('The avaliacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avaliacao could not be saved. Please, try again.'));
        }
        $this->set(compact('avaliacao'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Avaliacao id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avaliacao = $this->Avaliacao->get($id);
        if ($this->Avaliacao->delete($avaliacao)) {
            $this->Flash->success(__('The avaliacao has been deleted.'));
        } else {
            $this->Flash->error(__('The avaliacao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
