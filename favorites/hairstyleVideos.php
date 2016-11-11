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
FROM videos
WHERE video_published='t'
AND video_id = '$ids[$i]'
AND video_category='hairstyle'
ORDER BY video_id DESC
LIMIT $limit
OFFSET $offset
");
    while ($row = pg_fetch_row($result)) {
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
}
print "]";
