<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdsLinkTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdsLinkTable Test Case
 */
class AdsLinkTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdsLinkTable
     */
    public $AdsLink;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ads_link',
        'app.ads_content'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdsLink') ? [] : ['className' => AdsLinkTable::class];
        $this->AdsLink = TableRegistry::get('AdsLink', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdsLink);

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
