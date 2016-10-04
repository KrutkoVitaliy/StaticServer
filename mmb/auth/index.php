<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<table>
    <tr>
        <td align="center" valign="middle">
            <div style="font-family: Arial; color:#666666;">
                <p><b><h2>Авторизация</h2></b></p>
            </div>
        </td>
    </tr>
    <tr>
        <td align="center" valign="top">
            <form action="signin.php" method="post" enctype="multipart/form-data">
                    <input class="signup_form" size="40" type="text" name="email" placeholder="Адрес электронной почты"><br><br>
                    <input class="signup_form" size="40" type="password" name="password" placeholder="Пароль"><br><br>
                <input style="font-weight: bold;" class="signup_form" type="submit" name="submit" value="  Войти   "><br><br>
                <a href="firststep.php" style="font-family: Arial; color: #336699; font-size: 18px; text-decoration: none;">Создать учетную запись</a>
            </form>
        </td>
    </tr>
</table>
</body>
</html>
