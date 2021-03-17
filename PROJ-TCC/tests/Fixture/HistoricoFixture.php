<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HistoricoFixture
 */
class HistoricoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'historico';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'versaoProj' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'nmArquivo' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'dtVersao' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'cdProj' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_Historico_cdProj' => ['type' => 'index', 'columns' => ['cdProj'], 'length' => []],
        ],
        '_constraints' => [
            'FK_Historico_cdProj' => ['type' => 'foreign', 'columns' => ['cdProj'], 'references' => ['projeto', 'cdProj'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'versaoProj' => 'Lorem ip',
                'nmArquivo' => 'Lorem ipsum dolor sit amet',
                'dtVersao' => '2021-03-17',
                'cdProj' => 1,
            ],
        ];
        parent::init();
    }
}
