<?php
$orderId = $_GET['id'];
$orderTime = date("dmy");
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=pizzatt user=postgres password=12345_Vet");
$get = pg_query($connection, "SELECT order_num FROM orders ORDER BY order_num DESC");
$nextNum = pg_fetch_array($get);
$query = pg_query($connection, "INSERT INTO orders VALUES ($orderId,'" . $orderTime . "', $nextNum[0]+1)");
if ($query) {
    print "[{\"result\":\"success\"}]";
} else {
    print "[{\"result\":\"unsuccess\"}]";
}