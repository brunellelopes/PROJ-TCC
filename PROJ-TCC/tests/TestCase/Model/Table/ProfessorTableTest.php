<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfessorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfessorTable Test Case
 */
class ProfessorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfessorTable
     */
    protected $Professor;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Professor',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Professor') ? [] : ['className' => ProfessorTable::class];
        $this->Professor = $this->getTableLocator()->get('Professor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Professor);

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
