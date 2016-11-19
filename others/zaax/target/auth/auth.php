<?php
//Check login cookie or init login
if (isset($_COOKIE['login']))
    $login = $_COOKIE['login'];
else
    $login = $_POST['login'];

//Check pass cookie or init pass
if (isset($_COOKIE['pass']))
    $password = $_COOKIE['pass'];
else
    $password = $_POST['pass'];

$password = strrev(md5($password));

//Init connection
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=ztarget user=postgres password=12345_Vet");
$getUser = pg_query($connection, "SELECT * FROM users WHERE user_login='$login' AND user_password='$password'");
//Check result
if (pg_fetch_all($getUser) == 0) {
    print "<html><head><meta http-equiv='Refresh' content='0;URL=../index.php?errorMessage=0'></head></html>";
} else {
    $row = pg_fetch_row($getUser);
    //Set cookies
    if((!isset($_COOKIE['pass']) OR !isset($_COOKIE['pass'])) AND (isset($_POST['login']) AND isset($_POST['pass'])) AND !empty($_GET['remember']))
        setcookie("login", $_POST['login'] + 3600000);
    setcookie("pass", $_POST['pass'] + 3600000);

    //Redirect to user statistics
    print "<html><head><meta http-equiv='Refresh' content='0;URL=../stats.php?i=".$row[0]."&p=".$row[4]."'></head></html>";
}