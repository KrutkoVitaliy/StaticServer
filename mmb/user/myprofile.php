<html>
<head>
    <meta charset="UTF-8">
    <title>Мой профиль</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style-modal.css">
</head>
<body>
<?php
session_start();
if(empty($_SESSION['email']) OR empty($_SESSION['email'])){
    print "<html><head><meta http-equiv='Refresh' content='0;URL=../auth/index.php'></head></html>";
}
$email = "" . $_SESSION['email'];
$password = "" . $_SESSION['password'];
$connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
$getUserData = pg_query($connection, "SELECT * FROM webusers WHERE user_email='$email' AND user_password='$password'");
$row = pg_fetch_row($getUserData);
?>
<table align="center" width="100%" style="height: 98%;">
    <tr>
        <td valign="top" width="300" align="center"
            style="padding: 10px; background-color: #DDDDDD; border: 1px solid #C0C0C0; border-radius: 4px;">
            <div class="container">

                <!-- вызов окна по клику на миниатюре -->
                <a href="#win5"><img src="<?php print "http://195.88.209.17/storage/photos/" . $row[9]; ?>" width="300"
                                     height="300" style="border-radius: 4px 4px 0px 0px;"/></a><br>

                <form name="auto_submit" action="uploadavatar.php" method="post" enctype="multipart/form-data">
                    <label for="uploadbtn" class="uploadButton">Изменить фотографию</label>
                    <input type="hidden" name="email" value="<?php print $email; ?>"/>
                    <input style="opacity: 0; z-index: -1;" type="file" name="avatar" id="uploadbtn" onchange="sendAvatar()"/><br>
                </form>
                <script type='text/javascript'>
                    function sendAvatar() {
                        document.auto_submit.submit();
                    }
                </script>

                <div align="left"
                     style="font-family: Arial; font-size: 28px; color: #444444;"><?php print $row[1] . " " . $row[2]; ?></div>
                <br>
                <div align="left"
                     style="font-family: Arial; font-size: 18px; color: #888888;"><?php print "Город: " . $row[4]; ?></div>
                <br>
                <div align="left"
                     style="font-family: Arial; font-size: 18px; color: #888888;"><?php print "E-Mail: " . $row[10]; ?></div>
                <br>
                <div align="left"
                     style="font-family: Arial; font-size: 18px; color: #888888;"><?php print "Номер телефона: " . $row[3]; ?></div>
                <br>
                <div align="left"
                     style="font-family: Arial; font-size: 18px; color: #888888;"><?php print "Обслуживание: " . $row[12]; ?></div>
                <br>

                <!-- Модальное окно №5 -->
                <a href="#x" class="overlay" id="win5"></a>
                <div class="popup">
                    <img class="is-image" title=""
                         src="<?php print "http://195.88.209.17/storage/photos/" . $row[9]; ?>"/>
                    <a class="close" title="Закрыть" href="#close"></a>
                </div>
            </div>
        </td>
        <td align="left" style="padding-left: 50px;">

        </td>
    </tr>
    <!--<tr>
        <td>
            <?php
    /*            $getServices = pg_query($connection, "SELECT user_services, user_services_costs FROM webusers WHERE user_email='$email' AND user_password='$password'");
                $get = pg_fetch_row($getServices);
                $servicesList = explode(",", $get[0]);
                $costsList = explode(",", $get[1]);
                for ($i = 0; $i < count($servicesList); $i++) {
                    print "<div align='center' style='font-family: Arial; font-size: 18px; color: #888888;'>".$servicesList[$i]."  -  ".$costsList[$i]."</div><br>";
                }
                */ ?>
        </td>
        <td>

        </td>
    </tr>-->
</table>
</body>
</html>