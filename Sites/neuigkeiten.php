<?php

/**
 * @author Jan-Ole Weiß
 * @date 21.04.2021
 */

include '../Script/functions.php';

function includeNews(){
    echo "<div class='includedNews'>";
    include '../Script/news.php';
    echo "<br><a class='btn btn-info' href='../Script/writer.php'>Neuen Artikel schreiben</a><br><br></div>";
}


writeHeader();
addQuicklinks();
includeNews();
closeBody();
?>
