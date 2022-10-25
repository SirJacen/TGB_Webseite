<?php

/**
 * @author Jan-Ole Weiß
 * @date 21.04.2021
 */

function writeHeader(){
    echo '<!DOCTYPE html>
          <html lang="de">
            <head>
                <title>The Gaming Buddies</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <link rel="stylesheet" href="../Style/stylesheet.css">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta charset="UTF-8">
            </head>
            <body>';
}
function addLinks(){
    $main_dir = $_SERVER['DOCUMENT_ROOT'] . "/Sites";
    $tmp_dir = array_diff(scandir($main_dir),array('..', '.'));
    $all_dir = array_values($tmp_dir);
    for($i = 0; $i < sizeof($all_dir);$i++) {
        echo "<div class='link'><a class='btn btn-dark' href='../Sites/" . $all_dir[$i] . "'>" . ucfirst(preg_replace('/\\.[^.\\s]{3,4}$/', '', $all_dir[$i])) . "</a></div>";
    }
}

function addTextfeld(){
    $textfeld = file_get_contents('../Media/Introduction.txt');
    echo "<div class='textfeld'>" . nl2br($textfeld) . "</div>";
}

function addQuicklinks(){
    echo "<section class='quicklinks'>";
    addLinks();
    echo "</section><br>";
}

function closeBody() {
    echo "<div class='footer'><br><hr class='footerline'><br>
          <a class='impressum' href='../Sites/impressum.php'>Impressum</a> <br><br></div>
          </body>
          </html>";
}
?>
