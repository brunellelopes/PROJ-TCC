<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjetoFixture
 */
class ProjetoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'projeto';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'cdProj' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cdProf' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cdCoord' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cdAluno' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cdAluno2' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cdAluno3' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cdAluno4' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nomeProj' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'descrProj' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'dtInicio' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dtFim' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dtApres' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'notaProj' => ['type' => 'decimal', 'length' => 3, 'precision' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'statusProj' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_Projeto_Aluno_1' => ['type' => 'index', 'columns' => ['cdAluno'], 'length' => []],
            'FK_Projeto_Aluno_2' => ['type' => 'index', 'columns' => ['cdAluno2'], 'length' => []],
            'FK_Projeto_Aluno_3' => ['type' => 'index', 'columns' => ['cdAluno3'], 'length' => []],
            'FK_Projeto_Aluno_4' => ['type' => 'index', 'columns' => ['cdAluno4'], 'length' => []],
            'FK_Projeto_Prof' => ['type' => 'index', 'columns' => ['cdProf'], 'length' => []],
            'FK_Projeto_Coord' => ['type' => 'index', 'columns' => ['cdCoord'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cdProj'], 'length' => []],
            'FK_Projeto_Prof' => ['type' => 'foreign', 'columns' => ['cdProf'], 'references' => ['professor', 'cdProf'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Projeto_Coord' => ['type' => 'foreign', 'columns' => ['cdCoord'], 'references' => ['coordenador', 'cdCoord'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Projeto_Aluno_4' => ['type' => 'foreign', 'columns' => ['cdAluno4'], 'references' => ['aluno', 'cdAluno'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Projeto_Aluno_3' => ['type' => 'foreign', 'columns' => ['cdAluno3'], 'references' => ['aluno', 'cdAluno'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Projeto_Aluno_2' => ['type' => 'foreign', 'columns' => ['cdAluno2'], 'references' => ['aluno', 'cdAluno'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Projeto_Aluno_1' => ['type' => 'foreign', 'columns' => ['cdAluno'], 'references' => ['aluno', 'cdAluno'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'cdProj' => 1,
                'cdProf' => 1,
                'cdCoord' => 1,
                'cdAluno' => 1,
                'cdAluno2' => 1,
                'cdAluno3' => 1,
                'cdAluno4' => 1,
                'nomeProj' => 'Lorem ipsum dolor sit amet',
                'descrProj' => 'Lorem ipsum dolor sit amet',
                'dtInicio' => '2021-05-12',
                'dtFim' => '2021-05-12',
                'dtApres' => '2021-05-12',
                'notaProj' => 1.5,
                'statusProj' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
