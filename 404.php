<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- 40432:14-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>404 Error || limupa - Digital Products Store eCommerce Bootstrap 4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header>
              <!-- Begin Header Top Area -->
              <div class="header-top">
                <div class="container">
                  <div class="row">
                    <!-- Begin Header Top Left Area -->
                    <div class="col-lg-3 col-md-4">
                      <div class="header-top-left">
                        <ul class="phone-wrap">
                          <li>
                            <span>Liên hệ: </span><a href="#">(+84) 123 321 345</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- Header Top Left Area End Here -->
                    <!-- Begin Header Top Right Area -->
                    <div class="col-lg-9 col-md-8">
                      <div>
                        <ul class="ht-menu">
                          <!-- Begin login Area -->
                          <?php
                            if(isset($_GET["SDT"])){
                              $SDT = $_GET['SDT'];
                              $ten = $_GET['ten'];
                              $a = "?SDT=$SDT&ten=$ten";
                              $gio = "href='checkout.php".$a."'";
                              $yeu = "href='wishlist.php".$a."'";
                              $IDHang = $a."&IDHang=";
                              ?>
                              <li style="color:blue">
                                Xin chào <?php echo $ten; ?>!
                              </li>
                              <li>
                                <a href="index.php">Đăng xuất</a>
                              </li>
                              <!-- Begin cart Area -->
                              <li>
                                <a href="<?php echo "checkout.php".$a; ?>">Giỏ hàng</a>
                              </li>
                              <!-- cart Area End Here -->
                              <!-- Begin wishlist Area -->
                              <li>
                                <a href="<?php echo "wishlist.php".$a; ?>">Yêu thích</a>
                              </li>
                              <!-- wishlist Area End Here -->
                              <?php        
                            } else {
                              ?>
                              <li>
                                <a href="login-register.php" style="font-size:15px">Đăng nhập</a>
                              </li>
                              <?php
                              $a = "";
                              $gio = "href='' title='quick view' class='quick-view-btn' data-toggle='modal' data-target='#exampleModalCenter'"; 
                              $yeu = "href='' title='quick view' class='quick-view-btn' data-toggle='modal' data-target='#exampleModalCenter'";
                              $IDHang = "?IDHang=";
                            }
                          ?>
                          <!-- login Area End Here -->
                        </ul>
                      </div>
                    </div>
                    <!-- Header Top Right Area End Here -->
                  </div>
                </div>
              </div>
              <!-- Header Top Area End Here -->
              <!-- Begin Header Middle Area -->
              <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                <div class="container">
                  <div class="row">
                    <!-- Begin Header Logo Area -->
                    <div class="col-lg-3">
                      <div class="logo pb-sm-30 pb-xs-30">
                        <a href="<?php echo "index.php".$a; ?>">
                          <img src="images/menu/logo/logo2.jpg" alt="" width="100%" />
                        </a>
                      </div>
                    </div>
                    <!-- Header Logo Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                      <!-- Begin Header Middle Searchbox Area -->
                      <div class="header-middle-right">
                        <form action="#" class="hm-searchbox">
                          <input
                            type="text"
                            placeholder="Nhập từ khóa tìm kiếm ..."
                          />
                          <button class="li-btn" type="submit">
                            <i class="fa fa-search"></i>
                          </button>
                        </form>
                      </div>
                      <!-- Header Middle Searchbox Area End Here -->
                    </div>
                    <!-- Header Middle Right Area End Here -->
                  </div>
                </div>
              </div>
              <!-- Header Middle Area End Here -->
              <!-- Begin Header Bottom Area -->
              <div class="header-bottom d-none d-lg-block d-xl-block">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <!-- Begin Header Bottom Menu Area -->
                      <div class="hb-menu">
                        <nav>
                          <ul>
                            <li><a href= "<?php echo "index.php".$a; ?>">Trang chủ</a></li>
                            <li class="dropdown-holder">
                              <a href="#">Hãng</a>
                              <ul class="hb-dropdown">
                                <li><a href="shop-3-column.php<?php echo $IDHang; ?>A">Apple</a></li>
                                <li><a href="shop-3-column.php<?php echo $IDHang; ?>S">Samsung</a></li>
                                <li><a href="shop-3-column.php<?php echo $IDHang; ?>O">OPPO</a></li>
                                <li><a href="shop-3-column.php<?php echo $IDHang; ?>X">Xiaomi</a></li>
                              </ul>
                            </li>
                            <li><a href="<?php echo "about-us.php".$a; ?>">Giới thiệu</a></li>
                            <li><a href="<?php echo "contact.php".$a; ?>">Liên hệ</a></li>
                          </ul>
                        </nav>
                      </div>
                      <!-- Header Bottom Menu Area End Here -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- Header Bottom Area End Here -->
              <!-- Begin Mobile Menu Area -->
              <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                <div class="container">
                  <div class="row">
                    <div class="mobile-menu"></div>
                  </div>
                </div>
              </div>
              <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">404 Error</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Error 404 Area Start -->
            <div class="error404-area pt-30 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="error-wrapper text-center ptb-50 pt-xs-20">
                                <div class="error-text">
                                    <h1>404</h1>
                                    <h2>Opps! PAGE NOT BE FOUND</h2>
                                    <p>Sorry but the page you are looking for does not exist, have been removed, <br> name changed or is temporarity unavailable.</p>
                                </div>
                                <div class="search-error">
                                    <form id="search-form" action="#">
                                        <input type="text" placeholder="Search">
                                        <button><i class="zmdi zmdi-search"></i></button>
                                    </form>
                                </div>
                                <div class="error-button">
                                    <a href="index.html">Back to home page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Error 404 Area End -->
            <!-- Begin Footer Area -->
            <div class="footer">
        <!-- Begin Footer Static Top Area -->
        <div class="footer-static-top">
          <div class="container">
            <!-- Begin Footer Shipping Area -->
            <div class="footer-shipping pt-60 pb-55 pb-xs-25">
              <div class="row">
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                  <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                      <img
                        src="images/shipping-icon/1.png"
                        alt="Shipping Icon"
                      />
                    </div>
                    <div class="shipping-text">
                      <h2>Vận chuyển miễn phí</h2>
                      <p>Và trả hàng miễn phí. Kiểm tra hàng trước khi nhận.</p>
                    </div>
                  </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                  <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                      <img
                        src="images/shipping-icon/2.png"
                        alt="Shipping Icon"
                      />
                    </div>
                    <div class="shipping-text">
                      <h2>Tín dụng an toàn</h2>
                      <p>
                        Giao dịch với phương thức thanh toán phổ biến và an toàn
                        nhất.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                  <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                      <img
                        src="images/shipping-icon/3.png"
                        alt="Shipping Icon"
                      />
                    </div>
                    <div class="shipping-text">
                      <h2>Thương hiệu uy tín</h2>
                      <p>Niềm tin của bạn, chất lượng của chúng tôi.</p>
                    </div>
                  </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                  <div class="li-shipping-inner-box">
                    <div class="shipping-icon">
                      <img
                        src="images/shipping-icon/4.png"
                        alt="Shipping Icon"
                      />
                    </div>
                    <div class="shipping-text">
                      <h2>Hỗ trợ 24/7</h2>
                      <p>Hỗ trợ, giải đáp mọi thắc mắc từ khách hàng.</p>
                    </div>
                  </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
              </div>
            </div>
            <!-- Footer Shipping Area End Here -->
          </div>
        </div>
        <!-- Footer Static Top Area End Here -->
        <!-- Begin Footer Static Middle Area -->
        <div class="footer-static-middle">
          <div class="container">
            <div class="footer-logo-wrap pt-50 pb-35">
              <div class="row">
                <!-- Begin Footer Logo Area -->
                <div class="col-lg-6 col-md-6">
                  <div class="footer-logo">
                    <img src="images/menu/logo/logo2.jpg" width="40%" alt="Footer Logo" />
                    <p class="info">
                      Quality never goes of styles - Chất lượng không thể nào
                      thiếu phong cách
                    </p>
                  </div>
                  <ul class="des">
                    <li>
                      <span>Địa chỉ: </span>
                      102 Hùng Vương, phường An Mỹ, TP Tam Kỳ, tỉnh Quảng Nam
                    </li>
                    <li>
                      <span>Phone: </span>(+84) 123 321 345
                    </li>
                    <li><span>Email: </span>info@yourdomain.com</li>
                  </ul>
                </div>
                <!-- Footer Logo Area End Here -->
                <!-- Begin Footer Block Area -->
                <div class="col-lg-2 col-md-3 col-sm-6">
                  <div class="footer-block">
                    <h3 class="footer-block-title">Về chúng tôi</h3>
                    <ul>
                      <li><a href="<?php echo "about-us.php".$a; ?>">Giới thiệu</a></li>
                      <li><a href="<?php echo "contact.php".$a; ?>">Liên hệ</a></li>
                    </ul>
                  </div>
                </div>
                <!-- Footer Block Area End Here -->
                <!-- Begin Footer Block Area -->
                <div class="col-lg-4">
                  <div class="footer-block">
                    <h3 class="footer-block-title">Theo dõi</h3>
                    <ul class="social-link">
                      <li class="twitter">
                        <a
                          href="https://twitter.com/"
                          data-toggle="tooltip"
                          target="_blank"
                          title="Twitter"
                        >
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li class="google-plus">
                        <a
                          href="https://www.plus.google.com/discover"
                          data-toggle="tooltip"
                          target="_blank"
                          title="Google Plus"
                        >
                          <i class="fa fa-google-plus"></i>
                        </a>
                      </li>
                      <li class="facebook">
                        <a
                          href="https://www.facebook.com/"
                          data-toggle="tooltip"
                          target="_blank"
                          title="Facebook"
                        >
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li class="youtube">
                        <a
                          href="https://www.youtube.com/"
                          data-toggle="tooltip"
                          target="_blank"
                          title="Youtube"
                        >
                          <i class="fa fa-youtube"></i>
                        </a>
                      </li>
                      <li class="instagram">
                        <a
                          href="https://www.instagram.com/"
                          data-toggle="tooltip"
                          target="_blank"
                          title="Instagram"
                        >
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- Begin Footer Newsletter Area -->

                  <!-- Footer Newsletter Area End Here -->
                </div>
                <!-- Footer Block Area End Here -->
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Static Middle Area End Here -->
        <!-- Begin Footer Static Bottom Area -->
        <!-- Footer Static Bottom Area End Here -->
      </div>
            <!-- Footer Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="js/main.js"></script>
    </body>

<!-- 40432:14-->
</html>
