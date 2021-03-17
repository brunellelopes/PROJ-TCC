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
        'loginProf' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'loginCoord' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'loginAluno' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'loginAluno2' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'loginAluno3' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'loginAluno4' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'nomeProj' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'descrProj' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'dtInicio' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dtFim' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dtApres' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'notaProj' => ['type' => 'decimal', 'length' => 3, 'precision' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'statusProj' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_Projeto_Aluno_1' => ['type' => 'index', 'columns' => ['loginAluno'], 'length' => []],
            'FK_Projeto_Aluno_2' => ['type' => 'index', 'columns' => ['loginAluno2'], 'length' => []],
            'FK_Projeto_Aluno_3' => ['type' => 'index', 'columns' => ['loginAluno3'], 'length' => []],
            'FK_Projeto_Aluno_4' => ['type' => 'index', 'columns' => ['loginAluno4'], 'length' => []],
            'FK_Projeto_Prof' => ['type' => 'index', 'columns' => ['loginProf'], 'length' => []],
            'FK_Projeto_Coord' => ['type' => 'index', 'columns' => ['loginCoord'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cdProj'], 'length' => []],
            'FK_Projeto_Prof' => ['type' => 'foreign', 'columns' => ['loginProf'], 'references' => ['professor', 'loginProf'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Projeto_Coord' => ['type' => 'foreign', 'columns' => ['loginCoord'], 'references' => ['coordenador', 'loginCoord'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Projeto_Aluno_4' => ['type' => 'foreign', 'columns' => ['loginAluno4'], 'references' => ['aluno', 'loginAluno'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Projeto_Aluno_3' => ['type' => 'foreign', 'columns' => ['loginAluno3'], 'references' => ['aluno', 'loginAluno'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Projeto_Aluno_2' => ['type' => 'foreign', 'columns' => ['loginAluno2'], 'references' => ['aluno', 'loginAluno'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Projeto_Aluno_1' => ['type' => 'foreign', 'columns' => ['loginAluno'], 'references' => ['aluno', 'loginAluno'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'loginProf' => 'Lorem ipsum d',
                'loginCoord' => 'Lorem ipsum d',
                'loginAluno' => 'Lorem ipsum d',
                'loginAluno2' => 'Lorem ipsum d',
                'loginAluno3' => 'Lorem ipsum d',
                'loginAluno4' => 'Lorem ipsum d',
                'nomeProj' => 'Lorem ipsum dolor sit amet',
                'descrProj' => 'Lorem ipsum dolor sit amet',
                'dtInicio' => '2021-03-17',
                'dtFim' => '2021-03-17',
                'dtApres' => '2021-03-17',
                'notaProj' => 1.5,
                'statusProj' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
