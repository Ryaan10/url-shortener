<?php

namespace App\Http\Controllers;

use App\Url2;
use Bitly;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class Url2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Url2::all();
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
        $bitly_url = app('bitly')->getUrl($request['url']);
        $url = new Url2();

        $url->original_link = $request['url'];
        $url->short_link = $bitly_url;

        $url->save();

        return Response::json(array('success' => true, 'bitly url added' => 1), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Url2  $url2
     * @return \Illuminate\Http\Response
     */
    public function show(Url2 $url2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Url2  $url2
     * @return \Illuminate\Http\Response
     */
    public function edit(Url2 $url2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Url2  $url2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Url2 $url2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Url2  $url2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Url2 $url2)
    {
        //
    }
}
