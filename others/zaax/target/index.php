<html>
<head>
    <meta charset="UTF-8">
    <title>
        ZAAX Target
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
</head>
<body>

<table align="center" valign="middle" width="100%" height="100%" cellpadding="0" cellspacing="0"
       style="background-color: #F1F1F1;">
    <tr>
        <td align="center" colspan="3">
            <img src="images/logo.png">
        </td>
    </tr>
    <tr>
        <td width="35%"></td>
        <td width="30%" valign="top">

            <!--<h1 align="center">Авторизация</h1><br><br>-->
            <p style="text-align: center; color: #AA0000; font-family: Arial Narrow, serif;"><?php
                if (isset($_GET['errorMessage'])) {
                    if ($_GET['errorMessage'] == 0) {
                        print "Такого пользователя не существует!<br>Проверьте корректность введенных данных!";
                    } else {
                        print "";
                    }
                }
                ?></p>
            <form action="auth/auth.php" method="post" enctype="multipart/form-data">
                <label>Введите логин *</label>
                <div style="padding-bottom: 4px;"></div>
                <input id="login" class="login_input" type="text" name="login" placeholder="Введите логин"
                       required><br><br>
                <label>Введите пароль *</label>
                <div style="padding-bottom: 4px;"></div>
                <input id="password" class="pass_input" type="password" name="pass" placeholder="Введите пароль"
                       required><br><br>
                <input class="checkbox_input" name="remember" type="checkbox"><a>&nbsp;Запомнить меня?</a><br><br>
                <div align="center"><input class="btn" type="submit" name="submit" value="  Войти   "><br>
                </div>
            </form>
        </td>
        <td width="35%"></td>
    </tr>
</table>

<!--<script>
    function auth() {
        $.ajax({
            url: 'auth/auth.php',
            type: 'POST',
            data: {
                value: $('#login').val() // <input id="login">
                value: $('#password').val() // <input id="password">
            }
            success: function ( data ) { // данные отправлены, результат пришел
                console.log ( data ) ; // данные которые пришли
                // тут уже можно выводить пользователю инфу
                $('div.info').html(data);
            }
        });
    }
</script>-->

</body>
</html>