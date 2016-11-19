<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$result = pg_query($connection, "SELECT video_id,video_source_link FROM videos WHERE video_category='makeup'");
while ($row = pg_fetch_row($result)) {
    $str = str_replace("<br>", "", $row[1]);
    $repath = pg_query("UPDATE videos SET video_source_link='$str' WHERE video_id='$row[0]'");
    if($repath) {
        print $str."+<br>";
    }
}