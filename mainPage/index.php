<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <meta charset="UTF-8">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://use.fontawesome.com/a183c5deb5.js"></script>
    <script src="https://kit.fontawesome.com/9d07734ae2.js" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  
    <header>
            <nav class="nav">
                <div class="navbar">
                    <div class="logo"data-aos="fade-right">
                        <img src="basketv3.png" width="95px" height="95px" id="img">
                    </div>
                    <div class="links">
                        <a href="../login/login.php" data-aos="fade-right"id="a4">LOGIN</a>
                        <a href="../product_page/product.php" id="a1"data-aos="fade-right">PRODUCTS</a>
                        <a href="#con" id="a2"data-aos="fade-right">CONTACT</a>
                        <a id="a3"data-aos="fade-right">CART</a>
                        
                        
                    </div>
                    </div>
                    
                    <div class="mobile">
                        <button id="mb" data-aos="fade-right"><i class="fas fa-shopping-cart" style="color: rgb(255, 255, 255);font-size: 24px;"></i></button>
                        <div class="logo2" data-aos="fade-right">
                            <img src="basketv3.png" width="95px" height="95px" id="img2">
                        </div>
                        <button id="bar" data-aos="fade-right"><i class="fas fa-bars" style="color: rgb(255, 255, 255);font-size: 24px;"></i></button>
                        
                        
                    </div>
            </nav>   

        
    </header>

    <section class="hero">
        
        <div class="collection"  data-aos="fade-up"
            data-aos-duration="3000">
       
        <p class="important">
            Keep the summer vibe alive
        </p>
        <p class="second"></p>
        <a class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules" data-ca3_icon="" href="#type"></a>
        </div>

        
    </section>

    <div class="phone">
        <a href="product page/product.html" id="href1">Products</a>
        <a href="#con" id="href2">Contact</a>
        <a href="login/login.html" id="href4">Account</a>
        <i class="far fa-window-close" id="close"></i> 
    </div>


<div class="cart">
    <i class="far fa-window-close" id="cart_close" ></i>
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
 
<section class="container1" id="type">
   
    <p class="ft" data-aos="zoom-in">Our featured products</p>
    <div class="swiper-container" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="pr">
                    <span class="name">SHOE 1</span>
                    <span class="prix">69</span>
                    <span class="note"> Orange Chese Casual Shoes for kids</span>
                    
                    <img src="p.png" class="pro">
                    <span class="lorem">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>
                    <span class="price">69$</span>
                    <button class="button" onclick="ft(0)">buy
                        <svg class="button__svg" role="presentational" viewBox="0 0 600 600">
                            <defs>
                                <clipPath id="myClip">
                                    <rect x="0" y="0" width="100%" height="50%" />
                                </clipPath>
                            </defs>
                            <g clip-path="url(#myClip)">
                                <g id="money">
                                    <path
                                        d="M441.9,116.54h-162c-4.66,0-8.49,4.34-8.62,9.83l.85,278.17,178.37,2V126.37C450.38,120.89,446.56,116.52,441.9,116.54Z"
                                        fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                    <path
                                        d="M424.73,165.49c-10-2.53-17.38-12-17.68-24H316.44c-.09,11.58-7,21.53-16.62,23.94-3.24.92-5.54,4.29-5.62,8.21V376.54H430.1V173.71C430.15,169.83,427.93,166.43,424.73,165.49Z"
                                        fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                </g>
                                <g id="creditcard">
                                    <path
                                        d="M372.12,181.59H210.9c-4.64,0-8.45,4.34-8.58,9.83l.85,278.17,177.49,2V191.42C380.55,185.94,376.75,181.57,372.12,181.59Z"
                                        fill="#a76fe2" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                    <path
                                        d="M347.55,261.85H332.22c-3.73,0-6.76-3.58-6.76-8v-35.2c0-4.42,3-8,6.76-8h15.33c3.73,0,6.76,3.58,6.76,8v35.2C354.31,258.27,351.28,261.85,347.55,261.85Z"
                                        fill="#ffdc67" />
                                    <path d="M249.73,183.76h28.85v274.8H249.73Z" fill="#323c44" />
                                </g>
                            </g>
                            <g id="wallet">
                                <path
                                    d="M478,288.23h-337A28.93,28.93,0,0,0,112,317.14V546.2a29,29,0,0,0,28.94,28.95H478a29,29,0,0,0,28.95-28.94h0v-229A29,29,0,0,0,478,288.23Z"
                                    fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                <path
                                    d="M512.83,382.71H416.71a28.93,28.93,0,0,0-28.95,28.94h0V467.8a29,29,0,0,0,28.95,28.95h96.12a19.31,19.31,0,0,0,19.3-19.3V402a19.3,19.3,0,0,0-19.3-19.3Z"
                                    fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                <path d="M451.46,435.79v7.88a14.48,14.48,0,1,1-29,0v-7.9a14.48,14.48,0,0,1,29,0Z" fill="#a4bdc1"
                                    stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                <path
                                    d="M147.87,541.93V320.84c-.05-13.2,8.25-21.51,21.62-24.27a42.71,42.71,0,0,1,7.14-1.32l-29.36-.63a67.77,67.77,0,0,0-9.13.45c-13.37,2.75-20.32,12.57-20.27,25.77l.38,221.24c-1.57,15.44,8.15,27.08,25.34,26.1l33-.19c-15.9,0-28.78-10.58-28.76-25.93Z"
                                    fill="#7b8f91" />
                                <path d="M148.16,343.22a6,6,0,0,0-6,6v92a6,6,0,0,0,12,0v-92A6,6,0,0,0,148.16,343.22Z" fill="#323c44" />
                            </g>
                    
                        </svg>
                    
                    
                    </button>
                     <span class="genre">men</span>
                </div>
            </div>
            <div class="swiper-slide " data-aos="fade-up"
     data-aos-anchor-placement="top-center">
                <div class="pr">
                    <span class="name">SHOE 2</span>
                    <span class="prix">56</span>
                    <span class="note">Red Chief Casual Shoes for Men </span>
                    <img src="p3.png" class="pro">
                    <span class="lorem">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>
                    <span class="price">56$</span>
                    <button class="button" onclick="ft(1)">buy
                            <svg class="button__svg" role="presentational" viewBox="0 0 600 600">
                                <defs>
                                    <clipPath id="myClip">
                                        <rect x="0" y="0" width="100%" height="50%" />
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#myClip)">
                                    <g id="money">
                                        <path
                                            d="M441.9,116.54h-162c-4.66,0-8.49,4.34-8.62,9.83l.85,278.17,178.37,2V126.37C450.38,120.89,446.56,116.52,441.9,116.54Z"
                                            fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                        <path
                                            d="M424.73,165.49c-10-2.53-17.38-12-17.68-24H316.44c-.09,11.58-7,21.53-16.62,23.94-3.24.92-5.54,4.29-5.62,8.21V376.54H430.1V173.71C430.15,169.83,427.93,166.43,424.73,165.49Z"
                                            fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                    </g>
                                    <g id="creditcard">
                                        <path
                                            d="M372.12,181.59H210.9c-4.64,0-8.45,4.34-8.58,9.83l.85,278.17,177.49,2V191.42C380.55,185.94,376.75,181.57,372.12,181.59Z"
                                            fill="#a76fe2" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                        <path
                                            d="M347.55,261.85H332.22c-3.73,0-6.76-3.58-6.76-8v-35.2c0-4.42,3-8,6.76-8h15.33c3.73,0,6.76,3.58,6.76,8v35.2C354.31,258.27,351.28,261.85,347.55,261.85Z"
                                            fill="#ffdc67" />
                                        <path d="M249.73,183.76h28.85v274.8H249.73Z" fill="#323c44" />
                                    </g>
                                </g>
                                <g id="wallet">
                                    <path
                                        d="M478,288.23h-337A28.93,28.93,0,0,0,112,317.14V546.2a29,29,0,0,0,28.94,28.95H478a29,29,0,0,0,28.95-28.94h0v-229A29,29,0,0,0,478,288.23Z"
                                        fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                    <path
                                        d="M512.83,382.71H416.71a28.93,28.93,0,0,0-28.95,28.94h0V467.8a29,29,0,0,0,28.95,28.95h96.12a19.31,19.31,0,0,0,19.3-19.3V402a19.3,19.3,0,0,0-19.3-19.3Z"
                                        fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                    <path d="M451.46,435.79v7.88a14.48,14.48,0,1,1-29,0v-7.9a14.48,14.48,0,0,1,29,0Z" fill="#a4bdc1"
                                        stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                    <path
                                        d="M147.87,541.93V320.84c-.05-13.2,8.25-21.51,21.62-24.27a42.71,42.71,0,0,1,7.14-1.32l-29.36-.63a67.77,67.77,0,0,0-9.13.45c-13.37,2.75-20.32,12.57-20.27,25.77l.38,221.24c-1.57,15.44,8.15,27.08,25.34,26.1l33-.19c-15.9,0-28.78-10.58-28.76-25.93Z"
                                        fill="#7b8f91" />
                                    <path d="M148.16,343.22a6,6,0,0,0-6,6v92a6,6,0,0,0,12,0v-92A6,6,0,0,0,148.16,343.22Z" fill="#323c44" />
                                </g>
                            
                            </svg>
                    
                        
                    </button>
                    <span class="genre">women</span>
                </div>
            </div>

            <div class="swiper-slide "data-aos="fade-up"
     data-aos-anchor-placement="top-center">
                <div class="pr">
                    <span class="name">SHOE 3</span>
                    <span class="prix">60</span>
                    <span class="note">Black High Heels for women </span>
                    <img src="p2.png" class="pro">
                    <span class="lorem">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>
                    <span class="price">60$</span>
                    <button class="button" onclick="ft(2)">buy
                        <svg class="button__svg" role="presentational" viewBox="0 0 600 600">
                            <defs>
                                <clipPath id="myClip">
                                    <rect x="0" y="0" width="100%" height="50%" />
                                </clipPath>
                            </defs>
                            <g clip-path="url(#myClip)">
                                <g id="money">
                                    <path
                                        d="M441.9,116.54h-162c-4.66,0-8.49,4.34-8.62,9.83l.85,278.17,178.37,2V126.37C450.38,120.89,446.56,116.52,441.9,116.54Z"
                                        fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                    <path
                                        d="M424.73,165.49c-10-2.53-17.38-12-17.68-24H316.44c-.09,11.58-7,21.53-16.62,23.94-3.24.92-5.54,4.29-5.62,8.21V376.54H430.1V173.71C430.15,169.83,427.93,166.43,424.73,165.49Z"
                                        fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                </g>
                                <g id="creditcard">
                                    <path
                                        d="M372.12,181.59H210.9c-4.64,0-8.45,4.34-8.58,9.83l.85,278.17,177.49,2V191.42C380.55,185.94,376.75,181.57,372.12,181.59Z"
                                        fill="#a76fe2" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                    <path
                                        d="M347.55,261.85H332.22c-3.73,0-6.76-3.58-6.76-8v-35.2c0-4.42,3-8,6.76-8h15.33c3.73,0,6.76,3.58,6.76,8v35.2C354.31,258.27,351.28,261.85,347.55,261.85Z"
                                        fill="#ffdc67" />
                                    <path d="M249.73,183.76h28.85v274.8H249.73Z" fill="#323c44" />
                                </g>
                            </g>
                            <g id="wallet">
                                <path
                                    d="M478,288.23h-337A28.93,28.93,0,0,0,112,317.14V546.2a29,29,0,0,0,28.94,28.95H478a29,29,0,0,0,28.95-28.94h0v-229A29,29,0,0,0,478,288.23Z"
                                    fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                <path
                                    d="M512.83,382.71H416.71a28.93,28.93,0,0,0-28.95,28.94h0V467.8a29,29,0,0,0,28.95,28.95h96.12a19.31,19.31,0,0,0,19.3-19.3V402a19.3,19.3,0,0,0-19.3-19.3Z"
                                    fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                <path d="M451.46,435.79v7.88a14.48,14.48,0,1,1-29,0v-7.9a14.48,14.48,0,0,1,29,0Z" fill="#a4bdc1"
                                    stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                                <path
                                    d="M147.87,541.93V320.84c-.05-13.2,8.25-21.51,21.62-24.27a42.71,42.71,0,0,1,7.14-1.32l-29.36-.63a67.77,67.77,0,0,0-9.13.45c-13.37,2.75-20.32,12.57-20.27,25.77l.38,221.24c-1.57,15.44,8.15,27.08,25.34,26.1l33-.19c-15.9,0-28.78-10.58-28.76-25.93Z"
                                    fill="#7b8f91" />
                                <path d="M148.16,343.22a6,6,0,0,0-6,6v92a6,6,0,0,0,12,0v-92A6,6,0,0,0,148.16,343.22Z" fill="#323c44" />
                            </g>
                    
                        </svg>
                    
                    
                    </button>
                    <span class="genre">kids</span>
                </div>
            </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows 
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>-->
    

    
</section>


<section class="faq">

    <h1>Why you should choose us</h1>

    <div class="containerr">
        <div class="accordion_item" id="question1">
            <a class="accordion_link">
                Bonuses and Discount Deals or Coupons
            </a>
            <div class="answer">
                <p>
                    This is another advantage buyers get whenever they shop online. In a bid to attract more customers
                    to buy their
                    products, sellers tend to give out more discount deals and coupons.
                </p>
            </div>
        </div>



        <div class="accordion_item" id="question2">
            <a class="accordion_link">
                Easy to Return Goods and Cancel Orders

            </a>
            <div class="answer">
                <p>
                    Before making your purchase there is the option where you can read up the reviews given by other
                    buyers that have used
                    the product.
                </p>
            </div>
        </div>



        <div class="accordion_item" id="question3">
            <a class="accordion_link">
                Huge Selection and Variety of Products
            </a>
            <div class="answer">
                <p>
                    Another reason why online shopping is trending is that you will easily find various products on a
                    single platform.
                </p>
            </div>

        </div>

    </div>


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
    <h3 >THE DRY STUFF</h3>
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

<div class="grey2">

</div>



<!--AOS-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>


<!--jquery-->


<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</body>
<!--
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>-->

<script src="cart.js"></script>
<script src="script.js"></script>
</html>