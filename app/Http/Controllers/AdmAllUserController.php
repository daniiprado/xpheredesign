<?php

namespace xpheredesign\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use xpheredesign\Http\Requests;
/*Models*/
use xpheredesign\User;
use xpheredesign\Profiles;
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
        $users = User::distinct()
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      if($request->ajax()){

        $path = public_path().'/assets/admin/pages/media/profile';
        $file = Input::file('filename');

        if($file != null){
          $pic = Profiles::select('tbl_Profiles.profile_pic')
                ->where('tbl_Profiles.profile_user_id', '=', $id)
                ->get();

          $urlImg = $pic[0]->profile_pic;
          /*Verifica si existe y elimina*/
          if(file_exists($urlImg)){
            unlink($urlImg);
          }

          $namefile =  $file->getClientOriginalName();
          /*Genera un nombre aleatorio*/
          $getMime = explode('.', $namefile);
          $mime = end($getMime);
          $randomName = substr_replace(sha1(microtime(true)), '', 12).'.'.$mime;
          $files = DB::table('tbl_Profiles')->where('profile_pic', '=', $randomName )->get();

          /*Consulta si existe y genera uno nuevo*/
          while (count($files) > 0) {
            $getMime = explode('.', $namefile);
            $mime = end($getMime);
            $randomName = substr_replace(sha1(microtime(true)), '', 12).'.'.$mime;
            $files = DB::table('tbl_Profiles')->where('profile_pic', '=', $randomName )->get();
          }
          /*Verifica si existe el directorio si no lo crea*/
          if(!is_dir($path)){
            mkdir($path, 0777);
          }

          /*Subimos el archivo*/
          $file->move($path, $randomName);
          $ruta = "assets/admin/pages/media/profile/".$randomName;
        }

        /*Tipo de usuario*/
        $idtype = DB::table('tbl_Users_Types')->where('type_name', '=', 'Administrador')->value('type_id');

        $user = User::find($id);

        if($request->get('password') != null){
          $password = $request->get('password');
          $user->fill([
              'password' => bcrypt($password),
          ]);
        }

        $user->fill([
            'user_type_fk' => $idtype,
            'user_nickname' => $request->get('user_nickname'),
            'name' => $request->get('name'),
            'user_phone' => $request->get('user_phone'),
            'email' => $request->get('email'),
            'user_web' => $request->get('user_web'),
            'user_lastname' => $request->get('user_lastname'),
        ]);
        $user->save();

        if (!isset($ruta)){
          $ruta = "";
        }

        $idusu = Profiles::select('tbl_Profiles.profile_id')
                ->where('profile_user_id', '=', $id)
                ->get();

        $idusu = json_decode($idusu, true);

        $profiles = DB::table('tbl_Profiles')
            ->where('profile_id', $idusu)
            ->update(array(
              'profile_pic' => $ruta,
              'profile_description' => $request->get('profile_description'),
             ));


        return response()->json([
          'mensage' => 'true'
        ]);
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
        //User::destroy($id);
        $user = User::find($id);
        $user->delete();
        return response()->json([
          'mensage' => 'true'
        ]);
      }
    }
}
