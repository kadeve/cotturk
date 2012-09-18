<?php
/**
 * Turkish Language File for the PFS Module (pfs.tr.lang.php)
 *
 * @package pfs
 * @version 0.7.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */

$L['cfg_maxpfsperpage'] = array('Sayfa başına maks. element', ' ');
$L['cfg_pfsfilecheck'] = array('Dosya Kontrolü', 'Eğer '.$L['PFS'].' açıksa dosyaları kontrol eder ve geçersiz dosyaları engeller. Güvenlik sebebiyle \'evet\' önerilir.');
$L['cfg_pfsmaxuploads'] = array('Tek seferde yüklenebilecek dosya sayısı', '');
$L['cfg_pfsnomimepass'] = array('Dosya türü kontrolünü kapat', 'Hayır seçeneği tüm dosya türlerinin kontrolsüz bir şekilde sunucuya yüklenmesine sebep olur.');
$L['cfg_pfstimename'] = array('Zamana Göre Dosyalar Adları', 'Dosyaları sunucuya yüklerken zamana göre adlandırır.');
$L['cfg_pfsuserfolder'] = array('PFS kullanıcı dizini', 'Eğer bu seçeneği aktifleştirirseniz dosyalar /datas/users/UYENO/DIZINADI/. şeklinde bir dizinde saklanır.');
$L['cfg_flashupload'] = array('Flash Yükleyici Kullan', 'Aynı anda birçok dosya yüklemeye yarar'); // New in 1.0.0
$L['cfg_pfs_winclose'] = array('BBKodu eklendikten sonra popup pencereyi kapat');
$L['cfg_th_amode'] = array('Küçük resim oluşturucu', '');
$L['cfg_th_border'] = array('Küçük resim, çerçeve kalınlığı', 'Varsayılan: 4 piksel');
$L['cfg_th_colorbg'] = array('Küçük resim, çerçeve rengi', 'Varsayılan: 000000, hex kodu');
$L['cfg_th_colortext'] = array('Küçük resim, yazı rengi', 'Varsayılan: FFFFFF, hex kodu');
$L['cfg_th_dimpriority'] = array('Küçük resim, yeniden ölçeklendirme boyutu', '');
$L['cfg_th_jpeg_quality'] = array('Küçük resim, Jpeg kalitesi', 'Varsayılan: 85');
$L['cfg_th_keepratio'] = array('Küçük resim, oranı koru?', '');
$L['cfg_th_separator'] = 'Küçük resim seçenekleri';
$L['cfg_th_textsize'] = array('Küçük resim için yazı uzunluğu', '');
$L['cfg_th_x'] = array('Küçük resim genişliği', 'Varsayılan: 112 piksel');
$L['cfg_th_y'] = array('Küçük resim, yüksekliği', 'Varsayılan: 84 piksel, Tavsiye edilen: Genişlik x 0.75');

/**
 * Other
 */

$L['adm_gd'] = 'GD grafik kütüphanesi';
$L['adm_allpfs'] = 'Tüm '.$L['PFS'];
$L['adm_allfiles'] = 'Tüm Dosyalar';
$L['adm_thumbnails'] = 'Küçük Resimler';
$L['adm_orphandbentries'] = 'Sahipsiz VT Girişleri';
$L['adm_orphanfiles'] = 'Sahipsiz Dosyalar';
$L['adm_delallthumbs'] = 'Tüm küçük resimleri sil';
$L['adm_rebuildallthumbs']= 'Tüm küçük resimleri sil ve yeniden oluştur';
$L['adm_help_allpfs'] = 'Tüm kayıtlı kullanıcılar için '.$L['PFS'].' ';
$L['adm_nogd'] = 'Sunucunuz GD grafik kütüphanesini desteklemiyor, fakat küçük resim oluşturmak yinede mümkün. '.$L['Configuration'].' &gt; '.$L['PFS'].' bölümüne gidin ve &quot;Küçük resim oluşturma&quot; seçeneğini &quot;'.$L['Disabled'].'&quot; olarak işaretleyin.';
$L['adm_help_pfsfiles'] = 'Uygun değil';
$L['adm_help_pfsthumbs'] = 'Uygun değil';
$L['info_desc'] = 'Kişisel (PFS) ve ortak (SFS) dosya depolama birimi';

/**
 * Main
 */

$L['pfs_cancelall'] = 'Tümünü İptal Et';
$L['pfs_direxists'] = 'Bu isimde bir dizin zaten var.<br />Eski Dizin: %1$s<br />Yeni Dizin: %2$s';
$L['pfs_extallowed'] = 'Eklenti İzni';
$L['pfs_filecheckfail'] = 'Uyarı: Geçersiz dosya uzantısı: %1$s Dosya Adı - %2$s';
$L['pfs_filechecknomime'] = 'Uyarı: Geçerli dosya türü bulunamadı: %1$s Dosya Adı - %2$s';
$L['pfs_fileexists'] = 'Aynı isimle bir dosya bulunduğu için yükleme başarısız oldu?';
$L['pfs_filelistempty'] = 'Liste boş.';
$L['pfs_filemimemissing'] = 'Yükleme başarısız. %1$s için dosya türü bulunamadı.';
$L['pfs_filenotmoved'] = 'Yükleme başarısız! Dosya geçici olarak taşınamıyor.';
$L['pfs_filenotvalid'] = 'Bu geçerli bir %1$s değil.';
$L['pfs_filesintheroot'] = 'Anadizin Dosya(ları)';
$L['pfs_filesinthisfolder'] = 'Anadizin Klasör(leri)';
$L['pfs_filetoobigorext'] = 'Yükleme başarısız! Dosyanın boyutu çok büyük ya da geçersiz uzantıya sahip';
$L['pfs_folderistempty'] = 'Bu klasör boş.';
$L['pfs_foldertitlemissing'] = 'Klasör için bir başlık gerekli.';
$L['pfs_isgallery'] = 'Galeri?';
$L['pfs_ispublic'] = 'Genel?';
$L['pfs_maxsize'] = 'Maks. Dosya Boyutu';
$L['pfs_maxspace'] = 'Maks. dosya saklama alanı';
$L['pfs_newfile'] = 'Bir dosya yükleyin:';
$L['pfs_newfolder'] = 'Yeni klasör ekle:';
$L['pfs_onpage'] = 'Bu sayfada';
$L['pfs_parentfolder'] = 'Ana klasör';
$L['pfs_pastefile'] = 'Dosya linkini yapıştır';
$L['pfs_pasteimage'] = 'Resmi yapıştır';
$L['pfs_pastethumb'] = 'Paste as thumbnail';
$L['pfs_resizeimages'] = 'resmi boyutlandırılsın mı?';
$L['pfs_title'] = 'Kişisel Dosya Alanım';
$L['pfs_totalsize'] = 'Toplam boyut';
$L['pfs_uploadfiles'] = 'Dosya Yükle';

$L['pfs_insertasthumbnail'] = 'Küçük resim olarak ekle';
$L['pfs_insertasimage'] = 'Resmi orjinal boyutlarıyla yükle';
$L['pfs_insertaslink'] = 'Dosyayı link olarak ekle';
$L['pfs_dimensions'] = 'Boyutlar';

$L['pfs_confirm_delete_file'] = 'Bu dosyayı silmek istediğinizden emin misiniz?';
$L['pfs_confirm_delete_folder'] = 'bu klasörü ve içindeki verileri silmek istediğinizden emin misiniz?';

?>