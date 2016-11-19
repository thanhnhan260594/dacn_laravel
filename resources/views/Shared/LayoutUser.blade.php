
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=" icon" href="{{asset("resources/views/Themes/Contents/img/icon.png")}}"/>     
    <title>Cửa hàng Hoa tươi H & T</title>
    <link href="Contents/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <!--jquery first, bootstrap later-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset("resources/views/Themes/Contents/js/bootstrap.js") }}"></script>
    
    <link rel="stylesheet" type="text/css" href="{{ asset("resources/views/Themes/Contents/css/bootstrap.min.css") }}"/> 
    <link rel="stylesheet" type="text/css" href="{{ asset("resources/views/Themes/Contents/css/nn-style.css") }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset("resources/views/Themes/Contents/css/nn-style1.css") }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset("resources/views/Themes/Contents/css/login-style.css") }}"/>

     <link href="{{ asset("resources/views/Themes/Contents/Plugins/owl-carousel/owl.carousel.css")}}" rel="stylesheet" />
    <link href="{{ asset("resources/views/Themes/Contents/Plugins/owl-carousel/owl.transitions.css")}}" rel="stylesheet" />
    <link href="{{ asset("resources/views/Themes/Contents/Plugins/owl-carousel/owl.theme.css")}}" rel="stylesheet" />
   	<link rel="stylesheet" type="text/css" href="{{ asset("resources/views/Themes/Contents/css/font-awesome.min.css") }}"/> 
</head>

<body>
<div class="container">
    <header class="nn-header">
            <!--end logo--><!--end search box--><!--end cart box-->            
            <div style="float:left; display:block"> <a href=""><img src="{{ asset("resources/views/Themes/Contents/img/logo.png") }}" width="239" height="87">            
            </a></div>
            <table width="40%" height="100%" border="0" cellspacing="0" cellpadding="0" style="float:right; color:#CCC" bordercolor="#FFFFFF">
                <tr align="center" style="background-color: #DD006F; font-weight:bold;color:#CCC">
                    <td width="25%" style="border:solid 3px" class="radious_left"><a href="#" style="text-decoration:none;color:#CCC">Tài khoản</a></td>                    
                    <td width="24%" style="border:solid 3px"><a href="#" style="text-decoration:none;color:#CCC">Thanh toán</a></td>
                    <td width="26%" style="border:solid 3px" class="radious_right"><a href="@Url.Action("Dangnhap","Nguoidung")" style="text-decoration:none;color:#CCC">Đăng nhập</a></td>
                </tr>
                <tr>
                    <td colspan="2" style="color:#DD4800; font-weight:bold" align="center">
                        <span>GIỜ GIAO HOA</span><br />
                        7.00AM - 7.00 PM
                    </td>
                    <td colspan="2" style="color:#008040; font-weight:bold" align="center">
                        <span>GỌI CHO CHÚNG TÔI</span><br />
                        <p>(08) 3810 7373</p>
                    </td>
                </tr>
            </table>
           
            <div style="float:right; display:block">
                <table style="float:right; margin-right:50px" border="0">
                    <tr>
                        <td height="37" valign="top"><div align="center" class="style5"><span style="font-weight:bold;color:#060;font-size:18px">Có thể thanh toán bằng</span></div></td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <div align="center">                                
                                <img src="{{ asset("resources/views/Themes/Contents/img/IconCardMasterCard.gif") }}" width="37" height="23">                                
                               <img src="{{ asset("resources/views/Themes/Contents/img/IconCardVisa.gif")}}" width="37" height="23"> 
                                <img src="{{ asset("resources/views/Themes/Contents/img/IconCardVisaE.gif") }}" width="37" height="23">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
    </header>  
        <div class="navbar navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home "></span></a>
            </div>
            <div class="navbar-collapse collapse js-navbar-collapse" style="background-color:#FFF">
                <ul class="nav navbar-nav">
                    <li><a href="#" class="">TRANG CHỦ</a></li>
                    <li><a href="#">GIỚI THIỆU</a></li>
                    <li><a href="#">SẢN PHẨM</a></li>
                    <li><a href="#">LIÊN HỆ</a></li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Tài khoản <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            @if (true)
                            
                                <li><a href="@Url.Action("Dangnhap","Nguoidung")">Đăng nhập</a></li>
                                <li><a href="/Account/Forgot">Quên mật khẩu</a></li>
                                <li><a href="@Url.Action("Dangky","NguoiDung")">Đăng ký thành viên</a></li>
                            
                            @else
                            
                                <li><a href="/Account/LogOff">Đăng xuất</a></li>
                                <li><a href="/Account/Manage">Đổi mật khẩu</a></li>
                                <li><a href="/Account/Edit">Cập nhật hồ sơ</a></li>
                                <li class="divider"></li>
                                <li><a href="/Order/List">Đơn hàng</a></li>
                                <li><a href="/Order/Products">Hàng đã mua</a></li>
                            
                            @endif
                        </ul>
                    </li>                    
                    
                </ul>

                <form role="search" style="width:200px; float:right">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Tìm kiếm" style="float:right" />
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search" style="float:right"></span>
                            </button>
                        </span>
                    </div>
                </form>
            </div>  
            </div>
    <div class="container row">
    	<div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">

        	<div class="nn-block">
            	<div class="nn-megamenu-sidebar-title" style="background-color:#008040"><i class="glyphicon glyphicon-list"></i><h2>DANH MỤC</h2>                        
                </div>                   
                @include('HoaTuoi.Danhmuc',[ 'danhmuc' => $danhmuc ])
            </div><!--end block category-->

            <div class="nn-block">
                <div class="nn-megamenu-sidebar-title" style="background-color:#008040"><i class="glyphicon glyphicon-list"></i><h2>XUẤT XỨ</h2>                        
                </div>             
                @include('HoaTuoi.Xuatxu',[ 'xuatxu' => $xuatxu ])
               
            </div> 

            <div class="nn-block">
           		<div class="nn-megamenu-sidebar-title" style="background-color: #008040"><i class="glyphicon glyphicon-tags"></i><h2>Giảm giá</h2></div>
                <div class="nn-product-box">      
                    @include('HoaTuoi.Layhoasale',[ 'giamgia' => $giamgia ])
                </div>                           
            </div> 

        </div>
        
        <div class="col-md-9 col-sm-9 col-lg-9 col-xs-12">                
            <div>
                    @yield("content")                  
            </div>                
        </div>   

    </div><!--end left-sidebar-->                  
                
   


</div>
   <div class="ma-footer-static">
            <div class="container">
                <div class="footer-static">
                    <div class="row" style="background-color:#CCC">
                        <div class="f-col f-col-3 col-sm-6 col-md-4 col-sms-6 col-smb-12">
                            <div class="img-logo"><a href="@Url.Action("Index","HoaTuoi")"><img src="{{ asset("resources/views/Themes/Contents/img/logo.png") }}" width="239" height="87"></a></div>
                            <div class="footer-static-content ">
                                <h3>THÔNG TIN LIÊN HỆ</h3>
                                <p style="font-weight:bold">Cửa hàng hoa tươi, Shop hoa tươi online</p>
                                <p>
                                    Công ty TNHH H & T - 475A Điện Biên Phủ, P25, Quận Bình Thạnh,TP HCM.<br />

                                    Giấy phép/MST: 0305952229 do Sở KHDTHCM cấp ngày 28/09/2008

                                    Ông: ABC đại diện pháp luật.<br />

                                    Phone: 08.62768186 - 0985 608060;<br />
                                    Email: hoatuoisaigon@gmail.com


                                </p>
                            </div>
                        </div>
                        <div class="f-col f-col-4 col-sm-6 col-md-2 col-sms-6 col-smb-12">
                            <div class="footer-static-title">
                                <h3>CÁC DỊCH VỤ</h3>
                            </div>
                            <div class="footer-static-content">
                                <ul>
                                    <li class="first"><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/about-magento-demo-store">About us</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/contacts">Order History</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/privacy-policy-cookie-restriction-mode">Returns</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/customer-service">Custom Service</a></li>
                                    <li class="last"><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/catalogsearch/term/popular">Terms &amp; Condition</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="f-col f-col-5 col-sm-6 col-md-2 col-sms-6 col-smb-12">
                            <div class="footer-static-title">
                                <h3>HỖ TRỢ</h3>
                            </div>
                            <div class="footer-static-content ">
                                <ul>
                                    <li class="first"><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/catalog/seo_sitemap/category">Sitemap</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/privacy-policy-cookie-restriction-mode">Privacy Policy</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/customer/account/index">Your Account</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/catalogsearch/advanced">Advanced Search</a></li>
                                    <li class="last"><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/contacts">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="f-col f-col-6 col-sm-6 col-md-2 col-sms-6 col-smb-12">
                            <div class="footer-static-title">
                                <h3>TÀI KHOẢN</h3>
                            </div>
                            <div class="footer-static-content">
                                <ul>
                                    <li class="first"><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/customer/account/index">My Account</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/contacts">Order History</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/contacts">Returns</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/contacts">Specials</a></li>
                                    <li class="last"><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/catalog/seo_sitemap/category">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="f-col f-col-7 col-sm-6 col-md-2 col-sms-6 col-smb-12">
                            <div class="footer-static-title">
                                <h3>THÔNG TIN</h3>
                            </div>
                            <div class="footer-static-content">
                                <ul>
                                    <li class="first"><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/about-magento-demo-store">About us</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/contacts">Delivery Information</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/privacy-policy-cookie-restriction-mode">Privacy Policy</a></li>
                                    <li><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/customer-service">Custom Service</a></li>
                                    <li class="last"><a href="http://www.plazathemes.com/demo/ma_enzo/index.php/catalogsearch/term/popular">Terms &amp; Condition</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>

<script type="text/javascript" src="{{ asset("resources/views/Themes/Contents/Plugins/owl-carousel/owl.carousel.min.js") }}"></script>
<script>
        $(document).ready(function () {

            var thoigianchay = 2 * 1000;

            var owl = $("#owl-demo");

            owl.owlCarousel({
                items: 3, //10 items above 1000px browser width
                //itemsDesktop: [1000, 5], //5 items between 1000px and 901px
                //itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                //itemsTablet: [600, 2], //2 items between 600 and 0
                //itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
            });

            // Custom Navigation Events
            $(".next").click(function () {
                owl.trigger('owl.next');
            })
            $(".prev").click(function () {
                owl.trigger('owl.prev');
            })
            owl.trigger('owl.play', thoigianchay);

            $(".owl-item").hover(function () {
                owl.trigger('owl.stop');
            }, function () {
                owl.trigger('owl.play', thoigianchay);
            });

        });
    </script>
 <script type='text/javascript'>window._sbzq || function (e) { e._sbzq = []; var t = e._sbzq; t.push(["_setAccount", 52948]); var n = e.location.protocol == "https:" ? "https:" : "http:"; var r = document.createElement("script"); r.type = "text/javascript"; r.async = true; r.src = n + "//static.subiz.com/public/js/loader.js"; var i = document.getElementsByTagName("script")[0]; i.parentNode.insertBefore(r, i) }(window);</script>
</html>
