@extends('layout')
@section('content')


            <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Customer Order update</h2>
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


                          <form class="forms-sample" method="post" action="{{URL::to('/update_order', $customer_description_profile->customer_id)}}">
                          {{csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Customer Name</label>
                                  <input type="text" class="form-control p-input" name="customer_name" aria-describedby="emailHelp" placeholder="Enter Customer Name" value="{{($customer_description_profile->customer_name)}}">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Phone</label>
                                  <input type="text" class="form-control p-input" name="customer_phone" placeholder="Enter Student Phone" value="{{($customer_description_profile->customer_phone)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Email</label>
                                  <input type="text" class="form-control p-input" name="customer_email" placeholder="Enter Customer Email" value="{{($customer_description_profile->customer_email)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Location</label>
                                  <input type="text" class="form-control p-input" name="customer_location" placeholder="Enter Customer Location" value="{{($customer_description_profile->customer_location)}}">
                              </div>
                           

                               <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Date</label>
                                  <input type="date" class="form-control p-input" name="customer_date" placeholder="Enter Customer Date" value="{{($customer_description_profile->customer_date)}}">
                              </div>
                                
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection