<?php
/*
* ============
* PRODUTINHOS DA QUÊNIA
* ============
*/
$bot->cmd('/vote_produtinhosdaquenia', function ($text) {
    $message = Bot::message();
    $name = $message['from']['first_name'];
    $userId = $message['from']['id'];

    if ($text == 'curtir'){
    $fp = fopen('./votos/like_produtinhosdaquenia.txt', 'a');
    fwrite($fp, $userId."\n");
    fclose($fp);
    return Bot::sendMessage('👍 Você votou de forma positiva para este prestador de serviços.');
        }
    elseif($text == 'descurtir'){
    $fp = fopen('./votos/deslike_produtinhosdaquenia.txt', 'a');
    fwrite($fp, $userId."\n");
    fclose($fp);
    return Bot::sendMessage('👎 Você votou de forma negativa para este prestador de serviços.');
    }
    elseif($text == ''){
        $options = [
        'parse_mode' => 'html',
        'reply' => true,
        //'chat_id' => $userId,
        'cache_time' => 3600,
    ];
        return Bot::sendMessage("Envie \n <code>/vote_produtinhosdaquenia curtir</code> para positivar(👍) \n ou \n <code>/vote_produtinhosdaquenia descurtir</code> para negativar(👎) \n  este prestador de serviços.", $options);
    }
});

?>