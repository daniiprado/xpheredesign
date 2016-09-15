<?php

namespace xpheredesign\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use xpheredesign\Http\Requests;

use xpheredesign\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ['id' => 'Login', 'slid' => 'title']);
    }
    public function searchUserlog(Request $request)
    {
      if($request->ajax()){
        if(Auth::attempt(
            ['email' => $request['email'],
            'password' => $request['password']]
        ))
        {
            return response()->json([
              "mensaje" => 'true'
            ]);
        }
          else
        {
            session()->flash('message-error', 'Datos incorrectos');
            return response()->json([
              "mensaje" => 'false'
            ]);
        }
      }
    }

}
