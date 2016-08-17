<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = $_GET['id'];
$fid = $_GET['id'] . ",";
$email = $_GET['email'];
$getIdSet = pg_query($connection, "SELECT favorites_manicure FROM profiles WHERE email='$email'");
$row = pg_fetch_row($getIdSet);
if (strpos($row[0], ",".$id.",") === false) {
    $endRow = $row[0] . $fid;
    $like = pg_query($connection, "UPDATE profiles SET favorites_manicure='$endRow' WHERE email='$email'");
    $postLike = pg_query("UPDATE manicure SET likes=likes+1 WHERE id='$id'");
}