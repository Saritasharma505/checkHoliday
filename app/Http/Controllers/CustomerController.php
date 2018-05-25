<?php

namespace App\Http\Controllers;
use DB;
use app\Complain;
use app\Message;
use Session;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   function __construct($foo = null)
   {
   	//$this->middlewere('auth');
   }


   public function index()
   {
   	//$user= DB::table('members')->get();
    //$details= DB::table('messages')->get();
       $user= DB::table('complains')
        ->select('*')
        ->join('members','members.memberShipid','=','complains.memberShipid')
        ->orderBy('ticket_id','desc')->get();
       //dd($user);
   	return view('customer.index',['user'=>$user]);
   }


   public function view($value)
   {
   	$user= DB::table('members')->where('memberShipid',$value)->get();
    $memberpayments=DB::table('memberpayments')->where('memberShipid',$value)->get();
    $message=DB::table('messages')->where('memberShipid',$value)->get();
    $complain=DB::table('complains')->where('memberShipid',$value)->get();
   	//dd($complain);
    return view('customer.view',['user'=>$user,'memberpayments'=>$memberpayments,'messages'=>$message,'complains'=>$complain,]);
   }


   public function message($value)
   {
   	$messages= DB::table('messages')->where('memberShipid',$value)->orderBy('id', 'asc')->get();
   	//dd($user);
   		return view('customer.message',compact('messages'));
   }
  	public function create(Request $request)
    {
    	$subject = $request->input('subject');
    	$user_id = $request->input('user_id');
    	$memberShipid = $request->input('memberShipid');
    	$message = $request->input('message');

    	DB::insert("INSERT INTO messages(user_id, message, subject, memberShipid) VALUES ('$user_id','$message','$subject','$memberShipid')");
    	$request->session()->flash('status', 'Message Send successful!');
    	return back();
        
    }

    /*add complain */
    public function complainform()
    {
      return view('customer.addtoken');
    }

    public function complainadd(Request $req)
    {
      $a=$req->input('memberShipid');
      $b=$req->input('subject');
      $c=$req->input('user_name');
      $d=$req->input('message');
      $e='tik-'.mt_rand(10000,99999);
       $user = DB::Insert("INSERT INTO `complains` (`memberShipid`, `subject`, `user_name`, `message`,`ticket_id`) VALUES ('$a','$b','$c','$d','$e')");
       $user = DB::Insert("INSERT INTO `messages` (`memberShipid`, `subject`, `user_id`, `message`,`ticket_id`) VALUES ('$a','$b','$c','$d','$e')");
       return $this->index();
    }
    public function single($value,$id)
    {
      DB::table('complains')
            ->where('id',$id)
            ->update(['status_red' => 1,'status_blue'=>1]);
    $message=DB::table('messages')->where('memberShipid',$value)->get();
    $complain=DB::table('complains')->where('memberShipid',$value)->get();
    $data=$complain[0]->memberShipid;
    $remainder=$complain[0]->remainder;

    return view('customer.single_message',['messages'=>$message,'remainder'=>$remainder,'data'=>$data,'complains'=>$complain,]);
    }
    public function complete($id)
    {
      $complains=DB::table('complains')
            ->where('id',$id)
            ->update(['status_red' => 4,'status_blue'=>4,'status_done' => 4,]);
            return $this->index();
    }
    public function remainder(Request $request)
    {
      $complains=DB::table('complains')
            ->where('memberShipid',$request->memberShipid)
            ->update(['remainder' => $request->remainder]);
            return back();
    }
}
