<?php

session_start();

include ('connect.php');

/* 05/08/2015 - 02-50
 *  1. построить таблицу отображения сайта
 *  2. добавить ссылки на:
 *  2.1. Добавить новость
 *  2.2. Редактировать новость
 *  2.3. Удалить новость
 *  3. Добавить отображение тегов к статье, с возможностью выборки статей по тегам
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Без названия 1</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
<div style="margin: 0;">
    <table style="width: 100%" cellspacing="0" cellpadding="0">
        <tr id="header" >
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr id="content">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr id="botter">
            <td colspan="2">&nbsp;</td>
        </tr>
    </table>
</div>
</body>
</html>
