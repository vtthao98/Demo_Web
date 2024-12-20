<!-- 53c4f5 -->
 <?php
  include "ketnoi.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <!-- index28:48-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
      Home Version One || limupa - Digital Products Store eCommerce Bootstrap 4
      Template
    </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css" />
    <!-- Font Awesome -->
    <!--icon tìm kiếm: -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="css/fontawesome-stars.css" />
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="css/meanmenu.css" />
    <!-- owl carousel CSS -->
    <!--khung hình ảnh minh họa đầu tiên: -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="css/slick.css" />
    <!-- Animate CSS -->
    <!--khung hình ảnh minh họa đầu tiên - chữ trượt: -->
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
    <!-- khung trang (phải có) -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Helper CSS -->
    <link rel="stylesheet" href="css/helper.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Responsive CSS -->
    <!-- tạo khoảng trắng 2 bên trang web -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Modernizr js -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body style="background-image: url(images/bgr.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100%;">
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
      <!-- Begin Slider With Banner Area -->
      <div class="slider-with-banner">
        <div class="container">
          <div class="row">
            <!-- Begin Slider Area -->
            <div class="col-lg-8 col-md-8">
              <div class="slider-area">
                <div class="slider-active owl-carousel">
                  <!-- Begin Single Slide Area -->
                  <div
                    class="single-slide align-center-left animation-style-01 bg-1"
                  >
                    <div class="slider-progress"></div>
                    <div class="slider-content">
                      <h5>Sale <span>-20% </span> Hôm nay</h5>
                      <h2>Chamcham Galaxy S9 | S9+</h2>
                      <h3>Giá chỉ từ <span>3.190.000đ</span></h3>
                      <div class="default-btn slide-btn">
                        <a class="links" href="single-product-sale.php"
                          >Mua ngay</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- Single Slide Area End Here -->
                  <!-- Begin Single Slide Area -->
                  <div
                    class="single-slide align-center-left animation-style-02 bg-2"
                  >
                    <div class="slider-progress"></div>
                    <div class="slider-content">
                      <h5>Sale <span>Christmas</span> Tháng này</h5>
                      <h2>iPhone 13</h2>
                      <h3><span>0% </span>lãi suất</h3>
                      <div class="default-btn slide-btn">
                        <a class="links" href="single-product-sale.php"
                          >Mua ngay</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- Single Slide Area End Here -->
                  <!-- Begin Single Slide Area -->
                  <div
                    class="single-slide align-center-left animation-style-01 bg-3"
                  >
                    <div class="slider-progress"></div>
                    <div class="slider-content">
                      <h5><span> Happy New Year</span></h5>
                      <h2>Redmi 13 Series</h2>
                      <h3>Tặng Voucher <span>200.000đ</span></h3>
                      <div class="default-btn slide-btn">
                        <a class="links" href="single-product-sale.php"
                          >Mua ngay</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- Single Slide Area End Here -->
                </div>
              </div>
            </div>
            <!-- Slider Area End Here -->
            <!-- Begin Li Banner Area -->
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
              <div class="li-banner">
                <a href="#">
                  <img src="images/banner/1_1.jpg" alt="" />
                </a>
              </div>
              <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                <a href="#">
                  <img src="images/banner/1_2.jpg" alt="" />
                </a>
              </div>
            </div>
            <!-- Li Banner Area End Here -->
          </div>
        </div>
      </div>
      <!-- Slider With Banner Area End Here -->
      <!-- Begin Product Area -->
      <div class="product-area pt-60 pb-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="li-product-tab">
                <ul class="nav li-product-menu">
                  <li>
                    <a class="active" data-toggle="tab" href="#li-new-product"
                      ><span>Sản phẩm mới</span></a
                    >
                  </li>
                  <li>
                    <a data-toggle="tab" href="#li-bestseller-product"
                      ><span>Bán chạy nhất</span></a
                    >
                  </li>
                </ul>
              </div>
              <!-- Begin Li's Tab Menu Content Area -->
            </div>
          </div>
          <div class="tab-content">
            <div
              id="li-new-product"
              class="tab-pane active show"
              role="tabpanel"
            >
              <div class="row">
                <div class="product-active owl-carousel">
                <?php 
                    $apple = $conn->prepare("SELECT `TenSP`, `DonGia`, `Anh1`, TenHang, NgayThem
                                            FROM sanpham, Hang 
                                            WHERE sanpham.IDHang = hang.IDHang
                                            ORDER BY NgayThem DESC
                                            LIMIT 6");
                    $apple->execute(); 
                    $apple->setFetchMode(PDO::FETCH_ASSOC); 
                    $hA = $apple->fetchAll();
                    foreach($hA as $spA) {
                      $tensanpham = $spA['TenSP'];
                      if ($a == "")
                        $noi = "?TenSP=$tensanpham";
                      else $noi = "&TenSP=$tensanpham";
                  ?>
                    <div class="col-lg-12">
                      <!-- single-product-wrap start -->
                      <div class="single-product-wrap">
                        <div class="product-image pt-20">
                          <a href="<?php echo "single-product.php".$a.$noi; ?>">
                            <img
                              src="<?php echo $spA['Anh1']; ?>"
                              alt="Li's Product Image"
                            />
                          </a>
                          <span class="sticker">New</span>
                        </div>
                        <div class="product_desc">
                          <div class="product_desc_info">
                            <div class="product-review">
                              <h5 class="manufacturer">
                                <a href="shop-left-sidebar.html"><?php echo $spA['TenHang']; ?></a>
                              </h5>
                              <!-- <div class="rating-box">
                                <ul class="rating">
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                </ul>
                              </div> -->
                            </div>
                            <h4>
                              <a class="product_name" href="<?php echo "single-product.php".$a.$noi; ?>"
                                ><?php echo $spA['TenSP']; ?></a
                              >
                            </h4>
                            <div class="price-box">
                              <span class="new-price"><?php echo $spA['DonGia']; ?> đ</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- single-product-wrap end -->
                    </div>
                  <?php } ?>                
                </div>
              </div>
            </div>
            <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
              <div class="row">
                <div class="product-active owl-carousel">
                <?php 
                    $apple = $conn->prepare("SELECT TenSP, Anh1, TenHang, DonGia FROM SanPham, Hang 
                    WHERE SanPham.IDHang = 'A' AND SanPham.IDHang = Hang.IDHang");
                    $apple->execute(); 
                    $apple->setFetchMode(PDO::FETCH_ASSOC); 
                    $hA = $apple->fetchAll();
                    foreach($hA as $spA) {
                      $tensanpham = $spA['TenSP'];
                      if ($a == "")
                        $noi = "?TenSP=$tensanpham";
                      else $noi = "&TenSP=$tensanpham";
                  ?>
                    <div class="col-lg-12">
                      <!-- single-product-wrap start -->
                      <div class="single-product-wrap">
                        <div class="product-image pt-20">
                          <a href="<?php echo "single-product.php".$a.$noi; ?>">
                            <img
                              src="<?php echo $spA['Anh1']; ?>"
                              alt="Li's Product Image"
                            />
                          </a>
                          <!-- <span class="sticker">New</span> -->
                        </div>
                        <div class="product_desc">
                          <div class="product_desc_info">
                            <div class="product-review">
                              <h5 class="manufacturer">
                                <a href="shop-left-sidebar.html"><?php echo $spA['TenHang']; ?></a>
                              </h5>
                              <!-- <div class="rating-box">
                                <ul class="rating">
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                </ul>
                              </div> -->
                            </div>
                            <h4>
                              <a class="product_name" href="<?php echo "single-product.php".$a.$noi; ?>"
                                ><?php echo $spA['TenSP']; ?></a
                              >
                            </h4>
                            <div class="price-box">
                              <span class="new-price"><?php echo $spA['DonGia']; ?> đ</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- single-product-wrap end -->
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product Area End Here -->
      <!-- Begin Li's Static Banner Area -->
      <div class="li-static-banner">
        <div class="container">
          <div class="row">
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center">
              <div class="single-banner">
                <a href="#">
                  <img src="images/banner/1_3.jpg" alt="Li's Static Banner" />
                </a>
              </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
              <div class="single-banner">
                <a href="#">
                  <img src="images/banner/1_4.jpg" alt="Li's Static Banner" />
                </a>
              </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
              <div class="single-banner">
                <a href="#">
                  <img src="images/banner/1_5.jpg" alt="Li's Static Banner" />
                </a>
              </div>
            </div>
            <!-- Single Banner Area End Here -->
          </div>
        </div>
      </div>
      <!-- Li's Static Banner Area End Here -->
      <!-- Begin Li's Laptop Product Area -->
      <section class="product-area li-laptop-product pt-60 pb-45">
        <div class="container">
          <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
              <div class="li-section-title">
                <h2>
                  <span>Apple</span>
                </h2>
                <!-- <ul class="li-sub-category-list">
                  <li class="active">
                    <a href="shop-left-sidebar.html">Prime Video</a>
                  </li>
                  <li><a href="shop-left-sidebar.html">Computers</a></li>
                  <li><a href="shop-left-sidebar.html">Electronics</a></li>
                </ul> -->
              </div>
              <div class="row">
                <div class="product-active owl-carousel">
                  <?php 
                    $apple = $conn->prepare("SELECT TenSP, Anh1, TenHang, DonGia FROM SanPham, Hang 
                    WHERE SanPham.IDHang = 'A' AND SanPham.IDHang = Hang.IDHang");
                    $apple->execute(); 
                    $apple->setFetchMode(PDO::FETCH_ASSOC); 
                    $hA = $apple->fetchAll();
                    foreach($hA as $spA) {
                      $tensanpham = $spA['TenSP'];
                      if ($a == "")
                        $noi = "?TenSP=$tensanpham";
                      else $noi = "&TenSP=$tensanpham";
                  ?>
                    <div class="col-lg-12">
                      <!-- single-product-wrap start -->
                      <div class="single-product-wrap">
                        <div class="product-image pt-20">
                          <a href="<?php echo "single-product.php".$a.$noi; ?>">
                            <img
                              src="<?php echo $spA['Anh1']; ?>"
                              alt="Li's Product Image"
                            />
                          </a>
                          <!-- <span class="sticker">New</span> -->
                        </div>
                        <div class="product_desc">
                          <div class="product_desc_info">
                            <div class="product-review">
                              <h5 class="manufacturer">
                                <a href="shop-left-sidebar.html"><?php echo $spA['TenHang']; ?></a>
                              </h5>
                              <!-- <div class="rating-box">
                                <ul class="rating">
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                </ul>
                              </div> -->
                            </div>
                            <h4>
                              <a class="product_name" href="<?php echo "single-product.php".$a.$noi; ?>"
                                ><?php echo $spA['TenSP']; ?></a
                              >
                            </h4>
                            <div class="price-box">
                              <span class="new-price"><?php echo $spA['DonGia']; ?> đ</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- single-product-wrap end -->
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <!-- Li's Section Area End Here -->
          </div>
        </div>
      </section>
      <!-- Li's Laptop Product Area End Here -->
      <!-- Begin Li's TV & Audio Product Area -->
      <section class="product-area li-laptop-product li-tv-audio-product pb-45">
        <div class="container">
          <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
              <div class="li-section-title">
                <h2>
                  <span>Samsung</span>
                </h2>
                <!-- <ul class="li-sub-category-list">
                  <li class="active">
                    <a href="shop-left-sidebar.html">Chamcham</a>
                  </li>
                  <li><a href="shop-left-sidebar.html">Sanai</a></li>
                  <li><a href="shop-left-sidebar.html">Meito</a></li>
                </ul> -->
              </div>
              <div class="row">
                <div class="product-active owl-carousel">
                <?php 
                    $apple = $conn->prepare("SELECT TenSP, Anh1, TenHang, DonGia FROM SanPham, Hang 
                    WHERE SanPham.IDHang = 'S' AND SanPham.IDHang = Hang.IDHang");
                    $apple->execute(); 
                    $apple->setFetchMode(PDO::FETCH_ASSOC); 
                    $hA = $apple->fetchAll();
                    foreach($hA as $spA) {
                      $tensanpham = $spA['TenSP'];
                      if ($a == "")
                        $noi = "?TenSP=$tensanpham";
                      else $noi = "&TenSP=$tensanpham";
                  ?>
                    <div class="col-lg-12">
                      <!-- single-product-wrap start -->
                      <div class="single-product-wrap">
                        <div class="product-image pt-20">
                          <a href="<?php echo "single-product.php".$a.$noi; ?>">
                            <img
                              src="<?php echo $spA['Anh1']; ?>"
                              alt="Li's Product Image"
                            />
                          </a>
                          <!-- <span class="sticker">New</span> -->
                        </div>
                        <div class="product_desc">
                          <div class="product_desc_info">
                            <div class="product-review">
                              <h5 class="manufacturer">
                                <a href="shop-left-sidebar.html"><?php echo $spA['TenHang']; ?></a>
                              </h5>
                              <!-- <div class="rating-box">
                                <ul class="rating">
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                </ul>
                              </div> -->
                            </div>
                            <h4>
                              <a class="product_name" href="<?php echo "single-product.php".$a.$noi; ?>"
                                ><?php echo $spA['TenSP']; ?></a
                              >
                            </h4>
                            <div class="price-box">
                              <span class="new-price"><?php echo $spA['DonGia']; ?> đ</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- single-product-wrap end -->
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <!-- Li's Section Area End Here -->
          </div>
        </div>
      </section>
      <!-- Li's TV & Audio Product Area End Here -->
      <!-- Begin Li's Static Home Area -->
      <div class="li-static-home">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- Begin Li's Static Home Image Area -->
              <div class="li-static-home-image"></div>
              <!-- Li's Static Home Image Area End Here -->
              <!-- Begin Li's Static Home Content Area -->
              <!-- <div class="li-static-home-content">
                <p>Sale Offer<span>-20% Off</span>This Week</p>
                <h2>Featured Product</h2>
                <h2>Meito Accessories 2018</h2>
                <p class="schedule">
                  Starting at
                  <span> $1209.00</span>
                </p>
                <div class="default-btn">
                  <a href="shop-left-sidebar.html" class="links"
                    >Shopping Now</a
                  >
                </div>
              </div> -->
              <!-- Li's Static Home Content Area End Here -->
            </div>
          </div>
        </div>
      </div>
      <!-- Li's Static Home Area End Here -->
      <!-- Begin Li's Trending Product Area -->
      <section class="product-area li-laptop-product li-trendding-products best-sellers pb-45 pt-60">
      <div class="container">
        <div class="row">
          <!-- Begin Li's Section Area -->
          <div class="col-lg-12">
            <div class="li-section-title">
              <h2>
                <span>Xiaomi</span>
              </h2>
            </div>
            <div class="row">
              <div class="product-active owl-carousel">
              <?php 
                    $apple = $conn->prepare("SELECT TenSP, Anh1, TenHang, DonGia FROM SanPham, Hang 
                    WHERE SanPham.IDHang = 'X' AND SanPham.IDHang = Hang.IDHang");
                    $apple->execute(); 
                    $apple->setFetchMode(PDO::FETCH_ASSOC); 
                    $hA = $apple->fetchAll();
                    foreach($hA as $spA) {
                      $tensanpham = $spA['TenSP'];
                      if ($a == "")
                        $noi = "?TenSP=$tensanpham";
                      else $noi = "&TenSP=$tensanpham";
                  ?>
                    <div class="col-lg-12">
                      <!-- single-product-wrap start -->
                      <div class="single-product-wrap">
                        <div class="product-image pt-20">
                          <a href="<?php echo "single-product.php".$a.$noi; ?>">
                            <img
                              src="<?php echo $spA['Anh1']; ?>"
                              alt="Li's Product Image"
                            />
                          </a>
                          <!-- <span class="sticker">New</span> -->
                        </div>
                        <div class="product_desc">
                          <div class="product_desc_info">
                            <div class="product-review">
                              <h5 class="manufacturer">
                                <a href="shop-left-sidebar.html"><?php echo $spA['TenHang']; ?></a>
                              </h5>
                              <!-- <div class="rating-box">
                                <ul class="rating">
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                </ul>
                              </div> -->
                            </div>
                            <h4>
                              <a class="product_name" href="<?php echo "single-product.php".$a.$noi; ?>"
                                ><?php echo $spA['TenSP']; ?></a
                              >
                            </h4>
                            <div class="price-box">
                              <span class="new-price"><?php echo $spA['DonGia']; ?> đ</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- single-product-wrap end -->
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <!-- Li's Section Area End Here -->
        </div>
      </div>
    </section>
      <!-- Li's Trending Product Area End Here -->
      <!-- Begin Li's Trendding Products Area -->
      <section
        class="product-area li-laptop-product li-trendding-products best-sellers pb-45"
      >
        <div class="container">
          <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
              <div class="li-section-title">
                <h2>
                  <span>OPPO</span>
                </h2>
              </div>
              <div class="row">
                <div class="product-active owl-carousel">
                <?php 
                    $apple = $conn->prepare("SELECT TenSP, Anh1, TenHang, DonGia FROM SanPham, Hang 
                    WHERE SanPham.IDHang = 'O' AND SanPham.IDHang = Hang.IDHang");
                    $apple->execute(); 
                    $apple->setFetchMode(PDO::FETCH_ASSOC); 
                    $hA = $apple->fetchAll();
                    foreach($hA as $spA) {
                      $tensanpham = $spA['TenSP'];
                      if ($a == "")
                        $noi = "?TenSP=$tensanpham";
                      else $noi = "&TenSP=$tensanpham";
                  ?>
                    <div class="col-lg-12">
                      <!-- single-product-wrap start -->
                      <div class="single-product-wrap">
                        <div class="product-image pt-20">
                          <a href="<?php echo "single-product.php".$a.$noi; ?>">
                            <img
                              src="<?php echo $spA['Anh1']; ?>"
                              alt="Li's Product Image"
                            />
                          </a>
                          <!-- <span class="sticker">New</span> -->
                        </div>
                        <div class="product_desc">
                          <div class="product_desc_info">
                            <div class="product-review">
                              <h5 class="manufacturer">
                                <a href="shop-left-sidebar.html"><?php echo $spA['TenHang']; ?></a>
                              </h5>
                              <!-- <div class="rating-box">
                                <ul class="rating">
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li><i class="fa fa-star-o"></i></li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                  <li class="no-star">
                                    <i class="fa fa-star-o"></i>
                                  </li>
                                </ul>
                              </div> -->
                            </div>
                            <h4>
                              <a class="product_name" href="<?php echo "single-product.php".$a.$noi; ?>"
                                ><?php echo $spA['TenSP']; ?></a
                              >
                            </h4>
                            <div class="price-box">
                              <span class="new-price"><?php echo $spA['DonGia']; ?> đ</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- single-product-wrap end -->
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <!-- Li's Section Area End Here -->
          </div>
        </div>
      </section>
      <!-- Li's Trendding Products Area End Here -->
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
      <!-- Begin Quick View | Modal Area -->
      <div class="modal fade modal-wrapper" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
              <a href="login-register.php">Đăng nhập</a> để tiếp tục.
            </div>
          </div>
        </div>
      </div>
      <!-- Quick View | Modal Area End Here -->
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

  <!-- index30:23-->
</html>
