<?php



if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $now = date("Y-m-d");


    $stmt = $conn->prepare("SELECT * FROM users WHERE u_email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        echo "
        <div style='position:absolute;top:0;width:100vw;height:60px;z-index:9999999;'>
            <h1>Email already exists</h1>
        </div>
        ";
    } else {
        $activation_code = generate_activation_code();
        $stmt = $conn->prepare("INSERT INTO users(u_name, u_email, u_password, regDate) VALUES (:name, :email, :password, :now)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':now', $now);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            if($activation_mail_is_sent = send_activation_mail($email, $activation_code, $name)){
                echo "<script>
                activation_alert.style.display = 'flex';
                setTimeout(() => {
                    activation_alert.style.display = 'none';
                }, 5000);
                </script>";
            } else {
                echo "<script>
                activation_alert.innerHTML = 'Could not send activation mail. Please try again later.';
                activation_alert.style.display = 'flex';
                setTimeout(() => {
                    activation_alert.style.display = 'none';
                    activation_alert.innerHTML = 'An activation Link has been sent to your Email';
                }, 5000);
                </script>";
            }
            header("Location: login.php");
            exit();
        } else {
            echo "Error inserting data.";
        }
    }
}
?>
