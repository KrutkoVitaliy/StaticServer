<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
if (isset($_GET['request']) and $_GET['request'] != '') $request = $_GET['request']; else $request = '';
if (isset($_GET['hairstyle_length']) and $_GET['hairstyle_length'] != '') $hairstyle_length = $_GET['hairstyle_length']; else $hairstyle_length = '';
if (isset($_GET['hairstyle_type']) and $_GET['hairstyle_type'] != '') $hairstyle_type = $_GET['hairstyle_type']; else $hairstyle_type = '';
if (isset($_GET['hairstyle_for']) and $_GET['hairstyle_for'] != '') $hairstyle_for = $_GET['hairstyle_for']; else $hairstyle_for = '';
if (isset($_GET['position']) and $_GET['position'] != '') $position = $_GET['position']; else $position = '';
$flag = "t";
$limit = 100;
$offset = $position * 100 - 100;

$date = time();

$requestHashTags = explode(",", $request);
$requestHairstyle_type = explode(",", $hairstyle_type);
print "[";
for ($i = 0; $i < count($requestHashTags); $i++) {
    $result = pg_query($connection, "
SELECT *
FROM hairstyle
WHERE published = '$flag'
AND tags LIKE '%$requestHashTags[$i]%'
AND hlength LIKE '%$hairstyle_length%'
AND htype LIKE '%$hairstyle_type%'
AND hfor LIKE '%$hairstyle_for%'
AND upload_date < '$date'

OR published = '$flag'
AND tags_ru LIKE '%$requestHashTags[$i]%'
AND hlength LIKE '%$hairstyle_length%'
AND htype LIKE '%$hairstyle_type%'
AND hfor LIKE '%$hairstyle_for%'
AND upload_date < '$date'
ORDER BY id DESC
LIMIT $limit
OFFSET $offset
");
    $getCount = pg_query($connection, "
SELECT *
FROM hairstyle
WHERE published = '$flag'
AND tags LIKE '%$requestHashTags[$i]%'
AND hlength LIKE '%$hairstyle_length%'
AND htype LIKE '%$hairstyle_type%'
AND hfor LIKE '%$hairstyle_for%'
AND upload_date < '$date'

OR published = '$flag'
AND tags_ru LIKE '%$requestHashTags[$i]%'
AND hlength LIKE '%$hairstyle_length%'
AND htype LIKE '%$hairstyle_type%'
AND hfor LIKE '%$hairstyle_for%'
AND upload_date < '$date'
");
    $count = count(pg_fetch_all($getCount));
    while ($row = pg_fetch_row($result)) {
        $profile = pg_query($connection, "SELECT photo, first_name, last_name FROM profiles WHERE id='$row[1]'");
        $profileRow = pg_fetch_row($profile);
        print $str =
            '{"id":' . $row[0] .
            ',"count":"' . $count . '"' .
            ',"authorName":"' . $profileRow[1] . ' ' . $profileRow[2] . '"' .
            ',"authorPhoto":"' . $profileRow[0] . '"' .
            ',"tags":"' . $row[2] . '"' .
            ',"tagsRu":"' . $row[21] . '"' .
            ',"hairstyleType":"' . $row[3] . '"' .
            ',"screen0":"' . $row[4] . '"' .
            ',"screen1":"' . $row[5] . '"' .
            ',"screen2":"' . $row[6] . '"' .
            ',"screen3":"' . $row[7] . '"' .
            ',"screen4":"' . $row[8] . '"' .
            ',"screen5":"' . $row[9] . '"' .
            ',"screen6":"' . $row[10] . '"' .
            ',"screen7":"' . $row[11] . '"' .
            ',"screen8":"' . $row[12] . '"' .
            ',"screen9":"' . $row[13] . '"' .
            ',"likes":"' . $row[14] . '"' .
            ',"uploadDate":"' . $row[15] . '"' .
            ',"length":"' . $row[18] . '"' . ',"type":"' . $row[19] . '"' . ',"for":"' . $row[20] . '"' .
            ',"published":"' . $row[16] . '"},';
    }
}
print "]";
?>
