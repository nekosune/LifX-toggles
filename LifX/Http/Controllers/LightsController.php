<?php

namespace LifX\Http\Controllers;

use Illuminate\Http\Request;

use LifX\Http\Requests;

class LightsController extends Controller
{
    public $key;

    public function __construct()
    {
        $key=config('keys.LifX')
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $key;
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

}
