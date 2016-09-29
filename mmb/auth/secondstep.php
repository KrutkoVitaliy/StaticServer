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
<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
<script>
    $(document).ready(function () {
        var i = $('input').size() + 1;
        $('#add').click(function () {
            $('<div><input class="signup_form" size="30" type="text" name="services[]" placeholder="Услуга"><input class="signup_form" size="7" type="text" name="costs[]" placeholder="Стоимость"><br><br></div>').fadeIn('slow').appendTo('.inputs');
            i++;
        });
        $('#remove').click(function () {
            if (i > 1) {
                $('.field:last').remove();
                i--;
            }
        });
        $('#reset').click(function () {
            while (i > 2) {
                $('.field:last').remove();
                i--;
            }
        });
        $('.submit').click(function () {
            var answers = [];
            $.each($('.field'), function () {
                answers.push($(this).val());
            });
            if (answers.length == 0) {
                answers = "none";
            }
            alert(answers);
            return false;
        });
    });
</script>
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
            <div id="container">
                <div class="dynamic-form">
                    <form action="thirdstep.php" method="post" enctype="multipart/form-data">
                        <p style="font-family: Arial; color:#666666;">Шаг 2 / 3. Заполните поля услуг</p>
                        <div class="inputs">
                            <input class="signup_form" size="30" type="text" name="services[]" placeholder="Услуга">
                            <input class="signup_form" size="7" type="text" name="costs[]" placeholder="Стоимость"><br><br>
                        </div>
                        <input type="hidden" name="city" value="<?php print $city; ?>">
                        <input type="hidden" name="category" value="<?php print $cat; ?>">
                        <a href="#" id="add">Добавить</a>
                        <a href="#" id="remove">Удалить</a><br><br>
                        <input class="signup_form" type="submit" name="submit" value="  Далее   ">
                    </form>
                </div>
            </div>
        </td>
    </tr>
</table>
</body>
</html>