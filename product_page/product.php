<?php
    session_start();
    include '../database/db_connect.php';
    
   
    


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">

    

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <meta charset="UTF-8">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://use.fontawesome.com/a183c5deb5.js"></script>
    <script src="https://kit.fontawesome.com/9d07734ae2.js" crossorigin="anonymous"></script>
    <link href="product.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>

<body>




    <header>
        <nav class="nav">
            <div class="navbar">
                <div class="logo" data-aos="fade-right">
                    <img src="logos/basketv3.png" width="95px" height="95px" id="img">
                </div>
                <div class="links">
                    <a href="../login/login.php" data-aos="fade-right" id="a4">LOGIN</a>
                    <a href="../product_page/product.php" id="a1" data-aos="fade-right">PRODUCTS</a>
                    <a href="#con" id="a2" data-aos="fade-right">CONTACT</a>
                    <a id="a3" data-aos="fade-right">CART</a>

                    
                </div>
            </div>
            
            <div class="mobile">
                <button id="mb" data-aos="fade-right"><i class="fas fa-shopping-cart" style="color: rgb(255, 255, 255);font-size: 24px;"></i></button>
                <div class="logo2" data-aos="fade-right">
                    <img src="logos/basketv3.png" width="95px" height="95px" id="img2">
                </div>
                <button id="bar" data-aos="fade-right"><i class="fas fa-bars"
                        style="color: rgb(255, 255, 255);font-size: 24px;"></i></button>
            
            
            </div>
        </nav>


    </header>

<section class="hero">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide pic1">
                <div>
                    <p>SHOPPING IS<br> HOPE</p>
                </div>
            </div>
            <div class="swiper-slide pic2">
                <div>
                    <p>HAPPINESS IS <br>IN SHOPPING</p>
                </div>
            </div>
            <div class="swiper-slide pic3">
                <div>
                    <p>SHOPPING IS <br>MY CARDIO</p>
                </div>
            </div>
            <div class="swiper-slide pic4">
                <div>
                    <p>IM YOURS</p>
                </div>
            </div>
            
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows 
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>-->
    </div>

</section>



    
       










<div class="phone">
    <a href="../product_page/product.php" id="href1">Products</a>
    <a href="#con" id="href2">Contact</a>
    <a href="../login/login.php" id="href4">Login</a>
    <i class="far fa-window-close" id="close"></i>
</div>



<div class="cart">
    <i class="far fa-window-close" id="cart_close"></i>
    <div class="nbr">
        <span class="num">

        </span>
        <span>
            items in your cart
        </span>
    </div>

    <p class="not_found">Your cart is empty</p>

    <div class="main">
        <div class="cart_full">
            <?php
                if(isset($_SESSION['email'])){
                    $email = $_SESSION['email'];
                    $query = "SELECT p.* FROM cart c, users u,product p WHERE u.u_email = c.u_email and p.p_name = c.p_name AND u.u_email = '$email'";
                    $result = mysqli_query($conn, $query);
                    
                    while($row = mysqli_fetch_array($result)){
                        $name = $row['p_name'];
                        $price = $row['p_price'];
                        $img = $row['p_img'];
                        $doc = $row['p_doc'];
                        
                        echo "
                        <div class='cart_items'>
                            <img src='$img' class='cart-item'>
                            <div class='c-div'>
                                <span class='cart-price'>$name</span>
                                <span class='c-note'>$doc</span>
                                <span class='cart-quantity'>$price</span>
                            </div>
                            <button class='remove-btn'>
                            <i class='' aria-hidden='true' data-fa-i2svg=''><svg class='svg-inline--fa fa-trash-alt fa-w-14' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='trash-alt' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''><path fill='currentColor' d='M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z'></path></svg></i>
                            </button>
                        </div>
                        ";
                    }
                    
                }
                



            ?>

        </div>

        <div class="total">
            <span class="tt">Total</span>
            <span class="money"></span>
        </div>
    </div>


    <div class="checkout">

        CHECKOUT

    </div>

</div>


<button class="btt"><i class="fas fa-chevron-up bt"></i></button>


<section class="type" id="type">
    <h1>Shoes for <span class="typed">Everyone</span></h1>
    <div class="shapes">
        <div class="shape kid" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Kids</div>
        <div class="shape man" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Men</div>
        <div class="shape women" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Women</div>
    </div>
</section>

<section class="top"></section>
<section class="seperation">
    
    <strong class="strong">Only on Click.com</strong>
    <div class="sep">
    <img src="https://cdn11.bigcommerce.com/s-9p889rxpkb/product_images/uploaded_images/truck73-37.gif"><p>FREE SHIPPING<br>
    (on orders over $40)</p></div>
    <div class="sep">
    <img src="https://cdn11.bigcommerce.com/s-9p889rxpkb/product_images/uploaded_images/samples-gif-ani-73x37.gif"><p>FREE SAMPLES<br>
    (Yes, please!)</p></div>
    <div class="sep">
    <img src="https://cdn11.bigcommerce.com/s-9p889rxpkb/product_images/uploaded_images/gifts-gif-ani-73x37.gif"><p>SURPRISES<br>
    (You will love. Trust.)</p></div>
</section>
<section class="bottom"></section>







    




    

<div class="title" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="500"> 
    BOOTS
</div>


<div class="categ">
    <form method="get" action="product.php">
        <select class="inpt form-select form-select-lg mb-3" id="inpt" aria-label=".form-select-lg example" name="filter">
            <option selected value="all">All</option>
            <option value="ft">Featured</option>
            <option value="bs">Best Selling</option>
        </select>
    </form>
    <i class="fas fa-plus plus"></i>
</div>


<section class="container1">
<?php

    

    $query = "SELECT * FROM product";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)){
        $p_overlay = $row['p_overlay'];
        $img = $row['p_img'];
        $p_name = $row['p_name'];
        $p_price = $row['p_price'];
        $p_doc = $row['p_doc'];
        $p_type = $row['p_type'];
        $p_ft = $row['p_ft'];
        $p_bs = $row['p_bs'];
        echo "
        <div class='pr'>
        <div class='overlay' style='background-image: url($p_overlay);'></div>
        <img class='pro' src='$img'>
        <span class='lorem'>$p_name</span>
        <span class='price'>$p_price</span>
        
            <input type='hidden' name='p_name' value='$p_name' class='hiddenName'>
            <input type='hidden' name='p_price' value='$p_price'>
            <input type='hidden' name='p_img' value='$img'>
            <input type='hidden' name='p_doc' value='$p_doc'>
            <input type='hidden' name='p_type' value='$p_type'>
            <input type='hidden' name='p_ft' value='$p_ft'>
            <input type='hidden' name='p_bs' value='$p_bs'>
            <button class='glow-on-hover'>Buy</button>
        
        </div>";
    }

    // change cart table structure and then add xmlhttprequest to add to cart database without refreshing the page

    
    



?>
</section>


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

    <div class="sep2">
    </div>

    
        
        <form action="contactForm.php" method="POST" class="form">
            <textarea class="textarea" name="textContent" placeholder="Message"></textarea>
            <button class="btn-success" name="submit" type="submit" >Submit</button>
        </form>
            
        
    

    <div class="sep2"></div>

    <div class="half2">
        

        <div class="icons">

            <button class="facebook sm" data-aos="zoom-in-right"data-aos-duration="500"><a href="https://www.facebook.com/ahmed.thunder.98" target="_blank"><i
                        class="fab fa-facebook-f dd"></i></a></button>
            <button class="twitter sm" data-aos="zoom-in-right" data-aos-duration="1000"><a href="https://twitter.com/THUNDER84630828" target="_blank"><i
                        class="fab fa-twitter dd"></i></a></button>
            <button class="linkedin sm" data-aos="zoom-in-right"data-aos-duration="1500"><a href="https://www.linkedin.com/in/ahmed-gargouri-2431b2204/" target="_blank"><i
                        class="fab fa-linkedin-in dd "></i></a></button>
            <button class="youtube sm" data-aos="zoom-in-right"data-aos-duration="2000"><a href="https://www.youtube.com/channel/UCFTewZU0FnvLtm5rSPGVurA" target="_blank"><i
                        class="fab fa-youtube dd"></i></a></button>
            <button class="instagram sm" data-aos="zoom-in-right"data-aos-duration="2500"><a href="" target="_blank"><i class="fab fa-instagram dd"></i></a></button>

        </div>
        <div class="rights">all rights reserved © 2021</div>
    </div>






</section>


<div class="grey">

</div>

<div class="grey2">

</div>

    <!--AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <!--jquery-->







<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
<!--
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>-->


<script src="product.js"></script>

</html>

<?php
    if(isset($_SESSION['name'])){
        $parts = explode(" ", $_SESSION['name']);
        $name = $parts[0];
        if($_SESSION['isAdmin'] == 1){
            echo "<script>document.getElementById('a4').innerHTML='Hi, $name';</script>";
            echo"<script>document.getElementById('href4').innerHTML='Hi, $name';</script>";
            echo "<script>document.getElementById('a4').href='../adminInterface/admin.php';</script>";
            echo"<script>document.getElementById('href4').href='../adminInterface/admin.php';</script>";
        }
        else{
            echo "<script>document.getElementById('a4').innerHTML='Hi, $name';</script>";
            echo"<script>document.getElementById('href4').innerHTML='Hi, $name';</script>";
            echo "<script>document.getElementById('a4').href='../interface/userAccount.php';</script>";
            echo"<script>document.getElementById('href4').href='../interface/userAccount.php';</script>";
        }
    }
    else{
        echo "<script>document.getElementById('a4').innerHTML='LOGIN';</script>";
        echo "<script>document.getElementById('a4').href='../login/login.php';</script>";
        echo "<script>document.getElementById('href4').innerHTML='LOGIN';</script>";
        echo "<script>document.getElementById('href4').href='../login/login.php';</script>";
    }
?>