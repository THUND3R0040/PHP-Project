<?php
require 'email_activation.php';
require 'activation_code_generator.php';
require '../database/db_connect.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="UTF-8">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://use.fontawesome.com/a183c5deb5.js"></script>
    <script src="https://kit.fontawesome.com/9d07734ae2.js" crossorigin="anonymous"></script>
    <link href="login.css" rel="stylesheet">
</head>
    <body>


    <div class="activation-alert">
        An activation Link has been sent to your Email
    </div>

    <div class="notActiveAlert">
        Your account is not activated yet. Please check your email for the activation link.
    </div>

    <div class="invalidMailOrPassword">
        Invalid email or password
    </div>


    <header>
        <nav class="nav">
            <div class="navbar">
                <div class="logo"data-aos="fade-right">
                    <img src="../mainPage/basketv3.png"  id="img">
                </div>
                <div class="links">
                    <a href="../login/login.php"  id="a4"data-aos="fade-right">LOGIN</a>
                    <a href="../product_page/product.php" id="a1" data-aos="fade-right">PRODUCTS</a>
                    <a href="#con" id="a2" data-aos="fade-right">CONTACT</a>

                </div>
            </div>
    
            <div class="mobile">
                
                <div class="logo2"data-aos="fade-right" >
                    <img src="../basketv3.png"  id="img2">
                </div>
                <button id="bar"data-aos="fade-right" ><i class="fas fa-bars"
                        style="color: rgb(255, 255, 255);font-size: 24px;"></i></button>
    
    
            </div>
        </nav>
    
    
    </header>
    
    
    
    
    
    <section class="hero">
    
        <div class="form">
            <div class="fr">
                <h1>
                    Welcome Back!
                </h1>
                <p>Did you know? When you create an account, you get access to cool stuff .</p>
                <button class="sign-in"data-aos="zoom-in-up" data-aos-duration="2000">
                    Sign In
                </button>
            </div>
            <form class="fr2" method="post" action="login.php">
                <h1>
                    Create Account
                </h1>
               
                <div class="inputWithIcon"data-aos="zoom-in-left">
                    <input type="text" placeholder="Name" class="inpt" name="name">
                    <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div class="inputWithIcon"data-aos="zoom-in-left">
                    <input type="email" placeholder="Email" class="inpt" name="email">
                    <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div class="inputWithIcon"data-aos="zoom-in-left">
                    <input type="password" placeholder="Password" class="inpt" name = "password">
                    <i class="fas fa-unlock-alt fa-lg fa-fw" aria-hidden="true"></i>
                    
                </div>
                <button class="sign-up"data-aos="zoom-in-up" data-aos-duration="2000" name="signup">Sign Up</button>
                
            </form>
        </div>
    
    
    </section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="phone">
        <a href="../product_page/product.php" id="href1">Products</a>
        <a href="#con" id="href2">Contact</a>
        <a href="../login/login.php" id="href4">Login</a>
        <i class="far fa-window-close" id="close"></i>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <section class="footer" id="con">
    
        <div class="half1">
            <div class="f1">
                <h1>COMPANY</h1>
                <p>Who we are</p>
                <p>Find Us Near You</p>
                <p>Shop</p>
            </div>
            <div class="f1">
                <h1>CUSTOMER CARE</h1>
                <p>Gift Cards</p>
                <p>Contact Us</p>
                <p>Shipping</p>
                <p>Returns</p>
            </div>
            <div class="f1">
                <h1>THE DRY STUFF</h1>
                <p>Privacy Policy</p>
                <p>Terms & Conditions</p>
                <p>Accessibility Statement</p>
            </div>
        </div>
        <div class="acc">
            <div id="accordion">
                <h3>COMPANY</h3>
                <div>
                    <p>Who we are</p>
                    <p>Find Us Near You</p>
                    <p>Shop</p>
                </div>
                <h3>CUSTOMER CARE</h3>
                <div>
                    <p>Gift Cards</p>
                    <p>Contact Us</p>
                    <p>Shipping</p>
                    <p>Returns</p>
                </div>
                <h3>THE DRY STUFF</h3>
                <div>
                    <p>Privacy Policy</p>
                    <p>Terms & Conditions</p>
                    <p>Accessibility Statement</p>
                </div>
    
    
    
            </div>
        </div>
    
        <div class="sep">
        </div>
    
    
        <div class="half2">
            <div class="icons">
                <button class="facebook sm" data-aos="zoom-in-right" data-aos-duration="500"><a
                        href="https://www.facebook.com/ahmed.thunder.98" target="_blank"><i
                            class="fab fa-facebook-f dd"></i></a></button>
                <button class="twitter sm" data-aos="zoom-in-right" data-aos-duration="1000"><a
                        href="https://twitter.com/THUNDER84630828" target="_blank"><i class="fab fa-twitter dd"></i></a></button>
                <button class="linkedin sm" data-aos="zoom-in-right" data-aos-duration="1500"><a
                        href="https://www.linkedin.com/in/ahmed-gargouri-2431b2204/" target="_blank"><i
                            class="fab fa-linkedin-in dd "></i></a></button>
                <button class="youtube sm" data-aos="zoom-in-right" data-aos-duration="2000"><a
                        href="https://www.youtube.com/channel/UCFTewZU0FnvLtm5rSPGVurA" target="_blank"><i
                            class="fab fa-youtube dd"></i></a></button>
                <button class="instagram sm" data-aos="zoom-in-right" data-aos-duration="2500"><a href="" target="_blank"><i
                            class="fab fa-instagram dd"></i></a></button>
    
            </div>
            <div class="rights">all rights reserved © 2021</div>
        </div>
    
    
    
    
    
    
    </section>
    
    
    
    
    <div class="grey">
    
    </div>
    
    <button class="btt"><i class="fas fa-chevron-up bt"></i></button>

    
        
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="login.js">

        </script>
</body>
</html>
<?php
    
    
    
    if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        $query = "SELECT * FROM users WHERE u_email = '$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            echo"
            <div style='position:absolute;top:0;width:100vw;height:60px;z-index:9999999;'>
                <h1>Email already exists</h1>
            </div>
            ";
        }else{
            $activation_code = generate_activation_code();
            $sql = "INSERT INTO users(`u_name`,`u_email`,`u_password`) VALUES ('$name', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                if($activation_mail_is_sent = send_activation_mail($email, $activation_code, $name)){
                    echo"<script>
                    activation_alert.style.display = 'flex';
                    setTimeout(() => {
                        activation_alert.style.display = 'none';
                    }, 5000);
                    </script>";
                }
                else{
                    echo"<script>
                    activation_alert.innerHTML = 'Could not send activation mail. Please try again later.';
                    activation_alert.style.display = 'flex';
                    setTimeout(() => {
                        activation_alert.style.display = 'none';
                        activation_alert.innerHTML = 'An activation Link has been sent to your Email';
                    }, 5000);
                    </script>";
                }
                header("Location: login.php");
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
    
    
    
    
    
    
//mba3d f login check if user is activated
    
    
    if(isset($_POST['signin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE u_email = '$email';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $Row = mysqli_fetch_assoc($result);
            if(password_verify($password, $Row['u_password'])){
                if($Row['isActive'] == 0){
                    echo"<script>
                        notActiveAlert.style.display = 'flex';
                        setTimeout(() => {
                            notActiveAlert.style.display = 'none';
                        }, 5000);
                    </script>";
                }
                else{
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $Row['u_name'];
                    $_SESSION['isAdmin'] = $Row['isAdmin'];
                    echo"
                    <script>
                        window.location.href = '../product_page/product.php';
                    </script>";
                    //header didnt work i knew the reason but couldnt fix it
                    
                }
            }
            else{
                echo"<script>
                    invalidMailOrPassword.style.display = 'flex';
                    setTimeout(() => {
                        invalidMailOrPassword.style.display = 'none';
                    }, 5000);
                </script>";
            }
        }      
        else{
            echo"<script>
                invalidMailOrPassword.style.display = 'flex';
                setTimeout(() => {
                    invalidMailOrPassword.style.display = 'none';
                }, 5000);
            </script>";
        }      
            
            
            

    }

    if(isset($_SESSION['loginNeeded'])){
        echo"
        <script>
            invalidMailOrPassword.innerHTML = 'You Need To Login First';
            invalidMailOrPassword.style.display = 'flex';
            setTimeout(() => {
                invalidMailOrPassword.style.display = 'none';
                invalidMailOrPassword.innerHTML = 'Invalid Email or Password';
            }, 5000);
        </script>";
        unset($_SESSION['loginNeeded']);
    }





?>
