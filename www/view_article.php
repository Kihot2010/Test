<?php

include './parts/connect.php';
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
                <?php include './parts/header.php' ?>
            </td>
        </tr>
        <tr>
            <td id="lf">
                <?php include './parts/menu.php' ?>
            </td>
            <td id="content">
                <?php
                $res = mysql_query("SELECT * FROM articles WHERE id_article='$id '", $db);
                $myrow = mysql_fetch_array($res);

                $l_del =  "./parts/delete.php?id=".$id;
                $l_edt =  "./parts/edit.php?id=".$id;

                printf("
                <table>
                    <td>
                        <tr style = 'background-color: bisque; font-size: 15px;'>
                            <br><h2>%s</h2><br>
                        </tr>

                        <tr>
                            <p style='padding-right: 10px; padding-left: 10px;'>
                            %s
                            </p>
                        </tr>
                        <tr>
                            &nbsp;
                        </tr>
                    </td>
                </table>",
                $myrow["title_ar"], $myrow["full_ar"]
                );

printf(
    "<a href=./parts/edit.php?id=%s>Редактировать новость</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href=./parts/delete.php?id=%s>Удалить новость</a><br>",
    $id, $id
);


                echo "<br><br>";
                ?>
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