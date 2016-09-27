<?php

namespace xpheredesign\Http\Controllers;

use Illuminate\Http\Request;

use xpheredesign\Http\Requests;

use Illuminate\Support\Facades\Auth;
use DB;

class AdmProfileUserController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
          return view('admin.content.profile');
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $id = Auth::user()->id;
      $users = DB::table('tbl_Users')
              ->join('tbl_Profiles', 'tbl_Profiles.profile_user_id', '=', 'tbl_Users.id')
              ->join('tbl_Users_Types', 'tbl_Users.user_type_fk', '=', 'tbl_Users_Types.type_id')
              ->select('tbl_Users.*', 'tbl_Users_Types.*', 'tbl_Profiles.*')
              ->get();
      //$val= $users->toJson();
      return response()->json([
          'user' => $users
      ]);
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
