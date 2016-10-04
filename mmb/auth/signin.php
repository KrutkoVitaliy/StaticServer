<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
session_start();
if(isset($_POST['email']) AND isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5(strrev($password) . "11616_C_o");
}
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$getUserData = pg_query($connection, "SELECT * FROM webusers WHERE user_email='$email' AND user_password='$password'");
$row = pg_fetch_row($getUserData);
if($row[0] == "") {
    print "<script type='text/javascript'>alert('Невенрый логин или пароль');</script>";
    print "<html><head><meta http-equiv='Refresh' content='0;URL=index.php'></head></html>";
} else {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    print "<html><head><meta http-equiv='Refresh' content='0;URL=../user/myprofile.php'></head></html>";
}?>
</body>
</html>