@extends('layout')
@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Order List</h2>


<!--invalid showuo-->
            <p class="alert-success "> 
              <?php
              $exception=Session::get('exception');

              if($exception){
                echo $exception;
                Session::put('exception' ,null);
              }
            ?></p>

          <!--invalid Endshow-->


              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Customer_Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Location</th> 
                          <th>Food</th> 
                          <th>Date</th> 
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($all_customer_info as $v_customer)
                      <tr>
                          <td>{{$v_customer->customer_name}}</td>
                          <td>{{$v_customer->customer_phone}}</td>
                          <td>{{$v_customer->customer_email}}</td>
                          <td>{{$v_customer->customer_location}}</td>
                          <td><img src="{{URL::to($v_customer->customer_food)}}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>{{$v_customer->customer_date}}</td>
                          
                          <td>
                            <a href="{{URL::to('/orderview/'.$v_customer->customer_id)}}"><button class="btn btn-outline-primary">View</button>
                           <a href="{{URL::to('/order_edit/'.$v_customer->customer_id)}}"><button class="btn btn-outline-warning">Edit</button>
                           <a href="{{URL::to('/customer_delete/'.$v_customer->customer_id)}}" id="delete"> <button href="" class="btn btn-outline-danger">Delete</button>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection