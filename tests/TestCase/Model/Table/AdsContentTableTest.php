<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdsContentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdsContentTable Test Case
 */
class AdsContentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdsContentTable
     */
    public $AdsContent;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ads_content',
        'app.ads_link'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdsContent') ? [] : ['className' => AdsContentTable::class];
        $this->AdsContent = TableRegistry::get('AdsContent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdsContent);

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
