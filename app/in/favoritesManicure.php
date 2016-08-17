<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$email = $_GET['email'];
$like = pg_query($connection, "SELECT favorites_manicure FROM profiles WHERE email='$email'");
$row = pg_fetch_row($like);
print $row[0];