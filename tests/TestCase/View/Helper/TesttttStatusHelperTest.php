<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\TesttttStatusHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\TesttttStatusHelper Test Case
 */
class TesttttStatusHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\TesttttStatusHelper
     */
    public $TesttttStatus;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->TesttttStatus = new TesttttStatusHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TesttttStatus);

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
