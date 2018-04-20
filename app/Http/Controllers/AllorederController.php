<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
 Session_start();

class AllorederController extends Controller
{
    public function allorder(){

    	$allcustomer_info=DB::table('customer_tbl')
   	                 ->get();

   	 $manage_customer=view('admin.allorder')  
   	                 ->with('all_customer_info', $allcustomer_info);
   	     return view('layout')
   	                 ->with('allorder', $manage_customer);   

    //return view('admin.allorder');
}
     //order delete method......................

    public function customerdelete($customer_id){

    	//echo "success";
    	DB::table('customer_tbl')
    	   ->where('customer_id', $customer_id)
    	   ->delete();

    	   return Redirect::to('/allorder');

   	
    }

     public function orderview($customer_id){
      //return view('admin.orderview');

      $customer_description_view=DB::table('customer_tbl')
         ->select('*')
        ->where('customer_id', $customer_id)
         ->first();


         //echo "</pre>";
         //print_r($student_description_viewprofile);
         // echo "/pre";


         $manage_description_customer=view('admin.orderview')
          ->with('customer_description_profile', $customer_description_view);

      return view('layout')
          ->with('orderview', $manage_description_customer);
     }

     // edit..................


     public function order_edit($customer_id){
      $customer_description_view=DB::table('customer_tbl')
         ->select('*')
        ->where('customer_id', $customer_id)
         ->first();


        // echo "</pre>";
        // print_r($student_description_view);
        //  echo "</pre>";


         $manage_description_customer=view('admin.order_edit')
          ->with('customer_description_profile', $customer_description_view);

      return view('layout')
          ->with('order_edit', $manage_description_customer);
    
    }


     //update here part...............
    public function update_order(Request $request, $customer_id){

      //echo "<pre>";
      //print_r($student_id);
      $data=array();
      $data['customer_name']=$request->customer_name;
      $data['customer_phone']=$request->customer_phone;
      $data['customer_email']=$request->customer_email;
      $data['customer_location']=$request->customer_location;
      $data['customer_date']=$request->customer_date;


      DB::table('customer_tbl')
           ->where('customer_id', $customer_id)
           ->update($data);

           Session::put('exception', 'order update successfully');
           return Redirect::to('/customerorder');
      
    
    }

    


}
