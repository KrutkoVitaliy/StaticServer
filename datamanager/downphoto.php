<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
/*$result = pg_query($connection, "SELECT screen0,screen1,screen2,screen3,screen4,screen5,screen6,screen7,screen8,screen9 FROM hairstyle");
while ($row = pg_fetch_row($result)) {
    download_remote_file("http://195.88.209.17/storage/images/" . $row[0], "/var/www/html/storage/temp/hairstyle/" . $row[0]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row[1], "/var/www/html/storage/temp/hairstyle/" . $row[1]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row[2], "/var/www/html/storage/temp/hairstyle/" . $row[2]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row[3], "/var/www/html/storage/temp/hairstyle/" . $row[3]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row[4], "/var/www/html/storage/temp/hairstyle/" . $row[4]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row[5], "/var/www/html/storage/temp/hairstyle/" . $row[5]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row[6], "/var/www/html/storage/temp/hairstyle/" . $row[6]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row[7], "/var/www/html/storage/temp/hairstyle/" . $row[7]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row[8], "/var/www/html/storage/temp/hairstyle/" . $row[8]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row[9], "/var/www/html/storage/temp/hairstyle/" . $row[9]);
    print $row[0]."_+_<br>";
    print $row[1]."_+_<br>";
    print $row[2]."_+_<br>";
    print $row[3]."_+_<br>";
    print $row[4]."_+_<br>";
    print $row[5]."_+_<br>";
    print $row[6]."_+_<br>";
    print $row[7]."_+_<br>";
    print $row[8]."_+_<br>";
    print $row[9]."_+_<br>";
}*/

/*$result2 = pg_query($connection, "SELECT screen0,screen1,screen2,screen3,screen4,screen5,screen6,screen7,screen8,screen9 FROM manicure");
while ($row2 = pg_fetch_row($result2)) {
    download_remote_file("http://195.88.209.17/storage/images/" . $row2[0], "/var/www/html/storage/temp/manicure/" . $row2[0]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row2[1], "/var/www/html/storage/temp/manicure/" . $row2[1]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row2[2], "/var/www/html/storage/temp/manicure/" . $row2[2]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row2[3], "/var/www/html/storage/temp/manicure/" . $row2[3]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row2[4], "/var/www/html/storage/temp/manicure/" . $row2[4]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row2[5], "/var/www/html/storage/temp/manicure/" . $row2[5]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row2[6], "/var/www/html/storage/temp/manicure/" . $row2[6]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row2[7], "/var/www/html/storage/temp/manicure/" . $row2[7]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row2[8], "/var/www/html/storage/temp/manicure/" . $row2[8]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row2[9], "/var/www/html/storage/temp/manicure/" . $row2[9]);
    print $row2[0]."_+_<br>";
    print $row2[1]."_+_<br>";
    print $row2[2]."_+_<br>";
    print $row2[3]."_+_<br>";
    print $row2[4]."_+_<br>";
    print $row2[5]."_+_<br>";
    print $row2[6]."_+_<br>";
    print $row2[7]."_+_<br>";
    print $row2[8]."_+_<br>";
    print $row2[9]."_+_<br>";
}*/

$result3 = pg_query($connection, "SELECT screen0,screen1,screen2,screen3,screen4,screen5,screen6,screen7,screen8,screen9 FROM makeup WHERE published='t'");
while ($row3 = pg_fetch_row($result3)) {
    download_remote_file("http://195.88.209.17/storage/images/" . $row3[0], "/var/www/html/storage/temp/makeup/" . $row3[0]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row3[1], "/var/www/html/storage/temp/makeup/" . $row3[1]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row3[2], "/var/www/html/storage/temp/makeup/" . $row3[2]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row3[3], "/var/www/html/storage/temp/makeup/" . $row3[3]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row3[4], "/var/www/html/storage/temp/makeup/" . $row3[4]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row3[5], "/var/www/html/storage/temp/makeup/" . $row3[5]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row3[6], "/var/www/html/storage/temp/makeup/" . $row3[6]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row3[7], "/var/www/html/storage/temp/makeup/" . $row3[7]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row3[8], "/var/www/html/storage/temp/makeup/" . $row3[8]);
    download_remote_file("http://195.88.209.17/storage/images/" . $row3[9], "/var/www/html/storage/temp/makeup/" . $row3[9]);
    print $row3[0]."_+_<br>";
    print $row3[1]."_+_<br>";
    print $row3[2]."_+_<br>";
    print $row3[3]."_+_<br>";
    print $row3[4]."_+_<br>";
    print $row3[5]."_+_<br>";
    print $row3[6]."_+_<br>";
    print $row3[7]."_+_<br>";
    print $row3[8]."_+_<br>";
    print $row3[9]."_+_<br>";
}

function download_remote_file($file_url, $save_to)
{
    $content = file_get_contents($file_url);
    file_put_contents($save_to, $content);
}