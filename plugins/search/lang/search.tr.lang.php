<?php
/**
 * Turkish Language File for Search Plugin
 *
 * @package search
 * @version 0.7.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Title & Subtitle
 */

$L['plu_search'] = 'Arama Yap';

/**
 * Plugin Body
 */

// Common - title, info, query
$L['plu_search_req'] = 'Sorgu';
$L['plu_search_key'] = 'Bul';
$L['plu_search_forums'] = 'Forumlarda Ara';
$L['plu_search_pages'] = 'Sayfalarda Ara';

// Mode selectors and result titles
$L['plu_tabs_all'] = 'Tümü';
$L['plu_tabs_frm'] = 'Forumlar';
$L['plu_tabs_pag'] = 'Sayfalar';

// Parameters - common
$L['plu_ctrl_list'] = 'Birden fazla bölümü ctrl tuşuna basarak seçin';
$L['plu_allsections'] = 'Tüm bölümler';
$L['plu_allcategories'] = 'Tüm kategoriler';
$L['plu_res_sort'] = 'Sonuç sıralaması';
$L['plu_sort_desc'] = 'Azalan';
$L['plu_sort_asc'] = 'Artan';
$L['plu_other_opt'] = 'Ekstra ifadeler';
$L['plu_other_date'] = 'Tarihi Belirt';
$L['plu_other_userfilter'] = 'Kullanıcı Belirt';

// Parameters - dates
$L['plu_any_date'] = 'Herhangi Bir Zaman';
$L['plu_last_2_weeks'] = 'Son 2 Hafta';
$L['plu_last_1_month'] = 'Geçen Ay';
$L['plu_last_3_month'] = 'Son 3 Ay';
$L['plu_last_1_year'] = 'Geçen Yıl';
$L['plu_need_datas'] = 'Özel';

// Parameters - forums
$L['plu_frm_set_sec'] = 'Forum Bölümü Seçin';
$L['plu_frm_res_sort1'] = 'Konu Güncellemesi';
$L['plu_frm_res_sort2'] = 'Konu Başlangıcı';
$L['plu_frm_res_sort3'] = 'Konu Başlığı';
$L['plu_frm_res_sort4'] = 'Cevap Sayısı';
$L['plu_frm_res_sort5'] = 'Görünüleme Sayısı';
$L['plu_frm_res_sort6'] = 'Bölüm';
$L['plu_frm_search_names'] = 'Konu başlığına göre ara';
$L['plu_frm_search_post'] = 'Mesaja göre ara';
$L['plu_frm_search_answ'] = 'Sadece cevaplanmış konularda ara';
$L['plu_frm_set_subsec'] = 'Alt bölümleri dahil et';

// Parameters - pages
$L['plu_pag_set_sec'] = 'Sayfa Kategorisi Seçin';
$L['plu_pag_res_sort1'] = 'Yayınlama Tarihi';
$L['plu_pag_res_sort2'] = 'Başlık';
$L['plu_pag_res_sort3'] = 'Okunma Sayısı';
$L['plu_pag_res_sort3'] = 'Kategori';
$L['plu_pag_search_names'] = 'Sayfa başlığına göre ara';
$L['plu_pag_search_desc'] = 'Sayfa açıklamasına göre ara';
$L['plu_pag_search_text'] = 'Sayfa içeriğine göre ara';
$L['plu_pag_search_file'] = 'Sadece dosyalarda ra';
$L['plu_pag_set_subsec'] = 'Alt kategorileri dahil et';

// Error messages
$L['plu_querytooshort'] = 'Aranan kelime çok kısa';
$L['plu_toomanywords'] = 'Çok fazla kelime mevcut, lütfen azaltınız. En fazla';
$L['plu_noneresult'] = 'Aradığınız kriterlere uygun bir içerik bulunamadı.';
$L['plu_usernotexist'] = 'Böyle bir kullanıcı mevcut değil';

// Results
$L['plu_result'] = 'Arama Sonuçları';
$L['plu_found'] = 'Bulunan';
$L['plu_match'] = 'sonuçlar';
$L['plu_section'] = 'Bölüm';
$L['plu_last_date'] = 'Güncelleme Tarihi';

/**
 * Plugin Config
 */

$L['cfg_maxwords']= array('Arama için maks. kelime sayısı');
$L['cfg_maxsigns']= array('Maks. arama sayısı');
$L['cfg_maxitems']= array('Maks. arama sonucu içeriği');
$L['cfg_minsigns'] = array('Min. sorgu girişi');
$L['cfg_pagesearch'] = array('Sayfalarda Arama Yapılsın');
$L['cfg_forumsearch'] = array('Forumlarda Arama Yapılsın');
$L['cfg_searchurl'] = array('Forum Mesaj Bağlantıları', 'Kullanıcıların hızlı erişebilmesi için forum mesajlarını tek başına göster');
$L['cfg_addfields']= array('Eksta sayfa alanlarında arama yap. (Alanları virgülle ayırınız)', 'Örn. "page_resim,page_etiket,page_fiyat"');
$L['cfg_extrafilters']= array('Arama sayfasında ekstra filtreleri göster');

$L['info_desc'] = 'Forum ve diğer bölümlerde gelişmiş arama yapmanızı sağlar';

?>