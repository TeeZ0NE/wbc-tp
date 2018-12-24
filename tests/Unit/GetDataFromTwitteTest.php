<?php

namespace Tests\Unit;

use App\Http\Controllers\HomeController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetDataFromTwitteTest extends TestCase
{
public  $home_c;
	/**
	 * parent set up func
	 */
	public function setUp()
	{
		parent::setUp();
		$this->home_c = new HomeController();
		$this->home_c->setStatuses('adme_ru');
   }

	/**
	 * @test
	 */
	public function is_instamce_of()
	{
		$this->assertInstanceOf(HomeController::class,$this->home_c);
   }

	/**
	 * @test
	 */
	public function is_array_of_statuses_empty()
	{
		$this->assertNotEmpty($this->home_c->getStatuses());
	}
	/**
	 * @test-
	 */
	public function check_connection()
	{
		$this->assertTrue($this->home_c->checkRequestErrors());
   }
	public function set_user_data_from_array()
	{
		
   }
}
