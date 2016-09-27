<?php
$orderId = $_GET['id'];
$orderTime = date("dmy");
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=pizzatt user=postgres password=12345_Vet");
$get = pg_query($connection, "SELECT order_id FROM orders WHERE order_time = '$orderTime'");
$query = pg_query($connection, "INSERT INTO orders VALUES ($orderId,'" . $orderTime . "')");
if ($query) {
    print "[{\"result\":\"success\"}]";
} else {
    print "[{\"result\":\"unsuccess\"}]";
}