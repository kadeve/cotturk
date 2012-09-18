<?php
/**
 * Turkish Language File for the Message Module (message.en.lang.php)
 *
 * @package Cotonti
 * @version 0.9.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['msg_Message'] = 'Mesaj';
$L['msg_Error'] = 'Hata';
$L['msg_Warning'] = 'Uyarı';
$L['msg_Security'] = 'Güvenlik';
$L['msg_System'] = 'Sistem';

$L['msgredir'] = 'Yönlendiriliyorsunuz...';

/**
 * Account-Related Messages
 */

$L['msg100_title'] = 'Bu kullanıcının profilini görüntülemeye yetkiniz bulunmamaktadır.';
$L['msg100_body'] = 'Sadece kayıtlı ve çevrimiçi kullanıcılar bu profili görüntüleyebilir!';

$L['msg101_title'] = 'Kullanıcı giriş yapılamadı';
$L['msg101_body'] = 'Giriş yapmanız gerekmektedir.';

$L['msg102_title'] = 'Kullanıcı çıkışı';
$L['msg102_body'] = 'Çıkış işleminiz tamamlandı.';

$L['msg105_title'] = 'Kayıt İşlemi (1. Adım)';
$L['msg105_body'] = 'Birkaç dakika içinde eposta kutunuzu kontrol ediniz.<br />Kayıt işlemini onaylamak için size gönderilen bağlantıya tıklayınız.<br />Bu süre boyunca hesabınız kullanıcı listesinde &quot;e-posta onayı bekliyor&quot; olarak görünecektir.';

$L['msg106_title'] = 'Kayıt Tamamlandı';
$L['msg106_body'] = 'Hoşgeldiniz, hesabınız artık aktif durumda.<br />Şimdi kullanıcı adı ve şifrenizi kullanarak giriş yapabilirsiniz.';

$L['msg109_title'] = 'Kullancı Silindi';
$L['msg109_body'] = 'Kullanıcı silindi.';

$L['msg117_title'] = 'Kullanıcı Kaydı Devredışı';
$L['msg117_body'] = 'Yeni kullanıcı kaydını devredışı bıraktınız.';

$L['msg118_title'] = 'Kayıt İşlemi (1. Adım)';
$L['msg118_body'] = 'Hesabınız henüz aktif değil.<br />Hesabınızı aktifleştirmek için size gönderilen eposta adresindeki bağlantıya tıklayınız ya da yöneticinin onayını bekleyiniz.';

$L['msg151_title'] = 'Hatalı Giriş (hatalı kullanıcı adı veya şifre)';
$L['msg151_body'] = 'Hata! Sanırım kullanıcı adınız veya şifrenizden birini hatalı girdiniz.';

$L['msg152_title'] = 'Hatalı Giriş (hesabınız aktif değil)';
$L['msg152_body'] = 'Hata! Sistemimizde kayıtlı olan hesabınız henüz aktif edilmemiş.';

$L['msg153_title'] = 'Hatalı Giriş (yasaklı kullanıcı)';
$L['msg153_body'] = 'Hata! Hesabınız yasaklanmış durumda!';

$L['msg157_title'] = 'Yanlış Bağlantı';
$L['msg157_body'] = 'Eposta onay bağlantınız hatalı.';

/**
 * Redirection Messages
 */

$L['msg300_title'] = 'Yeni Teslimat';
$L['msg300_body'] = 'Teşekkürler! Bu işlem veri tabanına kayıt edildi.<br />Bir moderatör en kısa zamanda bunu kontrol edecektir.';

/**
 * Client Error Messages
 */

$L['msg400_title'] = '400 - Kötü Dosya';
$L['msg400_body'] = 'Tarayınız sunucumuzun algılayamadığı bir istek gönderdi.';

$L['msg401_title'] = '401 - Yetkilendirme Gerekli';
$L['msg401_body'] = 'Sunucumuz belirtilen adrese erişiminizin olmadığını belirtiyor. <br />Gerekli bilgilerin (Örn., şifre), doğru girildiğinden emin olunuz.';

$L['msg403_title'] = '403 - Yasak';
$L['msg403_body'] = 'Belirtilen dizine veya bağlantıya erişim hakkına sahip değilsiniz.<br />Eğer bunda bir hata olduğunu düşünüyorsanız lütfen yöneticiye bildiriniz.';

$L['msg404_title'] = '404 - Bulunamadı';
$L['msg404_body'] = 'Belirtilen dosya ya da bağlantı sunucumuzda bulunmuyor. <br />Eğer bunda bir hata olduğunu düşünüyorsanız lütfen yöneticiye bildiriniz.';

/**
 * Server Error Messages
 */

$L['msg500_title'] = '500 Internal Server Error';
$L['msg500_body'] = 'The server encountered an internal error or misconfiguration and was unable to complete your request. <br />Please contact the administrator and inform them of the time the error occurred, and anything you might have done that may have caused the error.';
$L['msg503_title'] = '503 Service Temporarily Unavailable';
$L['msg503_body'] = 'The page you requested is temporarily unavailable for technical reasons.<br />Please try again later or contact the site administrator.';

/**
 * Forum Messages
 */

$L['msg602_title'] = 'Kilitli Bölüm';
$L['msg602_body'] = 'Bu bölüm kilitlenmiş.';

$L['msg603_title'] = 'Kilitli Konu';
$L['msg603_body'] = 'Konu kilitlenmiş.';

/**
 * System Messages
 */

$L['msg900_title'] = 'Yapım aşamasında';
$L['msg900_body'] = 'Sayfa henüz tamamlanmamış. Lütfen daha sonra tekrar ziyaret ediniz.';

$L['msg904_title'] = 'Sistem sayfalarını sadece yöneticiler görebilir';
$L['msg904_body'] = 'sizin bu sayfaları görüntülemek için yetkiniz bulunmamaktadır.';

$L['msg907_title'] = 'Eklenti Yüklenemedi';
$L['msg907_body'] = 'Yanlış bir adres ya da kayıp bir dosya olmadığına emin misiniz?';

$L['msg911_title'] = 'Hatalı Dil Dosyası';
$L['msg911_body'] = 'Dil dosyalarınızda bir hata bulunmaktadır.';

$L['msg915_title'] = 'Hata!';
$L['msg915_body'] = 'En az 1 alan boş.';

$L['msg916_title'] = 'Veritabanı Güncellendi';
$L['msg916_body'] = 'Veritabanı başarıyla güncellendi.<br />Girişler : $num';

$L['msg920_title'] = 'Onay Gerekiyor';
$L['msg920_body'] = 'Bu işlemi yapmak istediğinize emin misiniz?';

$L['msg930_title'] = 'Yetki hatası';
$L['msg930_body'] = 'Bunu yapmaya yetkiniz bulunmamaktadır.';

$L['msg940_title'] = 'Bu bölüm devre dışı';
$L['msg940_body'] = 'Sitenin bu bölümü devre dışı.';

$L['msg950_title'] = 'Hata';
$L['msg950_body'] = 'Bir hata ile karşılaştık. Yanlış adres olabilir mi?';

$L['msg951_title'] = 'Oturum Süreniz Doldu';
$L['msg951_body'] = 'Oturum süreniz doldu. Lütfen tekrar deneyiniz.';

?>