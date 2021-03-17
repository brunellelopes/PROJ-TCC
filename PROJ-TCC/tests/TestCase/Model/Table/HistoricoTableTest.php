<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoricoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoricoTable Test Case
 */
class HistoricoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoricoTable
     */
    protected $Historico;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Historico',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Historico') ? [] : ['className' => HistoricoTable::class];
        $this->Historico = $this->getTableLocator()->get('Historico', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Historico);

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
}
