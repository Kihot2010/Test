<?php

session_start();

include('./parts/connect.php');

/* 05/08/2015 - 02-50
 *  1. построить схему сайта - СДЕЛАНО
 *  2. добавить меню(СДЕЛАНО) и ссылки на:
 *  2.0. Главную (СДЕЛАНО)
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
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
<div>
    <table style="width: 100%" cellspacing="0" cellpadding="0">
        <tr id="header" >
            <td colspan="2">
                Добавить статью
            </td>
        </tr>
        <tr>
            <td id="lf">
                <?php include './parts/menu.php' ?>
            </td>
            <td id="content" style="text-align: center">

                <form method="post" action="./parts/add.php">
                    <label></label>
                    Заголовок статьи:<br>
                    <input name="title" type="text" size="60" >
                    <br><br>
                    Содержание статьи:<br>
                    <textarea name="full_ar" cols="62" rows="10"></textarea>
                    <br><br>
                    Теги к статье:<br>
                    <textarea name="tegs" cols="62" rows="1"></textarea>
                    <br><br>
                    <input name="submit" type="submit" value="Отправить">
                </form>
                <?php /* include './parts/add.php' */ ?>
            </td>
        </tr>
        <tr id="botter">
            <td colspan="2">
                <?php include './parts/botter.php' ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
