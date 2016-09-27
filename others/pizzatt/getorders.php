<?php
$limit = 6;
$offset = $_GET['position'] * 6 - $limit;
$orderTime = date("dmy");
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=pizzatt user=postgres password=12345_Vet");
$query = pg_query($connection, "SELECT * FROM orders WHERE order_time = '$orderTime' ORDER BY id DESC LIMIT $limit OFFSET $offset");
$str = "";
while ($row = pg_fetch_row($query)) {
   $str = $str."{\"id\":\"$row[0]\",\"time\":\"$row[1]\"},";
}
print "[".$str."]";