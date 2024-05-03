<?php

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $query = "SELECT p.* FROM cart c, users u,product p WHERE u.u_email = c.u_email and p.p_name = c.p_name AND u.u_email = :email";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    
    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
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