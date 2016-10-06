<!DOCTYPE html>
<html lang="ru">
<?php
if ($_POST['city'] == "") {
    $city = $_GET['city'];
} else {
    $city = $_POST['city'];
}

$services = $_POST['services'];
$servicePlace = $_POST['service_place'];
$costs = $_POST['costs'];
if (isset($_GET['services']) AND isset($_GET['service_places']) AND isset($_GET['costs'])) {
    $serviceStr = $_GET['services'];
    $servicePlaceStr = $_GET['service_places'];
    $costStr = $_GET['costs'];
} else {
    $serviceStr = "";
    $servicePlaceStr = "";
    $costStr = "";
    for ($i = 0; $i < count($services); $i++) {
        if ($services[$i] != "" AND $costs[$i] != "") {
            $serviceStr = $serviceStr . $services[$i] . ",";
            $costStr = $costStr . $costs[$i] . ",";
        }
    }
    for ($i = 0; $i < count($servicePlace); $i++) {
        $servicePlaceStr = $servicePlaceStr . $servicePlace[$i] . ", ";
    }
    $servicePlaceStr = substr($servicePlaceStr, 0, -2);
    $serviceStr = substr($serviceStr, 0, -2);
    $costStr = substr($costStr, 0, -2);
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
            <div style="font-family: Arial; color:#666666;">
                <p><b><h2>Завершите регистрацию</h2></b></p>
            </div>
        </td>
    </tr>
    <tr>
        <td align="center" valign="top">
            <form action="signup.php" method="post" enctype="multipart/form-data">
                <p style="font-family: Arial; color:#666666;">Шаг 3 / 3. Заполните данные авторизации</p>
                <input required size="30" class="signup_form" type="text" name="name" placeholder="Ваше имя"
                       value="<?php print $_GET['name']; ?>"><br><br>
                <input required size="30" class="signup_form" type="text" name="lastname"
                       placeholder="Ваша фамилия" value="<?php print $_GET['last_name']; ?>"><br><br>
                <input id="email" required size="30" class="signup_form" type="tel" name="phone_number"
                       placeholder="Номер телефона" value="<?php print $_GET['phone_number']; ?>"><br><br>
                <input id="email" required size="30" class="signup_form" type="email" name="email"
                       placeholder="Адрес эл. почты" value="<?php print $_GET['email']; ?>"><br><br>
                <input id="password" required size="30" class="signup_form" type="password" name="password"
                       placeholder="Пароль"><br><br>
                <input id="vpassword" required size="30" class="signup_form" type="password" name="vpassword"
                       placeholder="Подтверждение пароля"><br><br>
                <input type="hidden" name="city" value="<?php print $city; ?>">
                <input type="hidden" name="services" value="<?php print $serviceStr; ?>">
                <input type="hidden" name="service_places" value="<?php print $servicePlaceStr; ?>">
                <input type="hidden" name="costs" value="<?php print $costStr; ?>">
                <div style="font-family: Arial; color:#666666;">
                    Нажимая на кнопку "Зарегистрироваться" вы соглашаетесь<br>с <a
                        style="color:#336699; text-decoration: none;" href="">Политикой
                        конфиденциальности</a><br><br>
                </div>
                <input id="signup" class="signup_form" type="submit" name="submit"
                       value="  Зарегистрироваться   " style="font-weight: bold">
            </form>
        </td>
    </tr>
</table>
</body>
</html>