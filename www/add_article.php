<?php

session_start();

include('./parts/connect.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Добавить статью</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
<div>
    <table style="width: 100%" cellspacing="0" cellpadding="0">
        <tr id="header" >
            <td colspan="2">
                <h1>Добавить статью</h1>
            </td>
        </tr>
        <tr>
            <td id="lf">
                <?php include './parts/menu.php' ?>
            </td>
            <td id="content" style="text-align: center">

                <form method="post" action="parts/add.php">
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
