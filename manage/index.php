<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<table width="100%" cellspacing="10">
    <tr>
        <td>
            <?php include("includes/menu.php"); ?>
            <div style="border-bottom: 1px dashed #C0C0C0; margin-bottom: 16px; margin-top: 16px;"></div>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            switch ($_GET['cat']) {
                case "manicure":
                    include("includes/manicure.php");
                    break;
                case "makeup":
                    include("includes/makeup.php");
                    break;
                case "hairstyle":
                    include("includes/hairstyle.php");
                    break;
                case "lips":
                    include("includes/lips.php");
                    break;
                case "trends":
                    include("includes/trend.php");
                    break;
                case "view_manicure":
                    include("viewers/manicure.php");
                    break;
                case "view_makeup":
                    include("viewers/makeup.php");
                    break;
                case "view_hairstyle":
                    include("viewers/hairstyle.php");
                    break;
                case "view_lips":
                    include("viewers/lips.php");
                    break;
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>