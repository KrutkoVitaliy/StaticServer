<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = $_POST['id'];

switch ($_POST['type']) {
    case 'manicure':
        $result = pg_query($connection, "UPDATE manicure SET published='t' WHERE id='$id'");
        if($result)
            print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/manage/index.php?cat=view_manicure&page=1'></head></html>";
        break;
    case 'hairstyle':
        $result = pg_query($connection, "UPDATE hairstyle SET published='t' WHERE id='$id'");
        if($result)
            print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/manage/index.php?cat=view_hairstyle&page=1'></head></html>";
        break;
}
