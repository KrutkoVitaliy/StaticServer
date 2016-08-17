<?php
if (isset($_POST['screen0']) and $_POST['screen0'] != '') $screen0 = $_POST['screen0']; else $screen0 = "empty.jpg";
if (isset($_POST['screen1']) and $_POST['screen1'] != '') $screen1 = $_POST['screen1']; else $screen1 = "empty.jpg";
if (isset($_POST['screen2']) and $_POST['screen2'] != '') $screen2 = $_POST['screen2']; else $screen2 = "empty.jpg";
if (isset($_POST['screen3']) and $_POST['screen3'] != '') $screen3 = $_POST['screen3']; else $screen3 = "empty.jpg";
if (isset($_POST['screen4']) and $_POST['screen4'] != '') $screen4 = $_POST['screen4']; else $screen4 = "empty.jpg";
if (isset($_POST['screen5']) and $_POST['screen5'] != '') $screen5 = $_POST['screen5']; else $screen5 = "empty.jpg";
if (isset($_POST['screen6']) and $_POST['screen6'] != '') $screen6 = $_POST['screen6']; else $screen6 = "empty.jpg";
if (isset($_POST['screen7']) and $_POST['screen7'] != '') $screen7 = $_POST['screen7']; else $screen7 = "empty.jpg";
if (isset($_POST['screen8']) and $_POST['screen8'] != '') $screen8 = $_POST['screen8']; else $screen8 = "empty.jpg";
if (isset($_POST['screen9']) and $_POST['screen9'] != '') $screen9 = $_POST['screen9']; else $screen9 = "empty.jpg";
if (isset($_POST['tags']) and $_POST['tags'] != '') $tags = $_POST['tags'];
if (isset($_POST['shape']) and $_POST['shape'] != '') $shape = $_POST['shape'];
if (isset($_POST['design']) and $_POST['design'] != '') $design = $_POST['design'];
if (isset($_POST['colors']) and $_POST['colors'] != '') $colors = implode(",", $_POST['colors']);



$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = pg_query($connection, "SELECT id FROM manicure ORDER BY id DESC");
$row = pg_fetch_row($id);

$time = time('h:i:s');

if ($screen1 != "empty.jpg") {
    download_remote_file($screen1, "/var/www/html/storage/images/" . $time . "_" . $row[0] . "1.jpg");
    $screen1 = $time . "_" . $row[0] . "1.jpg";
}
if ($screen2 != "empty.jpg") {
    download_remote_file($screen2, "/var/www/html/storage/images/" . $time . "_" . $row[0] . "2.jpg");
    $screen2 = $time . "_" . $row[0] . "2.jpg";
}
if ($screen3 != "empty.jpg") {
    download_remote_file($screen3, "/var/www/html/storage/images/" . $time . "_" . $row[0] . "3.jpg");
    $screen3 = $time . "_" . $row[0] . "3.jpg";
}
if ($screen4 != "empty.jpg") {
    download_remote_file($screen4, "/var/www/html/storage/images/" . $time . "_" . $row[0] . "4.jpg");
    $screen4 = $time . "_" . $row[0] . "4.jpg";
}
if ($screen5 != "empty.jpg") {
    download_remote_file($screen5, "/var/www/html/storage/images/" . $time . "_" . $row[0] . "5.jpg");
    $screen5 = $time . "_" . $row[0] . "5.jpg";
}
if ($screen6 != "empty.jpg") {
    download_remote_file($screen6, "/var/www/html/storage/images/" . $time . "_" . $row[0] . "6.jpg");
    $screen6 = $time . "_" . $row[0] . "6.jpg";
}
if ($screen7 != "empty.jpg") {
    download_remote_file($screen7, "/var/www/html/storage/images/" . $time . "_" . $row[0] . "7.jpg");
    $screen7 = $time . "_" . $row[0] . "7.jpg";
}
if ($screen8 != "empty.jpg") {
    download_remote_file($screen8, "/var/www/html/storage/images/" . $time . "_" . $row[0] . "8.jpg");
    $screen8 = $time . "_" . $row[0] . "8.jpg";
}
if ($screen9 != "empty.jpg") {
    download_remote_file($screen9, "/var/www/html/storage/images/" . $time . "_" . $row[0] . "9.jpg");
    $screen9 = $time . "_" . $row[0] . "9.jpg";
}
if ($screen0 != "empty.jpg") {
    download_remote_file($screen0, "/var/www/html/storage/images/" . $time . "_" . $row[0] . "0.jpg");
    $screen0 = $time . "_" . $row[0] . "0.jpg";
}

$uploadDate = date("dmy").date("His");
$result = pg_query($connection, "INSERT INTO manicure (
id,sid,tags,shape,design,colors,screen0,screen1,screen2,screen3,screen4,screen5,screen6,screen7,screen8,screen9,
published,likes,upload_date
) VALUES (
($row[0]+1),1,'".$tags."','".$shape."','".$design."','".$colors."','".$screen0."','".$screen1."','".$screen2."','".$screen3."',
'".$screen4."','".$screen5."','".$screen6."','".$screen7."','".$screen8."','".$screen9."','f',0,'".$uploadDate."'
)");

if ($result) {
    print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/manage/index.php?cat=manicure'></head></html>";
}
else {
    print ($row[0]+1);
    print $screen0."<br>";
    print $screen1."<br>";
    print $screen2."<br>";
    print $screen3."<br>";
    print $screen4."<br>";
    print $screen5."<br>";
    print $screen6."<br>";
    print $screen7."<br>";
    print $screen8."<br>";
    print $screen9."<br>";
    print $tags."<br>";
    print $shape."<br>";
    print $design."<br>";
    print $colors."<br>";
    print $uploadDate."<br>";
}
function download_remote_file($file_url, $save_to)
{
    $content = file_get_contents($file_url);
    file_put_contents($save_to, $content);
}