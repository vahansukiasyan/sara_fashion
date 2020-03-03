<?php include "db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Sara- Fashion Shop</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/bg-img/s.png">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Logo End -->
                                <img src="img/bg-img/arm-flag.png" class="flag1">
                                <img src="img/bg-img/usa-flag.png" class="flag2">
                                <div class="profile">
                                    <img src="img/bg-img/unnamed.png" onclick="location.href='checkout.php';">
                                    <div>
                                        <p>Name</p>
                                        <p>Surname</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                                <a href="https://www.facebook.com/%D5%8D%D5%A1%D5%BC%D5%A1-%D5%B0%D5%A1%D5%A3%D5%B8%D6%82%D5%BD%D5%BF%D5%AB-%D5%BD%D6%80%D5%A1%D5%B0-112223573492812"
                                    target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/hagusti_srah_sara/" target="_blank"><i
                                        class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#sara-navbar" aria-controls="sara-navbar" aria-expanded="false"
                                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i
                                                class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="sara-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <?php 
                                                $sql ="SELECT * FROM menu";
                                                      $result = mysqli_query($con,$sql);
                                                      if(mysqli_num_rows($result) > 0){
                                                        while($row = mysqli_fetch_assoc($result)){
                                                            echo "<li class='nav-item'> <a class='nav-link' href='" . $row['url'] . "'> ".$row['title']."</a></li>";
                                                        }
                                                      }
                                                      else{
                                                        echo "0 Results";
                                                      }
                                            ?>
<!--                                             <li class="nav-item active"><a class="nav-link" href="index.html">Home</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="shop.html">Shop</a></li>
                                            <li class="nav-item active"><a class="nav-link"
                                                    href="checkout.html">Checkout</a></li>
                                            <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
 -->                                       </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Help Line -->
                            <div class="help-line">
                                <a href="tel:+346573556778"><i class="ti-headphone-alt"></i> +374 77-77-77-77</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->

        <!--  Top Dis Stara -->
        <section class="top-discount-area d-md-flex align-items-center">
        <?php
       $sql2 ="SELECT * FROM sub_menu";
       $result2= mysqli_query($con,$sql2);
       if(mysqli_num_rows($result2) > 0){
           while($row2 = mysqli_fetch_assoc($result2)){
               if ($row2['id'] == 2) {
                   echo "<div class='single-discount-area big1'> <h5> " . $row2['title'] . "</h5> </div>";
               }else{
                   echo "<div class='single-discount-area big2'> <h5> " . $row2['title'] . "</h5> </div>";
               }
           }
       }else{
           echo "0 Results";
       }
   ?>
        </section>
        <!-- View Start * -->
        <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                            <img src="img/product-img/woman-clothes3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title">Boutique Silk Dress</h4>
                                            <h5 class="price">$120.99 <span>$130</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                                expedita quibusdam aspernatur, sapiente consectetur accusantium
                                                perspiciatis praesentium eligendi, in fugiat?</p>
                                        </div>
                                        <!-- Add to Cart Form -->


                                        <div class="share_wf mt-30">
                                            <p>Share With Friend</p>
                                            <div class="_icon">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- View Area End-->

        <section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">

                            <div class="widget catagory mb-50">
                                <!--  Side Nav  -->
                                <div class="nav-side-menu">
                                    <h6 class="mb-0">Catagories</h6>
                                    <div class="menu-list">
                                        <ul id="menu-content2" class="menu-content collapse out">
                                        <?php
                                    $sql3 ="SELECT * FROM categories WHERE id=1";
                                    $result3= mysqli_query($con,$sql3);
                                    if(mysqli_num_rows($result3) > 0){
                                        while($row3 = mysqli_fetch_assoc($result3)){
                                            echo "<li data-toggle='collapse' data-target='#".$row3['description']."'>";
                                            echo "<a href='#'>" . $row3['title'] . "</a>";
                                            echo "<ul class='sub-menu collapse show' id='".$row3['description']."'></ul>";
                                            echo "</li>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                                            <!-- Single Item -->
                                            <?php
                                    $sql3 ="SELECT * FROM categories WHERE id=2";
                                    $result3= mysqli_query($con,$sql3);
                                    if(mysqli_num_rows($result3) > 0){
                                        while($row3 = mysqli_fetch_assoc($result3)){
                                            echo "<li data-toggle='collapse' class='collapsed' data-target='#".$row3['description']."'>";
                                            echo "<a href='#'>" . $row3['title'] . "</a>";
                                            echo "<ul class='sub-menu collapse' id='".$row3['description']."'></ul>";
                                            echo "</li>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                                            <!-- Single Item -->
                                            <?php
                                    $sql3 ="SELECT * FROM categories WHERE id=3";
                                    $result3= mysqli_query($con,$sql3);
                                    if(mysqli_num_rows($result3) > 0){
                                        while($row3 = mysqli_fetch_assoc($result3)){
                                            echo "<li data-toggle='collapse' class='collapsed' data-target='#".$row3['description']."'>";
                                            echo "<a href='#'>" . $row3['title'] . "</a>";
                                            echo "<ul class='sub-menu collapse' id='".$row3['description']."'></ul>";
                                            echo "</li>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                                <!-- Single Item -->
                                            
                                            <li data-toggle="collapse" data-target="#footwear2" class="collapsed">
                                                <a href="#">Footwear</a>
                                                <ul class="sub-menu collapse" id="footwear2">
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="widget price mb-50">
                                <h6 class="widget-title mb-30">Filter by Price</h6>
                                <div class="widget-desc">
                                    <div class="slider-range">
                                        <div data-min="0" data-max="200000" data-unit="֏"
                                            class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                            data-value-min="0" data-value-max="135500" data-label-result="Price:">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all"
                                                tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all"
                                                tabindex="0"></span>
                                        </div>
                                        <div class="range-price">Price: 0 - 135500</div>
                                    </div>
                                </div>
                            </div>



                            <div class="widget size mb-50">
                                <h6 class="widget-title mb-30">Filter by Size</h6>
                                <div class="widget-desc">
                                    <ul class="d-flex justify-content-between">
                                        <li><a href="#">XS</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget recommended">
                                <h6 class="widget-title mb-30">Recommended</h6>

                                <div class="widget-desc">
                                    <!-- Single Recommended Product -->
                                    <div class="single-recommended-product d-flex mb-30">
                                        <div class="single-recommended-thumb mr-3 product-img">
                                            <img src="img/product-img/mini-clothes.jpg" alt="" class="try-it">
                                            <div class="product-quicview">
                                                <a href="#" data-toggle="modal" data-target="#quickview"
                                                    class="fantasy">
                                                    <p class="plus1">+</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single-recommended-desc">
                                            <h6>Women’s clothes</h6>
                                            <p>$ 39.99</p>
                                        </div>
                                    </div>
                                    <!-- Single Recommended Product -->
                                    <div class="single-recommended-product d-flex mb-30">
                                        <div class="single-recommended-thumb mr-3 product-img">
                                            <img src="img/product-img/mini-clothes1.jpg" alt="" class="try-it">
                                            <div class="product-quicview">
                                                <a href="#" data-toggle="modal" data-target="#quickview"
                                                    class="fantasy">
                                                    <p class="plus1">+</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single-recommended-desc">
                                            <h6>Blue mini top</h6>
                                            <p>$ 19.99</p>
                                        </div>
                                    </div>
                                    <!-- Single Recommended Product -->
                                    <div class="single-recommended-product d-flex">
                                        <div class="single-recommended-thumb mr-3 product-img">
                                            <img src="img/product-img/mini-clothes2.jpg" alt="" class="try-it">
                                            <div class="product-quicview">
                                                <a href="#" data-toggle="modal" data-target="#quickview"
                                                    class="fantasy">
                                                    <p class="plus1">+</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single-recommended-desc">
                                            <h6>Women’s T-shirt</h6>
                                            <p>$ 39.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"
                                    data-wow-delay="0.2s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/woman-clothes.webp" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p>
                                        <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"
                                    data-wow-delay="0.3s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/woman-clothes2.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p>
                                        <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"
                                    data-wow-delay="0.4s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/product-3.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p>
                                        <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"
                                    data-wow-delay="0.5s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/bag.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p>
                                        <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"
                                    data-wow-delay="0.6s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/woman-clothes3.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p>
                                        <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"
                                    data-wow-delay="0.7s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/bag2.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p>
                                        <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"
                                    data-wow-delay="0.8s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/bag3.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p>
                                        <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"
                                    data-wow-delay="0.9s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/kids-clothes3.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p>
                                        <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>

                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"
                                    data-wow-delay="1s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/kids-clothes.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p>
                                        <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </section>
 <!-- Footer Start -->
 <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p>
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> <br> All rights reserved | <br> <a href ="#"
                                        target="_blank">GTC STUDENTS</a>
                                 </p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="checkout.php">Chechout</a></li>
                                <li><a href="shop.php">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">My shoppings</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Start -->
                    <div class="col-12 col-lg-5">
                        <div class="single_footer_area">
                            <label><input type="text" class="sara-footer-input" placeholder="Comment ... "
                                    name="comment_input"><input type="submit" name="submit" value=" POST "
                                    class="sara-footer-submit"></label>
                            <p>You can write your impressin about our site. If you are not safisfied with our side you
                                can write comment or can send support. IT IS VERY IMPORTANT FOR US </p>
                            <div class="subscribtion_form">
                                <form action="#" method="post">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">

                                <a href="#"><i class="fa fa-facebook" aria-hidden="true" target="_blank"
                                        style="font-size: 25px"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true" target="_blank"
                                        style="font-size: 25px"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--  Footer End-->
    </div>
   
    <!-- jQuery  && JSes-->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>


    <script>
        var scroll = document.getElementById("scrollUp");
        var scroll, style, display = "none";
        if (scrollTo(window, {
                top: 40
            })) {
            var scroll, style, display = "block";
        }
    </script>
    <i class="ti-angle-up" aria-hidden="true"></i>
</body>

</html>