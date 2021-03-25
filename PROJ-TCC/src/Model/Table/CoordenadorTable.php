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
        $this->setPrimaryKey('cdCoord');
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
            ->integer('cdCoord')
            ->allowEmptyString('cdCoord', null, 'create');

        $validator
            ->scalar('loginCoord')
            ->maxLength('loginCoord', 15)
            ->requirePresence('loginCoord', 'create')
            ->notEmptyString('loginCoord');

        $validator
            ->scalar('senhaCoord')
            ->maxLength('senhaCoord', 10)
            ->requirePresence('senhaCoord', 'create')
            ->notEmptyString('senhaCoord');

        $validator
            ->scalar('nomeCoord')
            ->maxLength('nomeCoord', 50)
            ->requirePresence('nomeCoord', 'create')
            ->notEmptyString('nomeCoord');

        $validator
            ->scalar('emailCoord')
            ->maxLength('emailCoord', 40)
            ->allowEmptyString('emailCoord');

        $validator
            ->integer('cdAccount')
            ->requirePresence('cdAccount', 'create')
            ->notEmptyString('cdAccount');

        return $validator;
    }
}
