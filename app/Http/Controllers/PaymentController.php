<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Payment;
use App\Memberpayment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentInfo = Payment::all();
        $member = Memberpayment::all();
        //dd($member);
        return view('payment.index', compact('paymentInfo','member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member_id = $request->input('member_id');
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $amount = $request->input('amount');
        $dsa_assigned = $request->input('dsa_assigned');
        $txnID = $request->input('txnID');
        $save = substr($txnID, 0,6);
        $word = $save.rand(000000000,999999999);
        $paymentDate =$request->input('paymentDate');

      $data = DB::Insert(" INSERT INTO `payments`(`member_id`, `name`, `email`, `mobile`, `amount`, `dsa_assigned`, `txnID`,`paymentDate`) VALUES ('$member_id','$name' ,'$email','$mobile','$amount','$dsa_assigned','$word','$paymentDate')");
      
      return $this->paymentReceipt($word);


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

    public function paymentReceipt($id)
    {
        $receiptPayment = Payment::where('txnID',$id)->get();
        return view('payment.receipt', compact('receiptPayment'));
    }
}
