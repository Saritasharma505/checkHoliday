<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
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
         if (! Gate::allows('amc_manage')) {
            return abort(401);
        }

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
        if (! Gate::allows('amc_manage')) {
            return abort(401);
        }

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
       if (! Gate::allows('amc_manage')) {
            return abort(401);
        }

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

        $data=Amc::create([
            'member_id' => $member_id,
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'amount' => $amount,
            'dsa_assigned' => $dsa_assigned,
            'txnID' => $word,
            'amcDate' => $amcDate,
        ]);
        return redirect()->route('amc.index');      

      /*$data = DB::Insert("INSERT INTO `amcs`(`member_id`, `name`, `email`, `mobile`, `amount`, `dsa_assigned`, `txnID`, `amcDate`) VALUES ('$member_id','$name', '$email', '$mobile', '$amount', '$dsa_assigned','$word', '$amcDate'); ");*/
      
    
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
        if (! Gate::allows('amc_manage')) {
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
        if (! Gate::allows('amc_manage')) {
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
        if (! Gate::allows('amc_manage')) {
            return abort(401);
        }
    }

    public function amcReceipt($id)
    {
       if (! Gate::allows('amc_manage')) {
            return abort(401);
        }
        $amcReceipt = Amc::where('member_id', $id)->get();
        return view('amc.receipt', compact('amcReceipt'));
    }

    public function downloadPDF($id)

    {
        if (! Gate::allows('amc_manage')) {
            return abort(401);
        }
        $amcPrint = Amc::where('member_id', $id)->get();
        $pdf = PDF::loadView('amc.receiptPdf', compact('amcPrint'));

        return $pdf->download('Amcpaymentreceipt.pdf');

    }

    public function amcReport(Request $request)
    {
       $data=Amc::all();
        return view('report.amc.index',compact('data'));
    }

 public function reportData(Request $request){
    //according to date 
   $start= \Carbon\Carbon::parse($request->start_date)->format('Y-m-d');
   $end = \Carbon\Carbon::parse($request->end_date)->format('Y-m-d');

    $dsa_assigned=$request->input('dsa_assigned');

   
    if($dsa_assigned AND $start AND $end){
     $data=DB::table('amcs')->whereBetween('amcDate', [$start, $end])->where('dsa_assigned',$dsa_assigned)->get();
     return view('report.amc.index',compact('data')); 
     }
     /*elseif($start AND $end){
        $data = DB::table('amcs')->whereBetween('amcDate', [$start, $end])->get();
        return view('report.amc.index',compact('data')); 
     }
     elseif($dsa_assigned){
        $data=  DB::table('amcs')->where('dsa_assigned',$dsa_assigned)->get();
        return view('report.amc.index',compact('data'));
     }
     else{
        $data=Amc::all();
        return view('report.amc.index',compact('data'));
     }*/
  
   }
}
