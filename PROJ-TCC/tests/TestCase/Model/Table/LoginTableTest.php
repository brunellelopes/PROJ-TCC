<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LoginTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LoginTable Test Case
 */
class LoginTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LoginTable
     */
    protected $Login;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Login',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Login') ? [] : ['className' => LoginTable::class];
        $this->Login = $this->getTableLocator()->get('Login', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Login);

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
