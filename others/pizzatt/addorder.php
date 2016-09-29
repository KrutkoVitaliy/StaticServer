<?php
$orderId = $_GET['id'];
$orderTime = date("dmy");
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=pizzatt user=postgres password=12345_Vet");
$id = pg_query($connection, "SELECT order_num FROM orders ORDER BY order_num DESC");
$row = pg_fetch_row($id);
$checkId = pg_query($connection, "SELECT order_id FROM orders WHERE order_id = '$orderId' AND order_time = '$orderTime'");
$rowId = pg_fetch_row($checkId);
if (($rowId[0] == "") == false) {
    print "[{\"result\":\"unsuccess\"}]";
}
else {
    $query = pg_query($connection, "INSERT INTO orders VALUES ($orderId,'" . $orderTime . "', $row[0]+1)");
    if ($query) {
        print "[{\"result\":\"success\"}]";
    } else {
        print "[{\"result\":\"unsuccess\"}]";
    }
}