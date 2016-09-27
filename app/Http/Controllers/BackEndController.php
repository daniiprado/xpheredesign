<?php

namespace xpheredesign\Http\Controllers;

use Illuminate\Http\Request;

use xpheredesign\Http\Requests;

class BackEndController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth', ['only' => 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('dash',['id' => 'start']);
    }
}
