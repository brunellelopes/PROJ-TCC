<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Avaliacao Model
 *
 * @method \App\Model\Entity\Avaliacao newEmptyEntity()
 * @method \App\Model\Entity\Avaliacao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Avaliacao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Avaliacao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Avaliacao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Avaliacao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Avaliacao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Avaliacao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Avaliacao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Avaliacao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Avaliacao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Avaliacao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Avaliacao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AvaliacaoTable extends Table
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

        $this->setTable('avaliacao');
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
            ->scalar('comentario')
            ->allowEmptyString('comentario');

        $validator
            ->integer('cdProj')
            ->allowEmptyString('cdProj');

        return $validator;
    }
}
