<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$result = pg_query($connection, "SELECT tags,id FROM hairstyle WHERE tags NOT LIKE ''");
while ($row = pg_fetch_row($result)) {
    print $row[0].",<br>";
}