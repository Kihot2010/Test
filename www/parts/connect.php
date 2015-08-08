<?php
$db = mysql_connect('localhost', 'root'. '');

if (!$db) {
    die("Соединение не удалось!");
}

mysql_select_db('les2.1', $db);