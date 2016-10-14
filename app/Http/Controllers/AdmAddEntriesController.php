<?php

namespace xpheredesign\Http\Controllers;

use Illuminate\Http\Request;

use xpheredesign\Http\Requests;

use xpheredesign\Categories;
use xpheredesign\Privacy;
use xpheredesign\States;

class AdmAddEntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
         if($request->ajax()){
           return view('admin.content.addentries');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCategory(Request $request)
    {
      if($request->ajax()){
        $category = Categories::select(
                      'tbl_Categories.category_id',
                      'tbl_Categories.category_name'
                    )->get();
        return $category;
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPrivate(Request $request)
    {
      if($request->ajax()){
        $privacy = Privacy::select(
                      'tbl_Privacy.privacy_id',
                      'tbl_Privacy.privacy_name'
                    )->get();
        return $privacy;
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showState(Request $request)
    {
      if($request->ajax()){
        $privacy = States::select(
                      'tbl_States.state_id',
                      'tbl_States.state_name'
                    )->get();
        return $privacy;
      }
    }
}
