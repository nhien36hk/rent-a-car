<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">

<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>

<!-- Start Switcher -->
@include('includes/colorswitcher')
<!-- /Switcher -->  
        
<!--Header-->
@include('includes/header')
<!-- /Header --> 
{{-- Navbar --}}
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse"
                class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="header_wrap">
            <div class="user_login">
                <ul>
                    <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                            <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">

            <!-- <li><a href="profile.php">Profile Settings</a></li>
          <li><a href="update-password.php">Update Password</a></li>
        <li><a href="my-booking.php">My Booking</a></li>
        <li><a href="post-testimonial.php">Post a Testimonial</a></li>
      <li><a href="my-testimonials.php">My Testimonial</a></li>
        <li><a href="logout.php">Sign Out</a></li> -->

                            <li><a href="/myorder">Đơn Thuê</a>
                            </li>



                
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="header_search">
                <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
                <form action="seacrh-car" method="get" id="header-search-form">
                    <input type="text" name="search" placeholder="Search..." class="form-control">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    @csrf
                </form>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav">
                <li><a href="../home">Trang Chủ</a> </li>
                <li><a href="../about-us">Về Chúng Tôi</a></li>
                <li><a href="../car-listing">Danh Sách Xe</a>
                <li><a href="../upload-car">Cho Thuê Xe</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- Navigation end -->
{{-- /Navbar --}}

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>TÌM XE PHÙ HỢP CHO BẠN.</h1>
            <p>Chúng tôi có hơn một ngàn chiếc xe cho bạn lựa chọn. </p>
            <a href="#" class="btn">Đọc Thêm <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Tìm xe <span>Tốt Nhất Cho Bạn</span></h2>
      <p>Trong khi thị trường cho thuê ô tô online ngày càng sôi động với nhiều lựa chọn, thì việc tìm kiếm một trang web uy tín, minh bạch và đảm bảo chất lượng xe lại là điều không hề đơn giản. Đừng lo lắng, trang web của chúng tôi ra đời với sứ mệnh mang đến cho bạn trải nghiệm thuê xe an toàn, thuận tiện và tiết kiệm nhất. Hãy truy cập ngay để khám phá!</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">


<!-- <div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=" "><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>3453 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href=" ">BMW , ytb rvtr</a></h6>
<span class="price">$345345 /Day</span> 
</div>
<div class="inventory_info_m">
<p>vtretrvet</p>
</div>
</div>
</div>




<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=""><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>3453 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="">BMW , ytb rvtr</a></h6>
<span class="price">$345345 /Day</span> 
</div>
<div class="inventory_info_m">
<p>vtretrvet</p>
</div>
</div>
</div>



<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=""><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>3453 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="">BMW , ytb rvtr</a></h6>
<span class="price">$345345 /Day</span> 
</div>
<div class="inventory_info_m">
<p>vtretrvet</p>
</div>
</div>
</div>



<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=" "><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>3453 Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href=" ">BMW , ytb rvtr</a></h6>
<span class="price">$345345 /Day</span> 
</div>
<div class="inventory_info_m">
<p>vtretrvet</p>
</div>
</div>
</div> -->
       
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 

<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
            <p>Số Năm Kinh Doanh</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
            <p>Xe Mới Bán</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
            <p>Xe Cũ</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
            <p>Khách Hàng Hài Lòng</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Sự Hài Lòng <span>Của Khách Hàng</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider" class="owl-carousel owl-theme" style="opacity: 1; display: block;">


        <div class="owl-wrapper-outer">
        <div class="owl-wrapper" style="width: 2340px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
        <div class="owl-item" style="width: 585px;">
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/girl tiktok.jpg" alt=""> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>Linh Nhi</h5>
            <p>Tôi rất hài lòng với dịch vụ thuê xe. Xe mới, sạch sẽ và được bảo dưỡng tốt. Nhân viên nhiệt tình, chu đáo và luôn sẵn sàng hỗ trợ.</p>
          </div>
        </div>
        </div>
        </div>
        <div class="owl-item" style="width: 585px;"><div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/cat-profile.png" alt=""> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>Tuấn Anh</h5>
            <p>
              Tôi rất hài lòng với dịch vụ thuê xe của [Tên công ty]. Xe mới, sạch sẽ và được bảo dưỡng tốt. Nhân viên nhiệt tình, chu đáo và luôn sẵn sàng hỗ trợ. Giá cả hợp lý và thủ tục thuê xe đơn giản. Chắc chắn tôi sẽ quay lại sử dụng dịch vụ của [Tên công ty] trong tương lai</p>
          </div>
        </div>
        </div></div></div></div>
        

        
                
       
  
      <div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div></div></div></div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 


<!--Footer -->
@include('includes/footer')
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
@include('includes/login')
<!--/Login-Form --> 

<!--Register-Form -->
@include('includes/registration')

<!--/Register-Form --> 

<!--Forgot-password-Form -->
@include('includes/forgotpassword')
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>