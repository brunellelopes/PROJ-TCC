<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoordenadorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoordenadorTable Test Case
 */
class CoordenadorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoordenadorTable
     */
    protected $Coordenador;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Coordenador',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Coordenador') ? [] : ['className' => CoordenadorTable::class];
        $this->Coordenador = $this->getTableLocator()->get('Coordenador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Coordenador);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
