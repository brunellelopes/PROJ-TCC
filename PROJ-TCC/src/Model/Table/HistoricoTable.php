<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Historico Model
 *
 * @method \App\Model\Entity\Historico newEmptyEntity()
 * @method \App\Model\Entity\Historico newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Historico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Historico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Historico findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Historico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Historico[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Historico|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Historico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Historico[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Historico[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Historico[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Historico[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HistoricoTable extends Table
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

        $this->setTable('historico');
        $this->setDisplayField('cdHist');
        $this->setPrimaryKey('cdHist');
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
            ->integer('cdHist')
            ->allowEmptyString('cdHist', null, 'create');

        $validator
            ->scalar('versaoProj')
            ->maxLength('versaoProj', 10)
            ->allowEmptyString('versaoProj');

        $validator
            ->scalar('nmArquivo')
            ->maxLength('nmArquivo', 255)
            ->allowEmptyString('nmArquivo');

        $validator
            ->date('dtVersao')
            ->allowEmptyDate('dtVersao');

        $validator
            ->integer('cdProj')
            ->allowEmptyString('cdProj');

        return $validator;
    }
}
