<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = $_POST['id'];
$mid = $_POST['mid'];

switch ($_POST['type']) {
    case 'manicure':
        $result = pg_query($connection, "UPDATE manicure SET published='t' WHERE id='$id'");
        if ($result) {
            pg_query($connection, "UPDATE moderate SET accepted=accepted+1 WHERE id='$mid'");
            print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/datamanager/manicure.php?mid=$mid'></head></html>";
        }
        break;
    case 'hairstyle':
        $lenght = $_POST['lenght'];
        $htype = $_POST['htype'];
        $for = $_POST['for'];
        $result = pg_query($connection, "UPDATE hairstyle SET hlenght='$lenght', htype='$htype', hfor='$for', published='t' WHERE id='$id'");
        if ($result) {
            pg_query($connection, "UPDATE moderate SET accepted=accepted+1 WHERE id='$mid'");
            print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/datamanager/hairstyle.php?mid=$mid'></head></html>";
        }
        break;
    case 'makeup':
        $result = pg_query($connection, "UPDATE makeup SET published='t' WHERE id='$id'");
        if ($result) {
            pg_query($connection, "UPDATE moderate SET accepted=accepted+1 WHERE id='$mid'");
            print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/datamanager/makeup.php?mid=$mid'></head></html>";
        }
        break;
}
