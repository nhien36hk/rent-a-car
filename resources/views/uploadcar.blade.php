@extends('layouts.rentcar')
@section('title','Upload Post')

@section('content')

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Upload Post</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li>Upload Post</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<section>
<div class="uploadcontainer">  
  <form id="contact" action="{{route('car_details.store')}}" method="POST" enctype=multipart/form-data>
     @csrf
    <h2><a>Đăng Xe</a></h2>
    <h4><a>Chi tiết xe</a></h4>
    <fieldset>
      <input placeholder="Tên Xe" type="text" name="carname"  required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Giá Xe Mỗi Ngày" type="number" name="carprice"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="Năm Sản Xuất" type="number" name="carmodel"  required autofocus>
    </fieldset>

    <fieldset>   
    <input placeholder="Số Ghế" type="number" name="carseats"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="Địa Chỉ" name="address" type="text"  required>
    </fieldset>
    <fieldset>
      <input placeholder="Số Điện Thoại Liên Hệ" value="{{ Auth::user()->number }}" name="personnumber" type="tel" required>
    </fieldset>
    <fieldset>
   <input id="carpic" type="file" name="carpic"  required autofocus>
    </fieldset>
  <input style="display:none"  value='{{ Auth::user()->id }}' name="user_id"/>
    <fieldset>
 
  <select name="posttype" id="posttype">
  <option value="" disabled selected>Select Car Type</option>
    <option value="With Driver">Có Tài Xế</option>
    <option value="Without Driver">Không Có Tài Xế</option>
  </select>
    </fieldset>
      <select name="location" id="Location" required>
      <option value="" disabled selected>Chọn Thành Phố</option>
      <option value="An Giang">An Giang
      <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
      <option value="Bắc Giang">Bắc Giang
      <option value="Bắc Kạn">Bắc Kạn
      <option value="Bạc Liêu">Bạc Liêu
      <option value="Bắc Ninh">Bắc Ninh
      <option value="Bến Tre">Bến Tre
      <option value="Bình Định">Bình Định
      <option value="Bình Dương">Bình Dương
      <option value="Bình Phước">Bình Phước
      <option value="Bình Thuận">Bình Thuận
      <option value="Bình Thuận">Bình Thuận
      <option value="Cà Mau">Cà Mau
      <option value="Cao Bằng">Cao Bằng
      <option value="Đắk Lắk">Đắk Lắk
      <option value="Đắk Nông">Đắk Nông
      <option value="Điện Biên">Điện Biên
      <option value="Đồng Nai">Đồng Nai
      <option value="Đồng Tháp">Đồng Tháp
      <option value="Đồng Tháp">Đồng Tháp
      <option value="Gia Lai">Gia Lai
      <option value="Hà Giang">Hà Giang
      <option value="Hà Nam">Hà Nam
      <option value="Hà Tĩnh">Hà Tĩnh
      <option value="Hải Dương">Hải Dương
      <option value="Hậu Giang">Hậu Giang
      <option value="Hòa Bình">Hòa Bình
      <option value="Hưng Yên">Hưng Yên
      <option value="Khánh Hòa">Khánh Hòa
      <option value="Kiên Giang">Kiên Giang
      <option value="Kon Tum">Kon Tum
      <option value="Lai Châu">Lai Châu
      <option value="Lâm Đồng">Lâm Đồng
      <option value="Lạng Sơn">Lạng Sơn
      <option value="Lào Cai">Lào Cai
      <option value="Long An">Long An
      <option value="Nam Định">Nam Định
      <option value="Nghệ An">Nghệ An
      <option value="Ninh Bình">Ninh Bình
      <option value="Ninh Thuận">Ninh Thuận
      <option value="Phú Thọ">Phú Thọ
      <option value="Quảng Bình">Quảng Bình
      <option value="Quảng Bình">Quảng Bình
      <option value="Quảng Ngãi">Quảng Ngãi
      <option value="Quảng Ninh">Quảng Ninh
      <option value="Quảng Trị">Quảng Trị
      <option value="Sóc Trăng">Sóc Trăng
      <option value="Sơn La">Sơn La
      <option value="Tây Ninh">Tây Ninh
      <option value="Thái Bình">Thái Bình
      <option value="Thái Nguyên">Thái Nguyên
      <option value="Thanh Hóa">Thanh Hóa
      <option value="Thừa Thiên Huế">Thừa Thiên Huế
      <option value="Tiền Giang">Tiền Giang
      <option value="Trà Vinh">Trà Vinh
      <option value="Tuyên Quang">Tuyên Quang
      <option value="Vĩnh Long">Vĩnh Long
      <option value="Vĩnh Phúc">Vĩnh Phúc
      <option value="Yên Bái">Yên Bái
      <option value="Phú Yên">Phú Yên
      <option value="Tp.Cần Thơ">Tp.Cần Thơ
      <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
      <option value="Tp.Hải Phòng">Tp.Hải Phòng
      <option value="Tp.Hà Nội">Tp.Hà Nội
      <option value="TP  HCM">TP HCM
      </select>
    <fieldset>
      
    </fieldset>
    <fieldset>
    <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Upload </button>
            </div>
    </fieldset>
   
  </form>
</div>

</section>


@endsection