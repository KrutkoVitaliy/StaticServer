<!DOCTYPE html>
<html lang="ru">
<?php
$city = $_POST['city'];
$categories = $_POST['category'];
$cat = "";
for ($i = 0; $i < count($categories); $i++) {
    $cat = $cat . $categories[$i] . ",";
}
?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<table>
    <tr>
        <td align="center" valign="middle">
            <form action="signup.php" method="post" enctype="multipart/form-data">
                <input required size="30" class="signup_form" type="text" name="name" placeholder="Ваше имя"><br><br>
                <input required size="30" class="signup_form" type="text" name="lastname"
                       placeholder="Ваша фамилия"><br><br>
                <input id="email" required size="30" class="signup_form" type="email" name="email"
                       placeholder="Адрес эл. почты"><br><br>
                <input id="password" required size="30" class="signup_form" type="password" name="password"
                       placeholder="Пароль"><br><br>
                <input id="password" required size="30" class="signup_form" type="password" name="vpassword"
                       placeholder="Подтверждение пароля"><br><br>
                <input type="hidden" name="city" value="<?php print $city; ?>">
                <input type="hidden" name="category" value="<?php print $cat; ?>">
                <input class="signup_form" type="button"
                       value="  Зарегистрироваться   ">
            </form>
        </td>
    </tr>
</table>
</body>
</html>