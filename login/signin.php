<?php


if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT * FROM users WHERE u_email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password, $row['u_password'])){
            if($row['isActive'] == 0){
                echo "<script>
                    notActiveAlert.style.display = 'flex';
                    setTimeout(() => {
                        notActiveAlert.style.display = 'none';
                    }, 5000);
                </script>";
            } else {
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $row['u_name'];
                $_SESSION['isAdmin'] = $row['isAdmin'];
                echo "<script>
                    window.location.href = '../product_page/product.php';
                </script>";
                exit();
            }
        } else {
            echo "<script>
                invalidMailOrPassword.style.display = 'flex';
                setTimeout(() => {
                    invalidMailOrPassword.style.display = 'none';
                }, 5000);
            </script>";
        }
    } else {
        echo "<script>
            invalidMailOrPassword.style.display = 'flex';
            setTimeout(() => {
                invalidMailOrPassword.style.display = 'none';
            }, 5000);
        </script>";
    }
}
?>
