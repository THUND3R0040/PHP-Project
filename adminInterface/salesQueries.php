<?php



include '../database/db_connect.php';



$query = "select * from orders";
$result = mysqli_query($conn, $query);



$htmlSales = "<table class='shop_table my_account_orders'>

<thead>
  <tr>
    <th class='order-number'>Order</th>
    <th class='order-date'>Date</th>
    <th class='order-total'>Total</th>
  </tr>
</thead>

<tbody>";
    while($row=mysqli_fetch_array($result)){
        $htmlSales .= "<tr class='order'>
        <td class='order-number' data-title='Order'>
          <a href='*'>#".$row['id']."</a>
        </td>
        <td class='order-date' data-title='Date'>
          <time datetime='2014-06-12' title='1402562157'>".$row['orderDate']."</time>
        </td>
        <td class='order-total' data-title='Total'>
          <span class='amount'>£".$row['total']."</span> for ".$row['nbItems']." items
        </td>
    
        <td class='order-actions' data-title='Action'>
          <img src='delete.png'  width='50px' height='50px' class='deleteSales'>
        </td>
      </tr>";
    }

$htmlSales .= "</tbody></table>";