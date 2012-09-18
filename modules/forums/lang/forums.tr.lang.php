<?php
/**
 * Turkish Language File for the Forums Module (forums.tr.lang.php)
 *
 * @package forums
 * @version 0.9.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Forums Config
 */

$L['cfg_antibumpforums'] = array('Flood Koruması', 'Arka arkaya konu gönderilmesini engeller');
$L['cfg_hideprivateforums'] = array('Özel Forumları Gizle', '');
$L['cfg_hottopictrigger'] = array('Bir konuya cevap yazıldığında \'sıcak\' olarka işaretle', '');
$L['cfg_maxpostsperpage'] = array('Sayfa başına mesaj sayısı', ' ');
$L['cfg_maxtopicsperpage'] = array('Sayfa başına konu sayısı', '');
$L['cfg_mergeforumposts'] = array('Mesajları birleştir', 'Ard arda gönderilen mesajları birleştirir.');
$L['cfg_mergetimeout'] = array('Zaman aşımında mesajları birleştir', 'Zaman aşımına uğramış kullanıcılar ard arda mesaj gönderdiğinde yinede birleştir. (Mesajları Birleştir özelliği aktif olmamıştır)');
$L['cfg_minpostlength'] = array('Min. mesaj uzunluğu', ' ');
$L['cfg_mintitlelength'] = array('Min. konu başlığı uzunluğu', ' ');
$L['cfg_title_posts'] = array('Forum mesajı başlık formatı', 'Seçenekler: {FORUM}, {SECTION}, {TITLE}');
$L['cfg_title_topics'] = array('Forum konusu başlık formatı', 'Seçenekler: {FORUM}, {SECTION}');
$L['cfg_enablereplyform'] = array('Her sayfada cevap formunu göster', '');

$L['cfg_allowusertext'] = array('İmzaları Göster');
$L['cfg_allowbbcodes'] = array('BB Kodlarını Etkinleştir');
$L['cfg_allowsmilies'] = array('İfadeleri Etkinleştir');
$L['cfg_allowprvtopics'] = array('Özel konulara izin ver');
$L['cfg_allowviewers'] = array('Görüntüleyenleri Aktifleştir');
$L['cfg_allowpolls'] = array('Anketi Aktifleştir');
$L['cfg_countposts'] = array('Mesajlar Sayılsın');
$L['cfg_autoprune'] = array('Konuları * gün sonra buda');
$L['cfg_defstate'] = array('Standart Koşullar');
$L['cfg_defstate_params'] = array('Katlanmış', 'Katlanmamış');

$L['info_desc'] = 'Forumların tamamında standart ayarları kullan';

/**
 * Main
 */

$L['forums_post'] = 'Mesaj';
$L['forums_posts'] = 'Mesajlar';
$L['forums_topic'] = 'Konu';
$L['forums_topics'] = 'Konular';
 
$L['forums_antibump'] = 'Flood koruması aktif olduğu için peşpeşe cevap yazamazsınız.';
$L['forums_keepmovedlink'] = 'Taşınan konunun bağlantısı kalsın';
$L['forums_markallasread'] = 'Tüm mesajları okundu olarak işaretle';
$L['forums_mergetime'] = '%1$s dakika sonra eklendi:';
$L['forums_messagetooshort'] = 'Mesaj çok kısa';
$L['forums_newtopic'] = 'Yeni Konu';
$L['forums_newpoll'] = 'Yeni Anket';
$L['forums_titletooshort'] = 'Konu başlığı girilmedi ya da çok kısa';
$L['forums_topiclocked'] = 'Bu konu kilitlenmiş ve yeni mesaj kabul edilmiyor.';
$L['forums_topicoptions'] = 'Topic options';
$L['forums_updatedby'] = '<br /><em>Bu konu %1$s tarafından düzenlendi(%2$s, %3$s önce)</em>';
$L['forums_postedby'] = 'Gönderen';

$L['forums_privatetopic1'] = 'Bu konuyu özel olarak işaretle';
$L['forums_privatetopic2'] = 'sadece forum görevlileri ve konuyu başlatan (siz) cevap yazabileceksiniz';
$L['forums_privatetopic'] = 'Bu konuyu sadece forum görevlileri ve konuyu başlatan (siz) görebilir ve cevaplayabilirsiniz.';

$L['forums_searchinforums'] = 'Forumlarda ara';
$L['forums_markasread'] = 'Tüm konuları okundu say';
$L['forums_foldall'] = 'Tümünü Katla';
$L['forums_unfoldall'] = 'Tümünü Aç';
$L['forums_viewers'] = 'Görüntüleyenler';

$L['forums_nonewposts'] = 'Yen,mesaj yok';
$L['forums_newposts'] = 'Yeni Mesajlar';
$L['forums_nonewpostspopular'] = 'Yeni mesaj yok (popüler)';
$L['forums_newpostspopular'] = 'Yeni mesajlar (popüler)';
$L['forums_sticky'] = 'Sabit';
$L['forums_newpostssticky'] = 'Yeni mesajlar (sabit)';
$L['forums_locked'] = 'Kilitli';
$L['forums_newpostslocked'] = 'Yeni mesajlar (kilitli)';
$L['forums_announcment'] = 'Duyuru';
$L['forums_newannouncment'] = 'Yeni Duyuru';
$L['forums_movedoutofthissection'] = 'Başka bölüme taşı';

$L['forums_announcement'] = 'Duyuru';
$L['forums_bump'] = 'Vurgula';
$L['forums_makesticky'] = 'Sabit';
$L['forums_private'] = 'Özel';

$L['forums_explainbump'] = 'Konu listesinde ilk sırada görünsün (başka konu güncellenene kadar)';
$L['forums_explainlock'] = 'Kilitle (Cevap yazılamaz)';
$L['forums_explainsticky'] = 'Konu listesinde ilk sırada tut (başlık varsayılan durumda kalana kadar)';
$L['forums_explainannounce'] = 'Konuyu duyuru olarak işaretle';
$L['forums_explainprivate'] = 'Konuyu özel olarak işaretle (sadece siz ve görevliler konuyu görebilir)';
$L['forums_explaindefault'] = 'Konuyu standart ayarlara döndür';
$L['forums_explaindelete'] = 'Konuyu sil';

$L['forums_confirm_delete_topic'] = 'Konuyu silmek istediğinize emin misiniz?';
$L['forums_confirm_delete_post'] = 'Mesajı silmek istediğinize emin misiniz?';

/**
 * Unused?
 */

$L['forums_polltooshort'] = 'Anket seçeneği en az 2 adet olmalıdır';
$L['for_onlinestatus0'] = 'kullanıcı çevrimdışı';
$L['for_onlinestatus1'] = 'kullanıcı çevrimiçi';

?>