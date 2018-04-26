<?php
namespace App\Http\Controllers;
use DB;
use App\Configuration;
use Illuminate\Http\Request;
use App\Member;
use App\Memberpayment;
use App\Cashdetails;
use PDF;
class MembersController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
	$memberInfo = Member::all();
return view('member/index', compact('memberInfo'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
$adminAmount = Configuration::all();
$sequencesNo = DB::table('sequences')->orderByRaw('id DESC')->get();
return view('member.create',compact(['adminAmount', 'sequencesNo']));
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{

// $memberDetails = $request->all();
//dd($request);
// $sequencesNo = DB::table('sequences')->orderByRaw('id DESC')->get();
$memberShipid =$request->input('memberShipiddata');
$last_id =$request->input('last_id');
$a_no =$request->input('a_no');
$m_name =$request->input('m_name');
$dob1 =$request->input('dob1');
$c_name =$request->input('c_name');
$dob2 =$request->input('dob2');
$firstNomineeName =$request->input('firstNomineeName');
$firstNDob =$request->input('firstNDob');
$secondNomineeName =$request->input('secondNomineeName');
$secondNDob =$request->input('secondNDob');
$thirdNomineeName =$request->input('thirdNomineeName');
$thirdNDob =$request->input('thirdNDob');
$address =$request->input('address');
$city =$request->input('city');
$pin =$request->input('pin');
$mob1 =$request->input('mob1');
$mob2 =$request->input('mob2');
$r_no =$request->input('r_no');
$email =$request->input('email');
$password =$request->input('password');
$hash_password =$request->input('hash_password');
$doj =$request->input('doj');
$tenure =$request->input('tenure');
$vdate =$request->input('vdate');
$ctype =$request->input('ctype');
$apartment =$request->input('apartment');
$occupancy =$request->input('occupancy');
$days =$request->input('days');
$purchase_amount =$request->input('purchase_amount');
$admin_amount =$request->input('admin_amount');
$total_amount =$request->input('total_amount');
$initial_payment =$request->input('initial_payment');
$mode_of_payment =$request->input('mode_of_payment');
$mode_of_payment_details =$request->input('mode_of_payment_details');

$name_on_card = $request->input('name_on_card');
$card_number = $request->input('card_number');
$name_of_card = $request->input('name_of_card');
$name_of_bank = $request->input('name_of_bank');
$cheque_number = $request->input('cheque_number');
$name_on_cheque = $request->input('name_on_cheque');
$name_on_card1 = $request->input('name_on_card1');
$card_number1 = $request->input('card_number1');
$name_of_card2 = $request->input('name_of_card2');

$card_holder_name =$request->input('card_holder_name');
$card_amount = $request->input('card_amount');
$card_number_digits =$request->input('card_number_digits');


$cash_amount = $request->input('cash_amount');
$online_amount = $request->input('online_amount');

$cheque_holder_name=$request->input('cheque_holder_name');
$cheque_number_digits = $request->input('cheque_number_digits');
$cheque_amount = $request->input('cheque_amount');

$bal =$request->input('bal');
$bal_payment =$request->input('bal_payment');
$no_of_emi =$request->input('no_of_emi');
$emi_amount =$request->input('emi_amount');
$emi_start_date =$request->input('emi_start_date');
$amc =$request->input('amc');
$excutive_name =$request->input('excutive_name');
$manager_name =$request->input('manager_name');
$dsa_id =$request->input('dsa_id');
$dsa_name =$request->input('dsa_name');
$member_offer =$request->input('member_offer');
$payDate =$request->input('payDate');
$txnID = $request->input('txnID');
$save = substr($txnID, 0,6);
$word = $save.rand(000000000,999999999);

if ($dob2 == '') {
$dob2 = NULL;
}
if ($emi_start_date == '') {
$emi_start_date = NUll;
}
if ($firstNDob == '') {
$firstNDob = NULL;
}
if ($secondNDob == '') {
$secondNDob = NULL;
}
if ($thirdNDob == '') {
$thirdNDob = NULL;
}
if ($mode_of_payment_details == "card") {
$mode_of_payment_details = "Name On The Card" . "-" . $name_on_card . "," . "Card Number" . "-" . $card_number . "," . "Name Of The Card" . "-" . $name_of_card;
}
if ($mode_of_payment_details == "cheque") {
$mode_of_payment_details = "Name Of Bank" . "-" . $name_of_bank . "," . "Cheque Number" . "-" . $cheque_number . "," . "Name On The Cheque" . "-" . $name_on_cheque;
}
if ($mode_of_payment_details == "cash") {
$mode_of_payment_details = "";
}
if ($mode_of_payment_details == "online") {
$mode_of_payment_details = "Name On The Card" . "-" . $name_on_card1 . "," . "Card Number" . "-" . $card_number1 . "," . "Name Of The Card" . $name_of_card1;
}
if ($mode_of_payment_details == "multiple") {
$mode_of_payment_details = "Card Holder Name" . "-" . $card_holder_name . "," . "By Card" . "-" . $card_amount . "," . "Card last 4 digits:" . "-" . $card_number_digits . "," .
"By Cheque" . "-" . $cheque_amount . "," . "Cheque Holder Name:" . "-" . $cheque_holder_name . "," . "Cheque Number::" . "-" . $cheque_number_digits . "," . "By Cash" . "-" . $cash_amount . "," . "By Online" . "-" . $online_amount;
}
$memberShipid = "THC";
if ($ctype) {
if ($ctype == "Red") {
$memberShipid .= "R";
} else {
if ($ctype == "White") {
$memberShipid .= "W";
} else {
$memberShipid .= "B";
}
}
}
if ($tenure) {
$memberShipid .= $tenure;
}
$current_year = date('y');
if ($current_year) {
$memberShipid .= $current_year;
}
if ($days == "3N/4D") {
$memberShipid .= "A" . "0011";
} elseif ($days == "6N/7D") {
$memberShipid .= "B" . "0011";
}
if ($last_id) {
  $memberShipiddata=$memberShipid .$last_id;
}
 $passPart = explode('@', $email);

        $password = str_shuffle($passPart[0]);

        $encPassword = md5($password);

        if ($dob2 == '') {
            $dob2 = NULL;
        }
       

if ($emi_start_date == '') {
$emi_start_date = NUll;
}
 
$data = DB::insert("INSERT INTO `members`(`memberShipid`, `a_no`, `m_name`, `dob1`, `c_name`, `dob2`, `firstNomineeName`, `firstNDob`, `secondNomineeName`, `secondNDob`, `thirdNomineeName`, `thirdNDob`, `address`, `city`, `pin`, `mob1`, `mob2`, `r_no`, `email`, `password`, `hash_password`, `doj`, `tenure`, `vdate`, `ctype`, `apartment`, `occupancy`, `days`, `purchase_amount`, `admin_amount`, `total_amount`, `initial_payment`, `mode_of_payment`, `mode_of_payment_details`, `bal`, `bal_payment`, `no_of_emi`, `emi_amount`, `emi_start_date`, `amc`, `excutive_name`, `manager_name`, `dsa_id`, `dsa_name`, `member_offer`, `status`) VALUES ('$memberShipiddata', '$a_no', '$m_name','$dob1','$c_name', '$dob2', '$firstNomineeName',      '$firstNDob', '$secondNomineeName', '$secondNDob', '$thirdNomineeName', '$thirdNDob','$address',      '$city', '$pin', '$mob1', '$mob2', '$r_no', '$email', '$password', '$hash_password', '$doj','$tenure', '$vdate','$ctype', '$apartment', '$occupancy', '$days', '$purchase_amount', '$admin_amount', '$total_amount','$initial_payment', '$mode_of_payment', '$mode_of_payment_details', '$bal', '$bal_payment','$no_of_emi','$emi_amount', '$emi_start_date', '$amc', '$excutive_name', '$manager_name', '$dsa_id', '$dsa_name', '$member_offer','1');");

$a=DB::insert("INSERT INTO `sequences`(`status`) VALUES ('0')");

$paymentSave = DB::Insert("INSERT INTO `memberpayments`(`txnID`, `memberShipid`, `mode_of_payment`, `initial_payment`, `payDate`,`m_name`,`dsa_name`) VALUES ('$word','$memberShipiddata','$mode_of_payment', '$initial_payment','$payDate','$m_name','$dsa_name');");

// $b=DB::insert("INSERT INTO cashrecord(`membershipid`,`bank_name`,`card_type`, `card_holder_name`, `card_amount`, `card_number_digits`, `cash_amount`, `online_amount`, `cash_card_amount`, `cheque_holder_name`, `cheque_number_digits`, `cheque_amount`)VALUES('$memberShipid','$bank_name','$card_type','$card_holder_name','$card_amount','$card_number_digits','$cash_amount','$online_amount','$cash_card_amount',$cheque_holder_name','$cheque_number_digits','$cheque_amount')");

return redirect()->route('member.index');
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
	$editMember = Member::where('id', $id)->get();
	// $editMember=DB::table('members')
 //            ->join('cashrecord', 'members.memberShipid', '=', 'cashrecord.membershipid')->select('*')->get();
            // dd($editMember);
	return view('member.edit', compact('editMember'));
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
	$memberShipiddata = $request->input('memberShipiddata');
  $a_no = $request->input('a_no');
  $m_name = $request->input('m_name');
  $dob1 = $request->input('dob1');
  $c_name = $request->input('c_name');
  $dob2 = $request->input('dob2');
  $firstNomineeName = $request->input('firstNomineeName');
  $firstNDob = $request->input('firstNDob');
  $secondNomineeName = $request->input('secondNomineeName');
  $secondNDob = $request->input('secondNDob');
  $thirdNomineeName = $request->input('thirdNomineeName');
  $thirdNDob = $request->input('thirdNDob');
  $address = $request->input('address');
  $city = $request->input('city');
  $pin = $request->input('pin');
  $mob1 = $request->input('mob1');
  $mob2 = $request->input('mob2');
  $r_no = $request->input('');
  $email = $request->input('r_no');
  $doj = $request->input('doj');
  $tenure = $request->input('tenure');
  $vdate = $request->input('vdate');
  $ctype = $request->input('ctype');
  $apartment = $request->input('apartment');
  $occupancy =$request->input('occupancy');
  $days = $request->input('days');
  $purchase_amount = $request->input('purchase_amount');
  $admin_amount =$request->input('admin_amount');
  $total_amount = $request->input('total_amount');
  $initial_payment =$request->input('initial_payment');
  $mode_of_payment = $request->input('mode_of_payment');
  $bal = $request->input('bal');
  $bal_payment = $request->input('bal_payment');
  $no_of_emi = $request->input('no_of_emi');
  $emi_amount = $request->input('emi_amount');
  $emi_start_date = $request->input('emi_start_date');
  $amc = $request->input('amc');
  $excutive_name = $request->input('excutive_name');
  $manager_name = $request->input('manager_name');
  $dsa_name = $request->input('dsa_name');
  $moffer = $request->input('moffer');
  $dsa_id = $request->input('dsa_id');
  $id = $request->input('');
  Member::where('memberShipid',$memberShipiddata)->update(['a_no' => $a_no, 'm_name' => $m_name, 'dob1' => $dob1, 'c_name' => $c_name, 'dob2' => $dob2, 'firstNomineeName' => $firstNomineeName, 'firstNDob' => $firstNDob, 'secondNDob' => $secondNDob, 'thirdNomineeName' => $thirdNomineeName, 'thirdNDob' => $thirdNDob, 'city' => $city, 'pin' => $pin, 'mob1' => $mob1, 'mob2' => $mob2, 'r_no' => $r_no, 'email' => $email, 'doj' => $doj, 'tenure' => $tenure, 'vdate' => $vdate, 'apartment' => $apartment, 'occupancy' => $occupancy, 'purchase_amount' => $purchase_amount, 'admin_amount' => $admin_amount, 'total_amount' => $total_amount, 'initial_payment' => $initial_payment, 'mode_of_payment_details' => $mode_of_payment_details, 'no_of_emi' => $no_of_emi, 'emi_start_date' => $emi_start_date, 'amc' => $amc, 'excutive_name' => $excutive_name, 'manager_name' => $manager_name, 'dsa_id' => $dsa_id, 'member_offer' => $member_offer]);

     
  Cashdetails::where('id',$id)->update(['bank_name' => $bank_name, 'card_type' => $card_type, 'card_holder_name' => $card_holder_name, 'card_amount' => $card_amount, 'card_number_digits' => $card_number_digits, 'cash_amount' => $cash_amount, 'online_amount' => $online_amount, 'cash_card_amount' => $cash_card_amount, 'cheque_holder_name' => $cheque_holder_name, 'cheque_number_digits' => $cheque_number_digits, 'cheque_amount' => $cheque_amount]);
  
	
	return redirect()->route('member.index');
	
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
	Member::where('id', $id)->delete();
	return back();

}

public function memberPDF($id)
{
	$memberPrint = Member:: where('id', $id)->get();
	return view('member.view', compact('memberPrint'));
}

public function memberReceipt($id)
{
	$memberInfo = Member::where('memberShipid',$id)->get();
	$paymentInfo = Memberpayment::where('memberShipid', $id)->get();
	return view('member.receipt', compact('memberInfo','paymentInfo'));
}

  public function agreementDownload(Request $request,$id)
{
  $memberInfo = Member::where('id',$id)->get();
  
  $pdf = PDF::loadView('member.downloadAgreement',compact('memberInfo'));
  return $pdf->download('downloadAgreement.pdf');
}
}