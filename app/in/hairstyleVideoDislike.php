<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = $_GET['id'];
$email = $_GET['email'];
$getIdSet = pg_query($connection, "SELECT favorites_hairstyle_videos FROM profiles WHERE email='$email'");
$row = pg_fetch_row($getIdSet);
$array = explode(",", $row[0]);
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $id || empty($array[$i])) {
        unset($array[$i]);
    }
}
$endRow = implode(",", $array);
str_replace(",,", ",", $row);
$endRow = ",".$endRow;
$like = pg_query($connection, "UPDATE profiles SET favorites_hairstyle_videos='$endRow' WHERE email='$email'");
$postLike = pg_query($connection, "UPDATE videos SET video_likes=video_likes-1 WHERE id='$id'");