<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdsResourcesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdsResourcesTable Test Case
 */
class AdsResourcesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdsResourcesTable
     */
    public $AdsResources;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ads_resources'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdsResources') ? [] : ['className' => AdsResourcesTable::class];
        $this->AdsResources = TableRegistry::get('AdsResources', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdsResources);

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
