<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = $_POST['id'];
$mid = $_POST['mid'];

switch ($_POST['type']) {
    case 'manicure':
        $result = pg_query($connection, "DELETE FROM manicure WHERE id='$id'");
        if ($result) {
            pg_query($connection, "UPDATE moderate SET declined=declined+1 WHERE id='$mid'");
            print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/datamanager/manicure.php?mid=$mid'></head></html>";
        }
        break;
    case 'hairstyle':
        $result = pg_query($connection, "DELETE FROM hairstyle WHERE id='$id'");
        if ($result) {
            pg_query($connection, "UPDATE moderate SET declined=declined+1 WHERE id='$mid'");
            print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/datamanager/manicure.php?mid=$mid'></head></html>";
        }
        break;
    case 'makeup':
        $result = pg_query($connection, "DELETE FROM makeup WHERE id='$id'");
        if ($result) {
            pg_query($connection, "UPDATE moderate SET declined=declined+1 WHERE id='$mid'");
            print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/datamanager/makeup.php?mid=$mid'></head></html>";
        }
        break;
}
