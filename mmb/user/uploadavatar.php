<?php
session_start();
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$uploadDate = date("dmy") . date("His");
$uploaddir = '/var/www/html/storage/photos/';
$uploadfilename = $uploadDate . basename($_FILES['avatar']['name']);
$uploadfile = $uploaddir . $uploadDate . basename($_FILES['avatar']['name']);
$email = $_SESSION['email'];

if (move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile)) {
    $result = pg_query($connection, "UPDATE webusers SET user_avatar='$uploadfilename' WHERE user_email='$email'");
    print "<html><head><meta http-equiv='Refresh' content='0;URL=myprofile.php'></head></html>";
} else {
    print "<script type='text/javascript'>alert('Не удалось загрузить изображение! Повторите попытку!');</script>";
    print "<html><head><meta http-equiv='Refresh' content='0;URL=myprofile.php'></head></html>";
}
