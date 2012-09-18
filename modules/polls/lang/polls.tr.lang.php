<?php
/**
 * Turkish Language File for the Polls Module (polls.tr.lang.php)
 *
 * @package polls
 * @version 0.7.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Admin
 */

$L['adm_help_polls'] = 'Tüm formu doldurduktan sonra &quot;Ekle&quot; butonuna basarak yeni anket oluşturabilirsiniz. Boş seçenekler göz ardı edilecektir. Sonradan eklenecek herhangi bir seçenek anketi olumsuz etkileyeceği için ilk başta dikkatli olmanız önerilir.';
$L['adm_polls_forumpolls'] = 'Forumdan Anketler (sonuncusu üstte):';
$L['adm_polls_indexpolls'] = 'Anasayfadan Anketler (sonuncusu üstte):';
$L['adm_polls_msg916_bump'] = 'Successfully bumped!';
$L['adm_polls_msg916_deleted'] = 'Başarıyla silindi!';
$L['adm_polls_msg916_reset'] = 'Başarıyla sıfırlandı!';
$L['adm_polls_polltopic'] = 'Anket Konusu';
$L['adm_polls_nopolls'] = 'Anket yok';
$L['adm_polls_bump'] = 'Bump';

$L['poll'] = 'Anket';
$L['polls_alreadyvoted'] = 'Zaten oy vermişsiniz.';
$L['polls_created'] = 'Anket başarıyla oluşturuldu';
$L['polls_error_count'] = 'Bir ankette en az 2 seçenek olmalıdır.';
$L['polls_error_title'] = 'Anket ismi boş ya da çok kısa';
$L['polls_locked'] = 'Anket Kilitlendi'; // New in 1.0.0
$L['polls_multiple'] = 'Çoklu oylama';
$L['polls_notyetvoted'] = 'Seçeneklerden birisini seçerek oy verebilirsiniz.';
$L['polls_registeredonly'] = 'Sadece kayıtlı kullanıcılar oy verebilir.';
$L['polls_since'] = 'den beri';
$L['polls_updated'] = 'Anket başarıyla güncellendi';
$L['polls_viewarchives'] = 'Tüm anketleri görüntüle';
$L['polls_viewresults'] = 'Sonuçları görüntüle';
$L['polls_Vote'] = 'Oyla';
$L['polls_votecasted'] = 'Oyunuz başarıyla kaydedildi.';
$L['polls_votes'] = 'oylar';

/**
 * Config
 */
$L['cfg_del_dup_options'] = array('Boş seçeneği kesinlikle kaldır', ' Bu daha sonradan mümkün olsa bile yinede kaldır.');
$L['cfg_ip_id_polls'] = array('Oy sayma yöntemi', '');
$L['cfg_max_options_polls'] = array('Maks. Anket Seçeneği', 'Anketlere verilebilecek en fazla seçenek sayısı');
$L['cfg_maxpolls'] = array('Anasayfada görünecek anket sayısı');
$L['cfg_mode'] = array('Anasayfada görünme şekli', '&quot;Son Anketler&quot; son anket(leri) gösterir<br />&quot;Rastgele Anket&quot; rastgele anket(leri) gösterir');
$L['cfg_mode_params'] = array('Son Anketler', 'Rastgele Anketler');

$L['info_desc'] = 'Sayfa ve forumlar için anket ayarları';

/**
 * Moved from theme.lang
 */

$L['polls_voterssince'] = 'voters since';
$L['polls_allpolls'] = 'Tüm anketler';

?>