<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Configuration;
use App\Amc;
use PDF;

class AmcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amcDetails = Amc::all();
        return view('amc.index',compact('amcDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $memberAmc = Configuration::all();
        return view('amc.create', compact('memberAmc'));
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
        $amcDate =$request->input('amcDate'); 

      $data = DB::Insert("INSERT INTO `amcs`(`member_id`, `name`, `email`, `mobile`, `amount`, `dsa_assigned`, `txnID`, `amcDate`) VALUES ('$member_id','$name', '$email', '$mobile', '$amount', '$dsa_assigned','$word', '$amcDate'); ");
      
      return redirect()->route('amc.index');
      // return $this->paymentReceipt($word);
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

    public function amcReceipt($id)
    {
        $amcReceipt = Amc::where('member_id', $id)->get();
        return view('amc.receipt', compact('amcReceipt'));
    }

    public function downloadPDF($id)

    {
        $amcPrint = Amc::where('member_id', $id)->get();
        $pdf = PDF::loadView('amc.receiptPdf', compact('amcPrint'));

        return $pdf->download('Amcpaymentreceipt.pdf');

    }
}
