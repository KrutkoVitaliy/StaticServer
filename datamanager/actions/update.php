<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = $_POST['id'];
$colors = implode(",", $_POST['colors']);
$tags = $_POST['tags'];
$shape = $_POST['shape'];
$design = $_POST['design'];
$mid = $_POST['mid'];

switch ($_POST['type']) {
    case 'manicure':
        $result = pg_query($connection, "UPDATE manicure SET colors='$colors', tags='$tags', shape='$shape', design='$design', published='f' WHERE id='$id'");
        if($result)
            print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/datamanager/manicure.php?mid=$mid'></head></html>";
        break;
    case 'hairstyle':
        break;
}