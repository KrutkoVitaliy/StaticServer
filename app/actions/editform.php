<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = $_GET['id'];
$query = pg_query($connection, "SELECT photo FROM profiles WHERE id='$id'");
$row = pg_fetch_row($query);
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form action="editprofile.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td align="center">
                <input type='file' name='avatar'
                       style='
                           width: 250px;
                           height: 250px;
                           border-radius: 125px;
                           background-size: 100%;
                           background-image: url("http://195.88.209.17/storage/images/<?php print $row[0]; ?>")'/>
            </td>
        </tr>
        <tr>
            <td>

            </td>
        </tr>
    </table>
</form>
</body>
</html>