@extends('customer_layout')
@section('content')

            <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update Your Profile</h2>
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

                          <form class="forms-sample" method="post" action="{{URL::to('/update_profile')}}">
                          {{csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Phone</label>
                                  <input type="text" class="form-control p-input" name="customer_phone" value="{{($student_description_profile->student_phone)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Loaction</label>
                                  <input type="text" class="form-control p-input" name="customer_location" value="{{($student_description_profile->student_address)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Password</label>
                                  <input type="password" class="form-control p-input" name="customer_password" value="{{($student_description_profile->student_password)}}">
                              </div>
                            
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection