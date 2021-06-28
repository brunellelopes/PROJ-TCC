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
        'cdAluno' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'loginAluno' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'senhaAluno' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'matAluno' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nomeAluno' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'emailAluno' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'cdAccount' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_Aluno_Account' => ['type' => 'index', 'columns' => ['cdAccount'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cdAluno'], 'length' => []],
            'loginAluno' => ['type' => 'unique', 'columns' => ['loginAluno', 'matAluno', 'emailAluno'], 'length' => []],
            'FK_Aluno_Login' => ['type' => 'foreign', 'columns' => ['loginAluno'], 'references' => ['login', 'login'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Aluno_Account' => ['type' => 'foreign', 'columns' => ['cdAccount'], 'references' => ['accounts', 'cdAccount'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'cdAluno' => 1,
                'loginAluno' => 'Lorem ipsum d',
                'senhaAluno' => 'Lorem ip',
                'matAluno' => 1,
                'nomeAluno' => 'Lorem ipsum dolor sit amet',
                'emailAluno' => 'Lorem ipsum dolor sit amet',
                'cdAccount' => 1,
            ],
        ];
        parent::init();
    }
}
