<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="userAccount.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://use.fontawesome.com/a183c5deb5.js"></script>
    <script src="https://kit.fontawesome.com/9d07734ae2.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
</head>
<body>


    
        <div class="activation-alert" >
            Account modified successfully
        </div>


    <section class='bg'>    
        <div class='container'>
            <div class="header">
                <div class="svg">
                <?xml version="1.0" encoding="iso-8859-1"?>

<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 width="40px" height="40px" viewBox="0 0 552.856 552.856"
	 xml:space="preserve">
<g>
	<g>
		<path d="M511.89,157.425c-3.403-25.845-17.051-53.513-40.001-76.463c-22.938-22.944-50.606-36.585-76.444-39.994
			c-11.695-1.542-27.308-8.005-36.665-15.184C338.094,9.915,308.883,0,276.429,0c-32.455,0-61.666,9.915-82.351,25.784
			c-9.357,7.179-24.976,13.642-36.665,15.184c-25.838,3.409-53.507,17.05-76.445,39.994c-22.95,22.95-36.598,50.619-40,76.463
			c-1.542,11.695-8.005,27.295-15.184,36.653C9.915,214.764,0,243.974,0,276.428c0,32.455,9.915,61.666,25.784,82.352
			c7.179,9.357,13.642,24.963,15.184,36.652c3.403,25.844,17.05,53.514,40,76.463c22.938,22.943,50.606,36.586,76.445,39.994
			c11.695,1.543,27.308,8.006,36.665,15.184c20.686,15.869,49.896,25.783,82.351,25.783c32.454,0,61.665-9.914,82.351-25.783
			c9.357-7.178,24.976-13.641,36.665-15.184c25.838-3.408,53.507-17.051,76.444-39.994c22.95-22.949,36.598-50.619,40.001-76.463
			c1.542-11.695,8.005-27.295,15.184-36.652c15.869-20.686,25.783-49.896,25.783-82.352c0-32.454-9.914-61.665-25.783-82.35
			C519.895,184.721,513.432,169.121,511.89,157.425z M437.623,350.696c0,5.311-4.309,9.619-9.621,9.619H258.858v45.643
			c0,13.281-7.613,16.439-17.007,7.045L122.278,293.436c-9.394-9.395-9.394-24.621,0-34.015l119.573-119.573
			c9.394-9.394,17.007-6.242,17.007,7.044v45.643h169.144c5.312,0,9.621,4.309,9.621,9.621V350.696z"/>
	</g>
</g>
</svg>
                </div>
                <div class="goBack">
                    Go Back
                </div>
                
            </div>
            <div class="content">
                <div class="options">
                    <p style='background-color:white;'>Name</p>
                    <p>Email</p>
                    <p>Password</p>
                </div>
                
                <form class="fr2 chosen" method="post" action="modifyData.php">
                
                    <div class="inputWithIcon"data-aos="zoom-in-left">
                        <input type="text" placeholder="Password" class="inpt" name="password">
                        <i class="fas fa-unlock-alt fa-lg fa-fw" aria-hidden="true"></i>
                    </div>

                    <div class="inputWithIcon inpt1"data-aos="zoom-in-left">
                        <input type="text" placeholder="Name" class="inpt" name="name">
                        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                    </div>

                    <div class="inputWithIcon inpt2"data-aos="zoom-in-left">
                        <input type="email" placeholder="Email" class="inpt" name="email">
                        <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                    </div>
                    <div class="inputWithIcon inpt3"data-aos="zoom-in-left">
                        <input type="password" placeholder="New Password" class="inpt" name = "new-password">
                        <i class="fas fa-unlock-alt fa-lg fa-fw" aria-hidden="true"></i>
                        
                    </div>
                    <button class="sign-up"data-aos="zoom-in-up" data-aos-duration="2000" name="modify">Save</button>
                
                </form>
                <button class = "logout" name = "logout" >
                    <a href="../login/logout.php" >Log out</a>
                </button>
            </div>


        </div>
    </section>

</body>
<script src="userAccount.js"></script>
</html>


<?php

require 'userModif.php';

?>