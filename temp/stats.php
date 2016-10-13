<html>
<head>
    <meta charset="UTF-8">
</head>
<style type="text/css">
    html, body {
        overflow: hidden;
        height:100%;
        background-color: #EEEEEE;
    }
    td {
        border-bottom: 1px solid #808080;
    }
</style>
<body>
<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$date = time();
$publishedMakeup = count(pg_fetch_all(pg_query($connection, "SELECT upload_date FROM makeup WHERE published='t' AND upload_date < $date")));
$publishedManicure = count(pg_fetch_all(pg_query($connection, "SELECT upload_date FROM manicure WHERE published='t' AND upload_date < $date")));
$publishedHairstyle = count(pg_fetch_all(pg_query($connection, "SELECT upload_date FROM hairstyle WHERE published='t' AND upload_date < $date")));

$waitPublishMakeup = count(pg_fetch_all(pg_query($connection, "SELECT upload_date FROM makeup WHERE published='t' AND upload_date > $date")));
$waitPublishManicure = count(pg_fetch_all(pg_query($connection, "SELECT upload_date FROM manicure WHERE published='t' AND upload_date > $date")));
$waitPublishHairstyle = count(pg_fetch_all(pg_query($connection, "SELECT upload_date FROM hairstyle WHERE published='t' AND upload_date > $date")));

$waitAcceptMakeup = count(pg_fetch_all(pg_query($connection, "SELECT upload_date FROM makeup WHERE published='f'")));
$waitAcceptManicure = count(pg_fetch_all(pg_query($connection, "SELECT upload_date FROM manicure WHERE published='f'")));
$waitAcceptHairstyle = count(pg_fetch_all(pg_query($connection, "SELECT upload_date FROM hairstyle WHERE published='f'")));
?>
<table width="100%" height="98%" align="center" cellpadding="20" cellspacing="0" border="0" style="font-family: Arial; border: 1px solid #808080; border-radius: 4px; color: #808080;">
    <tr>
        <td align="center" bgcolor="#DDDDDD" style="font-weight: bold;">Категория</td>
        <td align="center" bgcolor="#DDDDDD" style="font-weight: bold;">Опубликовано</td>
        <td align="center" bgcolor="#DDDDDD" style="font-weight: bold;">Ожидание публикации</td>
        <td align="center" bgcolor="#DDDDDD" style="font-weight: bold;">На модерации</td>
    </tr>
    <tr>
        <td align="center" style="font-weight: bold;">Макияж</td>
        <td align="center"><?php print $publishedMakeup; ?></td>
        <td align="center"><?php print $waitPublishMakeup; ?></td>
        <td align="center"><?php print $waitAcceptMakeup; ?></td>
    </tr>
    <tr>
        <td align="center" style="font-weight: bold;">Маникюр</td>
        <td align="center"><?php print $publishedManicure; ?></td>
        <td align="center"><?php print $waitPublishManicure; ?></td>
        <td align="center"><?php print $waitAcceptManicure; ?></td>
    </tr>
    <tr>
        <td align="center" style="font-weight: bold;">Прически</td>
        <td align="center"><?php print $publishedHairstyle; ?></td>
        <td align="center"><?php print $waitPublishHairstyle; ?></td>
        <td align="center"><?php print $waitAcceptHairstyle; ?></td>
    </tr>
</table>
</body>
</html>