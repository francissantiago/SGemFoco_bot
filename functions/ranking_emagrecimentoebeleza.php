<?php
function likeProdutinhosdaquenia()
{
    $likes = fopen("./votos/like_produtinhosdaquenia.txt", "a+");
    $totalLink = 0;
    while (!feof($likes)) {
        $linha = fgets($likes);
        $totalLink ++;
    }
    return $totalLink - 1;
}

function deslikeProdutinhosdaquenia()
{
    $Deslikes = fopen("./votos/deslike_produtinhosdaquenia.txt", "a+");
    $totaldesLink = 0;
    while (!feof($Deslikes)) {
        $totaldesLink ++;
        $linha = fgets($Deslikes);
 
    }
    return $totaldesLink - 1;
}
?>