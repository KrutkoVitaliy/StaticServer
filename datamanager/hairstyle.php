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
$result = pg_query($connection, "SELECT * FROM hairstyle WHERE published LIKE '%$flag%' ORDER BY id LIMIT 1");
$row = pg_fetch_row($result);
$count = count(pg_fetch_all(pg_query($connection, "SELECT * FROM hairstyle WHERE published LIKE '%$flag%'")));
?>
<table width="100%" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width='25%' align='center' height='32'
            style='border-bottom: 1px dashed #404040; font-family: Arial; color: #459945; background-color: #EEEEEE;'>
            Принято - <b><?php print $moderate[2]; ?></b>
        </td>
        <td width='25%' align='center' height='32'
            style='border-bottom: 1px dashed #404040; font-family: Arial; color: #336699; background-color: #EEEEEE;'>
            Изменено - <b><?php print $moderate[5]; ?></b>
        </td>
        <td width='25%' align='center' height='32'
            style='border-bottom: 1px dashed #404040; font-family: Arial; color: #994545; background-color: #EEEEEE;'>
            Отклонено - <b><?php print $moderate[3]; ?></b>
        </td>
        <td width='25%' align='center' height='32'
            style='border-bottom: 1px dashed #404040; font-family: Arial; color: #404040; background-color: #EEEEEE;'>
            Всего - <b><?php print $count; ?></b>
        </td>
    </tr>
</table>
<table cellpadding="2" width="100%">
    <?php
    $sid = $row[1];
    $profile = pg_query($connection, "SELECT photo, first_name, last_name FROM profiles WHERE id='$sid'");
    $profileResult = pg_fetch_row($profile);
    $replaced = str_replace(",", "&nbsp;&nbsp;&nbsp;#", $row[2]);
    ?>
    <tr>
        <td align='center'>
            <img src='http://195.88.209.17/storage/images/<?php print $profileResult[0]; ?>' width='50' height='50'
                 style='border-radius: 25px;'>
            <br><b style='font-family: Arial;'><?php print $profileResult[1]; ?><?php print $profileResult[2]; ?></b>
            <p style='color: #336699; font-family: Arial;'>#<?php print $replaced; ?></p>
        </td>
    </tr>
    <tr>
        <td align='center'>
            <table cellpadding='1' cellspacing='1'>
                <tr>
                    <td>
                        <img src='http://195.88.209.17/storage/images/<?php print $row[5]; ?>' height='488'>
                    </td>
                    <td>
                        <table cellpadding='0' cellspacing='0'>
                            <tr>
                                <td>
                                    <img src='http://195.88.209.17/storage/images/<?php print $row[6]; ?>'
                                         height='160'>
                                    <img src='http://195.88.209.17/storage/images/<?php print $row[7]; ?>'
                                         height='160'>
                                    <img src='http://195.88.209.17/storage/images/<?php print $row[8]; ?>'
                                         height='160'>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src='http://195.88.209.17/storage/images/<?php print $row[9]; ?>'
                                         height='160'>
                                    <img src='http://195.88.209.17/storage/images/<?php print $row[10]; ?>'
                                         height='160'>
                                    <img src='http://195.88.209.17/storage/images/<?php print $row[11]; ?>'
                                         height='160'>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src='http://195.88.209.17/storage/images/<?php print $row[12]; ?>'
                                         height='160'>
                                    <img src='http://195.88.209.17/storage/images/<?php print $row[13]; ?>'
                                         height='160'>
                                    <img src='http://195.88.209.17/storage/images/<?php print $row[4]; ?>'
                                         height='160'>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center">
            <form action='http://195.88.209.17/datamanager/actions/accept.php' method='post'
                  enctype='multipart/form-data'>
            <select name="lenght" style="width: 30%;" required>
                <option selected label="Длина волос"></option>
                <option value="short">Короткие</option>
                <option value="medium">Средние</option>
                <option value="long">Длинные</option>
            </select>
            <select name="htype" style="width: 30%;" required>
                <option selected label="Стиль"></option>
                <option value="straight">Прямые</option>
                <option value="braid">Коса</option>
                <option value="tail">Хвост</option>
                <option value="bunch">Пучок</option>
                <option value="netting">Плетения</option>
                <option value="curls">Кудри</option>
                <option value="unstandart">Нестандартные</option>
            </select>
            <select name="for" style="width: 30%;" required>
                <option selected label="Тип прически"></option>
                <option value="kids">Детская</option>
                <option value="everyday">На каждый день</option>
                <option value="wedding">Свадебная</option>
                <option value="evening">Вечерняя</option>
                <option value="exlusive">Другое</option>
            </select><br><br>
                <input type='hidden' name='mid' value='<?php print $mid; ?>'>
                <input type='hidden' name='id' value='<?php print $row[0]; ?>'>
                <input type='hidden' name='type' value='hairstyle'>
                <input type='submit' name='submit' value='     Accept     '
                       style='background-color: #43A047; color:#FFFFFF;'>
            </form><div style="padding-right: 10px"></div>
            <form action='http://195.88.209.17/datamanager/actions/decline.php' method='post'
                  enctype='multipart/form-data'>
                <input type='hidden' name='mid' value='<?php print $mid; ?>'>
                <input type='hidden' name='id' value='<?php print $row[0]; ?>'>
                <input type='hidden' name='type' value='hairstyle'>
                <input type='submit' name='submit' value='     Decline     '
                       style='background-color: #bb125b; color:#FFFFFF;'>
            </form>
        </td>
    </tr>
</table>
</body>
</html>