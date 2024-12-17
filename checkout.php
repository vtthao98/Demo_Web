<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <!-- checkout31:27-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
      Checkout || limupa - Digital Products Store eCommerce Bootstrap 4 Template
    </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="css/fontawesome-stars.css" />
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="css/meanmenu.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="css/slick.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="css/venobox.css" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Helper CSS -->
    <link rel="stylesheet" href="css/helper.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Modernizr js -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
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
                        include "ketnoi.php";
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
              <li><a href="<?php echo "index.php".$a; ?>">Trang chủ</a></li>
              <li class="active">Giỏ hàng</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Li's Breadcrumb Area End Here -->
      <!--Checkout Area Strat-->
      <div class="checkout-area pt-30 pb-30">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="coupon-accordion">
                <!--Accordion Start-->
                <!-- <h3>
                  Bạn đã có tài khoản?
                  <span id="showlogin">Nhấn vào đây để đăng nhập</span>
                </h3>
                <div id="checkout-login" class="coupon-content">
                  <div class="coupon-info">
                    <form action="#">
                      <p class="form-row-first">
                        <label>Email <span class="required">*</span></label>
                        <input type="text" />
                      </p>
                      <p class="form-row-last">
                        <label>Mật khẩu <span class="required">*</span></label>
                        <input type="text" />
                      </p>
                      <p class="form-row">
                        <input value="Đăng nhập" type="submit" />
                        <label>
                          <input type="checkbox" />
                          Nhớ mật khẩu
                        </label>
                      </p>
                      <p class="lost-password">
                        <a href="#">Quên mật khẩu?</a>
                      </p>
                    </form>
                  </div>
                </div> -->
                <!--Accordion End-->
                <!--Accordion Start-->
                <h3>
                  Bạn có mã giảm giá?
                  <span id="showcoupon">Nhấn vào đây để nhập mã giảm giá</span>
                </h3>
                <div id="checkout_coupon" class="coupon-checkout-content">
                  <div class="coupon-info">
                    <form action="#">
                      <p class="checkout-coupon">
                        <input placeholder="Mã giảm giá" type="text" />
                        <input value="Áp dụng" type="submit" />
                      </p>
                    </form>
                  </div>
                </div>
                <!--Accordion End-->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-7 col-12" style="margin-left:50%; transform: translateX(-50%);">
              <form action="#">
                <div class="checkbox-form">
                  <h3 style="text-align:center">THÔNG TIN GIAO HÀNG</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <?php
                          $stmt = $conn->prepare("SELECT Email, DiaChi FROM KhachHang WHERE SDT = '$SDT'");
                          $stmt->execute(); 
                          $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                          $result = $stmt->fetchAll();
                          $email = $result[0]['Email'];
                          $diachi = $result[0]['DiaChi'];
                        ?>
                        <label>Tên <span class="required">*</span></label>
                        <input placeholder="" type="text" value="<?php echo $ten; ?>"/>
                      </div>
                    </div>
                    <!-- <div class="col-md-12">
                      <div class="country-select clearfix">
                        <label>Tỉnh/TP <span class="required">*</span></label>
                        <select class="nice-select wide">
                          <option data-display="Quảng Nam">Quảng Nam</option>
                          <option value="uk">Đà Nẵng</option>
                          <option value="rou">Huế</option>
                          <option value="fr">Quảng Ngãi</option>
                          <option value="de">Hà Nội</option>
                          <option value="aus">TP Hồ Chí Minh</option>
                        </select>
                      </div>
                    </div> -->
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Địa chỉ<span class="required">*</span></label>
                        <input
                          type="text"
                          <?php 
                          if ($diachi != NULL and $diachi !="")
                            echo "value='".$diachi."'";
                          else echo "placeholder='Số nhà, tên đường, phường/xã/thị trấn, quận/huyện, tỉnh/TP'";
                          ?>
                        "/>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label
                          >Địa chỉ email <span class="required">*</span></label
                        >
                        <input placeholder="" type="email" value="<?php echo $email; ?>"/>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkout-form-list">
                        <label>Số điện thoại <span class="required">*</span></label>
                        <input type="text" value="<?php echo $SDT; ?>"/>
                      </div>
                    </div>
                    <!-- <div class="col-md-12">
                      <div class="checkout-form-list create-acc">
                        <input id="cbox" type="checkbox" />
                        <label>Đặt làm địa chỉ mặc định?</label>
                      </div>
                      <div id="cbox-info" class="checkout-form-list create-account">
                        <p>
                          Bạn chắc chắn muốn đặt làm địa chỉ mặc định? Địa chỉ bạn đã lưu sẽ bị xóa.
                        </p>
                      </div>
                    </div> -->
                    <div class="col-md-12">
                      <div class="order-notes">
                        <div class="checkout-form-list">
                          <label>Ghi chú</label>
                          <textarea
                            id="checkout-mess"
                            cols="30"
                            rows="10"
                            placeholder="Nhập ghi chú"
                          ></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-9 col-12" style="margin-left:50%; transform: translateX(-50%);">
              <div class="your-order">
                <h3 >Hóa đơn</h3>
                <div class="your-order-table table-responsive" style="border-bottom: 1px solid #000">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="cart-product-name"><b>Sản phẩm</b></th>
                        <th class="cart-product-name"><b>Đơn giá</b></th>
                        <th class="cart-product-name"><b>Số lượng</b></th>
                        <!-- <th class="cart-product-total"><b>Giá tiền</b></th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="cart_item">
                        <td class="cart-product-name">Điện thoại Samsung Galaxy S24 Ultra</td>
                        <td class="cart-product-name">1000000 đ</td>
                        <td class="cart-product-name">
                        <div class="cart-plus-minus" style="margin-left:50%; transform: translateX(-50%);">
                          <input
                            class="cart-plus-minus-box"
                            value="1"
                            type="number"
                            name="soluong"
                          />
                          <div class="dec qtybutton">
                            <i class="fa fa-angle-down"></i>
                          </div>
                          <div class="inc qtybutton">
                            <i class="fa fa-angle-up"></i>
                          </div>
                        </div>
                        </td>
                        <!-- <td class="cart-product-total"><span class="amount">1000000</span> đ</td> -->
                      </tr>
                      <tr class="cart_item">
                        <td class="cart-product-name">Điện thoại Samsung Galaxy S24</td>
                        <td class="cart-product-name">2000000 đ</td>
                        <td class="cart-product-name">2</td>
                        <!-- <td class="cart-product-total"><span class="amount">4000000</span> đ</td> -->
                      </tr>
                    </tbody>
                    <tfoot>
                      <!-- <tr class="cart-subtotal">
                        <th>Tổng tiền sản phẩm</th>
                        <td><span class="amount">£215.00</span></td>
                      </tr> -->
                      <tr class="order-total">
                        <th><b>Tổng thanh toán</b></th>
                        <th></th>
                        <!-- <th></th> -->
                        <th style="color:red"><b>5000000 vnd</b></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="payment-method">
                  <div class="payment-accordion">
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header" id="#payment-1">
                          <h5 class="panel-title">
                            <a
                              class=""
                              data-toggle="collapse"
                              data-target="#collapseOne"
                              aria-expanded="true"
                              aria-controls="collapseOne"
                            >
                              Chuyển khoản ngân hàng
                            </a>
                          </h5>
                        </div>
                        <div
                          id="collapseOne"
                          class="collapse show"
                          data-parent="#accordion"
                        >
                          <div class="card-body">
                            <p>
                              Kiểm tra sản phẩm khi nhận hàng. Hoàn tiền 100%
                              nếu sản phẩm bị lỗi do nhà sản xuất trong vòng 30
                              ngày. Khách hàng có quyền đổi sản phẩm khác có giá
                              trên 80% giá sản phẩm đã mua.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="#payment-2">
                          <h5 class="panel-title">
                            <a
                              class="collapsed"
                              data-toggle="collapse"
                              data-target="#collapseTwo"
                              aria-expanded="false"
                              aria-controls="collapseTwo"
                            >
                              Thẻ ATM nội địa (Internet banking)
                            </a>
                          </h5>
                        </div>
                        <div
                          id="collapseTwo"
                          class="collapse"
                          data-parent="#accordion"
                        >
                          <div class="card-body">
                            <p>
                              Kiểm tra sản phẩm khi nhận hàng. Hoàn tiền 100%
                              nếu sản phẩm bị lỗi do nhà sản xuất trong vòng 30
                              ngày. Khách hàng có quyền đổi sản phẩm khác có giá
                              trên 80% giá sản phẩm đã mua.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="#payment-3">
                          <h5 class="panel-title">
                            <a
                              class="collapsed"
                              data-toggle="collapse"
                              data-target="#collapseThree"
                              aria-expanded="false"
                              aria-controls="collapseThree"
                            >
                              Thanh toán khi nhận hàng
                            </a>
                          </h5>
                        </div>
                        <div
                          id="collapseThree"
                          class="collapse"
                          data-parent="#accordion"
                        >
                          <div class="card-body">
                            <p>
                              Kiểm tra sản phẩm khi nhận hàng. Hoàn tiền 100%
                              nếu sản phẩm bị lỗi do nhà sản xuất trong vòng 30
                              ngày. Khách hàng có quyền đổi sản phẩm khác có giá
                              trên 80% giá sản phẩm đã mua.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="order-button-payment">
                      <input value="Thanh toán" type="submit" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Checkout Area End-->
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

  <!-- checkout31:27-->
</html>
