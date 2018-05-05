<?php

namespace App\Http\Controllers;
use DB;
use App\Configuration;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $configur = Configuration::all();
        return view('configuration.index', compact('configur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('configuration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
      
        $name = $request->input('name'); 
        $emailId = $request->input('emailId');
        $phone = $request->input('phone');
        $siteName = $request->input('siteName');
        $adminAmount = $request->input('adminAmount');
        $amcAmount = $request->input('amcAmount');
     
        $data=DB::insert("INSERT INTO configurations(`name`, `emailId`, `phone`, `siteName`, `adminAmount`, `amcAmount`) VALUES('$name', '$emailId','$phone','$siteName','$adminAmount','$amcAmount')") ;

        Session::flash('message','Record insert Successfully');
        return redirect()->action('ConfigurationController@index');

        }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editConf = Configuration::where('id', $id)->get();
        return view('configuration.edit', compact('editConf'));
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
         $id =$request->input('id');
        $name = $request->input('name'); 
        $emailId = $request->input('emailId');
        $phone = $request->input('phone');
        $siteName = $request->input('siteName');
        $adminAmount = $request->input('adminAmount');
        $amcAmount = $request->input('amcAmount');

        $data =Configuration::where('id',$id)->update(['name'=>$name, 'emailId'=>$emailId, 'phone'=>$phone, 'siteName'=>$siteName, 'adminAmount'=>$adminAmount, 'amcAmount'=>$amcAmount]);
        Session::flash('message','Record Successfully update');
        return redirect()->action('ConfigurationController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        if (! Gate::allows(' configuration_manage ')) {
            return abort(401);
        }
        Configuration::where('id', $id)->delete();
        Session::flash('message','Record Delete Successfully');
        return back();
    }
}
