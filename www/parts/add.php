<?php
session_start();
include 'connect.php';

var_dump($_POST);

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $title = trim($title);
    $title = htmlspecialchars($title);
    if (strlen($title) == 0) {
        unset ($title);
    }
}


$full_ar = isset($_POST['full_ar']) ? htmlspecialchars(trim($_POST['full_ar'])) : "";


if (isset($_POST['tegs'])) {
    $tegs = $_POST['tegs'];
    $tegs = trim($tegs);
    $tegs = htmlspecialchars($tegs);
    if (strlen($tegs) == 0) {
        $tegs = 'статья';
    }
}

$short = substr($full_ar, 0, 350) . "...";

/*
Добавить обработку тегов из строки в массив и добавление тегов в базу данных

 die;
*/
$result2 = @mysql_query ("INSERT INTO articles (title_ar, short_ar, full_ar) VALUES ('$title', '$short', '$full_ar')") or die("(!) Ошибка в запросе: " . mysql_error());
echo 'OK. Article added.';