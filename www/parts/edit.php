<?php
session_start();

include('../parts/connect.php');

if (!isset ($_GET['id'])) {
    echo "Ошибка редактирования! <a href='".$_SERVER["HTTP_REFERER"]."'>Вернуться</a>&nbspв режим просмотра новости";
    die;
} else {
    $id = $_GET['id'];
}

$result = mysql_query("SELECT * FROM articles WHERE id_article=$id", $db);
$myrow = mysql_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Редактирование статьи:</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body>
<div>
    <table style="width: 960px" cellspacing="0" cellpadding="0">
        <tr id="header" >
            <td colspan="2">
                <h2><?php echo "Редактировать новость: ". $myrow['titel_ar']; ?></h2>
            </td>
        </tr>
        <tr>
            <td id="lf">
                <?php include '../parts/menu.php' ?>
            </td>
            <td id="content" style="text-align: center">

                <form method="post" action="../parts/update.php">
                    <?php echo "<input value='". $id . "' name='id' type='hidden'>";?>
                    <br>
                    Заголовок статьи:<br>
                    <?php echo "<input value='" . $myrow['title_ar'] . "' name='title' type='text' size='62'>";?>
                    <br><br>
                    <label>Содержание статьи:<br>
                    <?php  echo "<textarea name='full_ar' cols='62' rows='15'>".$myrow['full_ar']."</textarea></label>";?>
                    <br><br>
                    <label>Теги к статье:<br>
                    <textarea name="tegs" cols="62" rows="1" ></textarea></label>
                    <br><br>
                    <input name="submit" type="submit" value="Отредактировать новость">
                </form>

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