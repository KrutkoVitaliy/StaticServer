<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$email = $_GET['email'];
$search = pg_query($connection, "SELECT * FROM profiles WHERE email='$email'");
$result = pg_fetch_all($search);
$output = pg_fetch_row($search);
$str = "";
if ($result != 0) {
    $str = $str .
        '{"id":' . $output[0] .
        ',"address":"' . $output[1] . '"' . ',"photo":"' . $output[2] . '"' . ',"city":"' . $output[3] . '"' .
        ',"followers":"' . $output[4] . '"' . ',"lastName":"' . $output[5] . '"' . ',"lastVisit":"' . $output[6] . '"' .
        ',"likes":"' . $output[7] . '"' . ',"firstName":"' . $output[8] . '"' . ',"phoneNumber":"' . $output[9] . '"' .
        ',"gplus":"' . $output[18] . '"' .',"facebook":"' . $output[19] . '"' .',"vkontakte":"' . $output[20] . '"' .
        ',"instagram":"' . $output[21] . '"' .',"odnoklassniki":"' . $output[22] . '"' .
        ',"registrationDate":"' . $output[10] . '"' . ',"skills":"' . $output[11] . '"' . ',"email.":"' . $output[12] . '"},';
    $str = substr($str, 0, -1);
    print "[".$str."]";
} else {
    $getId = pg_query($connection, "SELECT * FROM profiles ORDER BY id DESC");
    $id = pg_fetch_row($getId);
    if (isset($_GET['name']) and isset($_GET['email']) and isset($_GET['photo'])) {
        $names = explode(" ", $_GET['name']);
        print $names[0];
        print $names[1];
        $email = $_GET['email'];
        $photo = $_GET['photo'];
        $addUser = pg_query($connection, "INSERT INTO profiles (id, first_name, last_name, email, photo)
    VALUES (($id[0] + 1),'" . $names[0] . "','" . $names[1] . "','" . $email . "','" . $photo . "')");
    }
}
?>