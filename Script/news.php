<?php

/**
 * @author Jan-Ole Weiß
 * @date 21.04.2021
 */

$workdir = $_SERVER['DOCUMENT_ROOT'] . '/Artikel';
$tmp_dir = array_diff(scandir($workdir),array('..', '.'));
$all_dir = array_values($tmp_dir);

$news = array();

foreach(array_reverse($all_dir) as $index => $array) {
    $newIndex = substr($array, 0,-4 );
    $news[$newIndex] = include "$workdir/$array";
    unset($newIndex);
}

function writeNews($news)
{
    foreach ($news as $key => $array) {
        echo "<div class='newstxt'><hr><h3>" . $array['headline'] . "</h3><p>Von " .
            $array['author'] . " am " . $array['date'] . "</p><br>"
            . nl2br($array['content']) . "<br></div>";
    }
}


echo "<div class='newsheader'><h2>Neuigkeiten</h2></div>";
writeNews($news);

?>
