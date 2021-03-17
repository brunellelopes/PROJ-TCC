<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlunoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlunoTable Test Case
 */
class AlunoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlunoTable
     */
    protected $Aluno;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Aluno',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Aluno') ? [] : ['className' => AlunoTable::class];
        $this->Aluno = $this->getTableLocator()->get('Aluno', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Aluno);

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
