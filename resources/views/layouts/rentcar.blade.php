<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental | @yield('title')</title>
<!--Bootstrap -->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
<link rel="stylesheet" href="../assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="../assets/css/owl.transitions.css" type="text/css">
<link href="../assets/css/slick.css" rel="stylesheet">
<link href="../assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<link rel="stylesheet" id="switcher-css" type="text/css" href="../assets/switcher/css/switcher.css" media="all" />
<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/css/orange.css" title="orange" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/css/blue.css" title="blue" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/css/pink.css" title="pink" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/css/green.css" title="green" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
<link href="../css/rentcar.css" rel="stylesheet">
</head>
<body>


<!-- Start Switcher -->
@include('../includes/colorswitcher')
<!-- /Switcher -->  


@include('../includes/rentcarheader')

@yield('content')
<!--Footer -->
@include('../includes/rentcarfooter')
<!-- /Footer--> 
<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!-- Scripts --> 
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/interface.js"></script> 
<!--Switcher-->
<script src="../assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="../assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>