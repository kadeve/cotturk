<?php
/**
 * Turkish Language File for the Install Module (install.tr.lang.php)
 *
 * @package install
 * @version 0.7.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['Complete'] = 'Tamamla';
$L['Finish'] = 'Son';
$L['Install'] = 'Kur';
$L['Next'] = 'İleri';

$L['install_adminacc'] = 'Yönetici Hesabı';
$L['install_body_title'] = 'Cotonti Kurulum Sihirbazı';
$L['install_body_message1'] = 'Bu sihirbaz Cotonti scriptini sunucunuza kolayca kurmanızı sağlar.';
$L['install_body_message2'] = 'Lütfen datas/config-sample.php dosyasını datas/config.php olarak kopyalayıp CHMOD 666 izinlerini verdikten sonra bu sayfayı tekrar çalıştırınız.';
$L['install_body_message3'] = 'İhtiyacınız olan ilk şey <strong>boş bir veritabanıdır.</strong> Veritabanınızı oluşturduysanız kuruluma başlayabiliriz.';
$L['install_chmod_value'] = 'CHMOD {$chmod}';
$L['install_complete'] = 'Kurulum başarıyla tamamlandı!';
$L['install_complete_note'] = 'Güvenliğiniz sebebiyle lütfen install.php dosyasını silip datas/config.php dosyasına CHMOD 644 izinlerini uygulayın';
$L['install_db'] = 'MySQL Veritabanı Ayarları';
$L['install_db_host'] = 'Veritabanı hostu';
$L['install_db_user'] = 'Veritabanı K.Adı';
$L['install_db_pass'] = 'Veritabanı Şifresi';
$L['install_db_port'] = 'Veritabanı portu';
$L['install_db_port_hint'] = 'Eğer farklı bir değer kullanacaksanız doldurun';
$L['install_db_name'] = 'Veritabanı Adı';
$L['install_db_x'] = 'Tablo ön eki';
$L['install_dir_not_found'] = 'Kurulum dizini bulunamadı';
$L['install_error_config'] = 'Ayar dosyası bulunamadı. Lütfen config-sample.php dosyasını config.php olarka kaydedin ve CHMOD 777 değerlerini uygulayın.';
$L['install_error_sql'] = 'MySQL veritabanına bağlanılamadı. Lütfen ayarlarınızı kontrol ediniz.';
$L['install_error_sql_db'] = 'MySQL veritabanı seçilmedi. Lütfen ayarlarınızı kontrol ediniz.';
$L['install_error_sql_ext'] = 'Cotonti pdo_mysql adlı PHP modülüne ihtiyaç duyuyor';
$L['install_error_sql_script'] = 'SQL kodları çalıştırılamadı: {$msg}';
$L['install_error_sql_ver'] = 'Cotonti MySQL 5.0.7 sürümüne ihtiyaç duymaktadır. Sizin sürümünüz {$ver}';
$L['install_error_mainurl'] = 'Siteniz için bir adet URL belirtmelisiniz.';
$L['install_error_mbstring'] = 'Cotonti mbstring adlı PHP modülüne ihtiyaç duyuyor';
$L['install_error_missing_file'] = '{$file} dosyası bulunamadı. Lütfen tekrar yükleyiniz.';
$L['install_error_php_ver'] = 'Cotonti PHP 5.2.3 sürümüne ihtiyaç duyuyor. Sizin sürümünüz {$ver}';
$L['install_misc'] = 'Çeşitli Ayarlar';
$L['install_misc_lng'] = 'Varsayılan Dil';
$L['install_misc_theme'] = 'Varsayılan Arayüz';
$L['install_misc_url'] = 'Site linki (lütfen slaş kullanmayınız)';
$L['install_parsing'] = 'Ayrıştırma Modu';
$L['install_parsing_hint'] = 'Ayrıştırma sitenizin tamamına uygulanır. Varsayılan tüm öğeler HTML olarak kayıt edilir ve bu işlem geri alınamaz.';
$L['install_permissions'] = 'Dosya/Dizin İzinleri';
$L['install_recommends'] = 'Tavsiye Edilen';
$L['install_requires'] = 'Gereken';
$L['install_retype_password'] = 'Şifrenizi yeniden yazın';
$L['install_step'] = '{$step}. Adım, Toplam: {$total}';
$L['install_title'] = 'Cotonti Kurulum Sihirbazı';
$L['install_update'] = 'Cotonti Güncellemesi';
$L['install_update_config_error'] = 'Lütfen datas/config.php dosyasına CHMOD 666 izinlerini verdikten sonra bu sayfayı tekrar çalıştırınız.(Güncelleme sırasında config.php dosyasını değiştirmeyiniz.)';
$L['install_update_config_success'] = 'datas/config.php başarıyla güncellendi';
$L['install_update_error'] = 'Güncelleme Hatası';
$L['install_update_nothing'] = 'Güncelleme yok';
$L['install_update_patch_applied'] = '{$f} yaması uygulandı: {$msg}';
$L['install_update_patch_error'] = '{$f} yaması uygulanamadı: {$msg}';
$L['install_update_patches'] = 'Uygulanacak yamalar:';
$L['install_update_success'] = 'Siteniz başarıyla {$rev} sürümüne güncellendi';
$L['install_update_template_not_found'] = 'Güncelleme şablonu bulunamadı';
$L['install_upgrade'] = 'Sistem genel anlamda güncelleme için hazır...';
$L['install_upgrade_error'] = 'Cotonti {$ver} sürümüne güncellenemedi!';
$L['install_upgrade_success'] = 'Cotonti {$ver} sürümüne başarıyla güncellendi!';
$L['install_upgrade_success_note'] = 'Tüm Genoa eklentileri kaldırıldı. Güncelleme işleminden sonra yeniden kurabilirsiniz.';
$L['install_ver'] = 'Sunucu bilgileri';
$L['install_ver_invalid'] = '{$ver} &mdash; geçersiz!';
$L['install_ver_valid'] = '{$ver} &mdash; geçerli!';
$L['install_view_site'] = 'Siteyi görüntüle';
$L['install_writable'] = 'Yazılabilir';

?>