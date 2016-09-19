<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=test user=postgres password=12345_Vet");
$connection2 = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$result = pg_query($connection, "SELECT tags,id FROM manicure WHERE tags NOT LIKE ''");
while ($row = pg_fetch_row($result)) {
    $query = pg_query($connection2, "UPDATE manicure SET tags='$row[0]' WHERE id='$row[1]'");
}