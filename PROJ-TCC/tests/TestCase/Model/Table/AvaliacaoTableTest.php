<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AvaliacaoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AvaliacaoTable Test Case
 */
class AvaliacaoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AvaliacaoTable
     */
    protected $Avaliacao;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Avaliacao',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Avaliacao') ? [] : ['className' => AvaliacaoTable::class];
        $this->Avaliacao = $this->getTableLocator()->get('Avaliacao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Avaliacao);

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
