<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
if (isset($_GET['position']) and $_GET['position'] != '') $position = $_GET['position']; else $position = '';
if (isset($_GET['ids']) and $_GET['ids'] != '') $ids = $_GET['ids']; else $ids = '';
$flag = "t";
$limit = 100;
$offset = $position * 100 - 100;

$ids = explode(",", $ids);

print "[";
for ($i = 0; $i < count($ids); $i++) {
    $result = pg_query($connection, "
SELECT *
FROM hairstyle
WHERE published = '$flag'
AND id = '$ids[$i]'
ORDER BY id DESC
LIMIT $limit
OFFSET $offset
");
    //$count = count(pg_fetch_all(pg_query($connection, "SELECT * FROM manicure WHERE published = '$flag' AND tags LIKE '%$requestHashTags[$i]%' AND colors LIKE '%$colors' AND shape LIKE '%$shape%' AND design LIKE '%$design%'")));
    while ($row = pg_fetch_row($result)) {
        $profile = pg_query($connection, "SELECT  photo, first_name, last_name FROM profiles WHERE id='$row[1]'");
        $profileRow = pg_fetch_row($profile);
        print $str =
            '{"id":' . $row[0] .
            //',"count":"' . $count . '"' .
            ',"authorName":"' . $profileRow[1] . ' ' . $profileRow[2] . '"' .
            ',"authorPhoto":"' . $profileRow[0] . '"' .
            ',"tags":"' . $row[2] . '"' .
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
