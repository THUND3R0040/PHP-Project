<?php



include '../database/db_connect.php';


$query = "select * from comments where isAnswered = 0";
$result = mysqli_query($conn, $query);

$htmlComments = "<table class='shop_table my_account_orders'>
    <thead>
      <tr>
        <th class='order-number'>Comment</th>
        <th class='order-date'>Email</th>
        <th class='order-total'>Contant</th>
      </tr>
    </thead>
";



while($row=mysqli_fetch_array($result)){
    $htmlComments .= "<tr class='order'>
        <td class='order-number' data-title='Comment'>
          <a href='*'>".$row['c_id']."</a>
        </td>
        <td class='order-date' data-title='Email'>
          <time datetime='2014-06-12' title='1402562157'>".$row['c_email']."</time>
        </td>
        <td class='order-total' data-title='Content'>
          <span class='amount'>".$row['c_content']."</span>
        </td>
    
        <td class='order-actions' data-title='Action'>
          <img src='delete.png'  width='50px' height='50px' class='deleteComment'>
        </td>
      </tr>";
}

$htmlComments .= "</tbody></table>";