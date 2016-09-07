<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$uploadDate = date("dmy") . date("His");
$uploaddir = '/var/www/html/storage/photos/';
$uploadfilename = $uploadDate . basename($_FILES['file1']['name']);
$uploadfile = $uploaddir . $uploadDate . basename($_FILES['file1']['name']);
$email = $_POST['email'];

echo '<pre>';
if (move_uploaded_file($_FILES['file1']['tmp_name'], $uploadfile)) {
    $result = pg_query($connection, "UPDATE profiles SET photo='$uploadfilename' WHERE email='$email'");
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);

print "</pre>";
