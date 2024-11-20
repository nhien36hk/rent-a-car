@extends('layouts.rentcar')
@section('title','Car Listing')

@section('content')


@forelse ($CarDetail as $key=>$data)
<section id="listing_img_slider">
  <div><img src="../uploads/{{$data->carpic}}" class="img-responsive" alt="image" width="900" height="560"></div>


</section>
<!--/Listing-Image-Slider-->




<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2>{{$data->carname}}</h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>{{ rtrim(number_format($data->carprice, 3), '0') }} <sup>đ</sup></p>Mỗi Ngày
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>
          
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5>{{$data->carmodel}}</h5>
              <p>Năm Sản Xuất</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>{{$data->posttype}}</h5>
              <p>Loại Xe</p>
            </li>
       
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5>{{$data->carseats}}</h5>
              <p>Số Ghế</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>
          
              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Vendor Details</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                
                <p>Địa chỉ: {{$data->address}}</p>

              </div>
              
              
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories"> 
                <!--Accessories-->
                <table>
 
                  <tbody>

                  <p>Số Điện Thoại Chủ Xe: {{$data->personnumber}}</p>
                  <p>Địa Chỉ Chủ Xe: {{$data->address}}</p>
                  <p>Tỉnh\Thành Phố: {{$data->location}}</p>
                </tbody>
                </table>
              </div>
            </div>
          </div>
          
        </div>

   
      </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3">
      
        <div class="share_vehicle">
          <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Đặt Xe</h5>
          </div>
          <form method="post" action="{{route('booking')}}">
            <div class="form-group">
              <label for="fromdate">Từ Ngày</label>
              <input type="date" class="form-control" id="fromdate" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
              <label for="todate">Tới Ngày</label>
              <input type="date" class="form-control" id="todate" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
            
              <input type="text" class="form-control" name="name" placeholder="Họ Tên" required>
            </div>
            <div class="form-group">
  
              <input type="number" class="form-control" name="phone" placeholder="Số Điện Thoại" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email Liên Hệ" required>
            <div class="form-group">
              <div>
                <label for=""></label>
                <select name="city" id="Location" required>
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
            
                 </div>    
            </div>
            

            <div class="form-group">
              <textarea rows="4" class="form-control" name="message" placeholder="*Ghi Chú" required></textarea>
            </div>
            <button class="btn" type="submit" name="send" type="submit">Đặt Ngay</button>
 
            @csrf

          </form>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
    
    <div class="space-20"></div>
    <div class="divider"></div>


    
  </div>
</section>

<!--/Listing-detail--> 











@empty
            no data found
        @endforelse
@endsection