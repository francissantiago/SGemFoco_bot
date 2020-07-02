<?php
function likeBlackfineburguer()
{
    $likes = fopen("./votos/like_blackfineburguer.txt", "a+");
    $totalLink = 0;
    while (!feof($likes)) {
        $linha = fgets($likes);
        $totalLink ++;
    }
    return $totalLink - 1;
}

function deslikeBlackfineburguer()
{
    $Deslikes = fopen("./votos/deslike_blackfineburguer.txt", "a+");
    $totaldesLink = 0;
    while (!feof($Deslikes)) {
        $totaldesLink ++;
        $linha = fgets($Deslikes);
 
    }
    return $totaldesLink - 1;
}

function likeLegarage()
{
    $likes = fopen("./votos/like_legarage.txt", "a+");
    $totalLink = 0;
    while (!feof($likes)) {
        $linha = fgets($likes);
        $totalLink ++;
    }
    return $totalLink - 1;
}

function deslikeLegarage()
{
    $Deslikes = fopen("./votos/deslike_legarage.txt", "a+");
    $totaldesLink = 0;
    while (!feof($Deslikes)) {
        $totaldesLink ++;
        $linha = fgets($Deslikes);
 
    }
    return $totaldesLink - 1;
}
?>