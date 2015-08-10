<?php
    session_start();
    include('../parts/connect.php');

if (isset ($_POST['id'])) {
    $id = $_POST['id'];
} else {
    echo "Ошибка записи изменений!<br><a href='../index.php'>Вернуться на главную страницу сайта</a> или <a href='".$_SERVER["HTTP_REFERER"]."'>вернуться </a> в режим редактирования новости";
    die;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Новости</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body style="width: 960px;">
<div>
    <table style="width: 960px" cellspacing="0" cellpadding="0">
        <tr id="header" >
            <td colspan="2">
                <h1>Редактирование статьи</h1>
            </td>
        </tr>
        <tr>
            <td id="lf">
                <?php
                    include '../parts/menu.php';
                ?>
            </td>
            <td id="content">
                <br>
                <?php

                $title = $_POST['title'];
                $short_ar = substr($full_ar, 0, 500) . "...";
                $full_ar = $_POST['full_ar'];

                $res = mysql_query("UPDATE articles SET title_ar = '$title', full_ar = '$full_ar', short_ar = '$short_ar' WHERE id_article='$id '", $db);


                echo "Новость успешно отредактирована!<br>Вернуться&nbsp;<a href='../index.php'>на главную страницу</a>";

                ?>
            </td>
        </tr>
        <tr id="botter">
            <td colspan="2">
                <?php
                    include '../parts/botter.php';
                ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
