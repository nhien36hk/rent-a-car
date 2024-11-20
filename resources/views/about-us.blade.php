@extends('layouts.rentcar')
@section('title','About Us')
@section('content')

<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
      
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Trang Chủ</a></li>
        <li><a href="#">Về Chúng Tôi </a></li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>

<!-- /About-us--> 

<div class="container">
    <div class="row">
        <h2>Nhóm Của Chúng Tôi</h2>
        <hr />
        <div class="row pt-md">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
                <div class="img-box">
                    <img class="img-responsive" alt="Responsive Team Profiles" src="{{asset('images/nhien.jpg')}}" />
                    <ul class="text-center">
                        <a href="#">
                            <li><i class="fa fa-facebook"></i></li>
                        </a>
                        <a href="#">
                            <li><i class="fa fa-twitter"></i></li>
                        </a>
                        <a href="#">
                            <li><i class="fa fa-linkedin"></i></li>
                        </a>
                    </ul>
                </div>
                <h1>Hữu Nhiên</h1>
                <h2>Trưởng Nhóm</h2>
                <hr />
                <p class="text-justify">Nhóm chúng tôi luôn sẵn sàng làm tất cả mọi việc.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
                <div class="img-box">
                    <img class="img-responsive" alt="Responsive Team Profiles" src="{{asset('images/minh như.jpg')}}" />
                    <ul class="text-center">
                        <a href="#">
                            <li><i class="fa fa-facebook"></i></li>
                        </a>
                        <a href="#">
                            <li><i class="fa fa-twitter"></i></li>
                        </a>
                        <a href="#">
                            <li><i class="fa fa-linkedin"></i></li>
                        </a>
                    </ul>
                </div>
                <h1>Minh Như</h1>
                <h2>Thành Viên</h2>
                <hr />
                <p class="text-justify">Nhóm chúng tôi luôn sẵn sàng làm tất cả mọi việc..</p>
            </div>
    
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
                <div class="img-box">
                    <img class="img-responsive" alt="Responsive Team Profiles" src="{{asset('images/truc phuong.jpg')}}" />
                    <ul class="text-center">
                        <a href="#">
                            <li><i class="fa fa-facebook"></i></li>
                        </a>
                        <a href="#">
                            <li><i class="fa fa-twitter"></i></li>
                        </a>
                        <a href="#">
                            <li><i class="fa fa-linkedin"></i></li>
                        </a>
                    </ul>
                </div>
                <h1>Trúc Phương</h1>
                <h2>Thành Viên</h2>
                <hr />
                <p class="text-justify">Nhóm chúng tôi luôn sẵn sàng làm tất cả mọi việc..</p>
            </div>


        </div>
    </div>
</div>



@endsection

