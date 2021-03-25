<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfessorFixture
 */
class ProfessorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'professor';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'cdProf' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'loginProf' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'senhaProf' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'nomeProf' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'emailProf' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'celProf' => ['type' => 'string', 'length' => 11, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'cdAccount' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_Professor_Account' => ['type' => 'index', 'columns' => ['cdAccount'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cdProf'], 'length' => []],
            'loginProf' => ['type' => 'unique', 'columns' => ['loginProf', 'emailProf'], 'length' => []],
            'FK_Professor_Account' => ['type' => 'foreign', 'columns' => ['cdAccount'], 'references' => ['accounts', 'cdAccount'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'cdProf' => 1,
                'loginProf' => 'Lorem ipsum d',
                'senhaProf' => 'Lorem ip',
                'nomeProf' => 'Lorem ipsum dolor sit amet',
                'emailProf' => 'Lorem ipsum dolor sit amet',
                'celProf' => 'Lorem ips',
                'cdAccount' => 1,
            ],
        ];
        parent::init();
    }
}
