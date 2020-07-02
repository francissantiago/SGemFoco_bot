<?php
$bot->cmd('/emagrecimento|/beleza', function () {
    require_once __DIR__.'/categorias/emagrecimentoebeleza.php';
    $message = Bot::message();
    $name = $message['from']['first_name'];
    $userId = $message['from']['id'];
    $options = [
        'parse_mode' => 'html',
        'reply' => true,
        //'chat_id' => $userId,
        'cache_time' => 3600,
    ];

    return Bot::sendMessage($emagrecimentoebeleza, $options);
});

$bot->cmd('/lanches', function () {
    require_once __DIR__.'/categorias/lanches.php';
    $message = Bot::message();
    $name = $message['from']['first_name'];
    $userId = $message['from']['id'];
    $options = [
        'parse_mode' => 'html',
        'reply' => true,
        //'chat_id' => $userId,
        'cache_time' => 3600,
    ];

    return Bot::sendMessage($lanchonetes, $options);
});

$bot->cmd('/locacao_brinquedos', function () {
    require_once __DIR__.'/categorias/locacao_brinquedos.php';
    $message = Bot::message();
    $name = $message['from']['first_name'];
    $userId = $message['from']['id'];
    $options = [
        'parse_mode' => 'html',
        'reply' => true,
        //'chat_id' => $userId,
        'cache_time' => 3600,
    ];

    return Bot::sendMessage($locacao_brinquedos, $options);
});