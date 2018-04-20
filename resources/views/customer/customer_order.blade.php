@extends('layout')
@section('content')


            <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Customer Order</h2>
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


                          <form class="forms-sample" method="post" action="{{URL::to('/save_order')}}" enctype="multipart/form-data">
                          {{csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Customer Name</label>
                                  <input type="text" class="form-control p-input" name="customer_name" aria-describedby="emailHelp" placeholder="Enter Customer Name">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Phone</label>
                                  <input type="text" class="form-control p-input" name="customer_phone" placeholder="Enter Student Phone">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Email</label>
                                  <input type="text" class="form-control p-input" name="customer_email" placeholder="Enter Customer Email">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Location</label>
                                  <input type="text" class="form-control p-input" name="customer_location" placeholder="Enter Customer Location">
                              </div>
                              
                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Customer Food</label>
                                      <input type="file" class="form-control-file" name="customer_food" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                  </div>
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Date</label>
                                  <input type="date" class="form-control p-input" name="customer_date" placeholder="Enter Customer Date">
                              </div>
                                
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection