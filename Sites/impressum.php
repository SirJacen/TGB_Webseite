<?php

/**
 * @author Jan-Ole Weiß
 * @date 21.04.2021
 */

include '../Script/functions.php';

function writeWhoAreWe(){
    echo "<div class='impressumstyle'><br><h2>Über uns</h2><hr><br>
         Test<br>";
}

function writeContact(){
    echo "<br><h2>Kontakt</h2><hr><br>
          Name steht in den Sternen<br>
          So und so Straße<br>
          0123456789<br><br></div>";
}

writeHeader();
addQuicklinks();
writeWhoAreWe();
writeContact();
closeBody();
?>
