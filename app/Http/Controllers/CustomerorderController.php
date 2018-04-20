<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
 Session_start();

class CustomerorderController extends Controller
{
   public function customerorder(){

    return view('customer.customer_order');
}

       // customer order save part here..............

    public function save_order(request $request){
      $data=array();
    	$data['customer_name']=$request->customer_name;
    	$data['customer_phone']=$request->customer_phone;
    	$data['customer_email']=$request->customer_email;
    	$data['customer_location']=$request->customer_location;
    	$data['customer_date']=$request->customer_date;
    	$image=$request->file('customer_food');

    	if($image){
    		$image_name=str_random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='image/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path, $image_full_name);
    		if($success){
    			$data['customer_food']=$image_url;


    			DB::table('customer_tbl')->insert($data);
    			Session::put('exception','Order added successfully!!');
    			return Redirect::to('/customerorder');
    		}
    	}
    	$data['image']=$image_url;
    	DB::table('customer_tbl')->insert($data);
    	Session::put('exception','Order added successfully!!');
    	return Redirect::to('/customerorder');





    	DB::table('customer_tbl')->insert($data);
    			Session::put('exception','Order added successfully!!');
    			return Redirect::to('/customerorder');

    	
    }

}
