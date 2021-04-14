<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projeto Model
 *
 * @method \App\Model\Entity\Projeto newEmptyEntity()
 * @method \App\Model\Entity\Projeto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Projeto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projeto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projeto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Projeto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projeto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projeto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projeto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projeto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Projeto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Projeto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Projeto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProjetoTable extends Table
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

        $this->setTable('projeto');
        $this->setDisplayField('cdProj');
        $this->setPrimaryKey('cdProj');
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
            ->integer('cdProj')
            ->allowEmptyString('cdProj', null, 'create');

        $validator
            ->integer('cdProf')
            ->requirePresence('cdProf', 'create')
            ->notEmptyString('cdProf');

        $validator
            ->integer('cdCoord')
            ->requirePresence('cdCoord', 'create')
            ->notEmptyString('cdCoord');

        $validator
            ->integer('cdAluno')
            ->requirePresence('cdAluno', 'create')
            ->notEmptyString('cdAluno');

        $validator
            ->integer('cdAluno2')
            ->allowEmptyString('cdAluno2');

        $validator
            ->integer('cdAluno3')
            ->allowEmptyString('cdAluno3');

        $validator
            ->integer('cdAluno4')
            ->allowEmptyString('cdAluno4');

        $validator
            ->scalar('nomeProj')
            ->maxLength('nomeProj', 255)
            ->requirePresence('nomeProj', 'create')
            ->notEmptyString('nomeProj');

        $validator
            ->scalar('descrProj')
            ->maxLength('descrProj', 255)
            ->allowEmptyString('descrProj');

        $validator
            ->date('dtInicio')
            ->allowEmptyDate('dtInicio');

        $validator
            ->date('dtFim')
            ->allowEmptyDate('dtFim');

        $validator
            ->date('dtApres')
            ->allowEmptyDate('dtApres');

        $validator
            ->decimal('notaProj')
            ->allowEmptyString('notaProj');

        $validator
            ->scalar('statusProj')
            ->maxLength('statusProj', 20)
            ->allowEmptyString('statusProj');

        return $validator;
    }
}
