@extends('layouts.rentcar')
@yield('Contact Us')

@section('content')
<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Liên Hệ</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Trang Chủ</a></li>
        <li>Liên Hệ</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        <h3>Hãy liên lạc bằng cách sử dụng mẫu dưới đây</h3>
 
        <div class="contact_form gray-bg">
          <form action="{{route('contact')}}" method="post">
            <div class="form-group">
              <label class="control-label">Họ Tên <span>*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Địa Chỉ Email <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">Số Điện Thoại <span>*</span></label>
              <input type="text" name="phone" class="form-control white_bg" id="phonenumber" required>
            </div>
            <div class="form-group">
              <label class="control-label">Message <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Gửi <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
            @csrf
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Contact Info</h3>
        <div class="contact_detail">

          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m"></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="tel:61-1234-567-90"></a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="mailto:contact@exampleurl.com"></a></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
<!-- /Contact-us--> 
