<?php

include './blocks/connect.php';
$id = $_GET['id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Просмотр новости</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
<div>
    <table style="width: 960px" cellspacing="0" cellpadding="0">
        <tr id="header" >
            <td colspan="2">
                <?php include './blocks/header.php' ?>
            </td>
        </tr>
        <tr>
            <td id="lf">
                <?php include './blocks/menu.php' ?>
            </td>
            <td id="content">
                <?php


                $res = mysql_query("SELECT * FROM articles WHERE id_article='$id '", $db);
                $myrow = mysql_fetch_array($res);

                printf("
                <table>
                    <td>
                        <tr style = 'background-color: bisque; font-size: 15px;'>
                            <br><h2>%s</h2><br>
                        </tr>

                        <tr>
                            <p>%s</p>
                        </tr>
                        <tr>
                            <br>
                            <form method='post' action='./blocks/delete.php'>
                                 <input name='DeleteArticle' type='submit' value='Удалить новость' />
                            </form>
                            <form method='post' action='./blocks/edit.php'>
                                <input name='EditArticle' type='submit' value='Редактировать новость' />
                            </form>
                        </tr>
                    </td>
                </table>",
                $myrow["title_ar"], $myrow["full_ar"]
                );
                ?>
            </td>
        </tr>
        <tr id="botter">
            <td colspan="2">
                <?php include './blocks/botter.php' ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>