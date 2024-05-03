<?php


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