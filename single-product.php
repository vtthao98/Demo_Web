<?php
  include "ketnoi.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <!-- single-product31:30-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
      Single Product || limupa - Digital Products Store eCommerce Bootstrap 4
      Template
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
                        $SDT = $_GET['SDT'];
                        $ten = $_GET['ten'];
                        $a = "?SDT=$SDT&ten=$ten";
                        $gio = "";
                        $yeu = "href='wishlist.php".$a."'";
                        $IDHang = $a."&IDHang=";
                        $bl = 'class="review-links" href="" data-toggle="modal" data-target="#mymodal"';
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
                        $bl = "href='' title='quick view' class='quick-view-btn' data-toggle='modal' data-target='#exampleModalCenter'";
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
        <!-- <div class="mobile-menu-area d-lg-none d-xl-none col-12">
          <div class="container">
            <div class="row">
              <div class="mobile-menu"></div>
            </div>
          </div>
        </div> -->
        <!-- Mobile Menu Area End Here -->
      </header>
      <!-- Header Area End Here -->
      <!-- Begin Li's Breadcrumb Area -->
      <div class="breadcrumb-area">
        <div class="container">
          <div class="breadcrumb-content">
            <ul>
              <li><a href="<?php echo "index.php".$a; ?>">Trang chủ</a></li>
              <?php
                $TenSP = $_GET['TenSP'];
                $stmt = $conn->prepare("SELECT * FROM SanPham, Hang WHERE TenSP = '$TenSP' and SanPham.IDHang = Hang.IDHang");
                $stmt->execute(); 
                $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                $result = $stmt->fetchAll();
              ?>
              <li><a href="<?php echo "index.php".$a; ?>"><?php echo $result[0]['TenHang'];?></a></li>
              <li class="active"><?php echo $result[0]['TenSP'];?></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Li's Breadcrumb Area End Here -->
      <!-- content-wraper start -->
      <div class="content-wraper">
        <div class="container">
          <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
              <!-- Product Details Left -->
              <div class="product-details-left">
                <div class="product-details-images slider-navigation-1 pb-30 pt-60">
                  <div class="lg-image">
                    <a
                      class="popup-img venobox vbox-item"
                      href="<?php echo $result[0]['Anh1'];?>"
                      data-gall="myGallery"
                    >
                      <img
                        src="<?php echo $result[0]['Anh1'];?>"
                        alt="product image"
                      />
                    </a>
                  </div>
                  <div class="lg-image">
                    <a
                      class="popup-img venobox vbox-item"
                      href="<?php echo $result[0]['Anh2'];?>"
                      data-gall="myGallery"
                    >
                      <img
                        src="<?php echo $result[0]['Anh2'];?>"
                        alt="product image"
                      />
                    </a>
                  </div>
                  <div class="lg-image">
                    <a
                      class="popup-img venobox vbox-item"
                      href="<?php echo $result[0]['Anh3'];?>"
                      data-gall="myGallery"
                    >
                      <img
                        src="<?php echo $result[0]['Anh3'];?>"
                        alt="product image"
                      />
                    </a>
                  </div>
                  <div class="lg-image">
                    <a
                      class="popup-img venobox vbox-item"
                      href="<?php echo $result[0]['Anh4'];?>"
                      data-gall="myGallery"
                    >
                      <img
                        src="<?php echo $result[0]['Anh4'];?>"
                        alt="product image"
                      />
                    </a>
                  </div>
                  <div class="lg-image">
                    <a
                      class="popup-img venobox vbox-item"
                      href="<?php echo $result[0]['Anh5'];?>"
                      data-gall="myGallery"
                    >
                      <img
                        src="<?php echo $result[0]['Anh5'];?>"
                        alt="product image"
                      />
                    </a>
                  </div>
                </div>
                <div class="product-details-thumbs slider-thumbs-1">
                  <div class="sm-image">
                    <img
                      src="<?php echo $result[0]['Anh1'];?>"
                      alt="product image thumb"
                    />
                  </div>
                  <div class="sm-image">
                    <img
                      src="<?php echo $result[0]['Anh2'];?>"
                      alt="product image thumb"
                    />
                  </div>
                  <div class="sm-image">
                    <img
                      src="<?php echo $result[0]['Anh3'];?>"
                      alt="product image thumb"
                    />
                  </div>
                  <div class="sm-image">
                    <img
                      src="<?php echo $result[0]['Anh4'];?>"
                      alt="product image thumb"
                    />
                  </div>
                  <div class="sm-image">
                    <img
                      src="<?php echo $result[0]['Anh5'];?>"
                      alt="product image thumb"
                    />
                  </div>
                </div>
              </div>
              <!--// Product Details Left -->
            </div>
            <div class="col-lg-7 col-md-6">
              <div class="product-details-view-content pt-60">
                <div class="product-info">
                  <h2 style="font-size: 25px"><?php echo $result[0]['TenSP'];?></h2>
                  <span class="product-details-ref" style="font-size: 17px"><?php echo $result[0]['TenHang'];?></span>
                  <div class="price-box pt-20">
                    <span class="new-price new-price-2"><?php echo $result[0]['DonGia'];?></span>
                    <span style="font-size:20px; color:red">đ</span>
                  </div>
                  <div class="product-desc">
                    <p>
                      <span style="font-size: 17px"><?php echo $result[0]['MoTa'];?></span>
                    </p>
                  </div>
                  <div class="product-variants">
                    <div class="produt-variants-size">
                      <label style="font-size: 17px">Màu sắc</label>
                      <select class="nice-select">
                        <option value="1" title="S" selected="selected">
                          Đen
                        </option>
                        <option value="2" title="M">Đỏ</option>
                        <option value="3" title="L">Trắng</option>
                      </select>
                    </div>
                  </div>
                  <div class="single-add-to-cart">
                    <form method="post" class="cart-quantity">
                      <div class="quantity">
                        <label>Số lượng</label>
                        <div class="cart-plus-minus">
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
                      </div>
                      <button class="add-to-cart" name="add">
                        <a <?php echo $gio; ?> style="color:white">Thêm vào giỏ</a>
                      </button>
                    </form>
                    <?php
                      if (array_key_exists('add', $_POST)) {
                        $result2 = $conn->prepare("SELECT * from GioHang where SDT='$SDT' and TenSP = '$TenSP'"); 
                        $result2->execute();
                        $result2->setFetchMode(PDO::FETCH_ASSOC); 
                        $data = $result2->fetchAll(); 
                        if ($data){
                          echo "<br> <br> <p class='col-md-12' style='color: red;'>Sản phẩm đã tồn tại trong giỏ hàng</p>"; 
                        } else { 
                          $soluong = $_POST['soluong'];
                          $sql = "INSERT INTO GioHang(SDT, TenSP, SoLuong) VALUES ('$SDT', '$TenSP', '$soluong')";
                          $conn->exec($sql);
                          echo "<p class='col-md-12' style='color: red; padding-top: 20px'>Thêm sản phẩm thành công</p>"; 
                        } 
                      }
                    ?>
                  </div>
                  <div class="product-additional-info pt-25">
                    <!-- <a class="wishlist-btn" <?php echo $yeu; ?> style="font-size: 20px">
                      <i class="fa fa-heart-o"></i>
                      Yêu thích
                    </a> -->
                    <div class="product-social-sharing pt-25">
                      <ul>
                        <li class="facebook">
                          <a href="#"><i class="fa fa-facebook"></i>Facebook</a>
                        </li>
                        <li class="twitter">
                          <a href="#"><i class="fa fa-twitter"></i>Twitter</a>
                        </li>
                        <li class="google-plus">
                          <a href="#"
                            ><i class="fa fa-google-plus"></i>Google +</a
                          >
                        </li>
                        <li class="instagram">
                          <a href="#"
                            ><i class="fa fa-instagram"></i>Instagram</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wraper end -->
      <!-- Begin Product Area -->
      <div class="product-area pt-35">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="li-product-tab">
                <ul class="nav li-product-menu">
                  <li>
                    <a class="active" data-toggle="tab" href="#product-details"
                      ><span>Thông số kỹ thuật</span></a
                    >
                  </li>
                  <li>
                    <a data-toggle="tab" href="#reviews"
                      ><span>Đánh giá</span></a
                    >
                  </li>
                </ul>
              </div>
              <!-- Begin Li's Tab Menu Content Area -->
            </div>
          </div>
          <div class="tab-content">
            <div id="product-details" class="tab-pane active show" role="tabpanel">
              <div class="product-details-manufacturer">
              <div class="wishlist-area pt-10 pb-60">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <form action="#">
                        <div class="table-content table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Ram</th>
                                <th>Dung lượng</th>
                                <th>Độ phân giải màn hình</th>
                                <th>Camera trước</th>
                                <th>Camera sau</th>
                                <th>CPU</th>
                                <th>Pin</th>
                                <th>Sạc nhanh</th>
                                <th>Hệ điều hành</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td >
                                  <?php echo $result[0]['Ram'];?>
                                </td>
                                <td >
                                  <?php echo $result[0]['DungLuong'];?>
                                </td>
                                <td >
                                  <?php echo $result[0]['ManHinh'];?>
                                </td>
                                <td >
                                  <?php echo $result[0]['CameraT'];?>
                                </td>
                                <td >
                                  <?php echo $result[0]['CameraS'];?>
                                </td>
                                <td >
                                  <?php echo $result[0]['CPU'];?>
                                </td>
                                <td >
                                  <?php echo $result[0]['Pin'];?>
                                </td>
                                <td >
                                  <?php echo $result[0]['SacNhanh'];?>
                                </td>
                                <td >
                                  <?php echo $result[0]['HDH'];?>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <div id="reviews" class="tab-pane" role="tabpanel">
              <div class="product-reviews">
                <div class="product-details-comment-block">
                  <?php
                    $stmt1 = $conn->prepare("SELECT TenKH, NoiDung, NgayGhi FROM YKien, KhachHang 
                    WHERE TenSP = '$TenSP' and YKien.SDT = KhachHang.SDT");
                    $stmt1->execute(); 
                    $stmt1->setFetchMode(PDO::FETCH_ASSOC); 
                    $result1 = $stmt1->fetchAll();
                    foreach($result1 as $binhluan) {
                  ?>
                      <div class="comment-author-infos">
                        <span><?php echo $binhluan['TenKH'] ?></span> 
                        <em><?php echo $binhluan['NgayGhi']; ?></em>
                        <div style=" border-bottom: 1px solid #e1e1e1; margin-bottom: 25px;">
                          <p style="color:black"><?php echo $binhluan['NoiDung']; ?></p>
                        </div>
                      </div>
                  <?php
                    }
                  ?>
                  <div class="review-btn pb-30">
                    <a
                      class="review-links"
                      <?php echo $bl; ?>
                      data-toggle="modal"
                      data-target="#mymodal"
                      >Đánh giá</a
                    >
                  </div>
                  <!-- Begin Quick View | Modal Area -->
                  <div class="modal fade modal-wrapper" id="mymodal">
                    <div
                      class="modal-dialog modal-dialog-centered"
                      role="document"
                    >
                      <div class="modal-content">
                        <div class="modal-body">
                          <h3 class="review-page-title">Viết đánh giá</h3>
                          <div class="modal-inner-area row">
                            <div class="col-lg-6">
                              <div class="li-review-product">
                                <img
                                  src="<?php echo $result[0]['Anh1']; ?>"
                                  alt="Li's Product"
                                />
                                <div class="li-review-product-desc">
                                  <p class="li-product-name">
                                    <?php echo $TenSP; ?>
                                  </p>
                                  <p>
                                    <span> <?php echo $result[0]['MoTa']; ?>
                                    </span>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="li-review-content">
                                <!-- Begin Feedback Area -->
                                <div class="feedback-area">
                                  <div class="feedback">
                                    <h3 class="feedback-title">Nhập bình luận</h3>
                                    <form action="" method="post">
                                      <!-- <p class="feedback-form"> -->
                                        <textarea
                                          id="feedback"
                                          name="comment"
                                          cols="45"
                                          rows="4"
                                          aria-required="true"
                                        ></textarea>
                                      <!-- </p> -->
                                      <!-- <div class="feedback-input"> -->
                                        <div class="feedback-btn pb-15">
                                          <a
                                            href="#"
                                            class="close"
                                            data-dismiss="modal"
                                            aria-label="Close"
                                            >Đóng</a
                                          >
                                          <button name="gui" id="gui">Gửi</button>
                                        </div>
                                      <!-- </div> -->
                                    </form>
                                    <?php
                                      if(array_key_exists('gui', $_POST)){
                                        $ND = $_POST['comment'];
                                        if ($ND != "" && $ND != NULL) {
                                          $s = "INSERT INTO YKien(SDT, TenSP, NoiDung, NgayGhi) VALUES ('$SDT', '$TenSP','$ND', CURDATE())";
                                          $conn->exec($s);
                                        }
                                      }
                                    ?>
                                  </div>
                                </div>
                                <!-- Feedback Area End Here -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Quick View | Modal Area End Here -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product Area End Here -->
      <!-- Begin Li's Laptop Product Area -->
      <section class="product-area li-laptop-product pb-50">
        <div class="container">
          <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
              <div class="li-section-title">
                <h2>
                  <span>Một số sản phẩm khác:</span>
                </h2>
              </div>
              <div class="row">
                <div class="product-active owl-carousel">
                  <?php for($i=1; $i<=6; $i++) { ?>
                    <div class="col-lg-12">
                      <!-- single-product-wrap start -->
                      <div class="single-product-wrap">
                        <div class="product-image">
                          <a href="single-product.html">
                            <img
                              src="images/product/large-size/1.jpg"
                              alt="Li's Product Image"
                            />
                          </a>
                          <span class="sticker">New</span>
                        </div>
                        <div class="product_desc">
                          <div class="product_desc_info">
                            <div class="product-review">
                              <h5 class="manufacturer">
                                <a href="product-details.html">Graphic Corner</a>
                              </h5>
                            </div>
                            <h4>
                              <a class="product_name" href="single-product.html"
                                >Accusantium dolorem1</a
                              >
                            </h4>
                            <div class="price-box">
                              <span class="new-price">$46.80</span>
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
            <div class="modal-body" >
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>             
              <p style="color: black; font-size:25px; padding-top:10px">Đăng nhập để tiếp tục</p>
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

  <!-- single-product31:32-->
</html>
