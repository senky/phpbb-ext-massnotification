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
	'MASSNOTIFICATION_DESC'	=> 'Hier kann eine Board-Benachrichtigung an alle Benutzer, bestimmte Benutzer oder Gruppen gesendet werden.',

	'COMPOSE'				=> 'Massenbenachrichtigung verfassen',
	'ALL_USERS'				=> 'Alle Benutzer',
	'SEND_TO_GROUP'			=> 'An Gruppe senden',
	'SEND_TO_USERS'			=> 'An Benutzer senden',
	'SEND_TO_USERS_EXPLAIN'	=> 'Werden hier Namen eingeben, werden alle oben ausgewählten Gruppen überschrieben. Jeden Benutzernamen in einer neuer Zeile eingeben.',
	'TITLE'					=> 'Benachrichtigungstitel',
	'MESSAGE_EXPLAIN'		=> 'Benachrichtigung kurz halten, vorzugsweise unter 150 Zeichen. HTML kann verwendet werden.',
	'URL'					=> 'URL umleiten',
	'URL_EXPLAIN'			=> 'URL eingeben zu der der Benutzer nach dem Klicken auf die Benachrichtigung weitergeleitet wird.',
	'AUTHOR_EXPLAIN'		=> 'Autor der Benachrichtigung eingeben. Leer lassen für allgemeine Benachrichtigung ohne Autor.',
	'SEND_NOTIFICATION'		=> 'Benachrichtigung senden',

	'NO_NOTIFICATION_TITLE'		=> 'Benachrichtigungstitel muss angegeben werden.',
	'NO_NOTIFICATION_MESSAGE'	=> 'Eine Benachrichtigung muss eingegeben werden.',
	'NO_NOTIFICATION_AUTHOR'	=> 'Autor existiert nicht.',

	'NOTIFICATION_SEND'			=> [
		1	=> 'Your notification has been sent to 1 user.',
		2	=> 'Your notification has been sent to %d users.',
	],
	'SOME_USERNAMES_NOT_FOUND'	=> ' Some users were not found:<br>%s',
));
