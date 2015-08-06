<?php

include 'connect.php';

$result = mysql_query("SELECT id_article,title_ar, short_ar, full_ar FROM articles", $db);
$myrow = mysql_fetch_array($result);



do {
//echo $myrow["id_article"];
printf ("
    <table>
    <td>
    <tr style = 'background-color: bisque; font-size: 15px;'>
    <h2><a href='../view_article.php?id=%s'>%s</a></h2>
    </tr>

    <tr>
    <p>%s</p>
    </tr>
    </td>
    </table>",

    $myrow["id_article"], $myrow["title_ar"], $myrow["short_ar"]);

}

while ($myrow = mysql_fetch_array($result));




?>