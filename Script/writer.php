<?php

/**
 * @author Jan-Ole Weiß
 * @date 21.04.2021
 */

include '../Script/functions.php';

$workdir = $_SERVER['DOCUMENT_ROOT'] . '/Artikel';
$tmp_dir = array_diff(scandir($workdir),array('..', '.'));
$size = sizeof($tmp_dir);
$nextArticleIndex = $size +1;

function createInputArea($nextArticleIndex){
    if(empty($_POST)) {
        echo "<div class='inputfield'><form method='post' action='writer.php'>
            <br><h2>Newsgenerator</h2><br>
            <input type='date' id='date' name='date' required>&nbsp&nbsp&nbsp&nbsp
            <input type='text' id='name' name='name' size='18' placeholder='&nbsp Autor' required><br>
            <br><input type='text' id='headline' name='headline' size='80' placeholder='&nbsp Überschrift' required><br><br>
            <textarea rows='20' placeholder='Hier den Artikel schreiben...' id='writer' name='writer' ></textarea><br>
            <button type='submit' name='submit' value='submit' class='btn btn-success'>Submit</button>
            <button type='reset'  class='btn btn-danger'>Abbrechen</button><br><br>
          </form></div>";
    }else{
        $headline = $_POST['headline'];
        $title = lcfirst(str_replace(" ", "_", "$headline"));
        $article = array(
            "date" => $_POST['date'],
            "author" => $_POST['name'],
            "headline" => $_POST['headline'],
            "content" => $_POST['writer'],
        );
        file_put_contents('../Artikel/'  . $nextArticleIndex . '_' . $title . '.txt', '<?php return ' . var_export($article, true) . ';');
        echo "Artikel erfolgreich erstellt!<br><br>
              <a class='btn btn-info' href='../Script/writer.php'>Zurück</a>";
    }
}

writeHeader();
addQuicklinks();
createInputArea($nextArticleIndex);
closeBody();
?>
