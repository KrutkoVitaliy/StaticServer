<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$result = pg_query($connection, "SELECT * FROM makeup");
while ($row = pg_fetch_row($result)) {
    if ($row[0] != "empty.jpg")
        download_remote_file("http://195.88.209.17/storage/images/" . $row[10], "/var/www/html/storage/toedit/" . $row[10]);
    if ($row[1] != "empty.jpg")
        download_remote_file("http://195.88.209.17/storage/images/" . $row[11], "/var/www/html/storage/toedit/" . $row[11]);
    if ($row[2] != "empty.jpg")
        download_remote_file("http://195.88.209.17/storage/images/" . $row[12], "/var/www/html/storage/toedit/" . $row[12]);
    if ($row[3] != "empty.jpg")
        download_remote_file("http://195.88.209.17/storage/images/" . $row[13], "/var/www/html/storage/toedit/" . $row[13]);
    print "+++++<br>";
}

function download_remote_file($file_url, $save_to)
{
    $content = file_get_contents($file_url);
    file_put_contents($save_to, $content);
}