<?php

namespace App\Http\Controllers;
use DB;

use app\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Session;


class CustomerController extends Controller
{
   


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
    	
     // dd($request->all());
      $subject = $request->input('subject');
    	$user_id = $request->input('user_id');
    	$member_id = $request->input('member_id');
    	$message = $request->input('message');
      DB::table('complains')
            ->where('member_id',$member_id)
            ->update(['status_red' => 1,'status_blue'=>1]);
    	DB::insert("INSERT INTO messages(user_id, message, subject, member_id) VALUES ('$user_id','$message','$subject','$member_id')");
    	$request->session()->flash('status', 'Message Send successful!');
    	return back();
        
    }

    /*add complain */
    public function complainform()
    {
      if (! Gate::allows('customer_support')) {
            return abort(401);
        }

      return view('customer.addtoken');
    }

    public function complainadd(Request $req)
    {
     //dd($req->all());

      $a=$req->input('member_id');
      $b=$req->input('subject');
      $c=$req->input('user_name');
      $d=$req->input('message');
       $user = DB::Insert("INSERT INTO `complains` (`member_id`, `subject`, `user_name`, `message`) VALUES ('$a','$b','$c','$d')");
       return $this->index();
    }
   

    public function single($value)
    {
     

    //$message=DB::table('messages')->where('id',$value)->get();
    $complain=DB::table('complains')->where('member_id',$value)->get();
    $single=$value;
    return view('customer.single_message',['singles'=>$value,'complains'=>$complain,]);
    }
    public function complete($value)
    {
            DB::table('complains')
            ->where('member_id',$value)
            ->update(['status_red' => '3','status_blue'=>'3']);
            Session::flash('status', 'Complete Complain All Request!');
      return $this->index();
    }
}
