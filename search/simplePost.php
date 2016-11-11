<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
if (isset($_GET['cat']) and $_GET['cat'] != '') $cat = $_GET['cat']; else $cat = '';
if (isset($_GET['image']) and $_GET['image'] != '') $image = $_GET['image']; else $image = '';
$str = "";

switch ($cat) {
    case "manicure":
        $getPost = pg_query($connection, "SELECT * FROM manicure WHERE screen1='$image'");
        $rowPost = pg_fetch_row($getPost);
        $getProfile = pg_query($connection, "SELECT  photo, first_name, last_name FROM profiles WHERE id='$rowPost[1]'");
        $profileRow = pg_fetch_row($getProfile);
        $str =
            '{"id":' . $rowPost[0] .
            ',"authorName":"' . $profileRow[1] . ' ' . $profileRow[2] . '"' .
            ',"authorPhoto":"' . $profileRow[0] . '"' .
            ',"tags":"' . $rowPost[2] . '"' .
            ',"tagsRu":"' . $rowPost[20] . '"' .
            ',"shape":"' . $rowPost[3] . '"' .
            ',"design":"' . $rowPost[4] . '"' .
            ',"colors":"' . $rowPost[5] . '"' .
            ',"screen0":"' . $rowPost[6] . '"' .
            ',"screen1":"' . $rowPost[7] . '"' .
            ',"screen2":"' . $rowPost[8] . '"' .
            ',"screen3":"' . $rowPost[9] . '"' .
            ',"screen4":"' . $rowPost[10] . '"' .
            ',"screen5":"' . $rowPost[11] . '"' .
            ',"screen6":"' . $rowPost[12] . '"' .
            ',"screen7":"' . $rowPost[13] . '"' .
            ',"screen8":"' . $rowPost[14] . '"' .
            ',"screen9":"' . $rowPost[15] . '"' .
            ',"published":"' . $rowPost[16] . '"' .
            ',"likes":"' . $rowPost[17] . '"' .
            ',"uploadDate":"' . date('dmyHis', $rowPost[18]+25200) . '"}';
        print "[" . $str . "]";
        break;
    case "makeup":
        $getPost = pg_query($connection, "SELECT * FROM makeup WHERE screen0='$image'");
        $rowPost = pg_fetch_row($getPost);
        $getProfile = pg_query($connection, "SELECT  photo, first_name, last_name FROM profiles WHERE id='$rowPost[1]'");
        $profileRow = pg_fetch_row($getProfile);
        $str =
            '{"id":' . $rowPost[0] .
            ',"count":"' . $count . '"' .
            ',"authorName":"' . $profileRow[1] . ' ' . $profileRow[2] . '"' .
            ',"authorPhoto":"' . $profileRow[0] . '"' .
            ',"likes":"' . $rowPost[2] . '"' .
            ',"uploadDate":"' . date('dmyHis', $rowPost[3]+25200) . '"' .
            ',"colors":"' . $rowPost[4] . '"' .
            ',"eyeColor":"' . $rowPost[5] . '"' .
            ',"occasion":"' . $rowPost[6] . '"' .
            ',"difficult":"' . $rowPost[7] . '"' .
            ',"tags":"' . $rowPost[8] . '"' .
            ',"tagsRu":"' . $rowPost[21] . '"' .
            ',"published":"' . $rowPost[9] . '"' .
            ',"screen0":"' . $rowPost[10] . '"' .
            ',"screen1":"' . $rowPost[11] . '"' .
            ',"screen2":"' . $rowPost[12] . '"' .
            ',"screen3":"' . $rowPost[13] . '"' .
            ',"screen4":"' . $rowPost[14] . '"' .
            ',"screen5":"' . $rowPost[15] . '"' .
            ',"screen6":"' . $rowPost[16] . '"' .
            ',"screen7":"' . $rowPost[17] . '"' .
            ',"screen8":"' . $rowPost[18] . '"' .
            ',"screen9":"' . $rowPost[19] . '"},';
        print "[" . $str . "]";
        break;
    case "hairstyle":
        $getPost = pg_query($connection, "SELECT * FROM hairstyle WHERE screen1='$image'");
        $rowPost = pg_fetch_row($getPost);
        $getProfile = pg_query($connection, "SELECT  photo, first_name, last_name FROM profiles WHERE id='$rowPost[1]'");
        $profileRow = pg_fetch_row($getProfile);
        $str =
            '{"id":' . $rowPost[0] .
            ',"count":"' . $count . '"' .
            ',"authorName":"' . $profileRow[1] . ' ' . $profileRow[2] . '"' .
            ',"authorPhoto":"' . $profileRow[0] . '"' .
            ',"tags":"' . $rowPost[2] . '"' .
            ',"tagsRu":"' . $rowPost[21] . '"' .
            ',"hairstyleType":"' . $rowPost[3] . '"' .
            ',"screen0":"' . $rowPost[4] . '"' .
            ',"screen1":"' . $rowPost[5] . '"' .
            ',"screen2":"' . $rowPost[6] . '"' .
            ',"screen3":"' . $rowPost[7] . '"' .
            ',"screen4":"' . $rowPost[8] . '"' .
            ',"screen5":"' . $rowPost[9] . '"' .
            ',"screen6":"' . $rowPost[10] . '"' .
            ',"screen7":"' . $rowPost[11] . '"' .
            ',"screen8":"' . $rowPost[12] . '"' .
            ',"screen9":"' . $rowPost[13] . '"' .
            ',"likes":"' . $rowPost[14] . '"' .
            ',"uploadDate":"' . date('dmyHis', $rowPost[15]+25200) . '"' .
            ',"length":"' . $rowPost[18] . '"' .
            ',"type":"' . $rowPost[19] . '"' .
            ',"for":"' . $rowPost[20] . '"' .
            ',"published":"' . $rowPost[16] . '"},';
        print "[" . $str . "]";
        break;
}