<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$limit = 100;
$flag = "t";
$i = 0;
$j = 0;
$pageNum = 1;
$pageCounter = 0;
$str = "";

$parts = array();

$date = time();
$sharedArray = array();

$count =
    count(pg_fetch_all(pg_query($connection, "SELECT published FROM hairstyle WHERE published LIKE '%$flag%' AND upload_date < '$date'"))) +
    count(pg_fetch_all(pg_query($connection, "SELECT published FROM manicure WHERE published LIKE '%$flag%' AND upload_date < '$date'"))) +
    count(pg_fetch_all(pg_query($connection, "SELECT published FROM makeup WHERE published LIKE '%$flag%' AND upload_date < '$date'")));

$hairstyle = pg_fetch_all(pg_query($connection, "SELECT * FROM hairstyle WHERE published='t' AND upload_date < '$date' ORDER BY id DESC"));
$manicure = pg_fetch_all(pg_query($connection, "SELECT * FROM manicure WHERE published='t' AND upload_date < '$date' ORDER BY id DESC"));
$makeup = pg_fetch_all(pg_query($connection, "SELECT * FROM makeup WHERE published LIKE='t' AND upload_date < '$date' ORDER BY id DESC"));

for ($i = 0; $i < $count; $i++) {
    if (isset($hairstyle[$i]))
        array_push($sharedArray, $hairstyle[$i]);
    if (isset($manicure[$i]))
        array_push($sharedArray, $manicure[$i]);
    if (isset($makeup[$i]))
        array_push($sharedArray, $makeup[$i]);
    print var_dump($sharedArray);
    /*
    $sid = $sharedArray[$i]["sid"];
    $profile = pg_query($connection, "SELECT photo, first_name, last_name FROM profiles WHERE id='$sid'");
    $profileResult = pg_fetch_row($profile);

    $dataType = "";
    if (isset($sharedArray[$i]["hlength"]))
        $dataType = "hairstyle";
    if (isset($sharedArray[$i]["shape"]))
        $dataType = "manicure";
    if (isset($sharedArray[$i]["eye_color"]))
        $dataType = "makeup";

    $str = $str .
        '{"id":' . $sharedArray[$i]["id"] .
        ',"dataType":"' . $dataType . '"' .
        ',"authorName":"' . $profileResult[1] . " " . $profileResult[2] . '"' .
        ',"authorPhoto":"' . $profileResult[0] . '"' .
        ',"availableDate":"' . date('dmyHis', $sharedArray[$i]["upload_date"] + 25200) . '"' .
        ',"hlength":"' . $sharedArray[$i]["hlength"] . '"' .
        ',"htype":"' . $sharedArray[$i]["htype"] . '"' .
        ',"hfor":"' . $sharedArray[$i]["hfor"] . '"' .
        ',"colors":"' . $sharedArray[$i]["colors"] . '"' .
        ',"eye_color":"' . $sharedArray[$i]["eye_color"] . '"' .
        ',"occasion":"' . $sharedArray[$i]["occasion"] . '"' .
        ',"difficult":"' . $sharedArray[$i]["difficult"] . '"' .
        ',"shape":"' . $sharedArray[$i]["shape"] . '"' .
        ',"design":"' . $sharedArray[$i]["design"] . '"' .
        ',"tags":"' . $sharedArray[$i]["tags"] . '"' .
        ',"tagsRu":"' . $sharedArray[$i]["tags_ru"] . '"' .
        ',"screen0":"' . $sharedArray[$i]["screen0"] . '"' .
        ',"screen1":"' . $sharedArray[$i]["screen1"] . '"' .
        ',"screen2":"' . $sharedArray[$i]["screen2"] . '"' .
        ',"screen3":"' . $sharedArray[$i]["screen3"] . '"' .
        ',"screen4":"' . $sharedArray[$i]["screen4"] . '"' .
        ',"screen5":"' . $sharedArray[$i]["screen5"] . '"' .
        ',"screen6":"' . $sharedArray[$i]["screen6"] . '"' .
        ',"screen7":"' . $sharedArray[$i]["screen7"] . '"' .
        ',"screen8":"' . $sharedArray[$i]["screen8"] . '"' .
        ',"screen9":"' . $sharedArray[$i]["screen9"] . '"' .
        ',"likes":"' . $sharedArray[$i]["likes"] . '"' .
        ',"published":"' . $sharedArray[$i]["published"] . '"},';*/
}
print "opened";
/*array_push($parts, "[" . $str . "]");

for ($i = 0; $i <= count($parts); $i++) {
    file_put_contents("/var/www/html/app/static/global/global" . $i . ".html", $parts[$i]);
}*/
//while (true) {
/*$countHairstyle = count(pg_fetch_all(pg_query($connection, "SELECT published FROM hairstyle WHERE published LIKE '%$flag%'")));
$countManicure = count(pg_fetch_all(pg_query($connection, "SELECT published FROM manicure WHERE published LIKE '%$flag%'")));
$countMakeup = count(pg_fetch_all(pg_query($connection, "SELECT published FROM makeup WHERE published LIKE '%$flag%'")));
$maxCount = max($countHairstyle, $countManicure, $countMakeup);

for ($i = 0; $i < $maxCount; $i++) {
    $date = time();
    $hairstyle = pg_fetch_row(pg_query($connection, "SELECT * FROM hairstyle WHERE published LIKE '%$flag%' AND upload_date < '$date'"));
    $str = $str .
        '{"id":' . $hairstyle[0] .
        ',"dataType":"hairstyle"' .
        ',"authorName":"' . $profileResult[1] . " " . $profileResult[2] . '"' .
        ',"authorPhoto":"' . $profileResult[0] . '"' .
        ',"availableDate":"' . date('dmyHis', $hairstyle[15] + 25200) . '"' .
        ',"hlength":"' . $hairstyle[18] . '"' .
        ',"htype":"' . $hairstyle[19] . '"' .
        ',"hfor":"' . $hairstyle[20] . '"' .
        ',"colors":""' .
        ',"eye_color":""' .
        ',"occasion":""' .
        ',"difficult":""' .
        ',"shape":""' .
        ',"design":""' .
        ',"tags":"' . $hairstyle[2] . '"' .
        ',"tagsRu":"' . $hairstyle[21] . '"' .
        ',"screen0":"' . $hairstyle[4] . '"' .
        ',"screen1":"' . $hairstyle[5] . '"' .
        ',"screen2":"' . $hairstyle[6] . '"' .
        ',"screen3":"' . $hairstyle[7] . '"' .
        ',"screen4":"' . $hairstyle[8] . '"' .
        ',"screen5":"' . $hairstyle[9] . '"' .
        ',"screen6":"' . $hairstyle[10] . '"' .
        ',"screen7":"' . $hairstyle[11] . '"' .
        ',"screen8":"' . $hairstyle[12] . '"' .
        ',"screen9":"' . $hairstyle[13] . '"' .
        ',"likes":"' . $hairstyle[14] . '"' .
        ',"published":"' . $hairstyle[16] . '"},';
    $manicure = pg_fetch_row(pg_query($connection, "SELECT * FROM manicure WHERE published LIKE '%$flag%' AND upload_date < '$date'"));
    $str = $str .
        '{"id":' . $manicure[0] .
        ',"dataType":"makeup"' .
        ',"authorName":"' . $profileResult[1] . " " . $profileResult[2] . '"' .
        ',"authorPhoto":"' . $profileResult[0] . '"' .
        ',"availableDate":"' . date('dmyHis', $manicure[18] + 25200) . '"' .
        ',"hlength":""' .
        ',"htype":""' .
        ',"hfor":""' .
        ',"colors":"' . $manicure[5] . '"' .
        ',"eye_color":""' .
        ',"occasion":""' .
        ',"difficult":""' .
        ',"shape":"' . $manicure[3] . '"' .
        ',"design":"' . $manicure[4] . '"' .
        ',"tags":"' . $manicure[2] . '"' .
        ',"tagsRu":"' . $manicure[20] . '"' .
        ',"screen0":"' . $manicure[6] . '"' .
        ',"screen1":"' . $manicure[7] . '"' .
        ',"screen2":"' . $manicure[8] . '"' .
        ',"screen3":"' . $manicure[9] . '"' .
        ',"screen4":"' . $manicure[10] . '"' .
        ',"screen5":"' . $manicure[11] . '"' .
        ',"screen6":"' . $manicure[12] . '"' .
        ',"screen7":"' . $manicure[13] . '"' .
        ',"screen8":"' . $manicure[14] . '"' .
        ',"screen9":"' . $manicure[15] . '"' .
        ',"likes":"' . $manicure[17] . '"' .
        ',"published":"' . $manicure[16] . '"},';
    $makeup = pg_fetch_row(pg_query($connection, "SELECT * FROM makeup WHERE published LIKE '%$flag%' AND upload_date < '$date'"));
    $str = $str .
        '{"id":' . $makeup[0] .
        ',"dataType":"manicure"' .
        ',"authorName":"' . $profileResult[1] . " " . $profileResult[2] . '"' .
        ',"authorPhoto":"' . $profileResult[0] . '"' .
        ',"availableDate":"' . date('dmyHis', $makeup[3] + 25200) . '"' .
        ',"hlength":""' .
        ',"htype":""' .
        ',"hfor":""' .
        ',"colors":"' . $makeup[4] . '"' .
        ',"eye_color":"' . $makeup[5] . '"' .
        ',"occasion":"' . $makeup[6] . '"' .
        ',"difficult":"' . $makeup[7] . '"' .
        ',"shape":""' .
        ',"design":""' .
        ',"tags":"' . $makeup[8] . '"' .
        ',"tagsRu":"' . $makeup[21] . '"' .
        ',"screen0":"' . $makeup[10] . '"' .
        ',"screen1":"' . $makeup[11] . '"' .
        ',"screen2":"' . $makeup[12] . '"' .
        ',"screen3":"' . $makeup[13] . '"' .
        ',"screen4":"' . $makeup[14] . '"' .
        ',"screen5":"' . $makeup[15] . '"' .
        ',"screen6":"' . $makeup[16] . '"' .
        ',"screen7":"' . $makeup[17] . '"' .
        ',"screen8":"' . $makeup[18] . '"' .
        ',"screen9":"' . $makeup[19] . '"' .
        ',"likes":"' . $makeup[2] . '"' .
        ',"published":"' . $makeup[9] . '"},';

    //file_put_contents("/var/www/html/app/static/global/global" . $pageNum . ".html", "[" . $str . "]");
    //$str = "";
    //$pageNum++;
}
print "[" . $str . "]";
//usleep(600000000);
//}*/


/*while (true) {
    $date = time();
    $count = pg_query($connection, "SELECT * FROM hairstyle WHERE published LIKE '%$flag%' AND upload_date < '$date'");
    $countArray = pg_fetch_all($count);
    $rowCount = (((count($countArray) - (count($countArray) % 100)) / 100) + 1);
    $str = "";
    if ($i < $rowCount) {
        $i++;
        $offset = $i * 100 - 100;
        $manicures = pg_query($connection, "SELECT * FROM hairstyle WHERE published LIKE '%$flag%' AND upload_date < '$date' ORDER BY id DESC LIMIT $limit OFFSET $offset");

        while ($row = pg_fetch_row($manicures)) {
            $sid = $row[1];
            $profile = pg_query($connection, "SELECT photo, first_name, last_name FROM profiles WHERE id='$sid'");
            $profileResult = pg_fetch_row($profile);
            $str = $str .
                '{"id":' . $row[0] .
                ',"authorPhoto":"' . $profileResult[0] . '"' . ',"authorName":"' . $profileResult[1] . " " . $profileResult[2] . '"' .
                ',"tags":"' . $row[2] . '"' . ',"tagsRu":"' . $row[21] . '"' . ',"hairstyleType":"' . $row[3] . '"' . ',"screen0":"' . $row[4] . '"' .
                ',"screen1":"' . $row[5] . '"' . ',"screen2":"' . $row[6] . '"' . ',"screen3":"' . $row[7] . '"' .
                ',"screen4":"' . $row[8] . '"' . ',"screen5":"' . $row[9] . '"' . ',"screen6":"' . $row[10] . '"' .
                ',"screen7":"' . $row[11] . '"' . ',"screen8":"' . $row[12] . '"' . ',"screen9":"' . $row[13] . '"' .
                ',"length":"' . $row[18] . '"' . ',"type":"' . $row[19] . '"' . ',"for":"' . $row[20] . '"' .
                ',"likes":"' . $row[14] . '"' . ',"uploadDate":"' . date('dmyHis', $row[15] + 25200) . '"' . ',"published":"' . $row[16] . '"},';
        }
        $str = substr($str, 0, -1);

        file_put_contents("/var/www/html/app/static/hairstyle" . $i . ".html", "[" . $str . "]");
        file_put_contents("/var/www/html/app/static/log.out", "Hairstyle - Обновлено " . $i . " раз из " . $rowCount . "\n", FILE_APPEND);
        $str = "";
    } else {
        file_put_contents("/var/www/html/app/static/log.out", "Hairstyle - Нечего обновлять \n", FILE_APPEND);
        $s++;
        if ($s > 10) {
            usleep(15000000);
            $i = 0;
            $s = 0;
        }
    }
}*/