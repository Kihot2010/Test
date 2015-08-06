<?php
session_start();
include 'connect.php';

$title = isset($_POST['title']) ? htmlspecialchars(trim($_POST['title'])) : "";
$full_ar = isset($_POST['full_ar']) ? htmlspecialchars(trim($_POST['full_ar'])) : "";
$full_ar = isset($_POST['tegs']) ? htmlspecialchars(trim($_POST['tegs'])) : 'статья';


$short = substr($full_ar, 0, 350) . "...";

/*
Добавить обработку тегов из строки в массив и добавление тегов в базу данных
*/

$result2 = mysql_query ("INSERT INTO articles (title_ar, short_ar, full_ar) VALUES ('$title', '$short', '$full_ar')")
    or die("(!) Ошибка в запросе: " . mysql_error());

echo 'OK. Article added.';