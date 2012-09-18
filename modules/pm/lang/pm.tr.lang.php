<?php
/**
 * Turkish Language File for the PM Module (pm.tr.lang.php)
 *
 * @package pm
 * @version 0.7.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */

$L['cfg_allownotifications'] = array('Tüm ÖM bildirimlerini eposta ile bildir', '');
$L['cfg_maxsize'] = array('Maks. mesaj uzunluğu', '');
$L['cfg_maxpmperpage'] = array('Sayfa başına maks. mesaj sayısı', ' ');
$L['info_desc'] = 'Site kullanıcıları arasında özel mesajlaşma';

/**
 * Other
 */

$L['adm_pm_totaldb'] = 'Veritabanındaki öm sayısı';
$L['adm_pm_totalsent'] = 'Şimdiye kadar gönderilen toplam öm sayısı';

/**
 * Main
 */

$L['pmsend_title'] = 'Yeni ÖM gönder';
$L['pmsend_subtitle'] = 'Yeni ÖM Gönderme Formu';

$L['pm_bodytoolong'] = 'Mesakınız çok uzun, en fazla '.$cfg['pm']['pm_maxsize'].' karakter yazabilirsiniz.';
$L['pm_bodytooshort'] = 'Mesajınızı boş bıraktınız ya da çok kısa';
$L['pm_inbox'] = 'Gelen Kutusu';
$L['pm_inboxsubtitle'] = 'Özel mesajlar, en yenileri her zaman üsttedir.';
$L['pm_norecipient'] = 'Herhangi bir alıcı belirtilmedi';
$L['pm_notifytitle'] = 'Yeni ÖM';
$Ls['Privatemessages'] = array('yeni özel mesaj','yeni özel mesaj');
$L['pm_replyto'] = 'Bu kullanıcıya cevap yaz';
$L['pm_sendnew'] = 'Yeni bir özel mesaj yaz';
$L['pm_sentbox'] = 'Giden Kutusu';
$L['pm_sentboxsubtitle'] = 'Gönderilmiş mesajlar';
$L['pm_titletooshort'] = 'Mesaj başlığını yazmadınız ya da çok kısa';
$L['pm_toomanyrecipients'] = 'En fazla %1$s kişiye gönderebilirsiniz';
$L['pm_wrongname'] = 'Kullanıcılardan herhangi biri yanlış olduğu için listeden kaldırıldı.';
$L['pm_messagehistory'] = 'Mesaj Geçmişi';
$L['pm_notmovetosentbox'] = 'Bu mesajı "Giden Kutusu" na taşıma.';

$L['pm_filter'] = 'Filtre';
$L['pm_all'] = 'Tümünü Görüntüle';
$L['pm_starred'] = 'Önemli';
$L['pm_unread'] = 'Okunmamış';
$L['pm_deletefromstarred'] = 'Önemi Kaldır';
$L['pm_putinstarred'] = 'Önemli mesajlara ekle';
$L['pm_read'] = 'Oku';
$L['pm_selected'] = 'Seçili';
	
/**
 * Private messages: notification
 */

$L['pm_notify'] = 'Merhaba %1$s,
%2$s Adlı kullanıcıdan yeni bir özel mesaj aldınız. Mesajı okumak için lütfen bağlatıyı kullanın: %3$s';

?>