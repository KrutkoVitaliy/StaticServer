<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$limit = 100;
$flag = "t";
$i = 0;
$j = 0;
while (true) {
    $date = time();
    $count = pg_query($connection, "SELECT * FROM makeup WHERE published LIKE '%$flag%' AND upload_date < '$date'");
    $countArray = pg_fetch_all($count);
    $rowCount = (((count($countArray) - (count($countArray) % 100)) / 100) + 1);
    $str = "";
    if ($i < $rowCount) {
        $i++;
        $offset = $i * 100 - 100;
        $manicures = pg_query($connection, "SELECT * FROM makeup WHERE published LIKE '%$flag%' AND upload_date < '$date' ORDER BY id DESC LIMIT $limit OFFSET $offset");

        while ($row = pg_fetch_row($manicures)) {
            $sid = $row[1];
            $profile = pg_query($connection, "SELECT photo, first_name, last_name FROM profiles WHERE id='$sid'");
            $profileResult = pg_fetch_row($profile);
            $str = $str .
                '{"id":' . $row[0] .
                ',"authorName":"' . $profileResult[1] . ' ' . $profileResult[2] . '"' .
                ',"authorPhoto":"' . $profileResult[0] . '"' .
                ',"likes":"' . $row[2] . '"' .
                ',"uploadDate":"' . date('dmyHis', $row[3]+25200) . '"' .
                ',"colors":"' . $row[4] . '"' .
                ',"eyeColor":"' . $row[5] . '"' .
                ',"occasion":"' . $row[6] . '"' .
                ',"difficult":"' . $row[7] . '"' .
                ',"tags":"' . $row[8] . '"' .
                ',"tagsRu":"' . $row[21] . '"' .
                ',"published":"' . $row[9] . '"' .
                ',"screen0":"' . $row[10] . '"' .
                ',"screen1":"' . $row[11] . '"' .
                ',"screen2":"' . $row[12] . '"' .
                ',"screen3":"' . $row[13] . '"' .
                ',"screen4":"' . $row[14] . '"' .
                ',"screen5":"' . $row[15] . '"' .
                ',"screen6":"' . $row[16] . '"' .
                ',"screen7":"' . $row[17] . '"' .
                ',"screen8":"' . $row[18] . '"' .
                ',"screen9":"' . $row[19] . '"},';
        }
        $str = substr($str, 0, -1);

        file_put_contents("/var/www/html/app/static/makeup" . $i . ".html", "[" . $str . "]");
        file_put_contents("/var/www/html/app/static/log.out", "Makeup - Обновлено " . $i . " раз из " . $rowCount . "\n", FILE_APPEND);
        $str = "";
    } else {
        file_put_contents("/var/www/html/app/static/log.out", "Makeup - Нечего обновлять\n", FILE_APPEND);
        $s++;
        if ($s > 10) {
            usleep(15000000);
            $i = 0;
        }
    }
}