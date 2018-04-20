<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
 Session_start();

class AdminController extends Controller
{
    public function admin_dashboard(){

    return view('admin.dashboard');
}

// Logout Part...............
public function logout(){
    Session::put('admin_name',null);
    Session::put('admin_id',null);

    return Redirect::to('/admin');
}


    public function login_dashboard(Request $request)
    {

    	//echo "hello";
    	//return view('admin.dashboard');
    	$email=$request->admin_email;
    	$password=md5($request->admin_password);
    	$result=DB::table('admin_tbl')
    	->where('admin_email',$email)
    	->where('admin_password',$password)
    	->first();

    	//echo "</pre>";
    	//print_r($result);

    	if($result){
    		Session::put('admin_email', $result->admin_email);
    		Session::put('admin_id', $result->admin_id);
    		return Redirect::to('/admin_dashboard');
    		echo "Shohel rana";
    	}
    	else{
    		Session::put('exception','Email or password Invalid');
    		return Redirect::to('/admin');
    	}		
}

public function register(Request $request){

    return view('register');
}

     
}
