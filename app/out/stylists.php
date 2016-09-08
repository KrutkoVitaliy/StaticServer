<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$city = $_GET['city'];
$skill = $_GET['skill'];
$search = pg_query($connection, "SELECT * FROM profiles ORDER BY id");
$str = "";
while ($output = pg_fetch_row($search)) {
    if ($output[9] != "") {
        $str = $str .
            '{"id":' . $output[0] .
            ',"address":"' . $output[1] . '"' . ',"photo":"' . $output[2] . '"' . ',"city":"' . $output[3] . '"' .
            ',"followers":"' . $output[4] . '"' . ',"lastName":"' . $output[5] . '"' . ',"lastVisit":"' . $output[6] . '"' .
            ',"likes":"' . $output[7] . '"' . ',"firstName":"' . $output[8] . '"' . ',"phoneNumber":"' . $output[9] . '"' .
            ',"gplus":"' . $output[18] . '"' . ',"facebook":"' . $output[19] . '"' . ',"vkontakte":"' . $output[20] . '"' .
            ',"instagram":"' . $output[21] . '"' . ',"odnoklassniki":"' . $output[22] . '"' .
            ',"makeupServices":"' . $output[23] . '"' . ',"makeupCosts":"' . $output[24] . '"' .
            ',"manicureServices":"' . $output[25] . '"' . ',"manicureCosts":"' . $output[26] . '"' .
            ',"hairstyleServices":"' . $output[27] . '"' . ',"hairstyleCosts":"' . $output[28] . '"' .
            ',"registrationDate":"' . $output[10] . '"' . ',"skills":"' . $output[11] . '"' . ',"email.":"' . $output[12] . '"},';
    }
}
print "[" . $str . "]";
