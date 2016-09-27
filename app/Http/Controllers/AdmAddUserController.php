<?php

namespace xpheredesign\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use xpheredesign\Http\Requests;
/*Models*/
use Illuminate\Support\Facades\DB;
use xpheredesign\User;
use xpheredesign\Signin_Social;

class AdmAddUserController extends Controller
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
       return view('admin.content.adduser');
     }
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
      if($request->ajax()){

        /*Imagen*/
        $path = public_path().'/assets/admin/pages/media/profile';
        $file = Input::file('filename');
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

        /*Tipo de usuario*/
        $idtype = DB::table('tbl_Users_Types')->where('type_name', '=', 'Administrador')->value('type_id');

        /*Inserta datos*/
        User::create([
           'user_type_fk' => 1,
           'user_nickname' => $request->get('user_nickname'),
           'name' => $request->get('name'),
           'user_phone' => $request->get('user_phone'),
           'email' => $request->get('email'),
           'user_web' => $request->get('user_web'),
           'password' => bcrypt($request->get('password')),
           'user_lastname' => $request->get('user_lastname'),
        ]);


        /*Consulta el ultimo id del modelo Usuario*/
        $id = User::all() -> last() -> id;
        /*Agrega el usuaria a redes sociales*/
        Signin_Social::Create([
            'network_user_fk' => $id,
        ]);

        /*Subimos el archivo*/
        $file->move($path, $randomName);
        $ruta = "assets/admin/pages/media/profile/".$randomName;

        /*Agrega perfil*/
        DB::table('tbl_Profiles')->insert([
           'profile_user_id' => $id,
           'profile_pic' => $ruta,
           'profile_description' => $request->get('profile_description'),
        ]);



        return response()->json([
          'error' => $request->get('email')
        ]);

      }else{
        return response()->json([
          'error' => 'error'
        ]);
      }
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
