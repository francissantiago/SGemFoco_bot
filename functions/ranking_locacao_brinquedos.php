<?php
function likeLolobrinquedoteca()
{
    $likes = fopen("./votos/like_lolobrinquedoteca.txt", "a+");
    $totalLink = 0;
    while (!feof($likes)) {
        $linha = fgets($likes);
        $totalLink ++;
    }
    return $totalLink - 1;
}

function deslikeLolobrinquedoteca()
{
    $Deslikes = fopen("./votos/deslike_lolobrinquedoteca.txt", "a+");
    $totaldesLink = 0;
    while (!feof($Deslikes)) {
        $totaldesLink ++;
        $linha = fgets($Deslikes);
 
    }
    return $totaldesLink - 1;
}
?>