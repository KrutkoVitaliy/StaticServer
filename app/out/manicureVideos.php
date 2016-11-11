<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$limit = 100;
$flag = "t";
$i = 0;
$j = 0;
while (true) {
    $date = time();
    $count = pg_query($connection, "SELECT * FROM videos WHERE video_published='t' AND video_upload_date < '$date' AND video_category='manicure'");
    $countArray = pg_fetch_all($count);
    $rowCount = (((count($countArray) - (count($countArray) % 100)) / 100) + 1);
    $str = "";
    if ($i < $rowCount) {
        $i++;
        $offset = $i * 100 - 100;
        $videoManicures = pg_query($connection, "SELECT * FROM videos WHERE video_published='t' AND video_upload_date < '$date' AND video_category='manicure' ORDER BY video_id DESC LIMIT $limit OFFSET $offset");

        while ($row = pg_fetch_row($videoManicures)) {
            $str = $str .
                '{"videoId":' . $row[0] .
                ',"videoTitle":"' . $row[1] . '"' .
                ',"videoPreview":"' . $row[2] . '"' .
                ',"videoSource":"' . $row[3] . '"' .
                ',"videoTags":"' . $row[4] . '"' .
                ',"videoTagsRu":"' . $row[5] . '"' .
                ',"videoLikes":"' . $row[6] . '"' .
                ',"videoUploadDate":"' . date('dmyHis', $row[8] + 25200) . '"},';
        }
        $str = substr($str, 0, -1);

        file_put_contents("/var/www/html/app/static/videoManicure" . $i . ".html", "[" . $str . "]");
        file_put_contents("/var/www/html/app/static/log.out", "VideoManicure - Обновлено " . $i . " раз из " . $rowCount . "\n", FILE_APPEND);
        $str = "";
    } else {
        file_put_contents("/var/www/html/app/static/log.out", "VideoManicure - Нечего обновлять \n", FILE_APPEND);
        $s++;
        if ($s > 10) {
            sleep(60);
            $i = 0;
        }
    }
}