<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<table>
<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$getStylist = pg_query("SELECT photo, first_name, last_name, phone_number, city,address FROM profiles WHERE phone_number != ''");
while ($row = pg_fetch_row($getStylist)) {
    print "<tr>";
    print "<td>";
    print "<img src='http://195.88.209.17/storage/photos/$row[0]' width='150' height='150' style='border-radius: 75px;'>";
    print "</td>";
    print "<td valign='top'>";
    print $row[1]." ".$row[2]."<br>";
    print $row[4].", ".$row[5]."<br>";
    print "<div style='color:#336699;'>".$row[3]."</div>";
    print "</td>";
    print "</tr>";
}
?>
</table>
</body>
</html>