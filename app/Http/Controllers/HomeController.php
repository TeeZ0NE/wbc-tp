<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libs\TwitterAPI;

class HomeController extends Controller
{
	use TwitterAPI;
	/**
	 * Handle the incoming request.
	 * @param $screen_name string
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function __invoke(string $screen_name = "adme_ru")
	{
		$this->screen_name = $screen_name;
		$this->setStatuses();

		if ($this->checkRequestErrors()) {
			echo $this->getErrorMessage();
		}
		echo "<pre>";
		var_export($this->statuses);
		echo "</pre>";

//    	printf("\n statuses count: %s",$statuses[0]['user']['name']);
//	    echo "<pre>";var_export($statuses[0]->user); echo "</pre>";
		/*$coo = ($request->hasCookie('mycoo') and $request->cookie('mycoo')
		==12)
			?10
			:$request->cookie('mycoo') ?? 10;
		return response(['id'=>(int)$id,'cook'=>$coo],200,
			['Content-Type'=>'application/json'])->cookie('mycoo',$coo,1);*/
	}
}
