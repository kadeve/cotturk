<?php
/**
 * Turkish Language File for Comments Plugin
 *
 * @package comments
 * @version 0.7.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */

$L['cfg_enable_comments'] = array('Yorumları Aktifleştir');
$L['cfg_mail'] = array('Yeni yorumları eposta ile bildir');
$L['cfg_markitup'] = array('İşaretleyici Kullanın');
$L['cfg_markup'] = array('İşaretleyiciyi Aktifleştir');
$L['cfg_minsize'] = array('Min. Yorum Uzunluğı');
$L['cfg_time'] = array('Kullanıcıların yorum düzenleme süresi', 'dakika');
$L['cfg_rss_commentmaxsymbols'] = array('Yorumlar. N taneden fazla sembol kullanılmasına izin ver', 'Devredışı varsayılandır');
$L['cfg_expand_comments'] = array('Genişletilmiş Yorum', 'Varsayılanı yorumların geniş olarak görülmesidir.');
$L['cfg_maxcommentsperpage'] = array('Sayfa başına yorum sayısı', ' ');
$L['cfg_commentsize'] = array('Maks. yorum boyutu', '0 değeri limiti kaldırır');
$L['cfg_countcomments'] = array('Yorumları Say', 'Yorum ikonunun üzerinde yorum sayısını gösterir');
$L['cfg_order'] = array('Sıralama Şekli', 'Yorumların sıralanma şekli');
$L['cfg_order_params'] = array('Tarihe Göre', 'Son');
$L['cfg_parsebbcodecom'] = array('Yorumlarda BBKodu kullanımı', '');
$L['cfg_parsesmiliescom'] = array('Yorumlarda ifade kullanımı', '');

$L['info_desc'] = 'Sayfa, liste, anket, RSS vediğer modüller için yorum eklentisi';

/**
 * Plugin Body
 */

$L['comments_comment'] = 'Yorum';
$L['comments_comments'] = 'Yorum';
$L['comments_confirm_delete'] = 'Bu yorumu silmek istediğinize eminmisiniz?';
$L['Newcomment'] = 'Yeni Yorum';

$L['comm_on_page'] = 'on page';

$L['com_closed'] = 'Bu içeriğe yorum yapılmasını engelleyin';
$L['com_commentadded'] = 'Yorumunuz eklendi';
$L['com_commenttoolong'] = 'Yorumunuz çok uzun';
$L['com_commenttooshort'] = 'Yorum yazmadınız ya da çok kısa';
$L['com_nocommentsyet'] = 'Henüz yorum yapılmamış';
$L['com_authortooshort'] = 'Gönderenin adı çok kısa';
$L['com_regonly'] = 'Sadece kayıtlı kullanıcılar yeni yorum yapabilir.';

$L['plu_comgup'] = ' sol';
$L['com_edithint'] = 'Yorumunuzu sadece {$time} içinde düzenleyebilirsiniz.';

$L['plu_comlive'] = 'Yeni yorum yapıldı';
$L['plu_comlive1'] = 'Bir yorum düzenlendi';
$L['plu_comlive2'] = 'yorum bırakan:';
$L['plu_comlive3'] = 'yorumu dğüzenleyen:';
$L['rss_comments'] = 'Yorum';
$L['rss_comment_of_user'] = 'Yorum';
$L['rss_comments_item_desc'] = 'sayfadaki son yorumlar';
$L['rss_original'] = 'Orjinal mesaj';

/**
 * Admin Section
 */

$L['home_newcomments'] = 'Yeni yorumlar';
$L['core_comments'] = &$L['Comments'];
$L['adm_comm_already_del'] = 'Yorum Silindi';

/**
 * cot_declension Arrays
 */

$Ls['Comments'] = array('yorum','yorum');

/**
 * Comedit
 */

$L['plu_title'] = 'Yorum Düzenleme';

?>