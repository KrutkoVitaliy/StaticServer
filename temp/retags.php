<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");

$get = pg_query($connection, "SELECT tags, tags_ru FROM hairstyle");
while ($row = pg_fetch_row($get)) {
    print $row[0]."<br>";
}