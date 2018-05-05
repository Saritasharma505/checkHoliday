<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use DB;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if (! Gate::allows('location_manage')) {
            return abort(401);
        }

        $admin_locations=Location::all();
        return view('location.index',compact('admin_locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       if (! Gate::allows('location_manage')) {
            return abort(401);
        }
       return view('location.add');
    }

    /** Full texts  id  locationName    parent_id   status 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
       if (! Gate::allows('location_manage')) {
            return abort(401);
        }
      $name=$request->locationName;
        $status=$request->status;
        $data=DB::insert("insert into locations(locationName,status) values('$name','$status')");
      Session::flash('message','Record Inserted Successfully');
     
       return redirect()->action('LocationController@index');
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
       
       if (! Gate::allows('location_manage')) {
            return abort(401);
        }
        $location_edit=Location::where('id',$id)->get();
        return view('location.edit',compact('location_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         
       if (! Gate::allows('location_manage')) {
            return abort(401);
        }

         $id = $request->input('id');
         $locationName = $request->input('locationName');
         $status = $request->input('status');

         $data=Location::where('id',$id)->update(['locationName'=>$locationName,'status'=>$status]);
         return redirect()->action('LocationController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
       if (! Gate::allows('location_manage')) {
            return abort(401);
        }

       $data= Location::where('id',$id)->delete();
        Session::flash('message','Record Deleted Sucessfully!!');
        return redirect()->action('LocationController@index');
    }
}
