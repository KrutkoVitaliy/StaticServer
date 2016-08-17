<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="http://195.88.209.17/manage/loaders/hairstyle.php" method="post" enctype="multipart/form-data">
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
                       maxlength="50" size="45"/>
                <div style="padding-top:8px;"></div>
                <input id="input" type="text" name="hairstyle_type" placeholder="Тип прически (пользовательское поле)"
                       maxlength="50" size="45"/>
                <script>
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
                    function getURL0() {
                        var img0 = document.getElementById("preview");
                        img0.src = document.getElementById("screen0").value;
                    }
                </script>
            </td>
            <td width="50%" align="center" valign="top">
                <img id="preview" src="" height="500">
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