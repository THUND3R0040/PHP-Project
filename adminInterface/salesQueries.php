<?php
include '../database/db_connect.php';

$query = "SELECT * FROM orders";
$stmt = $conn->query($query);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

$htmlSales = "
<table class='shop_table my_account_orders'>
<thead>
  <tr>
    <th class='order-number'>Order</th>
    <th class='order-date'>Date</th>
    <th class='order-total'>Total</th>
    <th class='order-actions'>Action</th>
  </tr>
</thead>
<tbody>";

foreach ($orders as $row) {
    $htmlSales .= "
    <tr class='order'>
        <td class='order-number' data-title='Order'>
            <a href='*'>#" . $row['id'] . "</a>
        </td>
        <td class='order-date' data-title='Date'>
            <time datetime='" . $row['orderDate'] . "' title='" . strtotime($row['orderDate']) . "'>" . $row['orderDate'] . "</time>
        </td>
        <td class='order-total' data-title='Total'>
            <span class='amount'>£" . $row['total'] . "</span> for " . $row['nbItems'] . " items
        </td>
        <td class='order-actions' data-title='Action'>
            <img src='delete.png' width='50px' height='50px' class='deleteSales'>
        </td>
    </tr>";
}

$htmlSales .= "</tbody></table>";
?>
