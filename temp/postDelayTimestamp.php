<?php
$reserve = "010816000000";
$timestampDate = 1470009600;

$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$result = pg_query($connection, "SELECT upload_date,id FROM manicure WHERE published = 't' ORDER BY id");
while ($row = pg_fetch_row($result)) {
    $endDate = $timestampDate;
    $timestampDate = $timestampDate + 1800;

    $query = pg_query($connection, "UPDATE manicure SET upload_date='$endDate' WHERE id='$row[1]'");
    if($query)
        print "+++";
    else
        print "---";
    print $endDate."<br>";
}