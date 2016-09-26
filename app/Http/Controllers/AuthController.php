<?php

namespace xpheredesign\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use xpheredesign\Http\Requests;
/*Models*/
use xpheredesign\User;
use xpheredesign\Signin_Social;
/*Redes Sociales*/
use Socialite;


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

         $validation = $this->validate($request, [
             'email' => 'required',
             'password' => 'required',
         ]);

        if (!is_null($validation)) {
          if($validation->fails()){
            return response()->json([
              'errors' => $validation->errors()->getMessages(),
              'code' => 422
            ]);
          }
        }else{

          if(Auth::attempt(
              ['email' => $request['email'],
              'password' => $request['password']]
          ))
          {
              return response()->json([
                "message" => 'true'
              ]);
          }
            else
          {
              session()->flash('message-error', 'Datos incorrectos');
              return response()->json([
                "message" => 'false'
              ]);
          }
        }
      }
    }

    public function registerUser(Request $request)
    {

      if($request->ajax()){
        $validation = $this->validate($request, [
             'registername' => 'required',
             'regislastname' => 'required',
             'regisemail' => 'required',
             'regispassword' => 'required',
             'regisrepassword' => 'required',
             'regisusername' => 'required',
         ]);
         if (!is_null($validation)) {
           if($validation->fails()){
             return response()->json([
               'errors' => $validation->errors()->getMessages(),
               'code' => 422
             ]);
           }
         }else{
           User::create($request->all());
           return response()->json([
             'message' => 'true'
           ]);
         }
      }else{
        return response()->json([
          'error' => 'error'
        ]);
      }
    }

    /*NOTE: Socialite
            Facebook  */

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
      try {
        $socialUser= Socialite::driver('facebook')->user();
      } catch (Exception $e) {
          return redirect()->intended('/');
      }
      $user = Signin_Social::where('network_user_id', $socialUser->getId())->first();
      if(!$user){
        /*Crea Usuario*/
        User::Create([
            'email' => $socialUser->getEmail(),
            'user_type_fk' => 1,
            'user_nickname' => $socialUser->getNickname(),
            'name' => $socialUser->getName(),
            'user_lastname' => '',
          ]);
        /*Consulta el ultimo id del modelo Usuario*/
        $id = User::all() -> last() -> id;
        Signin_Social::Create([
            'network_user_id' => $socialUser->getId(),
            'network_name' => 'facebook',
            'network_user_fk' => $id,
          ]);
          return redirect()->intended('admin');;
      }else{
        return redirect()->intended('admin');
      }
    }

}
