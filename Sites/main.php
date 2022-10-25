<?php

/**
 * @author Jan-Ole Weiß
 * @date 21.04.2021
 */

include '../Script/functions.php';

function addBanner() {
    echo "<div class='banner-container'>
			    <img class='banner' alt='Banner' src= '../Media/TheGamingBuddies_Banner.png'>
          </div>";

}


function addNews(){
    echo "<div class='sidebar'><div class='news'>";
    include '../Script/news.php';
    echo "</div>";
}

function addExternalLinks(){
    echo "<div class='externalLogos'>
          <a class='steam' href='' id='steam' target='_blank' >Steam</a>
          <br>
          <a class='discord' href='' id='discord' target='_blank' >Discord</a>
          <br>
          <a class='ts' href='' id='ts' target='_blank' >Teamspeak</a>
          <br>
          <a class='yt' href='' id='yt' target='_blank' >YouTube</a>
          <br>
          </div></div>";
}

writeHeader();
addBanner();
addQuicklinks();
echo "<div class='wrapper'>";
addTextfeld();
addNews();
addExternalLinks();
echo "</div>";
closeBody();
?>