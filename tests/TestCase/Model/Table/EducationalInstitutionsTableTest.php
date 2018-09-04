<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EducationalInstitutionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EducationalInstitutionsTable Test Case
 */
class EducationalInstitutionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EducationalInstitutionsTable
     */
    public $EducationalInstitutions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.educational_institutions',
        'app.addresses',
        'app.courses',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EducationalInstitutions') ? [] : ['className' => EducationalInstitutionsTable::class];
        $this->EducationalInstitutions = TableRegistry::getTableLocator()->get('EducationalInstitutions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EducationalInstitutions);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
