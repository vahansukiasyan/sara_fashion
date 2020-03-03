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
    <!-- Title  -->
    <title>Sara - Fashion | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/bg-img/s.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">

        <!--  Header Start -->
        <header class="header_area">
            <!-- Top Header Start-->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Start -->
                                <div class="top_logo">
                                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Logo End -->
                                <img src="img/bg-img/arm-flag.png" class="flag1">
                                <img src="img/bg-img/usa-flag.png" class="flag2">
                                <div class="profile">
                                    <img src="img/bg-img/unnamed.png" onclick="location.href='checkout.php';">
                                    <div>
                                        <p onclick="location.href='profile.php';" style="cursor:pointer">Name</p>
                                        <p>Surname</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header-->
 <div class="main_header_area">
        <div class="container h-100">
              <div class="row h-100">
                    <div class="col-12 d-md-flex justify-content-between">
                            <!-- Social -->
                        <div class="header-social-area">
                         <a href="https://www.facebook.com/%D5%8D%D5%A1%D5%BC%D5%A1-%D5%B0%D5%A1%D5%A3%D5%B8%D6%82%D5%BD%D5%BF%D5%AB-%D5%BD%D6%80%D5%A1%D5%B0-112223573492812"
                                    target="_blank">
                                    <i class="fa fa-facebook ins-fac" aria-hidden="true"></i></a>
                         <a href="https://www.instagram.com/hagusti_srah_sara/" target="_blank"><i
                                        class="fa fa-instagram ins-fac" aria-hidden="true"></i></a>
                            </div>
                            
                            <!-- Menu -->
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
        <!--  Header End -->
        <!-- Top Discount Start  -->
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
        <!-- Top Discount End -->

        <!-- Slides Start -->
        <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                ?>>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Slides End -->

        <!-- Catagory  Start -->
        <section class="top_catagory_area d-md-flex clearfix">
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
                </div>
            </div>
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
                </div>
            </div>
        </section>
        <!-- Catagory End  -->

        <!-- View Area Start -->
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
        <!--View Modal Area End -->

        <!-- New Arrivals Start -->
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
                </div>
            </div>
            <div class="container">
                <div class="row sara-new-arrivals">

                    <!--  gallery Item Start -->
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
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>

                    <!-- gallery Item Start -->
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
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                    <!-- gallery Item Start -->
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
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                    <!-- Gallery Item Start -->
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
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>

                    <!-- gallery Item Start -->


                    <!--  gallery Item -->
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
        <!-- New Arrivals End  -->

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