<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$get = pg_query($connection, "SELECT * FROM manicure");
while ($row = pg_fetch_row($get)){
    //$endTags = $row[2].",".$row[20].",".$row[19].",".$row[18];
    //$query = pg_query($connection, "UPDATE hairstyle SET tags='$endTags' WHERE id='$row[0]'");
    //if($query) {
        //print "+++<br>";
    //}
    print $row[2]."<br>";
}