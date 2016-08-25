<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$result = pg_query($connection, "SELECT * FROM manicure");
while ($row = pg_fetch_row($result)) {
    download_remote_file("http://195.88.209.17/storage/images/" . $row[7], "/var/www/html/storage/images/temp/jpg/" . $row[7]);
    print $row[7]."+++++<br>";
}

function download_remote_file($file_url, $save_to)
{
    $content = file_get_contents($file_url);
    file_put_contents($save_to, $content);
}