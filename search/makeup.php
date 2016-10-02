<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
if (isset($_GET['request']) and $_GET['request'] != '') $request = $_GET['request']; else $request = '';
if (isset($_GET['colors']) and $_GET['colors'] != '') $colors = $_GET['colors']; else $colors = '';
if (isset($_GET['eye_color']) and $_GET['eye_color'] != '') $eyeColor = $_GET['eye_color']; else $eyeColor = '';
if (isset($_GET['difficult']) and $_GET['difficult'] != '') $difficult = $_GET['difficult']; else $difficult = '';
if (isset($_GET['occasion']) and $_GET['occasion'] != '') $occasion = $_GET['occasion']; else $occasion = '';
if (isset($_GET['position']) and $_GET['position'] != '') $position = $_GET['position']; else $position = '';
$flag = "t";
$limit = 100;
$offset = $position * 100 - 100;

$date = date("dmy") . date("His");

$requestHashTags = explode(",", $request);
print "[";
for ($i = 0; $i < count($requestHashTags); $i++) {
    $result = pg_query($connection, "
SELECT *
FROM makeup
WHERE published = '$flag'
AND tags LIKE '%$requestHashTags[$i]%'
AND colors LIKE '%$colors%'
AND eye_color LIKE '%$eyeColor%'
AND difficult LIKE '%$difficult%'
AND occasion LIKE '%$occasion%'

OR published = '$flag'
AND tags_ru LIKE '%$requestHashTags[$i]%'
AND colors LIKE '%$colors%'
AND eye_color LIKE '%$eyeColor%'
AND difficult LIKE '%$difficult%'
AND occasion LIKE '%$occasion%'
ORDER BY id DESC
LIMIT $limit
OFFSET $offset
");
    $getCount = pg_query($connection, "
SELECT *
FROM manicure
WHERE published = '$flag'
AND tags LIKE '%$requestHashTags[$i]%'
AND colors LIKE '%$colors%'
AND eye_color LIKE '%$eyeColor%'
AND difficult LIKE '%$difficult%'
AND occasion LIKE '%$occasion%'

OR published = '$flag'
AND tags_ru LIKE '%$requestHashTags[$i]%'
AND colors LIKE '%$colors%'
AND eye_color LIKE '%$eyeColor%'
AND difficult LIKE '%$difficult%'
AND occasion LIKE '%$occasion%'
");
    $count = count(pg_fetch_all($getCount));
    while ($row = pg_fetch_row($result)) {
        $profile = pg_query($connection, "SELECT  photo, first_name, last_name FROM profiles WHERE id='$row[1]'");
        $profileRow = pg_fetch_row($profile);
        print $str =
            '{"id":' . $row[0] .
            ',"count":"' . $count . '"' .
            ',"authorName":"' . $profileRow[1] . ' ' . $profileRow[2] . '"' .
            ',"authorPhoto":"' . $profileRow[0] . '"' .
            ',"likes":"' . $row[2] . '"' .
            ',"uploadDate":"' . $row[3] . '"' .
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
        if ($row[3] == $date) {
            break;
        }
    }
}
print "]";
?>
