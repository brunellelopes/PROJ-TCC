<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Professor Model
 *
 * @method \App\Model\Entity\Professor newEmptyEntity()
 * @method \App\Model\Entity\Professor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Professor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Professor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Professor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Professor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Professor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Professor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Professor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Professor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Professor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Professor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Professor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProfessorTable extends Table
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

        $this->setTable('professor');
        $this->setDisplayField('loginProf');
        $this->setPrimaryKey('cdProf');
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
            ->integer('cdProf')
            ->allowEmptyString('cdProf', null, 'create');

        $validator
            ->scalar('loginProf')
            ->maxLength('loginProf', 15)
            ->requirePresence('loginProf', 'create')
            ->notEmptyString('loginProf');

        $validator
            ->scalar('senhaProf')
            ->maxLength('senhaProf', 10)
            ->requirePresence('senhaProf', 'create')
            ->notEmptyString('senhaProf');

        $validator
            ->scalar('nomeProf')
            ->maxLength('nomeProf', 50)
            ->requirePresence('nomeProf', 'create')
            ->notEmptyString('nomeProf');

        $validator
            ->scalar('emailProf')
            ->maxLength('emailProf', 40)
            ->requirePresence('emailProf', 'create')
            ->notEmptyString('emailProf');

        $validator
            ->scalar('celProf')
            ->maxLength('celProf', 11)
            ->allowEmptyString('celProf');

        $validator
            ->integer('cdAccount')
            ->requirePresence('cdAccount', 'create')
            ->notEmptyString('cdAccount');

        return $validator;
    }
}
