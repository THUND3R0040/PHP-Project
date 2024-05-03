<?php

$query = "SELECT * FROM product";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
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

    