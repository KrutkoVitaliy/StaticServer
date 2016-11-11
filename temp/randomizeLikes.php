<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$get = pg_query($connection, "SELECT likes,id FROM hairstyle ");
while ($row = pg_fetch_row($get)) {
    $new = rand(50, 150);
    print $new."<br>";
    pg_query("UPDATE hairstyle SET likes='$new' WHERE id='$row[1]'");
}