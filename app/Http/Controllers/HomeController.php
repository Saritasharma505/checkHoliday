<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Member;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalMember = DB::table('members')->count();
        $totalVoucher = DB::table('vouchers')->count();
        $totalCollection=DB::table('pay')->sum(DB::raw('T1C1 + T2C1'));



    $todayMember = DB::table('members')->whereDate('doj', DB::raw('CURDATE()'))->count();
    $todayVouchers=DB::table('vouchers')->whereDate('doj', DB::raw('CURDATE()'))->count();
    $todayCollection=DB::table('todayCollection')->sum(DB::raw('T1C1 + T2C1'));
  
       
    $lastMonthMember= DB::table('members')->whereMonth('doj', '=', \Carbon\Carbon::now()->subMonth()->month)->count();
    $lastMonthVoucher= DB::table('vouchers')->whereMonth('doj', '=', \Carbon\Carbon::now()->subMonth()->month)->count();
    $lastMonthCollection=DB::table('lastMonthCollection')->sum(DB::raw('T1C1 + T2C1'));

    $memberss=DB::select('select count(doj) as total from members GROUP BY MONTH(doj)');

       
       // return view('home',['memberss'=>$memberss]);
        return view('home',compact(['memberss','totalMember','totalVoucher','totalCollection','todayMember','todayVouchers','todayCollection','lastMonthMember','lastMonthVoucher','lastMonthCollection']));
    }
}
