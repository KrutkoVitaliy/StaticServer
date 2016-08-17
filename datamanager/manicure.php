<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://195.88.209.17/manage/css/style.css"/>
</head>
<body>
<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$mid = $_GET['mid'];
$moderateData = pg_query($connection, "SELECT * FROM moderate WHERE id='$mid'");
$moderate = pg_fetch_row($moderateData);
$offset = $mid * 20;
$flag = "f";
$result = pg_query($connection, "SELECT * FROM manicure WHERE published LIKE '%$flag%' ORDER BY id LIMIT 1");
$count = count(pg_fetch_all(pg_query($connection, "SELECT * FROM manicure WHERE published LIKE '%$flag%'")));

?>

<table width="100%" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width='25%' align='center' height='32' style='border-bottom: 1px dashed #404040; font-family: Arial; color: #459945; background-color: #EEEEEE;'>
            Принято - <b><?php print $moderate[2];?></b>
        </td>
        <td width='25%' align='center' height='32' style='border-bottom: 1px dashed #404040; font-family: Arial; color: #336699; background-color: #EEEEEE;'>
            Изменено - <b><?php print $moderate[5];?></b>
        </td>
        <td width='25%' align='center' height='32' style='border-bottom: 1px dashed #404040; font-family: Arial; color: #994545; background-color: #EEEEEE;'>
            Отклонено - <b><?php print $moderate[3];?></b>
        </td>
        <td width='25%' align='center' height='32' style='border-bottom: 1px dashed #404040; font-family: Arial; color: #404040; background-color: #EEEEEE;'>
            Всего - <b><?php print $count;?></b>
        </td>
    </tr>
</table>
<table cellpadding="2" width="100%">

    <?php

    while ($row = pg_fetch_row($result)) {
        $sid = $row[1];
        $profile = pg_query($connection, "SELECT photo, first_name, last_name FROM profiles WHERE id='$sid'");
        $profileResult = pg_fetch_row($profile);
        $replaced = str_replace(",", "&nbsp;&nbsp;&nbsp;#", $row[2]);

        if ($row[3] == "square") $shape = "Квадратные ногти";
        if ($row[3] == "oval") $shape = "Овальные ногти";
        if ($row[3] == "stiletto") $shape = "Стилеты";

        if ($row[4] == "french_classic") $design = "Классический";
        if ($row[4] == "french_chevron") $design = "Шеврон";
        if ($row[4] == "french_millennium") $design = "Миллениум";
        if ($row[4] == "french_fun") $design = "Фан";
        if ($row[4] == "french_crystal") $design = "Хрустальный";
        if ($row[4] == "french_colorful") $design = "Цветной";
        if ($row[4] == "french_designer") $design = "Дизайнерский";
        if ($row[4] == "french_spa") $design = "Спа";
        if ($row[4] == "french_moon") $design = "Лунный";
        if ($row[4] == "art") $design = "Художественная роспись";
        if ($row[4] == "designer") $design = "Дизайнерский";
        if ($row[4] == "volume") $design = "Объемный дизайн";
        if ($row[4] == "aqua") $design = "Аквариумный дизайн";
        if ($row[4] == "american") $design = "Американский дизайн";
        if ($row[4] == "photo") $design = "Фотодизайн";

        printf("
        <tr>
            <td align='center'>
                <img src='http://195.88.209.17/storage/images/%s' width='50' height='50' style='border-radius: 25px;'>
                <br><b style='font-family: Arial;'>%s %s</b>
                <p style='color: #336699; font-family: Arial;'>#%s</p>
            </td>
        </tr>
        <tr>
            <td align='center'>
                <table cellpadding='1' cellspacing='1'>
                    <tr>
                        <td>
                            <img src='http://195.88.209.17/storage/images/%s' height='488'>
                        </td>
                        <td>
                            <table cellpadding='0' cellspacing='0'>
                                <tr>
                                    <td>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align='center' style='border-bottom: 1px dotted #808080'>
                <table>
                    <tr>
                        <td>
                             <img id='$row[0].000000' src='' width='40' height='40' style='border-radius: 20px; background-color: #000000;'>
                             <img id='$row[0].404040' src='' width='40' height='40' style='border-radius: 20px; background-color: #404040;'>
                             <img id='$row[0].FF0000' src='' width='40' height='40' style='border-radius: 20px; background-color: #FF0000;'>
                             <img id='$row[0].FF6A00' src='' width='40' height='40' style='border-radius: 20px; background-color: #FF6A00;'>
                             <img id='$row[0].FFD800' src='' width='40' height='40' style='border-radius: 20px; background-color: #FFD800;'>
                             <img id='$row[0].B6FF00' src='' width='40' height='40' style='border-radius: 20px; background-color: #B6FF00;'>
                             <img id='$row[0].4CFF00' src='' width='40' height='40' style='border-radius: 20px; background-color: #4CFF00;'>
                             <img id='$row[0].00FF21' src='' width='40' height='40' style='border-radius: 20px; background-color: #00FF21;'>
                             <img id='$row[0].00FF90' src='' width='40' height='40' style='border-radius: 20px; background-color: #00FF90;'>
                             <img id='$row[0].00FFFF' src='' width='40' height='40' style='border-radius: 20px; background-color: #00FFFF;'>
                             <img id='$row[0].0094FF' src='' width='40' height='40' style='border-radius: 20px; background-color: #0094FF;'>
                             <img id='$row[0].0026FF' src='' width='40' height='40' style='border-radius: 20px; background-color: #0026FF;'>
                             <img id='$row[0].4800FF' src='' width='40' height='40' style='border-radius: 20px; background-color: #4800FF;'>
                             <img id='$row[0].B200FF' src='' width='40' height='40' style='border-radius: 20px; background-color: #B200FF;'><br>
                             <img id='$row[0].FF00DC' src='' width='40' height='40' style='border-radius: 20px; background-color: #FF00DC;'>
                             <img id='$row[0].FF006E' src='' width='40' height='40' style='border-radius: 20px; background-color: #FF006E;'>
                             <img id='$row[0].808080' src='' width='40' height='40' style='border-radius: 20px; background-color: #808080;'>
                             <img id='$row[0].FFFFFF' src='' width='40' height='40' style='border-radius: 20px; background-color: #FFFFFF;'>
                             <img id='$row[0].F79F49' src='' width='40' height='40' style='border-radius: 20px; background-color: #F79F49;'>
                             <img id='$row[0].8733DD' src='' width='40' height='40' style='border-radius: 20px; background-color: #8733DD;'>
                             <img id='$row[0].62B922' src='' width='40' height='40' style='border-radius: 20px; background-color: #62B922;'>
                             <img id='$row[0].F9F58D' src='' width='40' height='40' style='border-radius: 20px; background-color: #F9F58D;'>
                             <img id='$row[0].A50909' src='' width='40' height='40' style='border-radius: 20px; background-color: #A50909;'>
                             <img id='$row[0].1D416F' src='' width='40' height='40' style='border-radius: 20px; background-color: #1D416F;'>
                             <img id='$row[0].BCB693' src='' width='40' height='40' style='border-radius: 20px; background-color: #BCB693;'>
                             <img id='$row[0].644949' src='' width='40' height='40' style='border-radius: 20px; background-color: #644949;'>
                             <img id='$row[0].F9CBCB' src='' width='40' height='40' style='border-radius: 20px; background-color: #F9CBCB;'>
                             <img id='$row[0].D6C880' src='' width='40' height='40' style='border-radius: 20px; background-color: #D6C880;'>
                        </td>
                    </tr>
                </table><br>
                <table>
                    <tr>
                        <tdcolspan='2'>
                        %s, %s
                        </td>
                    </tr>
                    <tr>
                        <td style='padding-right: 10px;'>
                        <form action='http://195.88.209.17/datamanager/actions/accept.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' name='mid' value='%s'>
                            <input type='hidden' name='id' value='%s'>
                            <input type='hidden' name='type' value='manicure'>
                            <input type='submit' name='submit' value='     Accept     ' style='background-color: #43A047; color:#FFFFFF;'>
                        </form>
                        </td>
                        <td style='padding-right: 10px'>
                        <form action='http://195.88.209.17/datamanager/actions/edit.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' name='mid' value='%s'>
                            <input type='hidden' name='id' value='%s'>
                            <input type='hidden' name='type' value='manicure'>
                            <input type='submit' name='submit' value='     Edit     '  style='background-color: #336699; color:#FFFFFF;'>
                        </form>
                        </td>
                        <td>
                        <form action='http://195.88.209.17/datamanager/actions/decline.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' name='mid' value='%s'>
                            <input type='hidden' name='id' value='%s'>
                            <input type='hidden' name='type' value='manicure'>
                            <input type='submit' name='submit' value='     Decline     ' style='background-color: #bb125b; color:#FFFFFF;'>
                        </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        ",$profileResult[0], $profileResult[1], $profileResult[2], $replaced,
            $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13], $row[14], $row[15], $row[6],
            $shape, $design, $moderate[1], $row[0], $moderate[1], $row[0], $moderate[1], $row[0]);

        $colors = " " . $row[5];

        if (!strpos($colors, "000000")) print
            "<script type=\"text/javascript\"> var c000000 = document.getElementById('$row[0].000000'); c000000.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "404040")) print
            "<script type=\"text/javascript\"> var c404040 = document.getElementById('$row[0].404040'); c404040.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "FF0000")) print
            "<script type=\"text/javascript\"> var cFF0000 = document.getElementById('$row[0].FF0000'); cFF0000.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "FF6A00")) print
            "<script type=\"text/javascript\"> var cFF6A00 = document.getElementById('$row[0].FF6A00'); cFF6A00.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "FFD800")) print
            "<script type=\"text/javascript\"> var cFFD800 = document.getElementById('$row[0].FFD800'); cFFD800.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "B6FF00")) print
            "<script type=\"text/javascript\"> var cB6FF00 = document.getElementById('$row[0].B6FF00'); cB6FF00.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "4CFF00")) print
            "<script type=\"text/javascript\"> var c4CFF00 = document.getElementById('$row[0].4CFF00'); c4CFF00.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "00FF21")) print
            "<script type=\"text/javascript\"> var c00FF21 = document.getElementById('$row[0].00FF21'); c00FF21.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "00FF90")) print
            "<script type=\"text/javascript\"> var c00FF90 = document.getElementById('$row[0].00FF90'); c00FF90.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "00FFFF")) print
            "<script type=\"text/javascript\"> var c00FFFF = document.getElementById('$row[0].00FFFF'); c00FFFF.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "0094FF")) print
            "<script type=\"text/javascript\"> var c0094FF = document.getElementById('$row[0].0094FF'); c0094FF.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "0026FF")) print
            "<script type=\"text/javascript\"> var c0026FF = document.getElementById('$row[0].0026FF'); c0026FF.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "4800FF")) print
            "<script type=\"text/javascript\"> var c4800FF = document.getElementById('$row[0].4800FF'); c4800FF.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "B200FF")) print
            "<script type=\"text/javascript\"> var cB200FF = document.getElementById('$row[0].B200FF'); cB200FF.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "FF00DC")) print
            "<script type=\"text/javascript\"> var cFF00DC = document.getElementById('$row[0].FF00DC'); cFF00DC.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "FF006E")) print
            "<script type=\"text/javascript\"> var cFF006E = document.getElementById('$row[0].FF006E'); cFF006E.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "808080")) print
            "<script type=\"text/javascript\"> var c808080 = document.getElementById('$row[0].808080'); c808080.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "FFFFFF")) print
            "<script type=\"text/javascript\"> var cFFFFFF = document.getElementById('$row[0].FFFFFF'); cFFFFFF.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "F79F49")) print
            "<script type=\"text/javascript\"> var cF79F49 = document.getElementById('$row[0].F79F49'); cF79F49.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "8733DD")) print
            "<script type=\"text/javascript\"> var c8733DD = document.getElementById('$row[0].8733DD'); c8733DD.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "62B922")) print
            "<script type=\"text/javascript\"> var c62B922 = document.getElementById('$row[0].62B922'); c62B922.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "F9F58D")) print
            "<script type=\"text/javascript\"> var cF9F58D = document.getElementById('$row[0].F9F58D'); cF9F58D.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "A50909")) print
            "<script type=\"text/javascript\"> var cA50909 = document.getElementById('$row[0].A50909'); cA50909.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "1D416F")) print
            "<script type=\"text/javascript\"> var c1D416F = document.getElementById('$row[0].1D416F'); c1D416F.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "BCB693")) print
            "<script type=\"text/javascript\"> var cBCB693 = document.getElementById('$row[0].BCB693'); cBCB693.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "644949")) print
            "<script type=\"text/javascript\"> var c644949 = document.getElementById('$row[0].644949'); c644949.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "F9CBCB")) print
            "<script type=\"text/javascript\"> var cF9CBCB = document.getElementById('$row[0].F9CBCB'); cF9CBCB.style.opacity = '0.2'; </script>";
        if (!strpos($colors, "D6C880")) print
            "<script type=\"text/javascript\"> var cD6C880 = document.getElementById('$row[0].D6C880'); cD6C880.style.opacity = '0.2'; </script>";
    }
    ?>
</table>
</body>
</html>