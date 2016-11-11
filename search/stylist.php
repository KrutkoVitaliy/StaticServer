<?php
    $connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
    
    if(isset($_GET['city']) and $_GET['city']) $city = $_GET['city'];
    if(isset($_GET['skill']) and $_GET['skill']) $skill = $_GET['skill'];

    $result = pg_query("SELECT * FROM profiles WHERE city LIKE '%$city%' AND skills LIKE '%$skill%'");
    print "[";
    while($row = pg_fetch_row($result)) {
      print $str =
        '{"id":'.$row[0].
        ',"address":"'.$row[1].'"'.
        ',"aid":"'.$row[2].'"'.
        ',"avatar":"'.$row[3].'"'.
        ',"city":"'.$row[4].'"'.
        ',"followers":"'.$row[5].'"'.
        ',"last_name":"'.$row[6].'"'.
        ',"last_visit":"'.$row[7].'"'.
        ',"likes":"'.$row[8].'"'.
        ',"first_name":"'.$row[9].'"'.
        ',"nickname":"'.$row[10].'"'.
        ',"phone_number":"'.$row[11].'"'.
        ',"registration_date":"'.$row[12].'"'.
        ',"skills":"'.$row[13].'"'.
        ',"user_type":"'.$row[14].'"},';}
    print "]";
?>
