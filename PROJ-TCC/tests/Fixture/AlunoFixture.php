<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlunoFixture
 */
class AlunoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aluno';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'loginAluno' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'senhaAluno' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'matAluno' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nomeAluno' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'emailAluno' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'codAccount' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_Aluno_Account' => ['type' => 'index', 'columns' => ['codAccount'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['loginAluno'], 'length' => []],
            'matAluno' => ['type' => 'unique', 'columns' => ['matAluno', 'emailAluno'], 'length' => []],
            'FK_Aluno_Account' => ['type' => 'foreign', 'columns' => ['codAccount'], 'references' => ['accounts', 'codAccount'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'loginAluno' => '6f944a02-ab65-4c98-a3fc-5433ed1c7a97',
                'senhaAluno' => 'Lorem ip',
                'matAluno' => 1,
                'nomeAluno' => 'Lorem ipsum dolor sit amet',
                'emailAluno' => 'Lorem ipsum dolor sit amet',
                'codAccount' => 1,
            ],
        ];
        parent::init();
    }
}
