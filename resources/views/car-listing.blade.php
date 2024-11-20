@extends('layouts.rentcar')
@section('title','Car Listing')

@section('content')
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Danh Sách Xe</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Trang Chủ</a></li>
        <li>Danh Sách Xe</li>
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
          <div class="product-listing-img"><img  src="uploads/{{$data->carpic}} " class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="  cardetail/{{$data->id}} ">{{$data->carname}} </a></h5>
            <p class="list-price">Giá Mỗi Ngày: {{ rtrim(number_format($data->carprice, 3), '0') }} <sup>đ</sup>  </p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i> {{$data->carseats}} ghế</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$data->carmodel}} năm sản xuất</li>
              <li><i class="fa fa-car" aria-hidden="true">{{$data->posttype}} </i></li>
            </ul>
            <p class="list-city">Tình/Thành Phố: {{$data->location}} </p>

            <a href="cardetail/{{$data->id}} " class="btn">Xem Chi Tiết <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
        </div>

        @empty
            no data found
        @endforelse

         </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Tìm Xe Mong Muốn </h5>
          </div>
          <div class="sidebar_filter">
            <form action="search-carresult" method="post">
              <div class="form-group select">
                <select name="selectcar" class="form-control" name="brand">
                  <option>Loại Xe</option>
                  <option value="With Driver">Có Tài Xế</option>
                  <option value="Without Driver">Không Có Tài Xế</option>
                </select>
              </div>
              @csrf

             
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Tìm Xe</button>
              </div>
            </form>
          </div>
        </div>

        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> Các Xe Mới Được Thêm </h5>
          </div>
          <div class="recent_addedcars">
            <ul>

            @forelse ($CarDetail as $key=>$data)
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="cardetail/{{$data->id}}"><img src="uploads/{{$data->carpic}}" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="cardetail/{{$data->id}}">{{$data->carname}}</a>
                  <p class="widget_price"><sup>đ</sup> mỗi ngày</p>
                </div>
              </li>
              @empty
            no data found
        @endforelse

             
              
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
  </div>
</section>
<!-- /Listing--> 

@endsection