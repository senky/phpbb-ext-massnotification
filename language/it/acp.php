<?php
/**
 *
 * Mass Notification. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Jakub Senko
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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

	'COMPOSE'				=> 'Notifica di Mossa',
	'ALL_USERS'				=> 'A tutti gli Utenti',
	'SEND_TO_GROUP'			=> 'Invia a Gruppo',
	'SEND_TO_USERS'			=> 'Invia a Utente',
	'SEND_TO_USERS_EXPLAIN'	=> 'L\'immissione dei nomi sostituirà qualsiasi gruppo selezionato sopra. Inserisci un nome ogni riga per più utenti.',
	'TITLE'					=> 'Titolo Notifica',
	'MESSAGE_EXPLAIN'		=> 'Preferibilmente non più di 150 caratteri. Puoi usare l\'HTML.',
	'URL'					=> 'Redirect URL',
	'URL_EXPLAIN'			=> 'Inserisci l\'URL a cui verrà reindirizzato l\'utente dopo aver fatto clic sulla notifica.',
	'AUTHOR_EXPLAIN'		=> 'Inserisci l\'autore della notifica. Lascia vuoto per notifica generica senza autore.',
	'SEND_NOTIFICATION'		=> 'Invia Notifica',

	'NO_NOTIFICATION_TITLE'		=> 'Devi specificare il titolo della notifica.',
	'NO_NOTIFICATION_MESSAGE'	=> 'Devi specificare un messaggio.',
	'NO_NOTIFICATION_AUTHOR'	=> 'L\'autore non esiste.',

	'NOTIFICATION_SEND'			=> 'La notifica è stata inviata correttamente.',
	'SOME_USERNAMES_NOT_FOUND'	=> 'Some users were not found:<br>%s',
));
