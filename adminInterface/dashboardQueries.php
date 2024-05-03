<?php

$last30DaysOrders = 0;
$numberOfOrders = 0;

$sql = "SELECT * FROM orders WHERE orderDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()";
$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $last30DaysOrders += $row['total'];
    $numberOfOrders++;
}


$totalIncome = 0;

$sql = "SELECT * FROM orders";
$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $totalIncome += $row['total'];
}




$dailyIncome = 0;

$sql = "SELECT * FROM orders WHERE orderDate = CURDATE()";
$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $dailyIncome += $row['total'];
}


$last30DaysUsers = 0;

$sql = "SELECT * FROM users WHERE regDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()";
$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $last30DaysUsers++;
}



$incomes = [];

$sql = "SELECT MONTH(m.month) AS mOrder, IFNULL(SUM(o.total), 0) AS total_num
        FROM months m
        LEFT JOIN orders o ON MONTH(m.month) = MONTH(o.orderDate)
        GROUP BY mOrder
        ORDER BY mOrder ASC";

$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $incomes[] = $row['total_num'];
}


$nbOrders = [];

$sql = "SELECT MONTH(m.month) AS mOrder, IFNULL(COUNT(o.total), 0) AS total_num
        FROM months m
        LEFT JOIN orders o ON MONTH(m.month) = MONTH(o.orderDate)
        GROUP BY mOrder
        ORDER BY mOrder ASC";

$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $nbOrders[] = $row['total_num'];
}

$htmlContent = "
        <article class='stats'>
        <div class='card'>
            <div class='info'>
                <span>New Orders</span>
                <span>$numberOfOrders</span>
                <span>(Last 30 days)</span>
            </div>
            
            <span class='bg'>
                <img width='46px' height='46px' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADtUlEQVR4nO2ZX0ibVxiHD7sQul7uejeL2pjUzGgnatJoZk21ybqMzpVOm6pzabO5C7uJri1k2M6kWhwdUtrBUIedhQodZsQyrSZe7Lr1Rga7Tad325oJXsxnnExGWlDzp0m/5fseeODjnDe/94WcwCGfEBoaGhoaGhoaGhpPYWilSHeOqzofj3U+2M3XzhHT+QjKz4hC4cBZggfOQpoGRKFg9BIzesH4IXV71Rq8WBO1XmKiUCjvJmbqBpMXayr1idpuEIWCuYtA5QeQrqJQMLRSVN1B4I0OYtWdkKpCrdSeAalQK4c9IBVqxd4OSrOhnZi9jWBrPu4nTW2gWN/Pw/2k+RRIhYJoPoV1e67c309cJ0EqFEbe5nK/B/kyk7lErjnxLuTLTOYSauXkCZAKNXLazStt70Cbm99z3szjhlyYzUyn3ZzfzpkXuabrOOTCTOfpPE5n11tsyoyOtzkm1EJ7E/u9Lia8Lkjo5IpQCz0u9D4nKx85wXeMDZ8Tb96af9IC2Zht/54WPD0txLfzVj9uoVzkk95myMaM+7ayr/cot5Kyvvu0if1CDZx3oP/MwUqfA/ocbPQ58njkXzT9jXgGGokPHIH+Rlb7j+T5yD/LpUZIRZElvTXsu/gmt5IylXHkv7BDKmbTw1+P3m9nReb47Wz47So68oN2PIP1xC83wGADq4O2F3zk84Ff8NKXVgxDNqYDNpAO2Rj3V/GyUBp+A0UjFq4OW3g8YoXn7bCF+IiFM0KpjNYR/MoCz9m/Ry38OlrHzWuHeVUomes1xL6uheu1e79LLEhu1IBUqJVvqkEq1Mq3h0Aq1MZkJa7JSpYmqyBhJeFxM83p5oxX0bCd89dEFfHJKhZltlAyU2YuTZnZum2GZOXaVAX+VHNum7n4bMZ/WRUK/UNj+nUa7lTA94fYHLpJ5PMo6xeWWZPPcm26gq07Jo7umWPCJWt3ypE9ZI1QGjPlLM2YYGyMyLUIJHtjjIjcmzER3jPH9G/tbjl3y3kglMY9I/EfDsL4fdYn5uEp77Mu99Jxt5x7B/lTKI2QkSchI4R+ZC00B8nOhvktsZeOu+TMGvlDKI1wGYtzZRAdJvLzLCQbDRKRe+EyQinkLO2VM6dX4E9gXo9rXg8LRjYfBoj8cpc16aMAEbn2k56tBT1NKeQ4E7U75MgeskYokaVSriyVwg4OpJqzWMKFnXIWS7kslMxyMa7lYh4s63gijRazEC3BlkFOfXKOfI6WKPSb19DQ0NDQ0NDQEP9//gHAG5VlZt1oLAAAAABJRU5ErkJggg=='>
            </span>
            </div>
        </div>

        <div class='card'>
            <div class='info'>
                <span>Total Income</span>
                <span>$totalIncome $</span>
                <span>Incresed by</span>
            </div>
            
            <span class='bg'>
                <img width='46px' height='46px' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADtUlEQVR4nO2ZX0ibVxiHD7sQul7uejeL2pjUzGgnatJoZk21ybqMzpVOm6pzabO5C7uJri1k2M6kWhwdUtrBUIedhQodZsQyrSZe7Lr1Rga7Tad325oJXsxnnExGWlDzp0m/5fseeODjnDe/94WcwCGfEBoaGhoaGhoaGhpPYWilSHeOqzofj3U+2M3XzhHT+QjKz4hC4cBZggfOQpoGRKFg9BIzesH4IXV71Rq8WBO1XmKiUCjvJmbqBpMXayr1idpuEIWCuYtA5QeQrqJQMLRSVN1B4I0OYtWdkKpCrdSeAalQK4c9IBVqxd4OSrOhnZi9jWBrPu4nTW2gWN/Pw/2k+RRIhYJoPoV1e67c309cJ0EqFEbe5nK/B/kyk7lErjnxLuTLTOYSauXkCZAKNXLazStt70Cbm99z3szjhlyYzUyn3ZzfzpkXuabrOOTCTOfpPE5n11tsyoyOtzkm1EJ7E/u9Lia8Lkjo5IpQCz0u9D4nKx85wXeMDZ8Tb96af9IC2Zht/54WPD0txLfzVj9uoVzkk95myMaM+7ayr/cot5Kyvvu0if1CDZx3oP/MwUqfA/ocbPQ58njkXzT9jXgGGokPHIH+Rlb7j+T5yD/LpUZIRZElvTXsu/gmt5IylXHkv7BDKmbTw1+P3m9nReb47Wz47So68oN2PIP1xC83wGADq4O2F3zk84Ff8NKXVgxDNqYDNpAO2Rj3V/GyUBp+A0UjFq4OW3g8YoXn7bCF+IiFM0KpjNYR/MoCz9m/Ry38OlrHzWuHeVUomes1xL6uheu1e79LLEhu1IBUqJVvqkEq1Mq3h0Aq1MZkJa7JSpYmqyBhJeFxM83p5oxX0bCd89dEFfHJKhZltlAyU2YuTZnZum2GZOXaVAX+VHNum7n4bMZ/WRUK/UNj+nUa7lTA94fYHLpJ5PMo6xeWWZPPcm26gq07Jo7umWPCJWt3ypE9ZI1QGjPlLM2YYGyMyLUIJHtjjIjcmzER3jPH9G/tbjl3y3kglMY9I/EfDsL4fdYn5uEp77Mu99Jxt5x7B/lTKI2QkSchI4R+ZC00B8nOhvktsZeOu+TMGvlDKI1wGYtzZRAdJvLzLCQbDRKRe+EyQinkLO2VM6dX4E9gXo9rXg8LRjYfBoj8cpc16aMAEbn2k56tBT1NKeQ4E7U75MgeskYokaVSriyVwg4OpJqzWMKFnXIWS7kslMxyMa7lYh4s63gijRazEC3BlkFOfXKOfI6WKPSb19DQ0NDQ0NDQEP9//gHAG5VlZt1oLAAAAABJRU5ErkJggg=='>
            </span>
            </div>
        </div>

        <div class='card'>
            <div class='info'>
                <span>Daily Income</span>
                <span>$dailyIncome $</span>
                <span>Increased by</span>
            </div>
            
            <span class='bg'>
                <img width='46px' height='46px' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADtUlEQVR4nO2ZX0ibVxiHD7sQul7uejeL2pjUzGgnatJoZk21ybqMzpVOm6pzabO5C7uJri1k2M6kWhwdUtrBUIedhQodZsQyrSZe7Lr1Rga7Tad325oJXsxnnExGWlDzp0m/5fseeODjnDe/94WcwCGfEBoaGhoaGhoaGhpPYWilSHeOqzofj3U+2M3XzhHT+QjKz4hC4cBZggfOQpoGRKFg9BIzesH4IXV71Rq8WBO1XmKiUCjvJmbqBpMXayr1idpuEIWCuYtA5QeQrqJQMLRSVN1B4I0OYtWdkKpCrdSeAalQK4c9IBVqxd4OSrOhnZi9jWBrPu4nTW2gWN/Pw/2k+RRIhYJoPoV1e67c309cJ0EqFEbe5nK/B/kyk7lErjnxLuTLTOYSauXkCZAKNXLazStt70Cbm99z3szjhlyYzUyn3ZzfzpkXuabrOOTCTOfpPE5n11tsyoyOtzkm1EJ7E/u9Lia8Lkjo5IpQCz0u9D4nKx85wXeMDZ8Tb96af9IC2Zht/54WPD0txLfzVj9uoVzkk95myMaM+7ayr/cot5Kyvvu0if1CDZx3oP/MwUqfA/ocbPQ58njkXzT9jXgGGokPHIH+Rlb7j+T5yD/LpUZIRZElvTXsu/gmt5IylXHkv7BDKmbTw1+P3m9nReb47Wz47So68oN2PIP1xC83wGADq4O2F3zk84Ff8NKXVgxDNqYDNpAO2Rj3V/GyUBp+A0UjFq4OW3g8YoXn7bCF+IiFM0KpjNYR/MoCz9m/Ry38OlrHzWuHeVUomes1xL6uheu1e79LLEhu1IBUqJVvqkEq1Mq3h0Aq1MZkJa7JSpYmqyBhJeFxM83p5oxX0bCd89dEFfHJKhZltlAyU2YuTZnZum2GZOXaVAX+VHNum7n4bMZ/WRUK/UNj+nUa7lTA94fYHLpJ5PMo6xeWWZPPcm26gq07Jo7umWPCJWt3ypE9ZI1QGjPlLM2YYGyMyLUIJHtjjIjcmzER3jPH9G/tbjl3y3kglMY9I/EfDsL4fdYn5uEp77Mu99Jxt5x7B/lTKI2QkSchI4R+ZC00B8nOhvktsZeOu+TMGvlDKI1wGYtzZRAdJvLzLCQbDRKRe+EyQinkLO2VM6dX4E9gXo9rXg8LRjYfBoj8cpc16aMAEbn2k56tBT1NKeQ4E7U75MgeskYokaVSriyVwg4OpJqzWMKFnXIWS7kslMxyMa7lYh4s63gijRazEC3BlkFOfXKOfI6WKPSb19DQ0NDQ0NDQEP9//gHAG5VlZt1oLAAAAABJRU5ErkJggg=='>
            </span>
            </div>
        </div>

        <div class='card'>
            <div class='info'>
                <span>New User</span>
                <span>$last30DaysUsers</span>
                <span>(Last 30 days)</span>
            </div>
            
            <span class='bg'>
                <img width='46px' height='46px' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADtUlEQVR4nO2ZX0ibVxiHD7sQul7uejeL2pjUzGgnatJoZk21ybqMzpVOm6pzabO5C7uJri1k2M6kWhwdUtrBUIedhQodZsQyrSZe7Lr1Rga7Tad325oJXsxnnExGWlDzp0m/5fseeODjnDe/94WcwCGfEBoaGhoaGhoaGhpPYWilSHeOqzofj3U+2M3XzhHT+QjKz4hC4cBZggfOQpoGRKFg9BIzesH4IXV71Rq8WBO1XmKiUCjvJmbqBpMXayr1idpuEIWCuYtA5QeQrqJQMLRSVN1B4I0OYtWdkKpCrdSeAalQK4c9IBVqxd4OSrOhnZi9jWBrPu4nTW2gWN/Pw/2k+RRIhYJoPoV1e67c309cJ0EqFEbe5nK/B/kyk7lErjnxLuTLTOYSauXkCZAKNXLazStt70Cbm99z3szjhlyYzUyn3ZzfzpkXuabrOOTCTOfpPE5n11tsyoyOtzkm1EJ7E/u9Lia8Lkjo5IpQCz0u9D4nKx85wXeMDZ8Tb96af9IC2Zht/54WPD0txLfzVj9uoVzkk95myMaM+7ayr/cot5Kyvvu0if1CDZx3oP/MwUqfA/ocbPQ58njkXzT9jXgGGokPHIH+Rlb7j+T5yD/LpUZIRZElvTXsu/gmt5IylXHkv7BDKmbTw1+P3m9nReb47Wz47So68oN2PIP1xC83wGADq4O2F3zk84Ff8NKXVgxDNqYDNpAO2Rj3V/GyUBp+A0UjFq4OW3g8YoXn7bCF+IiFM0KpjNYR/MoCz9m/Ry38OlrHzWuHeVUomes1xL6uheu1e79LLEhu1IBUqJVvqkEq1Mq3h0Aq1MZkJa7JSpYmqyBhJeFxM83p5oxX0bCd89dEFfHJKhZltlAyU2YuTZnZum2GZOXaVAX+VHNum7n4bMZ/WRUK/UNj+nUa7lTA94fYHLpJ5PMo6xeWWZPPcm26gq07Jo7umWPCJWt3ypE9ZI1QGjPlLM2YYGyMyLUIJHtjjIjcmzER3jPH9G/tbjl3y3kglMY9I/EfDsL4fdYn5uEp77Mu99Jxt5x7B/lTKI2QkSchI4R+ZC00B8nOhvktsZeOu+TMGvlDKI1wGYtzZRAdJvLzLCQbDRKRe+EyQinkLO2VM6dX4E9gXo9rXg8LRjYfBoj8cpc16aMAEbn2k56tBT1NKeQ4E7U75MgeskYokaVSriyVwg4OpJqzWMKFnXIWS7kslMxyMa7lYh4s63gijRazEC3BlkFOfXKOfI6WKPSb19DQ0NDQ0NDQEP9//gHAG5VlZt1oLAAAAABJRU5ErkJggg=='>
            </span>
            </div>
        </div>
      </article>
      <article >
        <canvas id='myChart'></canvas>
      </article>
      <article >
        <canvas id='myChart1'></canvas>
      </article>
      <article>
        
      </article>
      ";


?>