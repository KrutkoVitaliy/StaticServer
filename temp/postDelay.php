<?php
$reserve = "010816000000";
$day = 1;
$month = "_08";
$year = 16;
$hour = 0;
$minute = -20;
$second = 0;
$currentYear = date("y");
$isLeap = false;

for ($i = 16; $i < 160; $i += 4) {
    if (strpos($currentYear, $i))
        $isLeap = true;
}

$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$result = pg_query($connection, "SELECT upload_date,id FROM makeup WHERE published = 't' ORDER BY id");
while ($row = pg_fetch_row($result)) {

    if ($minute < 40) {
        $minute = $minute + 20;
    } else {
        $minute = 0;
        if ($hour < 23) {
            $hour++;
        } else {
            $hour = 0;
            switch ($month) {
                case "_01":
                    if ($day <= 31) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_02";
                    }
                    break;
                case "_ 02":
                    if ($day <= 29 AND $isLeap) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_03";
                    }
                    if ($day <= 28 AND !$isLeap) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_03";
                    }
                    break;
                case "_03":
                    if ($day <= 31) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_04";
                    }
                    break;
                case "_04":
                    if ($day <= 30) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_05";
                    }
                    break;
                case "_05":
                    if ($day <= 31) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_06";
                    }
                    break;
                case "_06":
                    if ($day <= 30) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_07";
                    }
                    break;
                case "_07":
                    if ($day <= 31) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_08";
                    }
                    break;
                case "_08":
                    if ($day <= 31) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_09";
                    }
                    break;
                case "_09":
                    if ($day <= 30) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_10";
                    }
                    break;
                case "_10":
                    if ($day <= 31) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_11";
                    }
                    break;
                case "_11":
                    if ($day <= 30) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_12";
                    }
                    break;
                case "_12":
                    if ($day <= 31) {
                        $day++;
                    } else {
                        $day = 1;
                        $month = "_01";
                        $year++;
                    }
                    break;
            }
        }
    }
    $endMonth = "";
    $endDay = "";
    $endHour = "";
    $endMinute = "";

    if ($month == "_01") $endMonth = "01";
    if ($month == "_02") $endMonth = "02";
    if ($month == "_03") $endMonth = "03";
    if ($month == "_04") $endMonth = "04";
    if ($month == "_05") $endMonth = "05";
    if ($month == "_06") $endMonth = "06";
    if ($month == "_07") $endMonth = "07";
    if ($month == "_08") $endMonth = "08";
    if ($month == "_09") $endMonth = "09";
    if ($month == "_10") $endMonth = "10";
    if ($month == "_11") $endMonth = "11";
    if ($month == "_12") $endMonth = "12";

    if ($day < 10) $endDay = "0" . $day;
    else $endDay = $day;
    if ($hour < 10) $endHour = "0" . $hour;
    else $endHour = $hour;
    if ($minute < 10) $endMinute = "0" . $minute;
    else $endMinute = $minute;

    //print $endDay . "-day " . $endMonth . "-month " . $year . "-year " . $endHour . "-hour " . $endMinute . "-minute 00-second<br>";
    $endDate = $endDay . $endMonth . $year . $endHour . $endMinute . "00";

    $query = pg_query($connection, "UPDATE makeup SET upload_date='$endDate' WHERE id='$row[1]'");
    if($query)
        print "+++";
    else
        print "---";
    print $endDate."<br>";
}