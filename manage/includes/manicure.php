<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="http://195.88.209.17/manage/loaders/manicure.php" method="post" enctype="multipart/form-data">
    <table width="100%" align="center">
        <tr>
            <td width="50%" align="center" valign="top" style="border-right: 1px solid #C0C0C0;">
                <input required id="screen1" type="text" name="screen1" placeholder="Скриншот 1 (URL)" size="40"/>
                <input type="button" value=">>" onclick="getURL1()"/>
                <div style="padding-bottom:8px;"></div>
                <input id="screen2" type="text" name="screen2" placeholder="Скриншот 2 (URL)" size="40"/>
                <input type="button" value=">>" onclick="getURL2()"/>
                <div style="padding-bottom:8px;"></div>
                <input id="screen3" type="text" name="screen3" placeholder="Скриншот 3 (URL)" size="40"/>
                <input type="button" value=">>" onclick="getURL3()"/>
                <div style="padding-bottom:8px;"></div>
                <input id="screen4" type="text" name="screen4" placeholder="Скриншот 4 (URL)" size="40"/>
                <input type="button" value=">>" onclick="getURL4()"/>
                <div style="padding-bottom:8px;"></div>
                <input id="screen5" type="text" name="screen5" placeholder="Скриншот 5 (URL)" size="40"/>
                <input type="button" value=">>" onclick="getURL5()"/>
                <div style="padding-bottom:8px;"></div>
                <input id="screen6" type="text" name="screen6" placeholder="Скриншот 6 (URL)" size="40"/>
                <input type="button" value=">>" onclick="getURL6()"/>
                <div style="padding-bottom:8px;"></div>
                <input id="screen7" type="text" name="screen7" placeholder="Скриншот 7 (URL)" size="40"/>
                <input type="button" value=">>" onclick="getURL7()"/>
                <div style="padding-bottom:8px;"></div>
                <input id="screen8" type="text" name="screen8" placeholder="Скриншот 8 (URL)" size="40"/>
                <input type="button" value=">>" onclick="getURL8()"/>
                <div style="padding-bottom:8px;"></div>
                <input id="screen9" type="text" name="screen9" placeholder="Скриншот 9 (URL)" size="40"/>
                <input type="button" value=">>" onclick="getURL9()"/>
                <div style="padding-bottom:8px;"></div>
                <input id="screen0" type="text" name="screen0" placeholder="Скриншот 0 (URL)" size="40"/>
                <input type="button" value=">>" onclick="getURL0()"/>
                <div style="padding-bottom:8px; border-bottom: 1px solid #C0C0C0; width: 90%;"></div>
                <div style="padding-top:8px;"></div>
                <input required id="input" type="text" name="tags" placeholder="Теги (Английский, через запятую)"
                       maxlength="50" size="46"/>
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
                                break
                            case 'french_chevron':
                                link = "http://195.88.209.17/manage/images/chevron.jpg";
                                break
                            case 'french_millennium':
                                link = "http://195.88.209.17/manage/images/millennium.jpg";
                                break
                            case 'french_fun':
                                link = "http://195.88.209.17/manage/images/fun.jpg";
                                break
                            case 'french_crystal':
                                link = "http://195.88.209.17/manage/images/crystal.jpg";
                                break
                            case 'french_colorful':
                                link = "http://195.88.209.17/manage/images/colorful.jpg";
                                break
                            case 'french_designer':
                                link = "http://195.88.209.17/manage/images/designer.jpg";
                                break
                            case 'french_spa':
                                link = "http://195.88.209.17/manage/images/spa.jpg";
                                break
                            case 'french_moon':
                                link = "http://195.88.209.17/manage/images/moon.jpg";
                                break
                            case 'art':
                                link = "http://195.88.209.17/manage/images/art.jpg";
                                break
                            case 'designer':
                                link = "http://195.88.209.17/manage/images/design.jpg";
                                break
                            case 'volume':
                                link = "http://195.88.209.17/manage/images/volume.jpg";
                                break
                            case 'aqua':
                                link = "http://195.88.209.17/manage/images/aqua.jpg";
                                break
                            case 'american':
                                link = "http://195.88.209.17/manage/images/american.jpg";
                                break
                            case 'photo':
                                link = "http://195.88.209.17/manage/images/photo.jpg";
                                break
                        }
                        exampleImg.src = link;
                    }
                    function getURL0() {
                        var img0 = document.getElementById("preview");
                        img0.src = document.getElementById("screen0").value;
                    }
                    function getURL1() {
                        var img1 = document.getElementById("preview");
                        img1.src = document.getElementById("screen1").value;
                    }
                    function getURL2() {
                        var img2 = document.getElementById("preview");
                        img2.src = document.getElementById("screen2").value;
                    }
                    function getURL3() {
                        var img3 = document.getElementById("preview");
                        img3.src = document.getElementById("screen3").value;
                    }
                    function getURL4() {
                        var img4 = document.getElementById("preview");
                        img4.src = document.getElementById("screen4").value;
                    }
                    function getURL5() {
                        var img5 = document.getElementById("preview");
                        img5.src = document.getElementById("screen5").value;
                    }
                    function getURL6() {
                        var img6 = document.getElementById("preview");
                        img6.src = document.getElementById("screen6").value;
                    }
                    function getURL7() {
                        var img7 = document.getElementById("preview");
                        img7.src = document.getElementById("screen7").value;
                    }
                    function getURL8() {
                        var img8 = document.getElementById("preview");
                        img8.src = document.getElementById("screen8").value;
                    }
                    function getURL9() {
                        var img9 = document.getElementById("preview");
                        img9.src = document.getElementById("screen9").value;
                    }
                </script>
            </td>
            <td width="50%" align="center" valign="top">
                <img id="preview" src="" height="400">
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
            </td>
        </tr>
        <tr>
            <td width="100%" colspan="2" align="center">
                <br><input type="submit" name="submit" value="Загрузить"/>
            </td>
        </tr>
    </table>
</form>

</body>
</html>