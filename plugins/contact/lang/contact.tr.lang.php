<?php

/**
 * Contact Plugin for Cotonti CMF (Turkish Localization)
 * @version 2.00
 * @author Gökhan YILDIZ
 * @copyright (c) 2008-2012 Cotonti Team
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

/**
 * Plugin Config
 */

$L['cfg_email'] = array('Eposta', '(Yönetici eposta adresine gelmesini istiyorsanız boş bırakın.)');
$L['cfg_minchars'] = array('Min. mesaj karakteri');
$L['cfg_map'] = array('Harita');
$L['cfg_about'] = array('Hakkında');
$L['cfg_save'] = array('Kayıt Metodu');
$L['cfg_save_params'] = array('eposta', 'veritabanı', 'eposta + veritabanı');
$L['cfg_template'] = array('Eposta şablonu', 'Kullanılabilir Değişkenler: {$sitetitle}, {$siteurl}, {$author}, {$email}, {$subject}, {$text}, {$extra}, {$extraXXXX}, {$extraXXXX_title}');
$L['info_desc'] = 'Eposta veya veritabanı yoluyla kullanıcıların sizinle iletişim kurmasını sağlar.';

/**
 * Plugin Admin
 */

$L['contact_view'] = 'Mesajı Görüntüle';
$L['contact_markread'] = 'Okundu olarak işaretle';
$L['contact_read'] = 'Oku';
$L['contact_markunread'] = 'Okunmadı olarak işaretle';
$L['contact_unread'] = 'Okuma';
$L['contact_new'] = 'yeni mesaj';
$L['contact_shortnew'] = 'yeni';
$L['contact_sent'] = 'Son cevap';
$L['contact_nosubject'] = 'Konu yok';

/**
 * Plugin Title & Subtitle
 */

$L['contact_title'] = 'İletişim';
$L['contact_subtitle'] = 'İletişim Bilgileri';

/**
 * Plugin Body
 */

$L['contact_headercontact'] = 'İletişim';
$Ls['contact_headercontact'] = array('iletişim mesajı', 'iletişim mesajı');
$L['contact_entrytooshort'] = 'Mesaj yazmadınız ya da çok kısa';
$L['contact_noname'] = 'İsim kısmını doldurmadınız';
$L['contact_emailnotvalid'] = 'Geçersiz eposta adresi';
$L['contact_message_sent'] = 'Mesajı Gönder';

?>