<?php

namespace App\Http\Controllers;

use App\Url;
use Bitly;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bitly() {
        $url = app('bitly')->getUrl('https://www.google.com/'); // http://bit.ly/nHcn3
        return $url;
    }

    public function index(Request $request)
    {
        return Url::all();
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
        $url = new Url();

        $url->original_link = $request['url'];
        $url->short_link = $request['split_url']."/".Str::random(6);

        $url->save();

        return Response::json(array('success' => true, 'url added' => 1), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function show(Url $url)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function edit(Url $url)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Url $url)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(Url $url)
    {
        //
    }
}
