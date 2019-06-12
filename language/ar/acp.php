<?php
/**
 *
 * Mass Notification. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Jakub Senko
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Translated By : Bassel Taha Alhitary <http://alhitary.net>
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
	'MASSNOTIFICATION_DESC'	=> 'من هنا تستطيع إرسال إشعار بالمنتدى إلى جميع الأعضاء أو أعضاء محددين أو المجموعات.',

	'COMPOSE'				=> 'إنشاء الإشعار',
	'ALL_USERS'				=> 'جميع الأعضاء',
	'SEND_TO_GROUP'			=> 'الإرسال إلى المجموعة',
	'SEND_TO_USERS'			=> 'الإرسال إلى الأعضاء',
	'SEND_TO_USERS_EXPLAIN'	=> 'إدخال الأسماء هنا سيلغي أي مجموعة محددة أعلاه. أدخل كل اسم مستخدم في سطر جديد.',
	'TITLE'					=> 'العنوان',
	'MESSAGE_EXPLAIN'		=> 'اجعل العنوان قصيراً, يفضل أن يكون أقل من 150 حرف. تستطيع استخدام لغة HTML.',
	'URL'					=> 'رابط إعادة التوجيه',
	'URL_EXPLAIN'			=> 'عند النقر فوق الإشعار سيتم إعادة توجيه العضو إلى عنوان الرابط الذي تحدده هنا.',
	'AUTHOR_EXPLAIN'		=> 'أدخل إسم كاتب الإشعار. اتركه فارغاً لجعله إشعار عام بدون ذكر الإسم.',
	'SEND_NOTIFICATION'		=> 'إرسال الإشعار',

	'NO_NOTIFICATION_TITLE'		=> 'يجب عليك تحديد رسالة الإشعار.',
	'NO_NOTIFICATION_MESSAGE'	=> 'يجب عليك تحديد عنوان الإشعار.',
	'NO_NOTIFICATION_AUTHOR'	=> 'إسم الكاتب غير موجود.',

	'NOTIFICATION_SEND'			=> [
		1	=> 'Your notification has been sent to 1 user.',
		2	=> 'Your notification has been sent to %d users.',
	],
	'SOME_USERNAMES_NOT_FOUND'	=> ' Some users were not found:<br>%s',
));
