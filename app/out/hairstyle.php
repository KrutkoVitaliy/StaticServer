<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$limit = 100;
$flag = "t";
$i = 0;
$j = 0;
while (true) {
    $count = pg_query($connection, "SELECT * FROM hairstyle WHERE published LIKE '%$flag%'");
    $countArray = pg_fetch_all($count);
    $rowCount = (((count($countArray) - (count($countArray) % 100)) / 100) + 1);
    $str = "";
    if ($i < $rowCount) {
        $i++;
        $offset = $i * 100 - 100;
        $manicures = pg_query($connection, "SELECT * FROM hairstyle WHERE published LIKE '%$flag%' ORDER BY id DESC LIMIT $limit OFFSET $offset");

        while ($row = pg_fetch_row($manicures)) {
            $sid = $row[1];
            $profile = pg_query($connection, "SELECT photo, first_name, last_name FROM profiles WHERE id='$sid'");
            $profileResult = pg_fetch_row($profile);
            $str = $str .
                '{"id":' . $row[0] .
                ',"authorPhoto":"' . $profileResult[0] . '"' . ',"authorName":"' . $profileResult[1] . " " . $profileResult[2] . '"' .
                ',"tags":"' . $row[2] . '"' . ',"hairstyleType":"' . $row[3] . '"' . ',"screen0":"' . $row[4] . '"' .
                ',"screen1":"' . $row[5] . '"' . ',"screen2":"' . $row[6] . '"' . ',"screen3":"' . $row[7] . '"' .
                ',"screen4":"' . $row[8] . '"' . ',"screen5":"' . $row[9] . '"' . ',"screen6":"' . $row[10] . '"' .
                ',"screen7":"' . $row[11] . '"' . ',"screen8":"' . $row[12] . '"' . ',"screen9":"' . $row[13] . '"' .
                ',"likes":"' . $row[14] . '"' . ',"uploadDate":"' . $row[15] . '"' . ',"published":"' . $row[16] . '"},';
        }
        $str = substr($str, 0, -1);

        file_put_contents("/var/www/html/app/static/hairstyle" . $i . ".html", "[" . $str . "]");
        file_put_contents("/var/www/html/app/static/log.out", "Manicure - Обновлено " . $i . " раз из " . $rowCount . "\n", FILE_APPEND);
        $str = "";
    } else {
        file_put_contents("/var/www/html/app/static/log.out", "Manicure - Нечего обновлять \n", FILE_APPEND);
        $s++;
        if ($s > 10) {
            usleep(15000000);
            $i = $i - 1;
        }
    }
}