<?php
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$id = $_POST['id'];
$mid = $_POST['mid'];
pg_query($connection, "UPDATE moderate SET edited=edited+1 WHERE id='$mid'");

switch ($_POST['type']) {
    case 'manicure':
        $get = pg_query($connection, "SELECT * FROM manicure WHERE id='$id'");
        $row = pg_fetch_row($get);
        /*$result = pg_query($connection, "DELETE FROM manicure WHERE id='$id'");
        if ($result) {
            print "<html><head></head><body>";
            print "";
            print "</body></html>";
        }*/
        //print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/manage/index.php?cat=view_manicure&page=1'></head></html>";
        break;
    case 'hairstyle':
        /*$result = pg_query($connection, "DELETE FROM hairstyle WHERE id='$id'");
        if ($result)*/
        //print "<html><head><meta http-equiv='refresh' content='0;URL=http://195.88.209.17/manage/index.php?cat=view_hairstyle&page=1'></head></html>";
        break;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>EditData</title>
    <link rel="stylesheet" type="text/css" href="http://195.88.209.17/manage/css/style.css">
</head>
<body>
<table border="0" width="100%" align="center" cellpadding='0' cellspacing='0'>
    <tr>
        <td align="center">
            <br><br>
            <img src='http://195.88.209.17/storage/images/<?php print $row[7]; ?>' height='390'>
        </td>
    </tr>
    <tr>
        <td align="center">
            <img src='http://195.88.209.17/storage/images/<?php print $row[8]; ?>' height='130'>
            <img src='http://195.88.209.17/storage/images/<?php print $row[9]; ?>' height='130'>
            <img src='http://195.88.209.17/storage/images/<?php print $row[10]; ?>' height='130'>
            <img src='http://195.88.209.17/storage/images/<?php print $row[11]; ?>' height='130'>
            <img src='http://195.88.209.17/storage/images/<?php print $row[12]; ?>' height='130'>
            <img src='http://195.88.209.17/storage/images/<?php print $row[13]; ?>' height='130'>
            <img src='http://195.88.209.17/storage/images/<?php print $row[14]; ?>' height='130'>
            <img src='http://195.88.209.17/storage/images/<?php print $row[15]; ?>' height='130'>
            <img src='http://195.88.209.17/storage/images/<?php print $row[6]; ?>' height='130'>
        </td>
    </tr>
</table>
<table border="0" width="100%" align="center" cellpadding='1' cellspacing='1'>
    <tr>
        <td align="center">
            <form action='http://195.88.209.17/datamanager/actions/update.php' method='post' enctype='multipart/form-data'>
                <table cellpadding="1">
                    <tr>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #000000; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="000000">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #404040; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="404040">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #FF0000; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="FF0000">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #FF6A00; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="FF6A00">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #FFD800; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="FFD800">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #B6FF00; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="B6FF00">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #4CFF00; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="4CFF00">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #00FF21; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="00FF21">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #00FF90; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="00FF90">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #00FFFF; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="00FFFF">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #0094FF; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="0094FF">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #0026FF; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="0026FF">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #4800FF; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="4800FF">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #B200FF; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="B200FF">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #FF00DC; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="FF00DC">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #FF006E; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="FF006E">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #808080; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="808080">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #FFFFFF; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="FFFFFF">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #F79F49; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="F79F49">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #8733DD; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="8733DD">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #62B922; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="62B922">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #F9F58D; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="F9F58D">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #A50909; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="A50909">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #1D416F; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="1D416F">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #BCB693; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="BCB693">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #644949; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="644949">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #F9CBCB; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="F9CBCB">
                        </td>
                        <td align="center">
                            <img src="" width="40" height="40"
                                 style="background-color: #D6C880; border-radius: 20px;"><br>
                            <input type="checkbox" name="colors[]" value="D6C880">
                    </tr>
                </table>
                <br>
                <input required id="input" type="text" name="tags" placeholder="Теги (Английский, через запятую)"
                       size="100" value="<?php print $row[2]; ?>"/>
                <div style="padding-bottom:8px;"></div>
                <select name="shape" style="width: 75%;" required>
                    <option selected label="Выберите форму ногтей"></option>
                    <option value="square">Квадратная форма</option>
                    <option value="oval">Овальная форма</option>
                    <option value="stiletto">Стилеты</option>
                </select>
                <div style="padding-bottom:8px;"></div>
                <select name="design" style="width: 75%;" onchange="setExample(this)" required>
                    <option selected label="Выберите дизайн ногтей"></option>
                    <optgroup label="Французский маникюр">
                        <option value="french_classic">Классический</option>
                        <option value="french_chevron">Шеврон</option>
                        <option value="french_millennium">Миллениум</option>
                        <option value="french_fun">Фан</option>
                        <option value="french_crystal">Хрустальный</option>
                        <option value="french_colorful">Цветной</option>
                        <option value="french_designer">Дизайнерский</option>
                        <option value="french_spa">Спа</option>
                        <option value="french_moon">Лунный</option>
                    </optgroup>
                    <option value="art">Художественная роспись</option>
                    <option value="designer">Дизайнерский</option>
                    <option value="volume">Объемный дизайн</option>
                    <option value="aqua">Аквариумный дизайн</option>
                    <option value="american">Американский дизайн</option>
                    <option value="photo">Фотодизайн</option>
                </select>
                <div style="padding-bottom:8px;"></div>
                <img id="example" src="" width="300" height="150">
                <script>
                    function setExample(param) {
                        var exampleImg = document.getElementById("example");
                        var link;
                        switch (param.value) {
                            case 'french_classic':
                                link = "http://195.88.209.17/manage/images/classic.jpg";
                                break;
                            case 'french_chevron':
                                link = "http://195.88.209.17/manage/images/chevron.jpg";
                                break;
                            case 'french_millennium':
                                link = "http://195.88.209.17/manage/images/millennium.jpg";
                                break;
                            case 'french_fun':
                                link = "http://195.88.209.17/manage/images/fun.jpg";
                                break;
                            case 'french_crystal':
                                link = "http://195.88.209.17/manage/images/crystal.jpg";
                                break;
                            case 'french_colorful':
                                link = "http://195.88.209.17/manage/images/colorful.jpg";
                                break;
                            case 'french_designer':
                                link = "http://195.88.209.17/manage/images/designer.jpg";
                                break;
                            case 'french_spa':
                                link = "http://195.88.209.17/manage/images/spa.jpg";
                                break;
                            case 'french_moon':
                                link = "http://195.88.209.17/manage/images/moon.jpg";
                                break;
                            case 'art':
                                link = "http://195.88.209.17/manage/images/art.jpg";
                                break;
                            case 'designer':
                                link = "http://195.88.209.17/manage/images/design.jpg";
                                break;
                            case 'volume':
                                link = "http://195.88.209.17/manage/images/volume.jpg";
                                break;
                            case 'aqua':
                                link = "http://195.88.209.17/manage/images/aqua.jpg";
                                break;
                            case 'american':
                                link = "http://195.88.209.17/manage/images/american.jpg";
                                break;
                            case 'photo':
                                link = "http://195.88.209.17/manage/images/photo.jpg";
                                break;
                        }
                        exampleImg.src = link;
                    }
                </script>
                <br><br><br>

                <input type='hidden' name='id' value='<?php print $row[0]; ?>'>
                <input type='hidden' name='type' value='manicure'>
                <input type='hidden' name='mid' value='<?php print $mid;?>'>
                <input type='submit' name='submit' value='     Save     '
                       style='background-color: #336699; color:#FFFFFF;'>
            </form>
        </td>
    </tr>
</table>
<table>
    <tr>
        <td>

        </td>
        <td>

        </td>
    </tr>
</table>
</body>
</html>