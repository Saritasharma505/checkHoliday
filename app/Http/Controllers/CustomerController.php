<?php

namespace App\Http\Controllers;
use DB;
use app\Complain;
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
   	$user= DB::table('members')->get();
   	return view('customer.index',['user'=>$user]);
   }


   public function view($value)
   {
    
   	$user= DB::table('members')->where('memberShipid',$value)->get();

    $message=DB::table('messages')->where('member_id',$value)->get();
    $complain=DB::table('complains')->where('member_id',$value)->get();
   	//dd($complain);
    return view('customer.view',['user'=>$user,'messages'=>$message,'complains'=>$complain,]);
   }

   
   public function message($value)
   {
   	$user= DB::table('messages')->where('member_id',$value)->orderBy('id', 'asc')->get();
   		return view('customer.message',['messages'=>$user]);
   }
  	public function create(Request $request)
    {
    	$subject = $request->input('subject');
    	$user_id = $request->input('user_id');
    	$member_id = $request->input('member_id');
    	$message = $request->input('message');

    	DB::insert("INSERT INTO messages(user_id, message, subject, member_id) VALUES ('$user_id','$message','$subject','$member_id')");
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
      $a=$req->input('member_id');
      $b=$req->input('subject');
      $c=$req->input('user_name');
      $d=$req->input('message');
       $user = DB::Insert("INSERT INTO `complains` (`member_id`, `subject`, `user_name`, `message`) VALUES ('$a','$b','$c','$d')");
       return $this->index();
    }
    public function single($value)
    {
    $message=DB::table('messages')->where('id',$value)->get();
    $complain=DB::table('complains')->where('id',$value)->get();
    
    return view('customer.single_message',['messages'=>$message,'complains'=>$complain,]);
    }
}
