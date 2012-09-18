<?php
/**
 * Turkish Language File for BBcode management
 *
 * @package bbcode
 * @version 0.7.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['adm_bbcode'] = 'BBKodu';
$L['adm_bbcodes'] = 'BBKodları';
$L['adm_bbcodes_added'] = 'Yeni bbkodu başarıyla eklendi.';
$L['adm_bbcodes_clearcache'] = 'HTML arabelleğini temizle';
$L['adm_bbcodes_clearcache_confirm'] = 'Tüm sayfa ve mesajlardaki arabelleği temizler, devam etmek istiyor musunuz?';
$L['adm_bbcodes_clearcache_done'] = 'HTML arabelleği temizlendi.';
$L['adm_bbcodes_confirm'] = 'BBkodunu silmek istediğinize eminmisiniz?';
$L['adm_bbcodes_container'] = 'Etiket';
$L['adm_bbcodes_convert_comments'] = 'Yorumları HTML\'e dönüştür.';
$L['adm_bbcodes_convert_complete'] = 'Dönüşümü Tamamla';
$L['adm_bbcodes_convert_confirm'] = 'Bu işlemi yapmak istediğine emin misiniz? Geri dönüşü olmayan bir yola giriyorsunuz! Veritabanı yedeği alman önerilir...';
$L['adm_bbcodes_convert_forums'] = 'Forumları HTML\'e dönüştür';
$L['adm_bbcodes_convert_page'] = 'Sayfaları HTML\'e dönüştür';
$L['adm_bbcodes_convert_pm'] = 'ÖM\'leri HTML\'e dönüştür';
$L['adm_bbcodes_convert_users'] = 'İmzaları HTML\'e dönüştür';
$L['adm_bbcodes_mode'] = 'Mod';
$L['adm_bbcodes_new'] = 'Yeni BBKodu';
$L['adm_bbcodes_other'] = 'Diğer Olaylar';
$L['adm_bbcodes_pattern'] = 'Model';
$L['adm_bbcodes_postrender'] = 'Ön Bellek';
$L['adm_bbcodes_priority'] = 'Öncelik';
$L['adm_bbcodes_removed'] = 'BBkodu başarıyla silindi.';
$L['adm_bbcodes_replacement'] = 'Değiştirme';
$L['adm_bbcodes_updated'] = 'BBkodu başarıyla güncellendi.';
$L['adm_help_bbcodes'] = <<<HTM
<ul>
<li><strong>İsim</strong> - BBkod Adı(sadece alfanumerik ve çizgi kullanın)</li>
<li><strong>Mod</strong> - Ayrıştırma için aşağıdakilerden birini seçin: 'str' (str_replace), 'ereg' (eregi_replace), 'pcre' (preg_replace) ve 'callback' (preg_replace_callback)</li>
<li><strong>Model</strong> - BBkod dizisi veya düzenli ifadeleri</li>
<li><strong>Değiştirme</strong> - Yedek dizi ya da düzenli dönüştürme</li>
<li><strong>Etiket</strong> - BBkodu etiket şekli (örneğin [bbkodu]içerik buraya[/bbkodu])</li>
<li><strong>Öncelik</strong> - 0 ile 255 karakter arasındaki bbkodlarına öncelik gösterilmez. Öncelik 128 karakterli olandır.</li>
<li><strong>Eklenti</strong> - Bu alan sadece eklentiler için olduğundan boş bırakın.</li>
<li><strong>Ön Bellek</strong> - Bu BBKodu içeriğini HTML olarak ön bellekte tutsun.</li>
</ul>
HTM;

$L['cfg_smilies'] = array('İfadeleri Etkinleştir', '');

$L['info_desc'] = 'BBKodları ve İfadeler için özel ayarlamalar';

?>
