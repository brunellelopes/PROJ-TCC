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
use Cake\I18n\Time;

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

    public function addp()
    {
        $querys = TableRegistry::getTableLocator()->get('Professor');
        $login = $this->loadModel('Login');
        $login = $this->Login->newEmptyEntity();
        if ($this->request->is('post')) {
            //Registra o evento de post para enviar os dados pro banco
            $login = $this->Login->patchEntity($login, $this->request->getData());
            if ($this->Login->save($login)) {
                $professor = $querys->query();
                $professor->insert(
                    ['loginProf', 'senhaProf', 'nomeProf', 'emailProf', 'celProf', 'cdAccount'])
                    ->values([
                        'loginProf' => $login['login'],
                        'senhaProf' => $login['password'],
                        'nomeProf' =>  "nome",
                        'emailProf' => "email",
                        'celProf' => "cel",
                        'cdAccount' => 2
                        ])->execute();
                $this->Flash->success(__('O professor foi salvo com sucesso.'));
                return $this->redirect(['Controller' => 'coordenador','action' => 'index']);
            }
            $this->Flash->error(__('O professor não pode ser salvo em nossa base de dados. Por favor, tente novamente.'));
        }
        $this->set(compact('login'));
    }

    public function editp($id = null)
    {
        $querys = TableRegistry::getTableLocator()->get('Professor');
        $login = $this->loadModel('Login');
        $login = $this->Professor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is('post')) {
            $login = $this->Professor->patchEntity($login, $this->request->getData());
            if ($this->Professor->save($login)) {
                $professor = $querys->query();
                $professor->update(
                    ['nomeProf', 'senhaProf', 'celProf']
                ) ->values([
                    'nomeProf' => $login['login'],
                    'senhaProf' => $login['password'],
                    'celProf' => $login['cel']
                ])->execute();
                $this->Login->save($login);
                return $this->redirect(['Controller' => 'coordenador','action' => 'index']);
            }
        }
        $this->set(compact('professor'));
    }

    public function adda()
    {
        $querys = TableRegistry::getTableLocator()->get('Aluno');
        $login = $this->loadModel('Login');
        $login = $this->Login->newEmptyEntity();
        if ($this->request->is('post')) {
            //Registra o evento de post para enviar os dados pro banco
            $login = $this->Login->patchEntity($login, $this->request->getData());
            if ($this->Login->save($login)) {
                $aluno = $querys->query();
                $aluno->insert(
                    ['loginAluno', 'senhaAluno','matAluno', 'nomeAluno', 'emailAluno', 'cdAccount'])
                    ->values([
                        'loginAluno' => $login['login'],
                        'senhaAluno' => $login['password'],
                        'matAluno' =>  $login['mat'],
                        'nomeAluno' => $login['nome'],
                        'emailAluno' => $login['email'],
                        'cdAccount' => 3
                        ])->execute();
                $this->Flash->success(__('O aluno foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Aluno não pode ser salvo em nossa base de dados. Por favor, tente novamente.'));
        }
        $this->set(compact('login'));
    }

    public function editA($id = null)
    {
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

    public function addpj($id = null)
    {
        $query = TableRegistry::getTableLocator()->get('Projeto');
        $projeto = $this->loadModel('Projeto');
        $projeto = $this->Projeto->newEmptyEntity();
        if ($this->request->is('post')) {
            $projeto = $this->Projeto->patchEntity($projeto, $this->request->getData());
            if ($this->Projeto->save($projeto)) {
                $projeto = $query->query();
                $projeto->insert(
                    ['cdProf', 'cdCoord', 'cdAluno', 'cdAluno2', 'cdAluno3'. 'cdAluno4', 'nomeProj', 'descProj',
                    'dtInicio', 'dtFim', 'dtApres', 'statusProj'])
                    ->values([
                        'cdProf' => $projeto['cdProf'],
                        'cdCoord' => $projeto['cdCoord'],
                        'cdAluno' => $projeto['cdAluno'],
                        'cdAluno2' =>  $projeto['cdAluno2'],
                        'cdAluno3' => $projeto['cdAluno3'],
                        'cdAluno4' => $projeto['cdAluno4'],
                        'nomeProj' => $projeto['nomeProj'],
                        'descProj' => $projeto['descProj'],
                        'dtInicio' => $projeto['dtInicio']->date,
                        'dtFim' => $projeto['dtFim']->date,
                        'dtApres' => $projeto['dtApres']->date,
                        'statusProj' => $projeto['statusProj']->value,
                        ])->execute();
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro e o projeto não pode ser salvo corretamente. Por favor, verifique os dados.'));
        }
        $this->set(compact('projeto'));
    }

    public function editpj($id = null)
    {
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


    public function logout($id = null)
    {
        return $this->redirect(([
            'controller' => 'Login',
            'action' => 'login'
        ]));
    }
}
