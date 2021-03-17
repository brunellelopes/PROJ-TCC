<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoordenadorFixture
 */
class CoordenadorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'coordenador';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'loginCoord' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'senhaCoord' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'nomeCoord' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'emailCoord' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'codAccount' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_Coordenador_Account' => ['type' => 'index', 'columns' => ['codAccount'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['loginCoord'], 'length' => []],
            'emailCoord' => ['type' => 'unique', 'columns' => ['emailCoord'], 'length' => []],
            'FK_Coordenador_Account' => ['type' => 'foreign', 'columns' => ['codAccount'], 'references' => ['accounts', 'codAccount'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'loginCoord' => 'a2eeb8bc-70e7-4e5c-bd2d-0dca41df6a69',
                'senhaCoord' => 'Lorem ip',
                'nomeCoord' => 'Lorem ipsum dolor sit amet',
                'emailCoord' => 'Lorem ipsum dolor sit amet',
                'codAccount' => 1,
            ],
        ];
        parent::init();
    }
}
