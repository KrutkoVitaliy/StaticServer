<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
if (isset($_GET['request']) and $_GET['request'] != '') $request = $_GET['request']; else $request = '';
if (isset($_GET['colors']) and $_GET['colors'] != '') $colors = $_GET['colors']; else $colors = '';
if (isset($_GET['shape']) and $_GET['shape'] != '') $shape = $_GET['shape']; else $shape = '';
if (isset($_GET['design']) and $_GET['design'] != '') $design = $_GET['design']; else $design = '';
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
FROM manicure
WHERE published = '$flag'
AND tags LIKE '%$requestHashTags[$i]%'
AND colors LIKE '%$colors%'
AND shape LIKE '%$shape%'
AND design LIKE '%$design%'

OR published = '$flag'
AND tags_ru LIKE '%$requestHashTags[$i]%'
AND colors LIKE '%$colors%'
AND shape LIKE '%$shape%'
AND design LIKE '%$design%'
ORDER BY id DESC
LIMIT $limit
OFFSET $offset
");
    $getCount = pg_query($connection, "
SELECT *
FROM manicure
WHERE published = '$flag'
AND tags LIKE '%$requestHashTags[$i]%'
AND tags_ru LIKE '%$requestHashTags[$i]%'
AND colors LIKE '%$colors%'
AND shape LIKE '%$shape%'
AND design LIKE '%$design%'

OR published = '$flag'
AND tags_ru LIKE '%$requestHashTags[$i]%'
AND colors LIKE '%$colors%'
AND shape LIKE '%$shape%'
AND design LIKE '%$design%'
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
            ',"tags":"' . $row[2] . '"' .
            ',"tagsRu":"' . $row[20] . '"' .
            ',"shape":"' . $row[3] . '"' .
            ',"design":"' . $row[4] . '"' .
            ',"colors":"' . $row[5] . '"' .
            ',"screen0":"' . $row[6] . '"' .
            ',"screen1":"' . $row[7] . '"' .
            ',"screen2":"' . $row[8] . '"' .
            ',"screen3":"' . $row[9] . '"' .
            ',"screen4":"' . $row[10] . '"' .
            ',"screen5":"' . $row[11] . '"' .
            ',"screen6":"' . $row[12] . '"' .
            ',"screen7":"' . $row[13] . '"' .
            ',"screen8":"' . $row[14] . '"' .
            ',"screen9":"' . $row[15] . '"' .
            ',"published":"' . $row[16] . '"' .
            ',"likes":"' . $row[17] . '"' .
            ',"uploadDate":"' . $row[18] . '"},';
        if ($row[18] == $date) {
            break;
        }
    }
}
print "]";
?>
