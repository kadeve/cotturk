<?php
/**
 * Turkish Language File for News Plugin
 *
 * @package news
 * @version 0.7.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Info
 */

$L['info_desc'] = 'Belirledğiniz bir kategorideki yazıları anasayfanızda haber olarak gösterebilirsiniz.';

/**
 * Plugin Config
 */

$L['cfg_category'] = array('Haber Kategorileri', 'Kategorileri virgül ile ayırınız.<br />index.tpl dosyanıza {INDEX_NEWS} etiketini eklerseniz, Haber Kategorileri alanına girdiğiniz tüm kategorilerin içerikleri anasayfada görünür.<br />Belirli kategorileri göstermek için inde.tpl dosyanıza <strong>{INDEX_NEWS_KATEGORIKODU}</strong> şeklinde etiketinizi ekleyebilirsiniz.<br />Ayrıca<strong>news.kategorikodu.tpl</strong> şeklinde bir arayüz dosyası oluşturarak farklı tasarımlarda haber blokları yapabilirsiniz.');
$L['cfg_maxpages'] = array('Görünecek haber sayısı');
$L['cfg_syncpagination'] = array('Sayfalamayı Senkronize et');
$L['cfg_cache_ttl'] = array('Başlık Arabelleği', '0 - arabellek kapalı');

$L['Maincat']='Ana haber kategorisi';
$L['Addcat']='Ekstra haber kategorileri';
$L['NewsCount']='sayfa başına haber sayısı';
$L['Template']='Şablon';
$L['Template_help']='Ekstra haber kategori şablonlarınızı {TEMA_ADI}/plugins dizinine yüklemelisiiz.';
$L['Newscat_exists']='Bu kategori zate seçilmiş. Başka bir kategori seçin ya da bu kategoriyi silin.';
$L['Unsetadd']= 'Eğer ana kategori ise ekstra kategori olarak kullanmayın';
$L['Newsautocut']='İçerik uzunluğu';
$L['Newsautocutdesc']='Bu seçenek ile haberleriniz anasayfada paragraf dahil belirli bir karaktere kadar görünür. Devredışı varsayılan değerdir.';

$L['news_help'] = '';

?>