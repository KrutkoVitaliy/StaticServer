<?php

$uploaddir = '/var/www/html/storage/photos/';
$uploadfile = $uploaddir . basename($_FILES['file1']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['file1']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);

print "</pre>";
