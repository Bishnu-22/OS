@extends('layout')

@section('content')

<div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <p class="name">{{strtoupper($customer_description_profile->customer_name)}}</p>
                  <a class="number" href="#">{{$customer_description_profile->customer_phone}}</a>
                  <a class="email" href="#">{{$customer_description_profile->customer_email}}</a>
                  
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <h2 style="color: maroon; font-family: cursive; font-weight: bolder; ">K-F-C</h2>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total information of this customer order are give bellow.</p>
                  </div>
                  
                </div>
              </div>
            </div>
           
          </div>

@endsection