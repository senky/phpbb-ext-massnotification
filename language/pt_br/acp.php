<?php
/**
 *
 * Mass Notification. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Jakub Senko
 * @license GNU General Public License, version 2 (GPL-2.0)
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2019 [ver 1.0.0] (https://github.com/phpBBTraducoes)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'MASSNOTIFICATION_DESC'	=> 'Here you can send a board notification to either all of your users or specific users or groups.',

	'COMPOSE'				=> 'Compor notificação em massa',
	'ALL_USERS'				=> 'Todos os usuários',
	'SEND_TO_GROUP'			=> 'Enviar para grupo:',
	'SEND_TO_USERS'			=> 'Enviar para usuários:',
	'SEND_TO_USERS_EXPLAIN'	=> 'Inserir nomes aqui substituirá qualquer grupo selecionado acima. Digite cada nome de usuário em uma nova linha.',
	'TITLE'					=> 'Título da notificação',
	'MESSAGE_EXPLAIN'		=> 'Keep it short, preferably below 150 characters. Você pode usar HTML.',
	'URL'					=> 'URL de redirecionamento',
	'URL_EXPLAIN'			=> 'Insira o URL para o qual o usuário será redirecionado depois de clicar na notificação.',
	'SEND_NOTIFICATION'		=> 'Enviar notificação',

	'NO_NOTIFICATION_TITLE'		=> 'Você precisa especificar o título da notificação.',
	'NO_NOTIFICATION_MESSAGE'	=> 'Você precisa especificar uma mensagem de notificação.',

	'NOTIFICATION_SEND'	=> 'Sua notificação foi enviada.',
));
