<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
session_start();
$city = $_POST['city'];
$services = $_POST['services'];
$service_places = $_POST['service_places'];
$costs = $_POST['costs'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$vpassword = $_POST['vpassword'];

if ($password != $vpassword) {
    print "<html><head><meta http-equiv='Refresh' content='0;URL=thirdstep.php?name=" . $name . "&last_name=" . $lastname . "&phone_number=" . $phone_number . "&email=" . $email . "&city=" . $city . "&services=" . $services . "&service_places=" . $service_places . "&costs=" . $costs . "'/></head></html>";
    print "<script>alert('Пароли не совпадают!');</script>";
} else {
    $password = md5(strrev($password) . "11616_C_o");
}

$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$getLastId = pg_query($connection, "SELECT user_id FROM webusers");
$lastId = pg_fetch_row($getLastId);
$insert = pg_query($connection, "INSERT INTO webusers 
(user_id, user_name, user_last_name,  user_phone_number, user_city, user_email, user_password, user_services, user_services_costs, user_service_place, user_avatar) 
VALUES
(($lastId[0]+1),'" . $name . "', '" . $lastname . "', '" . $phone_number . "', '" . $city . "', '" . $email . "', '" . $password . "', '" . $services . "', '" . $costs . "', '" . $service_places . "', 'mmbuserunauth.jpg')");
if ($insert) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    print "<html><head><meta http-equiv='Refresh' content='0;URL=../user/myprofile.php'/></head></html>";
} else {
    print "<html><head><meta http-equiv='Refresh' content='0;URL=thirdstep.php?name=" . $name . "&last_name=" . $lastname . "&phone_number=" . $phone_number . "&email=" . $email . "&city=" . $city . "&services=" . $services . "&service_places=" . $service_places . "&costs=" . $costs . "'/></head></html>";
    print "<script>alert('Произошла ошибка попробуйте еще раз!');</script>";
}
?>

<script type='text/javascript' language='Javascript'>
    document.auto_submit_form.submit();
</script>

</body>
</html>