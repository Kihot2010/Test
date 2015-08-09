<?php

session_start();

include('./parts/connect.php');

/* 05/08/2015 - 02-50
 *  1. построить схему сайта - СДЕЛАНО
 *  2. добавить меню(СДЕЛАНО) и ссылки на:
 *  2.0. Главную (СДЕЛАНО)
 *  2.1. Добавить новость (СДЕЛАНО)
 *  2.2. Редактировать новость
 *  2.3. Удалить новость (СДЕЛАНО, добавить возврат на "главную" после удаления)
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Новости</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
<div>
    <table style="width: 960px" cellspacing="0" cellpadding="0">
        <tr id="header" >
            <td colspan="2">
                <h1>Список статей</h1>
            </td>
        </tr>
        <tr>
            <td id="lf" style="">
                <?php include 'parts/menu.php' ?>
            </td>
            <td id="content">
                <?php include 'parts/content.php' ?>
            </td>
        </tr>
        <tr id="botter">
            <td colspan="2">
                <?php include 'parts/botter.php' ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
