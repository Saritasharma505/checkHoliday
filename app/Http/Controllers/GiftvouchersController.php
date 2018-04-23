<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Vouchers;
use Illuminate\Support\Facades\Session;

class GiftvouchersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $VoucherDetails = vouchers::all();
        return view('voucher.index', compact('VoucherDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voucher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gname = $request->input('gname');
        $giftemail = $request->input('giftemail');
        $mobno = $request->input('mobno');
        $address = $request->input('address');
        $location = $request->input('location');
        $vcode = $request->input('vcode');
        $dog = $request->input('dog');
        $edate = $request->input('edate');
        $dsaName = $request->input('dsaName');
        $dsaId = $request->input('dsaId');

        $data = DB::insert("INSERT INTO `vouchers`(`gname`, `giftemail`, `mobno`, `address`, `location`, `vcode`, `dog`, `edate`, `dsaName`, `dsaId`) VALUES ('$gname', '$giftemail', '$mobno', '$address', '$location', '$vcode', '$dog','$edate', '$dsaName',' $dsaId');");

        Session::flash('message','Voucher Code Successfully Generate');
        return redirect()->action('GiftvouchersController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viewVoucher = Vouchers::where('id', $id)->get();
        return view('voucher.view', compact('viewVoucher'));
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
         Vouchers::where('id', $id)->delete();
        Session::flash('message','Voucher Successfully Delete ');
        return back();
    }

    public function print($id)
    {
        $printVoucher = Vouchers::where('id', $id)->get();
        return view('voucher.voucherprint', compact('printVoucher'));
    }
      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      // public function prints($id)
      // {
      //   $printOut = Vouchers::where('id', $id)->get();
      //   return view('voucher.print', compact('printOut'));
      // }
}
