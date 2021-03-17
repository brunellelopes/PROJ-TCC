<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coordenador Model
 *
 * @method \App\Model\Entity\Coordenador newEmptyEntity()
 * @method \App\Model\Entity\Coordenador newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Coordenador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coordenador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Coordenador findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Coordenador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Coordenador[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coordenador|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coordenador saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coordenador[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Coordenador[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Coordenador[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Coordenador[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CoordenadorTable extends Table
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

        $this->setTable('coordenador');
        $this->setDisplayField('loginCoord');
        $this->setPrimaryKey('loginCoord');
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
            ->scalar('loginCoord')
            ->maxLength('loginCoord', 15)
            ->allowEmptyString('loginCoord', null, 'create');

        $validator
            ->scalar('senhaCoord')
            ->maxLength('senhaCoord', 10)
            ->requirePresence('senhaCoord', 'create')
            ->notEmptyString('senhaCoord');

        $validator
            ->scalar('nomeCoord')
            ->maxLength('nomeCoord', 50)
            ->allowEmptyString('nomeCoord');

        $validator
            ->scalar('emailCoord')
            ->maxLength('emailCoord', 40)
            ->allowEmptyString('emailCoord')
            ->add('emailCoord', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('codAccount')
            ->requirePresence('codAccount', 'create')
            ->notEmptyString('codAccount');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['emailCoord']), ['errorField' => 'emailCoord']);

        return $rules;
    }
}
