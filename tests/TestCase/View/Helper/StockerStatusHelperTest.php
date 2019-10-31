<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\StockerStatusHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\StockerStatusHelper Test Case
 */
class StockerStatusHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\StockerStatusHelper
     */
    public $StockerStatusHelper;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->StockerStatusHelper = new StockerStatusHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StockerStatusHelper);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
