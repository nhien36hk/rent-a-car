@extends('layouts.rentcar')
@section('title','My Posts')

@section('content')
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Bài Đăng</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Trang Chủ</a></li>
        <li>Bài Đăng</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->




<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">



@forelse ($CarDetail as $key=>$data)
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img  src="../uploads/{{$data->carpic}} " class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="">{{$data->carname}} </a></h5>
            <p class="list-price">Giá Mỗi Ngày: {{$data->carprice}} <sup>đ</sup>  </p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i> {{$data->carseats}} số ghế </li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$data->carmodel}} năm sản xuất</li>
              <li><i class="fa fa-car" aria-hidden="true">{{$data->posttype}} </i></li>
            </ul>
           
            
            <a href="../editcar/{{$data->id}} " class="btn">Chỉnh sửa chi tiết <span class="angle_arrow"><i class="far fa-edit" ></i></span></a>
            <a href="../deletecar/{{$data->id}} " class="btn">Xóa<span class="angle_arrow"><i class="far fa-trash-alt"></i></span></a></div>
        </div>

        @empty
            no data found
        @endforelse

         </div>
      

    </div>
  </div>
</section>
<!-- /Listing--> 

@endsection