<?php
$orderId = $_GET['id'];
$orderTime = date("dmy");
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=pizzatt user=postgres password=12345_Vet");
$getId = pg_query($connection, "SELECT order_num FROM orders");
$lastId = pg_fetch_row($getId);
print $lastId[0]+1;
$query = pg_query($connection, "INSERT INTO orders VALUES ($orderId,'" . $orderTime . "', $lastId[0]+1)");
if ($query) {
    print "[{\"result\":\"success\"}]";
} else {
    print "[{\"result\":\"unsuccess\"}]";
}