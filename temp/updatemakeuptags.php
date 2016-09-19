<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$eng = array(
    "cat eye",
    "christmas",
    "colorful",
    "cut crease",
    "date night",
    "dramatic",
    "everyday",
    "fall",
    "fan shape",
    "glitter",
    "gradient",
    "halloween",
    "natural",
    "new years eve",
    "new years eve ",
    "reverse smokey",
    "smokey",
    "snowglobe",
    "spring",
    "st. patricks day",
    "summer",
    "valentines day",
    "wedding",
    "winter"
);
$rus = array(
    "кошачий глаз",
    "новый год",
    "красочный",
    "cut crease",
    "вечерний",
    "драмак",
    "на каждый день",
    "fall",
    "fan shape",
    "с блетками",
    "градиент",
    "halloween",
    "естественный",
    "новый год",
    "новый год",
    "смоки",
    "смоки",
    "snowglobe",
    "весенний",
    "День святого патрика",
    "летний",
    "День Святого Валентина",
    "свадебный",
    "зимний"
);
$deleting = array(

);
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$result = pg_query($connection, "SELECT tags,id FROM makeup WHERE tags NOT LIKE ''");
while ($row = pg_fetch_row($result)) {
    $ru = "";
    $tempArrayEn = explode(",", $row[0]);

    for ($i = 0; $i < count($tempArrayEn); $i++) {
        for ($j = 0; $j < count($eng); $j++) {
            if (strpos($tempArrayEn[$i], $eng[$j])) {
                $tempArrayEn[$i] = "";
                $tempArrayEn[$i] = $rus[$j];
            }
        }
        $ru = $ru . $tempArrayEn[$i] . ",";
    }

    $query = pg_query($connection, "UPDATE makeup SET tags_ru='$ru' WHERE id='$row[1]'");
    if ($query) {
        print "+++++++++++++++<br>";
        print $row[0] . "<br>";
        print $ru . "<br>";
        $ru = "";
    }
}
?>
</body>
</html>