<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgressTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgressTable Test Case
 */
class ProgressTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgressTable
     */
    protected $Progress;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Progress',
        'app.Students',
        'app.Courses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Progress') ? [] : ['className' => ProgressTable::class];
        $this->Progress = $this->getTableLocator()->get('Progress', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Progress);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProgressTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
