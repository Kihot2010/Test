<?php
session_start();
include('../parts/connect.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Новости</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
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
                <?php include '../parts/menu.php' ?>
            </td>
            <td id="content">
                &nbsp;
            </td>
        </tr>
        <tr id="botter">
            <td colspan="2">
                <?php include '../parts/botter.php' ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>