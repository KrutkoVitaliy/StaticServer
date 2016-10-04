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
                <p><b><h2>Добавьте свои услуги</h2></b></p>
            </div>
        </td>
    </tr>
    <tr>
        <td align="center" valign="top">
            <form action="thirdstep.php" method="post" enctype="multipart/form-data">
                <p style="font-family: Arial; color:#666666;">Шаг 2 / 3. Заполните поля услуг</p>
                <div style="padding-bottom: 4px;">
                    <input class="signup_form" size="40" type="text" name="services[]" placeholder="Наращивание ногтей">
                    <input class="signup_form" size="10" type="text" name="costs[]" placeholder="900">
                </div>
                <div style="padding-bottom: 4px;">
                    <input class="signup_form" size="40" type="text" name="services[]" placeholder="Услуга">
                    <input class="signup_form" size="10" type="text" name="costs[]" placeholder="Стоимость">
                </div>
                <div style="padding-bottom: 4px;">
                    <input class="signup_form" size="40" type="text" name="services[]" placeholder="Услуга">
                    <input class="signup_form" size="10" type="text" name="costs[]" placeholder="Стоимость">
                </div>
                <div style="padding-bottom: 4px;">
                    <input class="signup_form" size="40" type="text" name="services[]" placeholder="Услуга">
                    <input class="signup_form" size="10" type="text" name="costs[]" placeholder="Стоимость">
                </div>
                <div style="padding-bottom: 4px;">
                    <input class="signup_form" size="40" type="text" name="services[]" placeholder="Услуга">
                    <input class="signup_form" size="10" type="text" name="costs[]" placeholder="Стоимость">
                </div>
                <div style="padding-bottom: 4px;">
                    <input class="signup_form" size="40" type="text" name="services[]" placeholder="Услуга">
                    <input class="signup_form" size="10" type="text" name="costs[]" placeholder="Стоимость">
                </div>
                <div style="padding-bottom: 4px;">
                    <input class="signup_form" size="40" type="text" name="services[]" placeholder="Услуга">
                    <input class="signup_form" size="10" type="text" name="costs[]" placeholder="Стоимость">
                </div>
                <div style="padding-bottom: 4px;">
                    <input class="signup_form" size="40" type="text" name="services[]" placeholder="Услуга">
                    <input class="signup_form" size="10" type="text" name="costs[]" placeholder="Стоимость">
                </div>
                <div style="padding-bottom: 4px;">
                    <input class="signup_form" size="40" type="text" name="services[]" placeholder="Услуга">
                    <input class="signup_form" size="10" type="text" name="costs[]" placeholder="Стоимость">
                </div>
                <div style="padding-bottom: 4px;">
                    <input class="signup_form" size="40" type="text" name="services[]" placeholder="Услуга">
                    <input class="signup_form" size="10" type="text" name="costs[]" placeholder="Стоимость">
                </div><br>
                <label>Я предоставляю услуги:</label><br>
                <input type="checkbox" name="service_place[]" value="Дома">На дому
                <input type="checkbox" name="service_place[]" value="В салоне">В салоне
                <input type="checkbox" name="service_place[]" value="Выезд">Выезд<br><br>

                <input type="hidden" name="city" value="<?php print $_POST['city']; ?>">
                <input style="font-weight: bold;" class="signup_form" type="submit" name="submit" value="  Далее   "><br><br>
            </form>
        </td>
    </tr>
</table>
</body>
</html>