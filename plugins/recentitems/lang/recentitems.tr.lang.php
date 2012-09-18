<?php
/**
 * Turkish Language File for RecentItems Plugin
 *
 * @package recentitems
 * @version 0.7.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Info
 */

$L['info_desc'] = 'Anasayfada sitenin son içeriklerini (sayfa ve forum konusu) gösterir';

/**
 * Plugin Config
 */

$L['cfg_recentpages'] = array('Anasayfa son sayfalar');
$L['cfg_maxpages'] = array('Görünecek sayfa sayısı');
$L['cfg_recentforums'] = array('Anasayfada son konular');
$L['cfg_maxtopics'] = array('Görünecek konu sayısı');
$L['cfg_newpages'] = array('Son sayfalar bağımsız olsun');
$L['cfg_newforums'] = array('Son forum konuları bağımsız olsun');
$L['cfg_newadditional'] = array('Ek modüller bağımsız olsun');
$L['cfg_itemsperpage'] = array('Bağımsız modüllerdeki sayfa başına içerik sayısı');
$L['cfg_rightscan'] = array('Enable prescanning category rights');
$L['cfg_recentpagestitle'] = array('Son sayfalardaki başlık uzunluğu', 'Başlıkları belirli bir karaktere kadar kısaltabilirsiniz. Varsayılan değer için değişiklik yapmayın');
$L['cfg_recentpagestext'] = array('Son sayfalardaki yazı uzunluğu', 'Yazıları belirli bir karaktere kadar kısaltabilirsiniz. Varsayılan değer için değişiklik yapmayın');
$L['cfg_recentforumstitle'] = array('Son foum konularındaki başlık uzunluğu', 'Başlıkları belirli bir karaktere kadar kısaltabilirsiniz. Varsayılan değer için değişiklik yapmayın');
$L['cfg_newpagestext'] = array('Yeni sayfalardaki yazı uzunluğu', 'Yazıları belirli bir karaktere kadar kısaltabilirsiniz. Varsayılan değer için değişiklik yapmayın');
$L['cfg_whitelist'] = array('Beyaz liste', 'Son sayfalarda görünmesini istediğiniz kategorilerin kodlarını giriniz. Varsayılan değer için değişiklik yapmayınız.');
$L['cfg_blacklist'] = array('Kara liste', 'Bu alana eklediğiniz kategoriler son sayfalar alanında görünmeyecektir. Varsayılan değer için değişiklik yapmayınız.');
$L['cfg_cache_ttl'] = array('Başlık Arabelleği', '0 - arabellek kapalı');

/**
 * Plugin Body
 */

$L['recentitems_title'] = 'Son Eklenenler';
$L['recentitems_forums'] = 'Forumda Neler Yeni';
$L['recentitems_pages'] = 'Yeni Sayfalar';

$L['recentitems_nonewpages'] = 'Yeni sayfa yok';
$L['recentitems_nonewposts'] = 'Yeni mesaj yok';

$L['recentitems_shownew'] = 'Yeni içerikleri gör';
$L['recentitems_fromlastvisit'] = 'son ziyaretimden buyana';
$L['recentitems_1day'] = 'dünden beri';
$L['recentitems_2days'] = '2 günden beri';
$L['recentitems_3days'] = '3 günden beri';
$L['recentitems_1week'] = '1 haftadır';
$L['recentitems_2weeks'] = '2 haftadır';
$L['recentitems_1month'] = '1 aydır';

$L['recentitems_posts'] = 'Yeni mesaj yok';
$L['recentitems_posts_new'] = 'Yeni Mesaj';
$L['recentitems_posts_hot'] = 'Yeni mesaj yok (popüler)';
$L['recentitems_posts_new_hot'] = 'Yeni mesaj (popüler)';
$L['recentitems_posts_sticky'] = 'Sabit';
$L['recentitems_posts_new_sticky'] = 'Yeni Mesaj (sabit)';
$L['recentitems_posts_locked'] = 'Kilitli';
$L['recentitems_posts_new_locked'] = 'Yeni Mesaj (kilitli)';
$L['recentitems_posts_sticky_locked'] = 'Duyuru';
$L['recentitems_posts_new_sticky_locked'] = 'Yeni Duyuru';
$L['recentitems_posts_moved'] = 'Bu bölümden taşınmış';

?>