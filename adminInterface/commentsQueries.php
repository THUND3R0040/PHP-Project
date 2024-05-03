<?php
include '../database/db_connect.php';

$query = "SELECT * FROM comments WHERE isAnswered = 0";
$stmt = $conn->prepare($query);
$stmt->execute();
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

$htmlComments = "<table class='shop_table my_account_orders'>
    <thead>
      <tr>
        <th class='order-number'>Comment</th>
        <th class='order-date'>Email</th>
        <th class='order-total'>Content</th>
        <th class='order-actions'>Action</th>
      </tr>
    </thead>
    <tbody>";

foreach ($comments as $comment) {
    $commentId = htmlspecialchars($comment['c_id']);
    $email = htmlspecialchars($comment['c_email']);
    $content = htmlspecialchars($comment['c_content']);

    $htmlComments .= "<tr class='order'>
        <td class='order-number' data-title='Comment'>
          <a href='*'>$commentId</a>
        </td>
        <td class='order-date' data-title='Email'>
          <time datetime='2014-06-12' title='1402562157'>$email</time>
        </td>
        <td class='order-total' data-title='Content'>
          <span class='amount'>$content</span>
        </td>
        <td class='order-actions' data-title='Action'>
          <img src='delete.png' width='50px' height='50px' class='deleteComment' data-comment-id='$commentId'>
        </td>
      </tr>";
}

$htmlComments .= "</tbody></table>";
