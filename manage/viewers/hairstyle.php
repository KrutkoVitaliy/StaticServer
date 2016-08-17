<table cellpadding="2" width="100%">
    <?php
    $connection = pg_connect("host=195.88.209.17 port=5432 dbname=makeup user=postgres password=12345_Vet");
    $limit = $_GET['page'] * 20;
    $offset = $_GET['page'] * 20 - 20;
    $flag = "f";
    $result = pg_query($connection, "SELECT * FROM hairstyle WHERE published LIKE '%$flag%' ORDER BY id LIMIT $limit OFFSET $offset");
    while ($row = pg_fetch_row($result)) {
        $sid = $row[1];
        $profile = pg_query($connection, "SELECT photo, first_name, last_name FROM profiles WHERE id='$sid'");
        $profileResult = pg_fetch_row($profile);
        $replaced = str_replace(",", "&nbsp;&nbsp;&nbsp;#", $row[2]);

        printf("
        <tr>
            <td align='center'>
                <img src='http://195.88.209.17/storage/images/%s' width='50' height='50' style='border-radius: 25px;'>
                <br><b style='font-family: Arial;'>%s %s</b>
                <p style='color: #336699; font-family: Arial;'>#%s</p>
            </td>
        </tr>
        <tr>
            <td align='center'>
                <table cellpadding='1' cellspacing='1'>
                    <tr>
                        <td>
                            <img src='http://195.88.209.17/storage/images/%s' height='488'>
                        </td>
                        <td>
                            <table cellpadding='0' cellspacing='0'>
                                <tr>
                                    <td>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                        <img src='http://195.88.209.17/storage/images/%s' height='160'>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align='center' style='border-bottom: 1px dotted #808080'>
                %s
                <br>
                <table>
                    <tr>
                        <td style='padding-right: 10px'>
                        <form action='http://195.88.209.17/manage/actions/accept.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' name='id' value='%s'>
                            <input type='hidden' name='type' value='hairstyle'>
                            <input type='submit' name='submit' value='   Accept   ' style='background-color: #43A047; color:#FFFFFF;'>
                        </form>
                        </td>
                        <td>
                        <form action='http://195.88.209.17/manage/actions/decline.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' name='id' value='%s'>
                            <input type='hidden' name='type' value='hairstyle'>
                            <input type='submit' name='submit' value='   Decline   ' style='background-color: #bb125b; color:#FFFFFF;'>
                        </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        ", $profileResult[0], $profileResult[1], $profileResult[2], $replaced,
            $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13], $row[4],
            $row[3], $row[0], $row[0]);
    }
    ?>
</table>