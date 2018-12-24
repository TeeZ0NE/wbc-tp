<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Libs\TwitterAPI;

class AccountController extends Controller
{
	use TwitterAPI;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	  return 'index' ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	/*
    	 * TODO:: store statuses.
    	* TODO:: dispay info if OK or error
    	 * TODO:: create migrations
    	 * todo:: store name
    	 * todo:: store title of tweet
    	 * todo:: store body of tweet
    	 * todo:: store count of retweets
    	 * todo:: store count of likes
    	 * todo:: store created_at Carbon createfromstring method
    	*/
    	$interval = $request->interval ?? 4;
        $this->screen_name =  $request->screen_name;

	    $this->setStatuses();

	    if ($this->checkRequestErrors()) {
		    echo $this->getErrorMessage();
	    }
	    $statuses = $this->statuses;


        return compact('interval','screen_name','statuses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
