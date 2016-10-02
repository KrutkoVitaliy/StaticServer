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
        <td align="center" valign="top">
            <div style="font-family: Arial; color:#666666;">
                <p><b><h2>Добавьте свои услуги</h2></b></p>
            </div>
        </td>
    </tr>
    <tr>
        <td align="center" valign="middle">
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

                <input type="hidden" name="city" value="<?php print $city; ?>">
                <input type="hidden" name="category" value="<?php print $cat; ?>">
                <input style="font-weight: bold;" class="signup_form" type="submit" name="submit" value="  Далее   "><br><br>
            </form>
        </td>
    </tr>
</table>
</body>
</html>