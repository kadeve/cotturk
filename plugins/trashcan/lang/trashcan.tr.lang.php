<?php
/**
 * Turkish Language File for Trashcan
 *
 * @package Trashcan
 * @version 0.9.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['Trash'] = 'Çöp';
$L['Trashcan'] = 'Çöp Kutusu';
$L['core_trash'] = &$L['Trashcan'];

/**
 * Config Section
 * Trash Subsection
 */

$L['cfg_trash_forum'] = array('Forumlar için çöp kutusu kullanılsın', '');
$L['cfg_trash_page'] = array('Sayfalar için çöp kutusu kullanılsın', '');
$L['cfg_trash_pm'] = array('ÖM\'ler için çöp kutusu kullanılsın', '');
$L['cfg_trash_prunedelay'] = array('Çöp kutusundaki öğeleri * gün sonra temizle (Her zaman saklamak için 0 kullanın)', '');
$L['cfg_trash_user'] = array('Kullanıcılar için çöp kutusu kullanılsın', '');
$L['cfg_trash_comment'] = array('Yorumlar için çöp kutusu kullanılsın', '');

$L['info_desc'] = 'Silinen öğeleri çöp kutusunda saklayarak geri dönüşümünü sağlayabilirsiniz';

/**
  * TrashCan Section
 */

$L['adm_help_trashcan'] = '';
$L['adm_trashcan_deleted'] = 'İçerik Silindi';
$L['adm_trashcan_prune'] = 'Çöp kutusu boşaltıldı';
$L['adm_trashcan_restored'] = 'İçerik geri dönüştürüldü';
?>
