<?php

namespace Tests\Unit;

use Tests\TestCase;
//use Illuminate\Foundation\Testing\RefreshDatabase;
use app\Http\Controllers\HomeController;
class ExampleTest extends TestCase
{
private	$home_c;
	public function setUp()
	{
		parent::setUp();
		$this->home_c = new HomeController();

	}
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue($this->home_c->getUser([1,2]));
    }
}
