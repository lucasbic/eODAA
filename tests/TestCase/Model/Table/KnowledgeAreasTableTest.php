<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KnowledgeAreasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KnowledgeAreasTable Test Case
 */
class KnowledgeAreasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KnowledgeAreasTable
     */
    public $KnowledgeAreas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.knowledge_areas',
        'app.courses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('KnowledgeAreas') ? [] : ['className' => KnowledgeAreasTable::class];
        $this->KnowledgeAreas = TableRegistry::getTableLocator()->get('KnowledgeAreas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->KnowledgeAreas);

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
