<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Coordenador Controller
 *
 * @property \App\Model\Table\CoordenadorTable $Coordenador
 * @method \App\Model\Entity\Coordenador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
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
        $coordenador = $this->paginate($this->Coordenador);

        $this->set(compact('coordenador'));
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
                $this->Flash->success(__('O aluno foi adicionado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar o Coordenador. Por favor, verifique os dados ou entre em contato com o administrador.'));
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
}
