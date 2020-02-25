<?php 
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title  -->
    <title>Sara - Fashion | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/bg-img/s.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <div class="menu-list">
                <h6>Categories</h6>
                <ul id="menu-content" class="menu-content collapse out">
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                        <a href="#">Woman wear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="women">
                            <li><a href="#">Midi Dresses</a></li>
                            <li><a href="#">Maxi Dresses</a></li>
                            <li><a href="#">Prom Dresses</a></li>
                            <li><a href="#">Little Black Dresses</a></li>
                            <li><a href="#">Mini Dresses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#kids" class="collapsed">
                        <a href="#">Children <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="kids">
                            <li><a href="#">Children Dresses</a></li>
                            <li><a href="#">Mini Dresses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#bags" class="collapsed">
                        <a href="#">Bags &amp; Purses <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="bags">
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Purses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#eyewear" class="collapsed">
                        <a href="#">Eyewear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="eyewear">
                            <li><a href="#">Eyewear Style 1</a></li>
                            <li><a href="#">Eyewear Style 2</a></li>
                            <li><a href="#">Eyewear Style 3</a></li>
                        </ul>
                    </li>
                    <li data-toggle="collapse" data-target="#bedroom" class="collapsed">
                        <a href="#">Bedroom<span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="bedroom">
                            <li><a href="#">Pillows</a></li>
                            <li><a href="#">blanket</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->

                </ul>
            </div>
        </div>
    </div>
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
                                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->

                                    <div class="header-right-side-menu ml-15">
                                        <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
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
                                    <i class="fa fa-facebook ins-fac" aria-hidden="true"></i></a>
                         <a href="https://www.instagram.com/hagusti_srah_sara/" target="_blank"><i
                                        class="fa fa-instagram ins-fac" aria-hidden="true"></i></a>
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
 -->
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Help Line -->
                            <div class="help-line">
                                <a href="tel:+374 77-77-77-77"><i class="ti-headphone-alt sara_a"></i> +374
                                    77-77-77-77</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->

        <!-- ****** Top Discount Area Start ****** -->
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

            <!-- Single Discount Area -->
            <!-- <div class="single-discount-area big2">
                <h5>Free Shipping &amp; Returns</h5>
            </div>
            <-- Single Discount Area -->
            <!-- <div class="single-discount-area big1">
                <h5>20% Discount for all dresses</h5>
            </div>
            <div class="single-discount-area big2">
                <h5>20% Discount for students</h5>
            </div> -->

        </section>
        <!-- ****** Top Discount Area End ****** -->

        <!-- ****** Welcome Slides Area Start ****** -->
        <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                <?php
                $sql3 ="SELECT * FROM news WHERE img_src='bg-1.jpg'";
                $result3= mysqli_query($con,$sql3);
                if(mysqli_num_rows($result3) > 0){
                    while($row3 = mysqli_fetch_assoc($result3)){
                        echo "<div class='single_slide height-800 bg-img background-overlay'
                        style='background-image: url(img/bg-img/" . $row3['img_src'] . ");'>";
                    }
                }else{
                    echo "0 Results";
                }
                ?>
                <!-- <div class="single_slide height-800 bg-img background-overlay"
                    style="background-image: url(img/bg-img/bg-1.jpg);"> -->
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                <?php
                                    $sql3 ="SELECT * FROM news WHERE img_src='bg-1.jpg'";
                                    $result3= mysqli_query($con,$sql3);
                                    if(mysqli_num_rows($result3) > 0){
                                        while($row3 = mysqli_fetch_assoc($result3)){
                                            echo "<h6 data-animation='bounceInDown' data-delay='0' data-duration='500ms'>". $row3['description'] ."</h6>";
                                            echo "<h2 data-animation='fadeInUp' data-delay='500ms' data-duration='500ms'> ". $row3['title']  ."</h2>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                                    <!-- <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Only today
                                        we offer free shipping</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Fashion
                                        Trends</h2> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <?php
                $sql4 ="SELECT * FROM news WHERE img_src='bg-4.jpg'";
                $result4= mysqli_query($con,$sql4);
                if(mysqli_num_rows($result4) > 0){
                    while($row4 = mysqli_fetch_assoc($result4)){
                        echo "<div class='single_slide height-800 bg-img background-overlay'
                        style='background-image: url(img/bg-img/" . $row4['img_src'] . ");'>";
                    }
                }else{
                    echo "0 Results";
                }
                ?>
                <!-- <div class="single_slide height-800 bg-img background-overlay"
                    style="background-image: url(img/bg-img/bg-4.jpg);"> -->
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                <?php
                                    $sql4 ="SELECT * FROM news WHERE img_src='bg-4.jpg'";
                                    $result4= mysqli_query($con,$sql4);
                                    if(mysqli_num_rows($result4) > 0){
                                        while($row4 = mysqli_fetch_assoc($result4)){
                                            echo "<h6 data-animation='bounceInDown' data-delay='0' data-duration='500ms'>". $row4['description'] ."</h6>";
                                            echo "<h2 data-animation='fadeInUp' data-delay='500ms' data-duration='500ms'> ". $row4['title']  ."</h2>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                                    <!-- <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we
                                        offer free shipping</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Summer
                                        Collection</h2> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <?php
                $sql5 ="SELECT * FROM news WHERE img_src='bg-2.jpg'";
                $result5= mysqli_query($con,$sql5);
                if(mysqli_num_rows($result5) > 0){
                    while($row5 = mysqli_fetch_assoc($result5)){
                        echo "<div class='single_slide height-800 bg-img background-overlay'
                        style='background-image: url(img/bg-img/" . $row5['img_src'] . ");'>";
                    }
                }else{
                    echo "0 Results";
                }
                ?>
                <!-- <div class="single_slide height-800 bg-img background-overlay"
                    style="background-image: url(img/bg-img/bg-2.jpg);"> -->
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                <?php
                                    $sql5 ="SELECT * FROM news WHERE img_src='bg-2.jpg'";
                                    $result5= mysqli_query($con,$sql5);
                                    if(mysqli_num_rows($result5) > 0){
                                        while($row5 = mysqli_fetch_assoc($result5)){
                                            echo "<h6 data-animation='bounceInDown' data-delay='0' data-duration='500ms'>". $row5['description'] ."</h6>";
                                            echo "<h2 data-animation='fadeInUp' data-delay='500ms' data-duration='500ms'> ". $row5['title']  ."</h2>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                                    <!-- <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we
                                        offer free shipping</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Women
                                        Fashion</h2> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** Welcome Slides Area End ****** -->

        <!-- ****** Top Catagory Area Start ****** -->
        <section class="top_catagory_area d-md-flex clearfix">
            <!-- Single Catagory -->
            <?php
                $sql6 ="SELECT * FROM secondary_news WHERE img_src='bg-2.jpg'";
                $result6= mysqli_query($con,$sql6);
                if(mysqli_num_rows($result6) > 0){
                    while($row6 = mysqli_fetch_assoc($result6)){
                        echo "<div class='single_catagory_area d-flex align-items-center bg-img'
                        style='background-image: url(img/bg-img/". $row6['img_src'] . ")'>";
                    }
                }else{
                    echo "0 Results";
                }
                ?>
            <!-- <div class="single_catagory_area d-flex align-items-center bg-img"
                style="background-image: url(img/bg-img/bg-2.jpg);"> -->
                <div class="catagory-content">
                                <?php
                                    $sql6 ="SELECT * FROM secondary_news WHERE img_src='bg-2.jpg'";
                                    $result6= mysqli_query($con,$sql6);
                                    if(mysqli_num_rows($result6) > 0){
                                        while($row6 = mysqli_fetch_assoc($result6)){
                                            echo "<h6>". $row6['description'] ."</h6>";
                                            echo "<h2> ". $row6['title']  ."</h2>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                    <!-- <h6>On Accesories</h6>
                    <h2>Sale 30%</h2> -->
                </div>
            </div>
            <!-- Single Catagory -->
            <?php
                $sql7 ="SELECT * FROM secondary_news WHERE img_src='bg-3.jpg'";
                $result7= mysqli_query($con,$sql7);
                if(mysqli_num_rows($result7) > 0){
                    while($row7 = mysqli_fetch_assoc($result7)){
                        echo "<div class='single_catagory_area d-flex align-items-center bg-img'
                        style='background-image: url(img/bg-img/". $row7['img_src'] . ")'>";
                    }
                }else{
                    echo "0 Results";
                }
                ?>
            <!-- <div class="single_catagory_area d-flex align-items-center bg-img"
                style="background-image: url(img/bg-img/bg-3.jpg);"> -->
                <div class="catagory-content">
                <?php
                                    $sql7 ="SELECT * FROM secondary_news WHERE img_src='bg-3.jpg'";
                                    $result7= mysqli_query($con,$sql7);
                                    if(mysqli_num_rows($result7) > 0){
                                        while($row7 = mysqli_fetch_assoc($result7)){
                                            echo "<h6>". $row7['description'] ."</h6>";
                                            echo "<h2> ". $row7['title']  ."</h2>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                    <!-- <h6>in Bags excepting the new collection</h6>
                    <h2>Designer bags</h2> -->
                </div>
            </div>
        </section>
        <!-- ****** Top Catagory Area End ****** -->

        <!-- ****** Quick View Modal Area Start ****** -->
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
                                            <img src="img/product-img/product-1.jpg" alt="">
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
                                        <form class="cart" method="post">

                                        </form>

                                        <div class="share_wf mt-30">
                                            <p>Share With Friend</p>
                                            <div class="_icon">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"
                                                        target="_blank"></i></a>
                                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"
                                                        target="_blank"></i></a>
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
        <!-- ****** Quick View Modal Area End ****** -->

        <!-- ****** New Arrivals Area Start ****** -->
        <section class="new_arrivals_area section_padding_100_0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2 class="h-text">New Arrivals</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sara-projects-menu mb-100">
                <div class="text-center portfolio-menu">
                <?php
                                    $sql8 ="SELECT * FROM new_arrivals WHERE id='1'";
                                    $result8= mysqli_query($con,$sql8);
                                    if(mysqli_num_rows($result8) > 0){
                                        while($row8 = mysqli_fetch_assoc($result8)){
                                            echo "<button class='btn active' data-filter='*'>" . $row8['title'] . "</button>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                                <?php
                                    $sql8 ="SELECT * FROM new_arrivals WHERE id='2'";
                                    $result8= mysqli_query($con,$sql8);
                                    if(mysqli_num_rows($result8) > 0){
                                        while($row8 = mysqli_fetch_assoc($result8)){
                                            echo "<button class='btn active' data-filter='.women'>" . $row8['title'] . "</button>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                                <?php
                                    $sql8 ="SELECT * FROM new_arrivals WHERE id='3'";
                                    $result8= mysqli_query($con,$sql8);
                                    if(mysqli_num_rows($result8) > 0){
                                        while($row8 = mysqli_fetch_assoc($result8)){
                                            echo "<button class='btn active' data-filter='.access'>" . $row8['title'] . "</button>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                                <?php
                                    $sql8 ="SELECT * FROM new_arrivals WHERE id='4'";
                                    $result8= mysqli_query($con,$sql8);
                                    if(mysqli_num_rows($result8) > 0){
                                        while($row8 = mysqli_fetch_assoc($result8)){
                                            echo "<button class='btn active' data-filter='.kids'>" . $row8['title'] . "</button>";
                                        }
                                    }else{
                                        echo "0 Results";
                                    }
                                ?>
                    <!-- <button class="btn active" data-filter="*">ALL</button>
                    <button class="btn" data-filter=".women">WOMAN</button>
                    <button class="btn" data-filter=".access">ACCESSORIES</button>
                    <button class="btn" data-filter=".kids">KIDS</button> -->
                </div>
            </div>

            <div class="container">
                <div class="row sara-new-arrivals">

                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig"
                        data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/woman-clothes.webp" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>

                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig"
                        data-wow-delay="0.3s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/woman-clothes2.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig"
                        data-wow-delay="0.3s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/woman-clothes3.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item access wow fadeInUpBig"
                        data-wow-delay="0.4s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/bag.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item access wow fadeInUpBig"
                        data-wow-delay="0.4s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/bag3.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item access wow fadeInUpBig"
                        data-wow-delay="0.4s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/bag2.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item access wow fadeInUpBig"
                        data-wow-delay="0.4s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/bag4.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item shoes wow fadeInUpBig"
                        data-wow-delay="0.5s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/product-4.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>

                    <!-- Single gallery Item Start -->


                    <!-- Single gallery Item -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item kids man wow fadeInUpBig"
                        data-wow-delay="0.7s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/kids-clothes.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item kids man wow fadeInUpBig"
                        data-wow-delay="0.7s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/kids-clothes3.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item kids man wow fadeInUpBig"
                        data-wow-delay="0.7s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/kids-clothes2.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$39.90</h4>
                            <p>Jeans midi cocktail dress</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** New Arrivals Area End ****** -->

        <!-- ****** Offer Area Start ****** -->

        <!-- ****** Offer Area End ****** -->

        <!-- ****** Popular Brands Area Start ****** -->

        <!-- ****** Popular Brands Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
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
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> <br> All rights reserved | <br> <a href ="#"
                                        target="_blank">GTC STUDENTS</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
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
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">My shoppings</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
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

                <!-- Footer Bottom Area Start -->
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

        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


    <script>
        var scroll = document.getElementById("scrollUp");
        var scroll, style, display = "none";
        if (scrollTo(window, {
                top: 40
            })) {
            var scroll, style, display = "block";
        }
        // window has scrolled 500 pixels down the page
    </script>
    <i class="ti-angle-up" aria-hidden="true"></i>
</body>

</html>