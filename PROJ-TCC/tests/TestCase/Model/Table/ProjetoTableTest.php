<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetoTable Test Case
 */
class ProjetoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetoTable
     */
    protected $Projeto;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Projeto',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Projeto') ? [] : ['className' => ProjetoTable::class];
        $this->Projeto = $this->getTableLocator()->get('Projeto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Projeto);

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
