<?php
/**
 * Turkish Language File for the Page Module (page.tr.lang.php)
 *
 * @package page
 * @version 0.9.6
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */

$L['cfg_autovalidate'] = array('Otomatik Onay', 'Yönetici haklarına sahip kullanıcıların sayfaları otomatik onaylansın');
$L['cfg_count_admin'] = array('Count Administrators\' hits', '');
$L['cfg_maxlistsperpage'] = array('Listede maks. sayfa sayısı', ' ');
$L['cfg_order'] = array('Sıralama Sütunu');
$L['cfg_title_page'] = array('Sayfa başlık formatı', 'Seçenekler: {TITLE}, {CATEGORY}');
$L['cfg_way'] = array('Sıralama Yönü');
$L['cfg_truncatetext'] = array('Listede görünecek maks. karakter sayısı', 'Sıfır bu durumu geçersiz kılar');
$L['cfg_allowemptytext'] = array('Boş sayfalara izin ver');
$L['cfg_keywords'] = array('Anahtar Kelimeler');

$L['info_desc'] = 'Website içeriğini sayfa kategorilerinden sağlar';

/**
 * Structure Confing
 */

$L['cfg_order_params'] = array(); // Redefined in cot_page_config_order()
$L['cfg_way_params'] = array($L['Ascending'], $L['Descending']);

/**
 * Admin Page Section
 */

$L['adm_queue_deleted'] = 'Sayfa çöp kutusuna gönderildi';
$L['adm_valqueue'] = 'Onay bekliyor';
$L['adm_validated'] = 'Zaten Onaylanmış';
$L['adm_expired'] = 'Süresi Doldu';
$L['adm_structure'] = 'Sayfa Yapısı (kategoriler)';
$L['adm_sort'] = 'Sırala';
$L['adm_sortingorder'] = 'Kategoriler için varsayılan sıralama düzeni ayarlama';
$L['adm_showall'] = 'Tümünü Görüntüle';
$L['adm_help_page'] = 'The pages that belong to the category &quot;system&quot; are not displayed in the public listings, it\'s to make standalone pages.';
$L['adm_fileyesno'] = 'Dosya (evet/hayır)';
$L['adm_fileurl'] = 'Dosya URL';
$L['adm_filecount'] = 'İndirme sayısı';
$L['adm_filesize'] = 'Dosya Boyutu';

/**
 * Page add and edit
 */

$L['page_addtitle'] = 'Yeni Sayfa Ekle';
$L['page_addsubtitle'] = 'Gerekli tüm alanları doldurduktan sonra "Gönder" butonuna basınız';
$L['page_edittitle'] = 'Sayfa özellikleri';
$L['page_editsubtitle'] = 'Gerekli tüm alanları düzenledikten sonra "Gönder" butonuna basınız';

$L['page_aliascharacters'] = '\'+\', \'/\', \'?\', \'%\', \'#\', \'&\' karakterleri bu alanda desteklenmemektedir';
$L['page_catmissing'] = 'Kategori kodu eksik';
$L['page_confirm_delete'] = 'Sayfayı silmek istediğinize emin misiniz?';
$L['page_confirm_validate'] = 'Sayfayı onaylamak istediğinize eminmisiniz?';
$L['page_confirm_unvalidate'] = 'Bu sayfayı onay kuyruğuna geri göndermek istediğinize emin misiniz?';
$L['page_notavailable'] = 'Bu sayfanın yayınlanacağı bölüm ';
$L['page_textmissing'] = 'Metin alanı boş olmamalı';
$L['page_titletooshort'] = 'Sayfa başlığı girilmedi ya da çok kısa';
$L['page_validation'] = 'Onay Bekliyor';
$L['page_validation_desc'] = 'Yönetici henüz sayfanızı onaylamadı';

$L['page_file'] = 'Dosya indir';
$L['page_filehint'] = '(&quot;Evet&quot; seçeneğini seçerek sayfada indirme özelliğini aktif edebilirsiniz)';
$L['page_urlhint'] = '(Eğer dosya indirme aktifse)';
$L['page_filesize'] = 'Dosya Boyutu, kB';
$L['page_filesizehint'] = '(Eğer dosya indirme aktifse)';
$L['page_filehitcount'] = 'İndirme Sayısı';
$L['page_filehitcounthint'] = '(Eğer dosya indirme aktifse)';

$L['page_formhint'] = 'Tüm alanları tekrar kontrol ediniz. Sayfanız yönetici onayından geçtikten sonra tekrar yayınlanacaktır. Onaylanan sayfalarda yapılan değişiklikler sayfanın tekrar onay kuyruğuna gitmesine sebep olur.';

$L['page_pageid'] = 'Sayfa NO';
$L['page_deletepage'] = 'Bu sayfayı sil';

$L['page_savedasdraft'] = 'Sayfayı taslaklara kaydet.';

/**
 * Page statuses
 */

$L['page_status_draft'] = 'Taslan';
$L['page_status_pending'] = 'Askıda';
$L['page_status_approved'] = 'Onaylı';
$L['page_status_published'] = 'Yayınlanmış';
$L['page_status_expired'] = 'Süresi Dolan';

/**
 * Moved from theme.lang
 */

$L['page_linesperpage'] = 'Sayfa Sırası';
$L['page_linesinthissection'] = 'Bölüm Sırası';

$Ls['pages'] = array('sayfalar', 'sayfa');
$Ls['unvalidated_pages'] = array('onaylanmamış sayfalar', 'onaylanmamış sayfa');

?>