<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/src/PHPTelebot.php';

$bot = new PHPTelebot('BOT:TOKEN', 'SaoGabrielEmFoco_bot');

require_once __DIR__.'/vote/lanches.php';
require_once __DIR__.'/vote/emagrecimentoebeleza.php';
require_once __DIR__.'/vote/locacoes_brinquedos.php';
require_once 'categorias.php';

// Simple answer
$bot->cmd('/start', function () {
    $text = "
Seja Bem Vindo(a) ao bot do grupo São Gabriel em Foco!\n
Aqui você encontrará listas dos diversos prestadores de serviços do bairro São Gabriel e Região.\n
Envie o comando /ajuda para verificar os comandos úteis!";
    return Bot::sendMessage($text);
});

$bot->on('new_chat_member', function($text) {
  $text = "
Seja Bem Vindo Ao Grupo São Gabriel Em Foco!\n
📌 REGRAS:

► Utilize bom senso para negociar seu produto.
► Tente ser o mais educado e maleável em cada negociação.
► Use o grupo com sabedoria e respeito e ele só trará beneficio para região.
► Mensagens desnecessárias serão removidas e o usuário advertido, em caso de reincidência, o mesmo será removido do grupo.
► É proibido postar Banner de festa sem autorização.
► É proibido pornografia.
► É proibido qualquer prática de SPAM(correntes, mensagens repetitivas, etc...)

Lembrando mais uma vez que não nos responsabilizamos por negociações não cumpridas e que não temos controle sobre a venda de nenhum produto.
A garantia (se oferecida) deve ser tratada direto com o vendedor de cada produto!

Obrigado por permanecer em nosso grupo e BONS NEGÓCIOS!
Contamos com um bot para ajudar na localização dos serviços, envie o comando /ajuda para verificar.
  ";
    
    return Bot::sendMessage($text);
});

$bot->cmd('/ajuda', function () {
    $text = "
Antes de enviar um comando, abra uma nova conversa com o robô oficial do São Gabriel Em Foco:\n
@SaoGabrielEmFoco_bot \n
Após iniciar a conversa, envie um dos comandos abaixo e tenha informações sobre os serviços:\n
/lanches
/locacao_brinquedos
/emagrecimento
/beleza

Para saber como adicionar seu serviço e/ou estabelecimento neste bot, envie o comando:\n
/solicitar_listagem
";
    return Bot::sendMessage($text);
});


$bot->cmd('/solicitar_listagem', function () {
    $text = "
Para adicionar o seu estabelecimento ou serviço preencha o formulário que está disponível no link abaixo!\n
https://forms.gle/5R5o33omdxVuY7yKA
";
    return Bot::sendMessage($text);
});
$bot->run();
