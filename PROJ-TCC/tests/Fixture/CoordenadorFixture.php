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
        'cdCoord' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'loginCoord' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'senhaCoord' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'nomeCoord' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'emailCoord' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'cdAccount' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_Coordenador_Account' => ['type' => 'index', 'columns' => ['cdAccount'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cdCoord'], 'length' => []],
            'loginCoord' => ['type' => 'unique', 'columns' => ['loginCoord', 'emailCoord'], 'length' => []],
            'FK_Coordenador_Account' => ['type' => 'foreign', 'columns' => ['cdAccount'], 'references' => ['accounts', 'cdAccount'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'cdCoord' => 1,
                'loginCoord' => 'Lorem ipsum d',
                'senhaCoord' => 'Lorem ip',
                'nomeCoord' => 'Lorem ipsum dolor sit amet',
                'emailCoord' => 'Lorem ipsum dolor sit amet',
                'cdAccount' => 1,
            ],
        ];
        parent::init();
    }
}
