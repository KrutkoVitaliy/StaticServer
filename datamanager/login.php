<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$login = $_POST['login'];
$password = $_POST['password'];

$stats = pg_query($connection, "SELECT * FROM moderate WHERE mname='$login' AND mpassword='$password'");
$row = pg_fetch_row($stats);
if($row) {
    print "<html><head><meta http-equiv='refresh' content='0;URL=manicure.php?mid=$row[1]'></head></html>";
} else {
    print "<html><head><meta http-equiv='refresh' content='0;URL=index.php'></head></html>";
}