﻿<?php 
session_start();
include "db.php";   
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
                                    <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Logo End-->
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
        <br><br>
        <!-- Checkout Start  -->
        <?php 
include 'db.php';
    $firstname=$lastname=$country=$email=$phone=$password=$confpass="";
    $firstnameErr=$lastnameErr=$countryErr=$emailErr=$passwordErr=$confpassErr=$passconf="";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['firstname'])){
		$firstnameErr = "First Name is required";
	}else{
		$firstname = trim_test($_POST["firstname"]);
        
	}

	if(empty($_POST['lastname'])){
		$lastnameErr = "Last Name is required";
	}else{
		$lastname = trim_test($_POST['lastname']);
	}



          if(empty($_POST["country"])){
		$countryErr = "Country is required";
	}else{
		$country= trim_test($_POST['country']);
	}
        
     if(empty($_POST["email"])){
		$emailErr = "Email is required";
	}else{
		$email = trim_test($_POST['email']);
	}
        if(empty($_POST["password"])){
		$passwordErr = "Password is required";
	}else{
		$password= trim_test($_POST['password']);
        }
            if(strlen($password) < 6){
         $passwordErr="Please insert your password";
    }
	
        if(empty($_POST["confirm"])){
		$confpassErr = "Confirm Password is required";
	}
        else{
		$confpass= trim_test($_POST['confirm']);        
	}
        if(strlen($confpass) < 6){
         $confpassErr="Please insert your password";
     }
        if($_POST['password']!==$_POST['confirm']){
            $confpassErr="Confirm Password is not equal to Password";
        }
     if($firstnameErr=="" && $lastnameErr==""   && $emailErr=="" && $countryErr=="" && $passwordErr=="" && $confpassErr=="" ) {
         $_SESSION["email"]=$_POST['email'];
         $_SESSION["password"]=$_POST['password'];
		// echo $_SESSION["username"];
		// echo $_SESSION["email"];
        // echo $_SESSION["phone"];
        
        //Header location to ......
        // header("Location: Validation-Hmw2.php");
    }
        else{
            
        }
} 
   
	
	
function trim_test($data){

$data=trim($data);
$data = stripslashes($data);
$data=htmlspecialchars($data);
	return $data;
}
 $sql = 'INSERT INTO users SET  firstname="'.$firstname.
'", lastname="'.$lastname.'", email="'.$email.'",  city="'.$country.'", password="'.$password.'"';
if (mysqli_query($con, $sql)) {
    //echo "New record created successfully";
} else {
    echo "Error: "  . mysqli_error($con);
}

?>
        <!Doctype html>
        <html>

        <head>
            <title>Validation-Form</title>
        </head>

        <body>

            <div class="big-div">
                <div class="small-div">
                    <p class="sign" id='signup'>Sign Up</p>
                    <p class="log" id='login'>Login</p>
                </div>

                <div class="div bl">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> ">
                        <br>
                        <label class="lab">First Name</label> <span class="err"><?php echo  $firstnameErr ?></span>
                        <input type="text" name="firstname" class="numb"><br>

                        <br>

                        <label class="lab">Last Name</label><span class="err"><?php echo $lastnameErr ?></span>
                        <input type="text" name="lastname" class="numb"><br>
                        <br>
                        <label class="lab">Country</label> <span class="err"><?php echo $countryErr ?></span>
                        <select name="country" class="numb">
                        <option value=""disabled selected >City...</option>
                                            <?php 
                                        		$sql10 ="SELECT * FROM cities";
													  $result10 = mysqli_query($con,$sql10);
													  if(mysqli_num_rows($result10) > 0){
													  	while($row10 = mysqli_fetch_assoc($result10)){
													  		echo "<option value='". $row10['title'] ."' >". $row10['title'] ."</option>";
													  	}
													  }
													  else{
													  	echo "0 Results";
													  }
                                        	        ?>
                                </select><br>
                               
                        <br>

                        <label class="lab">E-Mail</label><span class="err"><?php echo $emailErr ?></span>
                        <input type="email" name="email" class="numb">
                        <br>
                        <br>
                        <label class="lab">Password</label> <span class="err"><?php echo $passwordErr ?></span>
                        <input type="password" name="password" class="numb"><br><br>
                        <label class="lab">Confirm Password</label> <span class="err"><?php echo $confpassErr ?></span>
                        <input type="password" name="confirm" class="numb">
                        <br>
                        <br>
                </div>

                <div class='div2 non'>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> ">
                        <br>
                        <label class="lab">E-Mail</label><span class="err"><?php echo $emailErr ?></span>
                        <input type="email" name="email" class="numb">
                        <br>
                        <label class="lab">Password</label> <span class="err"><?php echo $passwordErr ?></span>
                        <input type="password" name="password" class="numb"><br>
                    </form>
                </div>
                <div class="small-div">
                    <input type="submit" value="Submit" class="subm">
                    <br>

                    </form>
                
                

                </div>
            </div>


    
            

        <!--  Checkout End ****** -->

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
                                    </script> <br> All rights reserved | <br> <a href="#" target="_blank">GTC
                                        STUDENTS</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(".log").click(function(){
        $(".div").removeClass("bl");
        $(".div").addClass("non");
        $(".div2").removeClass("non");
        $(".div2").addClass("bl");
    });

    $(".sign").click(function(){
        $(".div").toggleClass("non");
        $(".div").addClass("bl");
        $(".div2").removeClass("bl");
        $(".div2").toggleClass("non");
    });
    </script>
    <i class="ti-angle-up" aria-hidden="true"></i>
</body>

</html>