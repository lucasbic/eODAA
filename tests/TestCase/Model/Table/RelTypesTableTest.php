<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RelTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RelTypesTable Test Case
 */
class RelTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RelTypesTable
     */
    public $RelTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rel_types',
        'app.users_courses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RelTypes') ? [] : ['className' => RelTypesTable::class];
        $this->RelTypes = TableRegistry::getTableLocator()->get('RelTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RelTypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
