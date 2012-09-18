<?php

/**
 * Turkish Language File for the Admin Module (admin.en.lang.php)
 *
 * @package Cotonti
 * @version 0.9.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Common words
 */

$L['Extension'] = 'Eklenti';
$L['Extensions'] = 'Eklentiler';
$L['Structure'] = 'Yapı';

/**
 * Home Section
 */

$L['home_installable_error'] = 'Lütfen güvenliğiniz için install.php dosyasını silin ve config.php dosyasını yazılamaz duruma getirin.';

$L['home_newusers'] = 'Yeni kullanıcılar';
$L['home_newpages'] = 'Yeni sayfalar';
$L['home_newtopics'] = 'Yeni konular';
$L['home_newposts'] = 'Yeni mesajlar';
$L['home_newpms'] = 'Yeni özel mesajlar';

$L['home_db_rows'] = 'SQL veritabanı satır sayısı';
$L['home_db_indexsize'] = 'SQL veritabanı, indeks boyutu (KB)';
$L['home_db_datassize'] = 'SQL veritabanı, veri boyutu (KB)';
$L['home_db_totalsize'] = 'SQL veritabanı, toplam boyut (KB)';

$L['home_ql_b1_title'] = 'Site özellikleri';
$L['home_ql_b1_1'] = 'Temel Ayarlar';
$L['home_ql_b1_2'] = 'Başlıklar';
$L['home_ql_b1_3'] = 'Arayüz ve karakter seti';
$L['home_ql_b1_4'] = 'Menü alanları ve tpl dosyaları';
$L['home_ql_b1_5'] = 'Dil';
$L['home_ql_b1_6'] = 'Tarih ve Zaman';

$L['home_ql_b2_1'] = 'Sayfa yapısı (kategoriler)';
$L['home_ql_b2_2'] = 'Sayfalar için ekstra alan';
$L['home_ql_b2_3'] = 'Kategoriler için ekstra alan';
$L['home_ql_b2_4'] = 'Ayrıştırıcı ayarları';

$L['home_ql_b3_1'] = 'Temel Ayarlar';
$L['home_ql_b3_2'] = 'Üyeler için esktra alan';
$L['home_ql_b3_4'] = 'Kullanıcı Hakları';

$L['home_update_notice'] = 'Güncelleme Mevcut';
$L['home_update_revision'] = 'Şuanki Sürüm: <span style="color:#C00;font-weight:bold;">%1$s</span><br />Yeni Sürüm: <span style="color:#4E9A06;font-weight:bold;">%2$s</span>'; // %1/%2 Current version/revision %3/%4 Updated version/revision

/**
 * Config Section
 */

$L['core_forums'] = &$L['Forums'];
$L['core_locale'] = &$L['Locale'];
$L['core_main'] = 'Ana Ayarlar';
$L['core_menus'] = &$L['Menus'];
$L['core_page'] = &$L['Pages'];
$L['core_parser'] = &$L['Parser'];
$L['core_performance'] = 'Performans';
$L['core_pfs'] = &$L['PFS'];
$L['core_plug'] = &$L['Plugins'];
$L['core_pm'] = &$L['Private_Messages'];
$L['core_polls'] = &$L['Polls'];
$L['core_rss'] = &$L['RSS_Feeds'];
$L['core_security'] = &$L['Security'];
$L['core_structure'] = &$L['Categories'];
$L['core_theme'] = &$L['Themes'];
$L['core_time'] = 'Tarih ve Zaman';
$L['core_title'] = 'Başlıklar ve Metalar';
$L['core_users'] = &$L['Users'];

$L['cfg_struct_defaults'] = 'Varsayılan Yapı';

/**
 * Shortcuts
 */
$L['short_admin'] = 'Yönetici';
$L['short_config'] = 'Ayar';
$L['short_delete'] = 'Sil';
$L['short_open'] = 'Aç';
$L['short_options'] = 'Seçenekler';
$L['short_rights'] = 'Haklar';
$L['short_struct'] = 'Yapı';

/**
 * Config Section
 * Locale Subsection
 */

$L['cfg_forcedefaultlang'] = array('Tüm kullanıcılar varsayılan dili kullansın', '');
$L['cfg_defaulttimezone'] = array('Varsayılan zaman dilimi', 'Ziyaretçiler ve yeni üyeler için -12 den +12');

/**
 * Config Section
 * Main Subsection
 */

$L['cfg_adminemail'] = array('Yönetici eposta', 'Gerekli');
$L['cfg_clustermode'] = array('Çoklu sunucu', 'Eğer evet olarak işaretlerseniz birden fazla sunucuya dengeli olarak kurulacaktır.');
$L['cfg_confirmlinks'] = array('Tehlike arz eden işlemleri onayla');
$L['cfg_devmode'] = array('Hata modu', 'Aktif sitelerde bu özelliği kullanmayınız');
$L['cfg_easypagenav'] = array('Kullanıcı dostu sayfalama', 'Sayfalarda sayfano yerine vt çıktısı kullanılır');
$L['cfg_hostip'] = array('Sunucu IP', 'Sunucunuzun IP\'sini giriniz, Opsiyoneldir.');
$L['cfg_jquery'] = array('jQuery\'i aktifleştir.', '');
$L['cfg_maintenance'] = array('Bakım modu', 'Sadece yetkili kişiler siteye giriş yapabilir');
$L['cfg_maintenancereason'] = array('Bakım sebebi', 'Opsiyoneldir, mümkün olduğunca kısa tutun.');
$L['cfg_maxrowsperpage'] = array('Sayfa başına içeirk sayısı', 'Sayfa başına varsayılan içerik sayısı');
$L['cfg_parser'] = array('Biçim ayrıştırıcı', 'Varsayılan: düz metin');
$L['cfg_redirbkonlogin'] = array('Giriş sonrası yönlendirme', 'Kullanıcı giriş yaptıktan sonra bulunduğu sayfaya geri döner');
$L['cfg_redirbkonlogout'] = array('Çıkış sonrası yönlendirme', 'Kullanıcı çıkış yaptıktan sonra bulunduğu sayfaya geri döner');
$L['cfg_turnajax'] = array('Ajax\'ı etkinleştir', 'Eğer jQuery etkinse çalıştırın');

/**
 * Config Section
 * Menus Subsection
 */

$L['cfg_banner'] = array('Banner<br />{HEADER_BANNER}  header.tpl\'de', '');
$L['cfg_bottomline'] = array('Alt Satır<br />{FOOTER_BOTTOMLINE} footer.tpl\'de', '');
$L['cfg_topline'] = array('Üst Satır<br />{HEADER_TOPLINE} header.tpl\'de', '');

$L['cfg_freetext1'] = array('Boş Yazı Alanı #1<br />{PHP.cfg.freetext1} tüm tpl dosyalarında', '');
$L['cfg_freetext2'] = array('Boş Yazı Alanı #2<br />{PHP.cfg.freetext2} tüm tpl dosyalarında', '');
$L['cfg_freetext3'] = array('Boş Yazı Alanı #3<br />{PHP.cfg.freetext3} tüm tpl dosyalarında', '');
$L['cfg_freetext4'] = array('Boş Yazı Alanı #4<br />{PHP.cfg.freetext4} tüm tpl dosyalarında', '');
$L['cfg_freetext5'] = array('Boş Yazı Alanı #5<br />{PHP.cfg.freetext5} tüm tpl dosyalarında', '');
$L['cfg_freetext6'] = array('Boş Yazı Alanı #6<br />{PHP.cfg.freetext6} tüm tpl dosyalarında', '');
$L['cfg_freetext7'] = array('Boş Yazı Alanı #7<br />{PHP.cfg.freetext7} tüm tpl dosyalarında', '');
$L['cfg_freetext8'] = array('Boş Yazı Alanı #8<br />{PHP.cfg.freetext8} tüm tpl dosyalarında', '');
$L['cfg_freetext9'] = array('Boş Yazı Alanı #9<br />{PHP.cfg.freetext9} tüm tpl dosyalarında', '');

$L['cfg_menu1'] = array('Menü Alanı #1<br />{PHP.cfg.menu1} tüm tpl dosyalarında', '');
$L['cfg_menu2'] = array('Menü Alanı #2<br />{PHP.cfg.menu2} tüm tpl dosyalarında', '');
$L['cfg_menu3'] = array('Menü Alanı #3<br />{PHP.cfg.menu3} tüm tpl dosyalarında', '');
$L['cfg_menu4'] = array('Menü Alanı #4<br />{PHP.cfg.menu4} tüm tpl dosyalarında', '');
$L['cfg_menu5'] = array('Menü Alanı #5<br />{PHP.cfg.menu5} tüm tpl dosyalarında', '');
$L['cfg_menu6'] = array('Menü Alanı #6<br />{PHP.cfg.menu6} tüm tpl dosyalarında', '');
$L['cfg_menu7'] = array('Menü Alanı #7<br />{PHP.cfg.menu7} tüm tpl dosyalarında', '');
$L['cfg_menu8'] = array('Menü Alanı #8<br />{PHP.cfg.menu8} tüm tpl dosyalarında', '');
$L['cfg_menu9'] = array('Menü Alanı #9<br />{PHP.cfg.menu9} tüm tpl dosyalarında', '');

/**
 * Config Section
 * Performance Subsection
 */

$L['cfg_gzip'] = array('Gzip', 'HTML çıktılarınızı sıkıştırmaya yarar. Eğer sunucunuz desteklemiyorsa lütfen aktifleştirmeyin. Bu aracı <a href="http://www.whatsmyip.org/http-compression-test/">HTTP sıkıştırma testi</a> sayfasından deneyebilirsiniz');
$L['cfg_headrc_consolidate'] = array('Header ve footer kaynaklarını birleştir (JS/CSS)');
$L['cfg_headrc_minify'] = array('Dayanıklılığı düşür JS/CSS');
$L['cfg_jquery_cdn'] = array('CDN Bağlantılarına jQuery uygula', 'Örnek: https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js');

/**
 * Config Section
 * Security Subsection
 */

$L['cfg_captchamain'] = array('Ana captcha');
$L['cfg_captcharandom'] = array('Rastgele captcha');
$L['cfg_cookiedomain'] = array('Çerezler için alanadı', 'Varsayılan: boş');
$L['cfg_cookielifetime'] = array('Maksimum çerez süresi', 'Saniye');
$L['cfg_cookiepath'] = array('Çerez dizini', 'Varsayılan: boş');
$L['cfg_hashfunc'] = array('Varsayılan karıştırma fonksiyonu', 'Kullanıcıları karışık şifre kullanmaya zorla');
$L['cfg_referercheck'] = array('Formlarda referansları kontrol et', 'Prevents from cross-domain posting');
$L['cfg_shieldenabled'] = array('Korumayı Etkinleştir', 'Spam ve flood koruması');
$L['cfg_shieldtadjust'] = array('Koruma süresi (in %)', 'The higher, the harder to spam');
$L['cfg_shieldzhammer'] = array('Korumayı süresi * flood sonrası', 'İdeal olanı 3 dk yasaklanmadır');

/**
 * Config Section
 * Themes Subsection
 */

$L['cfg_charset'] = array('HTML charset', '');
$L['cfg_disablesysinfos'] = array('Sayfa oluşturma süresini kaldır', '(footer.tpl doyasında)');
$L['cfg_doctypeid'] = array('Document Type', '&lt;!DOCTYPE&gt; of the HTML layout');
$L['cfg_forcedefaulttheme'] = array('Kullanıcılar varsayılan arayüzü kullansın', '');
$L['cfg_homebreadcrumb'] = array('Alt menüde anasayfa', 'Sayfa içlerindeki konum menülerinde anasayfa linki görünsün');
$L['cfg_keepcrbottom'] = array('Copyright yazılarınız görünsün {FOOTER_BOTTOMLINE}', '(footer.tpl dosyasında)');
$L['cfg_metakeywords'] = array('HTML Anahtar Kelimeler', '(virgülle ayırınız)');
$L['cfg_msg_separate'] = array('Her kaynak kodunda farklı mesaj göster', '');
$L['cfg_separator'] = array('Genel ayırıcı', '(kısayol menüsü vb kullanımı için)');
$L['cfg_showsqlstats'] = array('SQL sorgu istatistiklerini göster', '(footer.tpl dosyasında)');

/**
 * Config Section
 * Title Subsection
 */

$L['cfg_maintitle'] = array('Site Başlığı', 'Genel site başlığı, zorunlu');
$L['cfg_subtitle'] = array('Açıklama', 'Opsiyonel, sitenizi tanımlayan kısa bir açıklama giriniz');
$L['cfg_title_header'] = array('Header başlığı', 'Seçenekler: {MAINTITLE}, {DESCRIPTION}, {SUBTITLE}');
$L['cfg_title_header_index'] = array('Header Anasayfa başlığı', 'Seçenekler: {MAINTITLE}, {DESCRIPTION}, {SUBTITLE}');
$L['cfg_title_users_details'] = array('Kullanıcı Detayı başlığı', 'Seçenekler: {USER}, {NAME}');
$L['cfg_subject_mail'] = array('Eposta konusu', 'Seçenekler: {SITE_TITLE}, {SITE_DESCRIPTION}, {MAIL_SUBJECT}');
$L['cfg_body_mail'] = array('Email başlığı', 'Seçenekler: {SITE_TITLE}, {SITE_DESCRIPTION}, {SITE_URL}, {ADMIN_EMAIL}, {MAIL_BODY}, {MAIL_SUBJECT}');

/**
 * Config Section
 * Users Subsection
 */

$L['cfg_forcerememberme'] = array('&quot;beni hatırla&quot;\'yı zorunlu kıl', 'çoklu domainlerde kullanıcıların aktif kalması için');
$L['cfg_timedout'] = array('Idle delay, in seconds', 'After this delay, user is away');
$L['cfg_usertextimg'] = array('Kullanıcılar imzalarında resim ve HTML kullanabilsin', '\'Hayır\' seçeneği güvenlik sebebiyle önerilmektedir.');

/**
 * Config Section
 * Common strings
 */
$L['cfg_css'] = array('Modül/Eklenti için CSS Aktifleştir');
$L['cfg_editor'] = array('Gelişmiş metin editörü', '');
$L['cfg_markup'] = array('Biçimlendiriciyi Etkinleştir', 'HTML/BBKodu seçeneklerinden birine göre içerik girilmesini sağlar');

/**
 * Extension management
 */

$L['ext_already_installed'] = 'Bu eklenti zaten kurulmuş: {$name}';
$L['ext_auth_installed'] = 'Varsayılan yetkiler kuruldu';
$L['ext_auth_locks_updated'] = 'Kilitlenen yetkilendirme güncellemeleri';
$L['ext_auth_uninstalled'] = 'Kaldırılan yetkilendirme seçenekleri';
$L['ext_bindings_installed'] = 'Yüklenmiş {$cnt} hook bağları';
$L['ext_bindings_uninstalled'] = 'Silinmiş {$cnt} hook bağları';
$L['ext_config_error'] = 'Ayarlamalar başarısız';
$L['ext_config_installed'] = 'Ayarlamalar tamamlandı';
$L['ext_config_uninstalled'] = 'Ayarlar kaldırıldı';
$L['ext_config_updated'] = 'Seçenekler güncellendi';
$L['ext_config_struct_error'] = 'Yapılandırma ayarları kurulumu başarısız';
$L['ext_config_struct_installed'] = 'Yapılandırma ayarları kuruldu';
$L['ext_config_struct_updated'] = 'Yapılandırma seçenekleri güncellendi';
$L['ext_dependency_error'] = '{$dep_type} için &quot;{$dep_name}&quot; kurulası gerekir. {$type}, &quot;{$name}&quot; olmadan kurulması mümkün değildir.';
$L['ext_dependency_uninstall_error'] = '{$type} tip işlemde önce &quot;{$name}&quot; eklentisinin kaldırılması gerekir';
$L['ext_executed_php'] = 'Çalıştıralacak PHP bölümü: {$ret}';
$L['ext_executed_sql'] = 'Çalıştırılacak SQL bölümü: {$ret}';
$L['ext_installing'] = '{$type} &quot;{$name}&quot; Kuruluyor';
$L['ext_invalid_format'] = 'Bu eklenti Cotonti >= 0.9 versiyonunu desteklememektedir. Lütfen geliştirici ile iletişim kurunuz';
$L['ext_old_format'] = 'Bu eski Genoa/Seditio eklentisi. Verimli olmasada çalıştırılabilir.';
$L['ext_patch_applied'] = 'Uygulanan yama {$f}: {$msg}';
$L['ext_patch_error'] = 'Hatalı uygulanan yama {$f}: {$msg}';
$L['ext_requires_modules'] = 'Modül gereksinimleri';
$L['ext_requires_plugins'] = 'Eklenti gereksinimleri';
$L['ext_recommends_modules'] = 'Tavsiye modüller';
$L['ext_recommends_plugins'] = 'Tavsiye eklentiler';
$L['ext_setup_not_found'] = 'Kurulum dosyası bulunamadı: {$path}';
$L['ext_uninstall_confirm'] = 'Bu eklentiyi kaldırmak istediğinize eminmisiniz. Bu işleme başlı olarak veri kaybı yaşayabilirsiniz.<br/><a href="{$url}">Evet, eklentiyi ve verileri kaldır.</a>';
$L['ext_uninstalling'] = '{$type} &quot;{$name}&quot; Kaldırılıyor';
$L['ext_up2date'] = '{$type} &quot;{$name}&quot; bugüne kadar';
$L['ext_update_error'] = '{$type} &quot;{$name}&quot; güncellemesi başarısız';
$L['ext_updated'] = '{$type} &quot;{$name}&quot;, {$ver} versiyonuna güncellendi';
$L['ext_updating'] = '{$type} &quot;{$name}&quot; güncellendi';

/**
 * Extension categories
 */
$L['ext_cat']['administration-management'] = 'Yönetim &amp; İdare';
$L['ext_cat']['commerce'] = 'Alışveriş &amp; Ticaret';
$L['ext_cat']['community-social'] = 'Topluluk &amp; Sosyal';
$L['ext_cat']['customization-i18n'] = 'Kişiselleştirme &amp; I18n';
$L['ext_cat']['data-apis'] = 'Veri Kaynakları &amp; API\'ler';
$L['ext_cat']['development-maintenance'] = 'Geliştirme &amp; Bakım';
$L['ext_cat']['editor-parser'] = 'Editörler &amp; İşaretçiler';
$L['ext_cat']['files-media'] = 'Dosyalar &amp; Medya';
$L['ext_cat']['forms-feedback'] = 'Formlar &amp; Geri Bildirimler';
$L['ext_cat']['gaming-clans'] = 'Oyun &amp; Klanlar';
$L['ext_cat']['intranet-groupware'] = 'Intranet &amp; Groupware';
$L['ext_cat']['misc-ext'] = 'Çeşitli';
$L['ext_cat']['mobile-geolocation'] = 'Mobil &amp; Coğrafi Konum';
$L['ext_cat']['navigation-structure'] = 'Navigasyon &amp; Yapı';
$L['ext_cat']['performance-seo'] = 'Performans &amp; SEO';
$L['ext_cat']['publications-events'] = 'Yayınlar &amp; Etkinlikler';
$L['ext_cat']['security-authentication'] = 'Güvenlik &amp; Yetkilendirme';
$L['ext_cat']['utilities-tools'] = 'Araçlar &amp; Hizmetler';
$L['ext_cat']['post-install'] = 'Post-install Scripts';

/**
  * Structure Section
 */

$L['adm_structure_code_reserved'] = "Yapı kodlarının 'tümü' ayırıldı.";
$L['adm_structure_code_required'] = 'Gerekli bir alan eksik: Kod';
$L['adm_structure_path_required'] = 'Gerekli bir alan eksik: Dizin';
$L['adm_structure_title_required'] = 'Gerekli bir alan eksik: Başlık';
$L['adm_cat_exists'] = 'Bu kod bir kategoride zaten tanımlı';
$L['adm_tpl_mode'] = 'Şablon modu';
$L['adm_tpl_empty'] = 'Varsayılan';
$L['adm_tpl_forced'] = 'Aynısı';
$L['adm_tpl_parent'] = 'Üst Kategorinin Aynısı';
$L['adm_tpl_quickcat'] = 'Özel Kategori Kodu';
$L['adm_tpl_resyncalltitle'] = 'Sayfaları yeniden senkronize et';
$L['adm_tpl_resynctitle'] = 'Kategori sayfalarını yeniden senkronize et';
$L['adm_help_structure'] = 'The pages that belong to the category &quot;system&quot; are not displayed in the public listings, it\'s to make standalone pages.';

/**
 * Structure Section
 * Extrafields Subsection
 */

$L['adm_extrafields_desc'] = 'Ektra alan Ekle/Düzenle';
$L['adm_extrafields_all'] = 'Tüm VT tablolarını görüntüle';
$L['adm_extrafields_table'] = 'Tablo';
$L['adm_extrafields_help_notused'] = 'Kullanılmıyor';
$L['adm_extrafields_help_variants'] = '{variant1},{variant2},{variant3},...';
$L['adm_extrafields_help_range'] = '{min_value},{max_value}';
$L['adm_extrafields_help_data'] = '{min_year},{max_year},{date_format}. If empty {date_format}, kullanıldı';
$L['adm_extrafields_help_regex'] = 'Kayıtlı eklentileri kontrol et';
$L['adm_extrafields_help_file'] = 'Yükleme Dizini';
$L['adm_extrafields_help_separator'] = 'Değer Ayırıcı';
$L['adm_help_info'] = '<b>Temel HTML</b> boş bırakırsanız otomatik olarak tanımlanır';
$L['adm_help_newtags'] = '<br /><br /><b>Tpl dosyaları için yeni etiketler:</b>';

/**
 * Users Section
 */

$L['adm_rightspergroup'] = 'Grup Yetkileri';
$L['adm_maxsizesingle'] = 'Maks. 1 dosya boyutu '.$L['PFS'].' (KB)';
$L['adm_maxsizeallpfs'] = 'Maks. tüm dosyaların boyutu '.$L['PFS'].' (KB)';
$L['adm_copyrightsfrom'] = 'Diğer gruplarla aynı haklara sahip olsunlar';
$L['adm_rights_maintenance'] = 'Bakım modunda giriş yapabilsinler';
$L['adm_skiprights'] = 'Bu grubu ihmal et';

/**
 * Plug Section
 */

$L['adm_defauth_guests'] = 'Misafirler için varsayılan haklar';
$L['adm_deflock_guests'] = 'Misfirler için kamuflaj kilidi';
$L['adm_defauth_members'] = 'Kullanıcılarla aynı haklara sahip olsunlar';
$L['adm_deflock_members'] = 'Kullanıcılar için kamuflaj kilidi';

$L['adm_present'] = 'Mevcut';
$L['adm_missing'] = 'Kayıp';
$L['adm_paused'] = 'Pasif';
$L['adm_running'] = 'Aktif';
$L['adm_partrunning'] = 'Kısmen çalışan';
$L['adm_partstopped'] = 'Kısmen durdurulmuş';
$L['adm_installed'] = 'Kurulmuş';
$L['adm_notinstalled'] = 'Kurulmamış';

$L['adm_plugsetup'] = 'Eklenti Kurulumu';
$L['adm_override_guests'] = 'Ziyaretçiler ve aktif olmayan kullanıcılar erişemesin.';
$L['adm_override_banned'] = 'Yaskalı kullanıcılar erişemesin.';
$L['adm_override_admins'] = 'Yöneticiler erişemesin.';

$L['adm_opt_install'] = 'Kur';
$L['adm_opt_install_explain'] = 'Bu eklenti için yeni bir kurulum yapılacak';
$L['adm_opt_pause'] = 'Duraklat';
$L['adm_opt_pauseall'] = 'Tümünü Duraklat';
$L['adm_opt_pauseall_explain'] = 'Tüm eklentiler devre dışı.';
$L['adm_opt_update'] = 'Güncelle';
$L['adm_opt_update_explain'] = 'Eğer eklenti dosyaları sunucuda hazırsa, ayarların verilerin güncellemesini başlatabilirsiniz.';
$L['adm_opt_uninstall'] = 'Kaldır';
$L['adm_opt_uninstall_explain'] = 'Bu eklentinin kaldırılmasıyla birlikte tüm ayarlar ve verilerin silinecek fakat dosyaların sunucuda kalacaktır.';
$L['adm_opt_unpause'] = 'Çalıştır';
$L['adm_opt_unpauseall'] = 'Tümünü Çalıştır';
$L['adm_opt_unpauseall_explain'] = 'Bu eklentiyi tekrar çalıştırmaktasınız.';

$L['adm_opt_setup_missing'] = 'Hata: kurulum dosyası kayıp!';

$L['adm_sort_alphabet'] = 'Alfabetik';
$L['adm_sort_category'] = 'Kategori Görünümü';

$L['adm_only_installed'] = 'Yüklendi';

/**
 * Tools Section
 */

$L['adm_listisempty'] = 'Liste boş';

/**
 * Other Section
 * Cache Subsection
 */

$L['adm_delcacheitem'] = 'İçerik arabellekten silinir';
$L['adm_internalcache'] = 'Dahili arabellek';
$L['adm_purgeall_done'] = 'Ara bellek tamamiyle temizlenir';
$L['adm_diskcache'] = 'Disk Arabelleği';
$L['adm_cache_showall'] = 'Tümünü Görüntüle';

/**
 * Other Section
 * Log Subsection
 */

$L['adm_log'] = 'Sistem Kayıtları';
$L['adm_infos'] = 'Bilgilendirme';
$L['adm_versiondclocks'] = 'Sürümler ve Saatler';
$L['adm_checkcorethemes'] = 'Çekirdek dosyaları ve temaları kontrol edin';
$L['adm_checkcorenow'] = 'Şimdi çekirdek dosyaları kontrol et!';
$L['adm_checkingcore'] = 'Çekirden dosyalar kontrol ediliyor...';
$L['adm_checkthemes'] = 'Eksik arayüz dosyalarını kontrol et';
$L['adm_checktheme'] = 'Arayüz için TPL dosyalarını kontrol edin';
$L['adm_checkingtheme'] = 'TPL dosyaları kontrol ediliyor...';
$L['adm_check_ok'] = 'Tamam';
$L['adm_check_missing'] = 'Kayıp';

/**
 * Other Section
 * Infos Subsection
 */

$L['adm_phpver'] = 'PHP Sürümü';
$L['adm_zendver'] = 'Zend Sürümü';
$L['adm_interface'] = 'PHP - Sunucu Arayüzü';
$L['adm_cachedrivers'] = 'Arabellek Sürücüleri';
$L['adm_os'] = 'İşletim Sistemi';
$L['adm_clocks'] = 'Saatler';
$L['adm_time1'] = '#1: Sunucu Saati';
$L['adm_time2'] = '#2: Sunucu Zamanı';
$L['adm_time3'] = '#3: Sunucu Dengeleme Zamanı (Cotonti referansı)';
$L['adm_time4'] = '#4: Profilinizdeki ayarlanabilir yerel saat,';
$L['adm_help_versions'] = '#3 Denge Zamanının düzgün ayarlanmış olması için sunucu saati ayarlarını doğru yapın.<br />
#4 Profilinizden ayarlanabilir olan saattir.<br />
#1 ve #2 nolu saatler Cotonti tarafından gözardı edilir.';

/**
 * Common Entries
 */

$L['adm_area'] = 'Bölge';
$L['adm_clicktoedit'] = '(Düzenlemek için tıkla)';
$L['adm_confirm'] = 'Onaylamak için tıklayınız: ';
$L['adm_done'] = 'Yapıldı';
$L['adm_failed'] = 'Başarısız';
$L['adm_from'] = 'From';
$L['adm_more'] = 'daha fazla araç...';
$L['adm_purgeall'] = 'Tümünü temizle';
$L['adm_queue_unvalidated'] = 'Onaylanmamış';
$L['adm_queue_validated'] = 'Onaylanmış';
$L['adm_required'] = '(Gerekli)';
$L['adm_setby'] = 'Oluşturan';
$L['adm_to'] = 'To';
$L['adm_totalsize'] = 'Toplam Boyut';
$L['adm_warnings'] = 'Uyarılar';

$L['editdeleteentries'] = 'İçeriği düzenle ya da sil';
$L['viewdeleteentries'] = 'İçeriğe bak ya da sil';

$L['alreadyaddnewentry'] = 'Yeni içerik eklendi';
$L['alreadyupdatednewentry'] = 'İçerik güncellendi';
$L['alreadydeletednewentry'] = 'İçerik silindi';

/**
 * Extra Fields (Common Entries for Pages & Structure & Users)
 */

$L['adm_extrafields'] = 'Ekstra Alanlar';
$L['adm_extrafield_added'] = 'Ekstra alan başarıyla eklendi.';
$L['adm_extrafield_not_added'] = 'Hata! Yeni ekstra alan eklenemedi.';
$L['adm_extrafield_updated'] = '\'%1$s\' adlı esktra alan güncellendi.';
$L['adm_extrafield_not_updated'] = 'Hata! \'%1$s\' adlı ekstra alan güncellenemedi.';
$L['adm_extrafield_removed'] = 'Ekstra alan başarıyla güncellendi.';
$L['adm_extrafield_not_removed'] = 'Hata! Ekstra alan silinemedi.';
$L['adm_extrafield_confirmdel'] = 'Bu ekstra alanı silmek istediğinize eminmisiniz? Bu alandaki tüm verileriniz gidecek!';
$L['adm_extrafield_confirmupd'] = 'Bu ekstra alanı güncellemek istediğinize eminmisiniz? Bazı veri kayıpları söz konusu olabilir!';
$L['adm_extrafield_default'] = 'Varsayılan değer';
$L['adm_extrafield_required'] = 'Gerekli alan';
$L['adm_extrafield_parse'] = 'Ayırıcı';
$L['adm_extrafield_enable'] = 'Alan Etkin';
$L['adm_extrafield_params'] = 'Parametreler';

$L['extf_Name'] = 'İsim';
$L['extf_Type'] = 'alan Tiği';
$L['extf_Base_HTML'] = 'Temel HTML';
$L['extf_Page_tags'] = 'Etiketler';
$L['extf_Description'] = 'Açıklama (_TITLE)';

$L['adm_extrafield_new'] = 'Yeni ekstra alan';
$L['adm_extrafield_noalter'] = 'Veritabanına gerçek değil sadece ekstra alan olarak kat.';
$L['adm_extrafield_selectable_values'] = 'Seçenekleri belirtin, radyo veya seçimkutusu (virgül ile ayırınız.)';
$L['adm_help_extrafield'] = 'İpucu: Bu alanda seçim yapmazsanız &quot;Temel HTML&quot; otomatik olarak ayarlanır.';

/**
 * Help messages that still don't work
 */

$L['adm_help_cache'] = 'Uygun değil';
$L['adm_help_check1'] = 'Uygun değil';
$L['adm_help_check2'] = 'Uygun değil';
$L['adm_help_config']= 'Uygun değil';

?>