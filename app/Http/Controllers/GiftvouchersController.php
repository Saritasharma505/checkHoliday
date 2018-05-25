<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
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
       if (! Gate::allows('voucher_manage')) {
            return abort(401);
        }

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
        if (! Gate::allows('voucher_manage')) {
            return abort(401);
        }

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
        if (! Gate::allows('voucher_manage')) {
            return abort(401);
        }

        $gname = $request->input('gname');
        $giftemail = $request->input('giftemail');
        $mobno = $request->input('mobno');
        $address = $request->input('address');
        $location = $request->input('location');
        $vcode = $request->input('vcode');
        $doj = $request->input('doj');
        $edate = $request->input('edate');
        $dsaName = $request->input('dsaName');
        $dsaId = $request->input('dsaId');

        $data = DB::insert("INSERT INTO `vouchers`(`gname`, `giftemail`, `mobno`, `address`, `location`, `vcode`, `doj`, `edate`, `dsaName`, `dsaId`) VALUES ('$gname', '$giftemail', '$mobno', '$address', '$location', '$vcode', '$doj','$edate', '$dsaName',' $dsaId');");

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
         if (! Gate::allows('voucher_manage')) {
            return abort(401);
        }
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
         if (! Gate::allows('voucher_manage')) {
            return abort(401);
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
        if (! Gate::allows('voucher_manage')) {
            return abort(401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if (! Gate::allows('voucher_manage')) {
            return abort(401);
        }
        Vouchers::where('id', $id)->delete();
        Session::flash('message','Voucher Successfully Delete ');
        return back();
    }

    public function print($id)
    {
         if (! Gate::allows('voucher_manage')) {
            return abort(401);
        }
        $printVoucher = Vouchers::where('id', $id)->get();
        return view('voucher.voucherprint', compact('printVoucher'));
    }

    public function sendMail($id)
    {
  
          $val=DB::table('vouchers')->where('id',$id)->get();
           //dd($val);

          $data = array('name'=> "The Holidays Club", "body" => "Holidays Voucher");

          Mail::send('emails.voucherMail', $data, function($message) {

              $message->to('hr@eduplus.net.in', 'Voucher Mail')

                      ->subject('The Holidays Club  Voucher');

              $message->from('admin@theholidaysclub.com','The Holidays Club');

          });

  Session::flash('message','Mail Sent Successfully!!');
  return redirect()->route('member.index');
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
