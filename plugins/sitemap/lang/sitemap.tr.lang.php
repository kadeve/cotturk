<?php
/**
 * Turkish Language File for Sitemap plugin
 *
 * @package sitemap
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['info_desc'] = 'Sayfa içeriğinizi arama motorları için XML site haritasına dönüştürür.';

$sitemap_freqs = array(
	'default' => 'Varsayılan',
	'always'  => 'Her Zaman',
	'hourly'  => 'Saatlik',
	'daily'   => 'Günlük',
	'weekly'  => 'Haftalık',
	'monthly' => 'Aylık',
	'yearly'  => 'Yıllık',
	'never'   => 'Hiçbiri'
);

$L['cfg_cache_ttl']          = 'Arabellekte durma süresi';
$L['cfg_freq']               = 'Varsayılan güncelleme süresi';
$L['cfg_freq_params']        = $sitemap_freqs;
$L['cfg_prio']               = 'Varsayılan öncelik';
$L['cfg_perpage'] = array('Sayfa başına içerik sayısı', 'Daha fazla bağlantı içeriyorsa sayfalara bölünecektir. Örn. http://sizinsiteniz/index.php?r=sitemap&a=index');
$L['cfg_index_freq']         = 'Anasayfa güncelleme süresi';
$L['cfg_index_freq_params']  = $sitemap_freqs;
$L['cfg_index_prio']         = 'Anasayfa Önceliği';
$L['cfg_page']               = 'Sayfaları Etkinleştir';
$L['cfg_page_freq']          = 'Sayfa güncelleme süresi';
$L['cfg_page_freq_params']   = $sitemap_freqs;
$L['cfg_page_prio']          = 'Sayfa Önceliği';
$L['cfg_forums']             = 'Forumları Etkinleştir';
$L['cfg_forums_freq']        = 'Forum güncelleme süresi';
$L['cfg_forums_freq_params'] = $sitemap_freqs;
$L['cfg_forums_prio']        = 'Forum önceliği';
$L['cfg_users']              = 'Kullanıcıları Etkinleştir';
$L['cfg_users_freq']         = 'Kullanıcı güncelleme süresi';
$L['cfg_users_freq_params']  = $sitemap_freqs;
$L['cfg_users_prio']         = 'Kullanıcı önceliği';

?>