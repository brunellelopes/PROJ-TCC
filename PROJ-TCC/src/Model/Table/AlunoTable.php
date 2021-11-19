<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aluno Model
 *
 * @method \App\Model\Entity\Aluno newEmptyEntity()
 * @method \App\Model\Entity\Aluno newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aluno findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aluno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AlunoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('aluno');
        $this->setDisplayField('loginAluno');
        $this->setPrimaryKey('cdAluno');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('cdAluno')
            ->allowEmptyString('cdAluno', null, 'create');

        $validator
            ->scalar('loginAluno')
            ->maxLength('loginAluno', 15)
            ->requirePresence('loginAluno', 'create')
            ->notEmptyString('loginAluno');

        $validator
            ->scalar('senhaAluno')
            ->maxLength('senhaAluno', 10)
            ->requirePresence('senhaAluno', 'create')
            ->notEmptyString('senhaAluno');

        $validator
            ->integer('matAluno')
            ->requirePresence('matAluno', 'create')
            ->notEmptyString('matAluno');

        $validator
            ->scalar('nomeAluno')
            ->maxLength('nomeAluno', 50)
            ->requirePresence('nomeAluno', 'create')
            ->notEmptyString('nomeAluno');

        $validator
            ->scalar('emailAluno')
            ->maxLength('emailAluno', 40)
            ->requirePresence('emailAluno', 'create')
            ->notEmptyString('emailAluno');

        $validator
            ->integer('cdAccount')
            ->requirePresence('cdAccount', 'create')
            ->notEmptyString('cdAccount');

        return $validator;
    }

    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        $query
            ->select(['id', 'login', 'password', 'cdAccount'])
            ->where(['Login.active' => 1]);
    
        return $query;
    }
}
