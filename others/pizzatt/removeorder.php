<?php
$orderId = $_GET['id'];
$orderTime = date("dmy");
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=pizzatt user=postgres password=12345_Vet");
$query = pg_query($connection, "DELETE FROM orders WHERE order_id='$orderId' AND order_time='$orderTime'");
if ($query) {
    print "[{\"result\":\"success\"}]";
} else {
    print "[{\"result\":\"unsuccess\"}]";
}