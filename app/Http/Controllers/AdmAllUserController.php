<?php

namespace xpheredesign\Http\Controllers;

use Illuminate\Http\Request;

use xpheredesign\Http\Requests;
/*Models*/
use xpheredesign\User;
use Illuminate\Support\Facades\DB;

class AdmAllUserController extends Controller
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
       return view('admin.content.alluser');
     }
   }

   public function indexedit(Request $request)
   {
     if($request->ajax()){
       return view('admin.content.edituser');
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
    public function show(Request $request)
    {
      if($request->ajax()){
        $users = DB::table('tbl_Users')
                ->join('tbl_Users_Types', 'tbl_Users.user_type_fk', '=', 'tbl_Users_Types.type_id')
                ->select('tbl_Users.id', 'tbl_Users.name', 'tbl_Users.user_lastname', 'tbl_Users.email', 'tbl_Users_Types.type_name')
                ->get();
        return response()->json(
            $users->toArray()
        );
      }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

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
      if($request->ajax()){
         $users = DB::table('tbl_Users')
                 ->join('tbl_Profiles', 'tbl_Profiles.profile_user_id', '=', 'tbl_Users.id')
                 ->join('tbl_Users_Types', 'tbl_Users.user_type_fk', '=', 'tbl_Users_Types.type_id')
                 ->select('tbl_Users.*', 'tbl_Users_Types.type_name', 'tbl_Profiles.profile_pic', 'tbl_Profiles.profile_description')
                 ->where('tbl_Users.id', '=', $id)
                 ->get();
                 
        return view('admin.content.edituser', ['users' => $users]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      if($request->ajax()){
        return response()->json([
          'mensage' => $id
        ]);
      }
    }
}
