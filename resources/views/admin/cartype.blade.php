@extends('layouts.admin')

@section('content')


<div class="col-md-11 col-md-push-1">



@forelse ($CarDetail as $key=>$data)
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img  src="uploads/{{$data->carpic}} " class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="  cardetail/{{$data->id}} ">{{$data->carname}} </a></h5>
            <p class="list-price">Price Per Day: {{$data->carprice}} RS  </p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i> {{$data->carseats}} seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$data->carmodel}} model</li>
              <li><i class="fa fa-car" aria-hidden="true">{{$data->posttype}} </i></li>
            </ul>
            <p class="list-city">City: {{$data->location}} </p>

            <a href="cardetail/{{$data->id}} " class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            <a href="../deletecar/{{$data->id}} " class="btn">Delete<span class="angle_arrow"><i class="far fa-trash-alt"></i></span></a>
          </div>
        </div>

        @empty
            no data found
        @endforelse

         </div>



@endsection