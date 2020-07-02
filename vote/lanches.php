<?php
/*
* ============
* BLACKFINE BURGUER
* ============
*/

$bot->cmd('/vote_blackfineburguer', function ($text) {
    $message = Bot::message();
    $name = $message['from']['first_name'];
    $userId = $message['from']['id'];

    if ($text == 'curtir'){
    $fp = fopen('./votos/like_blackfineburguer.txt', 'a');
    fwrite($fp, $userId."\n");
    fclose($fp);
    return Bot::sendMessage('👍 Você votou de forma positiva para este prestador de serviços.');
        }
    elseif($text == 'descurtir'){
    $fp = fopen('./votos/deslike_blackfineburguer.txt', 'a');
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
        return Bot::sendMessage("Envie \n <code>/vote_blackfineburguer curtir</code> para positivar(👍) \n ou \n <code>/vote_blackfineburguer descurtir</code> para negativar(👎) \n  este prestador de serviços.", $options);
    }
});
/*
* ============
* BLACKFINE BURGUER
* ============
*/

$bot->cmd('/vote_legarage', function ($text) {
    $message = Bot::message();
    $name = $message['from']['first_name'];
    $userId = $message['from']['id'];

    if ($text == 'curtir'){
    $fp = fopen('./votos/like_legarage.txt', 'a');
    fwrite($fp, $userId."\n");
    fclose($fp);
    return Bot::sendMessage('👍 Você votou de forma positiva para este prestador de serviços.');
        }
    elseif($text == 'descurtir'){
    $fp = fopen('./votos/deslike_legarage.txt', 'a');
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
        return Bot::sendMessage("Envie \n <code>/vote_legarage curtir</code> para positivar(👍) \n ou \n <code>/vote_legarage descurtir</code> para negativar(👎) \n  este prestador de serviços.", $options);
    }
});
?>