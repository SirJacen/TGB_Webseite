<?php

/**
 * @author Jan-Ole Weiß
 * @date 21.04.2021
 */

include '../Script/functions.php';


function createEditor($filename){
    $text = file_get_contents($filename);
    if(isset($_POST['submit'])) {
        writeToFile($filename);
        echo "<h2 class='centered'>Changed Text successfully!</h2><br><br><div class='editorErgebnisfeld'>";
        addTextfeld();
        echo "<br></div><a class='btn btn-dark' href='./editor.php'> Return </a><br><br>";

    } else {
        echo "<div class='editor'><form method='post' action='editor.php'>
              <h2>Editor</h2>
              <textarea rows='20' placeholder='You found me :D' id='editor' name='editor' >$text</textarea> <br><br>
              <button type='submit' name='submit' value='submit' class='btn btn-success'>Submit</button>
              <button type='reset'  class='btn btn-danger'>Abbrechen</button><br><br>
              </form></div>";
    }

}

function writeToFile($file){
    $workingFile = fopen($file, "w") or die("Unable to open file!");
    fwrite($workingFile, $_POST['editor']);
    fclose($workingFile);
}

writeHeader();
addQuicklinks();
$file = "../Media/Introduction.txt";
createEditor($file);
closeBody();
?>