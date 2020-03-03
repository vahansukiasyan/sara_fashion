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
                                        <p onclick="location.href='checkout.php';">Name</p>
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