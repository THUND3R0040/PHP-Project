<?php

if(isset($_SESSION["error"])){
    if($_SESSION["error"]=="1"){
        unset($_SESSION["error"]);
        echo"<script>
                activation_alert.innerHTML = 'Wrong Password';
                activation_alert.style.display = 'flex';
                setTimeout(() => {
                    activation_alert.style.display = 'none';
                    activation_alert.innerHTML = 'Account modified successfully';
                }, 5000);
            </script>";
    }
    else if($_SESSION["error"]=="0"){
        unset($_SESSION["error"]);
        echo"<script>
                activation_alert.style.display = 'flex';
                setTimeout(() => {
                    activation_alert.style.display = 'none';
                }, 5000);
            </script>";
    }
}