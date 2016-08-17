<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table width="100%" align="center">
    <tr>
        <td align="center" width="20%">
            <a href="index.php?cat=manicure">
                <div<?php if ($_GET['cat'] == manicure) print " style='color:#43A047;'"; ?>>Маникюр</div>
            </a><br>
            <a href="index.php?cat=view_manicure&page=1" style="font-size: 14px;">
                <div<?php if ($_GET['cat'] == view_manicure) print " style='color:#43A047;'"; ?>>Песочница</div>
            </a>
        </td>
        <td align="center" width="20%">
            <a href="index.php?cat=makeup">
                <div<?php if ($_GET['cat'] == makeup) print " style='color:#43A047;'"; ?>>Макияж</div>
            </a><br>
            <a href="index.php?cat=view_makeup&page=1" style="font-size: 14px;">
                <div<?php if ($_GET['cat'] == view_makeup) print " style='color:#43A047;'"; ?>>Песочница</div>
            </a>
        </td>
        <td align="center" width="20%">
            <img src="http://195.88.209.17/manage/images/logo.png">
        </td>
        <td align="center" width="20%">
            <a href="index.php?cat=hairstyle">
                <div<?php if ($_GET['cat'] == hairstyle) print " style='color:#43A047;'"; ?>>Прически</div>
            </a><br>
            <a href="index.php?cat=view_hairstyle&page=1" style="font-size: 14px;">
                <div<?php if ($_GET['cat'] == view_hairstyle) print " style='color:#43A047;'"; ?>>Песочница</div>
            </a>
        </td>
        <td align="center" width="20%">
            <a href="index.php?cat=lips">
                <div<?php if ($_GET['cat'] == lips) print " style='color:#43A047;'"; ?>>Губы</div>
            </a><br>
            <a href="index.php?cat=view_lips&page=1" style="font-size: 14px;">
                <div<?php if ($_GET['cat'] == view_lips) print " style='color:#43A047;'"; ?>>Песочница</div>
            </a>
        </td>
    </tr>
</table>
</body>
</html>