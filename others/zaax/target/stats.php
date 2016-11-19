<?php
/*$url = 'https://target.my.com/api/v2/oauth2/token.json';
$params = array(
    'grant_type' => 'client_credentials',
    'client_id' => 'Vs07xM4jJiybVaDI',
    'client_secret' => 'P6Ue9CltnM8R49WDuGt3x8v8OJtjNf4SglZu91wNe7mRFECnrF13rW8f9Xx4cA2A3BVy4H56gjOo73qEp5HSGKyMslEsv0k9w1YUtNo4mH57JBVhlfAI0Z2cyWiqV2ZDpBaMh2mQoNxWea56p6gPmihEF6f77Pli9qf2tdNnKvO4x4YVaubzytsrZb9qpGeciII5hdm1CZRnPVefvgPp1aWUsMBOgwaIMeTcvNbdYJuCQh'
);
$result = file_get_contents($url, false, stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($params)
    )
)));

print $result;*/
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Статистика рекламных кампаний
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://www.google.com/jsapi"></script>
</head>
<body>

<!--<form id="ss" action="https://target.my.com/api/v2/oauth2/token.json" method="post" enctype="multipart/form-data">
    <input type="hidden" name="grant_type" value="client_credentials">
    <input type="hidden" name="client_id" value="Vs07xM4jJiybVaDI">
    <input type="hidden" name="client_secret" value="P6Ue9CltnM8R49WDuGt3x8v8OJtjNf4SglZu91wNe7mRFECnrF13rW8f9Xx4cA2A3BVy4H56gjOo73qEp5HSGKyMslEsv0k9w1YUtNo4mH57JBVhlfAI0Z2cyWiqV2ZDpBaMh2mQoNxWea56p6gPmihEF6f77Pli9qf2tdNnKvO4x4YVaubzytsrZb9qpGeciII5hdm1CZRnPVefvgPp1aWUsMBOgwaIMeTcvNbdYJuCQh">
</form>
<script>
    document.getElementById("ss").submit();
</script>-->

<table align="center" valign="middle" width="100%" cellpadding="20" cellspacing="20"
       style="background-color: #F1F1F1;">
    <tr>
        <td class="block" align="left">
            <table width="100%" valign="middle" align="center" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="72%">
                        <img src="images/logo_small.png">
                    </td>
                    <td width="18%">
                        <table align="center">
                            <tr>
                                <td align="center" class="top_stats">
                                    Уникальные показы
                                </td>
                                <td align="center" class="top_stats">
                                    <div data-hint="Количество уникальных пользователей, просмотревших вашу рекламу">
                                        <img src="images/hint.png"></div>
                                    <div id="hint"></div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="top_stats" colspan="2">
                                    7895
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="10%">
                        <table align="center">
                            <tr>
                                <td align="center" class="top_stats">
                                    <?php
                                    date_default_timezone_set('Europe/Moscow');
                                    print date("H:i", time());
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="top_stats">
                                    <?php print date("d.m.y"); ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table align="center" valign="middle" width="100%" cellpadding="20" cellspacing="20"
       style="background-color: #F1F1F1;">
    <tr>
        <td class="block" valign="top">
            <table align="center" valign="middle" width="100%" cellpadding="10" cellspacing="10" border="0">
                <tr>
                    <td align="center" class="stats">
                        Общая информация
                    </td>
                </tr>
            </table>

            <table width="100%" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="60%" align="left">
                        <div id="oil"></div>
                    </td>
                    <td width="40%" align="right">
                        <table align="center" valign="middle" width="100%" cellpadding="10" cellspacing="0" border="0"
                               style="border: 1px solid #349955; border-bottom: none;">
                            <tr>
                                <td width="33%" style="background-color: #349955; color:#FFFFFF;" align="center"
                                    class="stats">
                                    Показы по всем кампаниям
                                </td>
                                <td width="33%" style="background-color: #349955; color:#FFFFFF;" align="center"
                                    class="stats">
                                    Клики
                                </td>
                                <td width="33%" style="background-color: #349955; color:#FFFFFF;" align="center"
                                    class="stats">
                                    Списание
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="stats" style="border-bottom: 1px solid #349955;">
                                    123
                                </td>
                                <td align="center" class="stats" style="border-bottom: 1px solid #349955;">
                                    312
                                </td>
                                <td align="center" class="stats" style="border-bottom: 1px solid #349955;">
                                    312
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <script>
                google.load("visualization", "1", {packages:["corechart"]});
                google.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Число', 'Показы', 'Переходы'],
                        ['15.11', 2000, 200],
                        ['16.11', 4000, 400],
                        ['17.11', 8000, 800]
                    ]);
                    var options = {
                        title: 'CTR Visualization',
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById('oil'));
                    chart.draw(data, options);
                }
            </script>

            <table align="center" valign="middle" width="100%" cellpadding="10" cellspacing="10" border="0">
                <tr>
                    <td align="center" class="stats">
                        Активные объявления
                    </td>
                </tr>
            </table>

            <table align="center" valign="middle" width="100%" cellpadding="10" cellspacing="0" border="0"
                   style="border: 1px solid #336699; border-bottom: none;">
                <tr>
                    <td valign="top" width="8%" style="background-color: #336699; color:#FFFFFF;" align="center"
                        class="stats">
                        Имя РК
                        <div
                            data-hint="Название вашей рекламной компании. В ней может содержаться несколько объявлений">
                            <img src="images/hint_light.png"></div>
                        <div id="hint"></div>
                    </td>
                    <td valign="top" width="18%" style="background-color: #336699; color:#FFFFFF;" align="center"
                        class="stats">
                        Название объявления
                        <div data-hint="Название рекламного объявления">
                            <img src="images/hint_light.png"></div>
                        <div id="hint"></div>
                    </td>
                    <td valign="top" width="8%" style="background-color: #336699; color:#FFFFFF;" align="center"
                        class="stats">
                        Показы
                        <div data-hint="Количество показов рекламы потенциальной аудитории">
                            <img src="images/hint_light.png"></div>
                        <div id="hint"></div>
                    </td>
                    <td valign="top" width="8%" style="background-color: #336699; color:#FFFFFF;" align="center"
                        class="stats">
                        Клики
                        <div data-hint="Количество перешедших пользователей">
                            <img src="images/hint_light.png"></div>
                        <div id="hint"></div>
                    </td>
                    <td valign="top" width="8%" style="background-color: #336699; color:#FFFFFF;" align="center"
                        class="stats">
                        CTR
                        <div
                            data-hint="CTR - (Click-Through Rate) определяется как отношение числа кликов на баннер или рекламное объявление к числу показов, измеряется в процентах">
                            <img src="images/hint_light.png"></div>
                        <div id="hint"></div>
                    </td>
                    <td valign="top" width="18%" style="background-color: #336699; color:#FFFFFF;" align="center"
                        class="stats">
                        Стоимость перехода
                        <div data-hint="Стоимость одного перехода по объявлению">
                            <img src="images/hint_light.png"></div>
                        <div id="hint"></div>
                    </td>
                    <td valign="top" width="8%" style="background-color: #336699; color:#FFFFFF;" align="center"
                        class="stats">
                        Списание
                        <!--<div data-hint="Уточнить!">
                            <img src="images/hint_light.png"></div>
                        <div id="hint"></div>-->
                    </td>
                    <td valign="top" width="8%" style="background-color: #336699; color:#FFFFFF;" align="center"
                        class="stats">
                        Охват
                        <div data-hint="Количество человек, заинтересованных в предлагаемой услуге или товаре">
                            <img src="images/hint_light.png"></div>
                        <div id="hint"></div>
                    </td>
                    <td valign="top" width="16%" style="background-color: #336699; color:#FFFFFF;" align="center"
                        class="stats">
                        Емкость охвата
                        <!--<div data-hint="Уточнить!">
                            <img src="images/hint_light.png"></div>
                        <div id="hint"></div>-->
                    </td>
                </tr>
                <tr>
                    <td align="center" class="stats" style="border-bottom: 1px solid #336699;">
                        Алко
                    </td>
                    <td align="center" class="stats" style="border-bottom: 1px solid #336699;">
                        Пивко для души
                    </td>
                    <td align="center" class="stats" style="border-bottom: 1px solid #336699;">
                        132
                    </td>
                    <td align="center" class="stats" style="border-bottom: 1px solid #336699;">
                        12
                    </td>
                    <td align="center" class="stats" style="border-bottom: 1px solid #336699;">
                        123%
                    </td>
                    <td align="center" class="stats" style="border-bottom: 1px solid #336699;">
                        23.56p
                    </td>
                    <td align="center" class="stats" style="border-bottom: 1px solid #336699;">
                        21332
                    </td>
                    <td align="center" class="stats" style="border-bottom: 1px solid #336699;">
                        89000
                    </td>
                    <td align="center" class="stats" style="border-bottom: 1px solid #336699;">
                        67000
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<script>
    var hint = $('#hint');
    $('div[data-hint]').on({
        mouseenter: function () {
            hint.text($(this).data('hint')).show();
        },
        mouseleave: function () {
            hint.hide();
        },
        mousemove: function (e) {
            hint.css({top: e.pageY, left: e.pageX});
        }
    });
</script>

</body>
</html>