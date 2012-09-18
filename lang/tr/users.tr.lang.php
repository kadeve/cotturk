<?php

/**
 * Turkish Language File for the Users Module (users.en.lang.php)
 *
 * @package Cotonti
 * @version 0.9.0
 * @author Gökhan YILDIZ
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * User authentication
 */

$L['users_nameormail'] = 'Kullanıcı adı veya Eposta';
$L['users_rememberme'] = 'Beni hatırla';
$L['users_lostpass'] = 'Şifrenizi mi unuttunuz?';
$L['users_maintenance1'] = 'Site bakım modunda';
$L['users_maintenance2'] = 'Sadece yöneticiler ve yetkili grup kullanıcıları giriş yapabilir.';

/**
 * User registration
 */

$L['users_validemail'] = 'Geçerli Eposta';
$L['users_validemailhint'] = '(Kayıt işleminizi tamamlayabilmeniz için geçerli bir eposta adresi girmelisiniz.)';
$L['users_confirmpass'] = 'Şifreyi Onayla';

$L['aut_contactadmin'] = 'Herhangi bir sorunla karşılaşırsanız yönetici ile iletişime geçmekten sakın çekinmeyin.';
$L['aut_emailalreadyindb'] = 'Eposta adresi zaten kayıtlı';
$L['aut_emailbanned'] = 'Bu eposta adresi yasaklanmış, sebebi: ';
$L['aut_emailtooshort'] = 'Eposta adresi geçerli değil!';
$L['aut_invalidloginchars'] = 'Geçersiz karakterlerle giriş yapmaya çalıştınız';
$L['aut_logintitle'] = 'Giriş formu';
$L['aut_mailnoticetitle'] = 'Epostaya geç';
$L['aut_passwordmismatch'] = 'Şifreler birbiriyle uyuşmuyor!';
$L['aut_passwordtooshort'] = 'Şifre en az 4 karakter uzunluğunda ve alfanumerik karakterlerden oluşmalıdır.';
$L['aut_registersubtitle'] = '';
$L['aut_registertitle'] = 'Yeni kullanıcı kaydı';
$L['aut_regreqnoticetitle'] = 'Yeni hesap isteği';
$L['aut_regrequesttitle'] = 'Kayıt isteği';
$L['aut_usernamealreadyindb'] = 'Kullanıcı adınız zaten veritabanında kayıtlı. Lütfen farklı bir ad giriniz.';
$L['aut_usernametooshort']= 'Kullanıcı adı en az 2 karakterden oluşmalıdır.';

/**
 * User registration: messages
 */

$L['aut_regrequest'] = 'Merhaba %1$s,
Aktif olmayan hesabınızın bir yönetici tarafından güncellenmesi sonucunda bu epostayı aldınız. Sisteme giriş için gerekli bilgileriniz:
Kullanıcı Adı = %1$s
Şifre = %2$s';

$L['aut_regreqnotice'] = 'Eğer bu epostayı aldıysa %1$s yeni hesap isteği var demektir..
Bu hesabı aktif duruma getirebilmek için:
%2$s';

$L['aut_emailreg'] = 'Merhaba %1$s,
Hesabınızı aktifleştirmek için bu bağlantıyı kullanınız:
%3$s
Bu işlemi yaptıktan sonra giriş yapabilirsiniz:
Kullanıcı Adı = %1$s
Şifre = %2$s
Eğer böyle bir talebiniz olmadıysa bu işlemi iptal etmek için:
%4$s';

$L['aut_emailchange'] = 'Merhaba %1$s,
Mevcut eposta adresinizi değiştirmek için bu bağlantıyı kullanın
%2$s';

/**
 * User list
 */

$L['users_usersperpage'] = 'Sayfa başına kullanıcı sayısı';
$L['users_usersinthissection'] = 'Toplam Kullanıcı';

$L['pro_emailandpass'] = 'Aynı zamanda hep eposta adresinizi hem de şifrenizi değiştiremezsiniz.';
$L['pro_passdiffer'] = 'Şifreler birbiriyle uyuşmuyor';
$L['pro_passtoshort'] = 'Şifre en az 4 karakter uzunluğunda ve alfanumerik karakterlerden oluşmalıdır.';
$L['pro_subtitle'] = 'Kişisel Hesabınız';
$L['pro_title'] = 'Profilim';
$L['pro_wrongpass'] = 'Mevcut şifrenizi girmediniz ya da hatalı giriş yaptınız.';
$L['pro_invalidbirthdate'] = 'Geçersiz doğum tarihi.';

$L['useed_accountactivated'] = 'Hesap Aktifedildi';
$L['useed_email'] = 'Hesabınız yönetici tarafından aktif hale getirildi. Sisteme kayıt olurken belirlemiş olduğunuz kullanıcı adı ve şifrenizle giriş yapabilirsiniz.';
$L['useed_subtitle'] = '&nbsp;';
$L['useed_title'] = 'Düzenle';

$L['use_allbannedusers'] = 'Yasaklı Kullanıcılar';
$L['use_allinactiveusers'] = 'Aktif Olmayan Kullanıcılar';
$L['use_allusers'] = 'Tüm Kullanıcılar';
$L['use_byfirstletter'] = 'Name starting by';
$L['use_subtitle'] = 'Kayıtlı Kullanıcılar';
$L['use_title'] = 'Üyeler';

$L['pasrec_title'] = 'Şifre Kurtarma';
$L['pasrec_email1'] = 'Aşağıdaki bağlantıyı kullanarak şifrenizi sıfırlayabilirsiniz:';
$L['pasrec_email1b'] = 'UYARI: Eğer şifre sıfırlama işleminden haberiniz yoksa lütfen bu epostayı görmezden gelin. IP: %1$s, Tarih ve Zaman: %2$s.';
$L['pasrec_email2'] = 'İsteğiniz üzerine şifreniz sıfırlanmıştır. Güvenliğiniz için şifrenizi değiştirdikten sonra bu epostayı silin. Yeni şifreniz';
$L['pasrec_explain1'] = 'Eposta Adresinizi Girin.';
$L['pasrec_explain2'] = 'İşleminiz için bir eposta gönderildi. Şifrenizi sıfırlamak için size gönderilen bağlantıyı kullanın..';
$L['pasrec_explain3'] = 'Üst üste yeni şifre isteği yaptınız. Lütfen eposta adresinizi (spam kutusu dahil) kontrol ediniz!';
$L['pasrec_explain4'] = 'Eğer eposta adresinizi bilmiyorsanız bu şekilde şifrenizi almanız mümkün olmayacaktır. Lütfen herhangi bir yönetici ile iletişime geçiniz.';
$L['pasrec_mailsent'] = 'İşleminiz gerçekleşti. Birkaç dk içinde eposta adresinizi kontrol ediniz ve ardından yönergeleri inceleyiniz.';
$L['pasrec_mailsent2'] = 'Şifreniz sıfırlandı. Yeni şifreniz için eposta adresinizi kontrol ediniz.';
$L['pasrec_request'] = 'İstek';
$L['pasrec_youremail'] = 'Eposta Adresin: ';

/**
 * User details
 */

$L['users_sendpm'] = 'Özel Mesaj Gönder';

/**
 * User profile & edit
 */

$L['users_id'] = 'Üye NO';
$L['users_hideemail'] = 'Eposta adresimi herzaman gizle';
$L['users_pmnotify'] = 'ÖM Bildirimi';
$L['users_pmnotifyhint'] = '(Yeni mesaj gönderildiğinde eposta yoluyla haber ver)';
$L['users_newpass'] = 'Yeni Şifre Oluştur';
$L['users_newpasshint1'] = '(Eğer şifrenizi değiştirmeyecekseniz boş bırakın)';
$L['users_newpasshint2'] = '(Yeni şifrenizi girin)';
$L['users_oldpasshint'] = '(Yeni şifrenizi onaylayın';
$L['users_lastip'] = 'Son Kayıtlı IP';
$L['users_logcounter'] = 'Kayıt Sayacı';
$L['users_deleteuser'] = 'Kullanıcıyı Sil';

/**
 * Moved from theme.lang
 */

$themelang['usersprofile']['Emailpassword'] = 'Geçerli Şifre';
$themelang['usersprofile']['Emailnotes'] = '<p><b>Eposta değişiklik isteği (Yeni epostayı tanımlayabilmeniz için onayınız gerekmektedir. Eposta değişikliğinden sonra):</b></p>
<ol>
	<li>Şuanda mevcut olan eposta adresinizi kullanamazsınız</li>
	<li>Güvenlik nedenlerinden dolayı şuanki şifrenizle giriş yapmak zorundasınız</li>
	<li>Bu eposta adresini onaylamak için size gönderilen bağlantıyı tıklamak zorundasınız</li>
	<li>Eğer doğrulama bağlantısını tıklamazsanız hesabınız askıya alınacak</li>
	<li>Eposta adresinizi doğruladıktan sonra hesabınız tekrar aktif hale gelecektir</li>
	<li>Eposta adresinizin doğru olduğuna dikkat edin. Daha sonra değişiklik için bir şansınız olmayacak</li>
	<li>Eğer bir hata yaptıysanız yönetici ile iletişime geçin.</li>
</ol>
<p><b>Eğer onaya gerek yok diyorsanız yeni eposta adresiniz hemen aktif olacaktır.</b></p>';

?>