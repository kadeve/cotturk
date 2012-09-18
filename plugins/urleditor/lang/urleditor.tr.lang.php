<?php
/**
 * English Language File for URL management tool
 *
 * @package urleditor
 * @version 0.9.0
 * @author Cotonti Team
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['adm_urls'] = 'URLler';
$L['adm_urls_area'] = 'alan';
$L['adm_urls_custom_htaccess'] = 'Kişisel .htaccess kurallarınız';
$L['adm_urls_error_dat'] = 'Hatas: datas/urltrans.dat yazılabilir değil! Lütfen CHMOD 666 değerlerini uygulayın.';
$L['adm_urls_format'] = 'Biçim';
$L['adm_urls_htaccess'] = 'Şuanki .htaccess\'in üzerine yazılsın mı?';
$L['adm_urls_new'] = 'Yeni Kural';
$L['adm_urls_parameters'] = 'Parametreler';
$L['adm_urls_rules'] = 'URL Değişim Kuralı';
$L['adm_urls_save'] = 'Kaydet';
$L['adm_urls_your'] = 'Sizin';
$L['adm_urls_callbacks'] = 'Geribildirim içeren görevler';
$L['adm_urls_errors'] = 'Bu seçenekleri elle yeniden yazmalısınız';
$L['adm_help_urls'] = 'Bu sayfada, sitenizdeki adresleri URL Değişim Kuralları\'nı kullanarak değiştirebilirsiniz. Lütfen
kuralları doğru belirlediğinizden ve aynı kuralı birden fazla girmediğinizden emin olun. Boşluk, tab karakteri ve diğer özel karakterleri
kurallarda kullanmayın. Bölüm ve parametreler aşağıda açıklanmıştır.
<ol>
<li><strong>Alan</strong> kuralın ait olduğu script\'i belirtir. Metasembol (*) &quot;herhangi bir script&quot; anlamına gelir.</li>
<li><strong>Parametreler</strong> URL parametrelerine aykırı durumlar için kullanılır. Sayfalarda &amp; ve = işaretleriyle isim ve değerleri ayırırken kullanılır.
Eğer burada bir değer belirlerseniz, URL\'da bunun karşılığının olması zorunludur.
&quot;herhangi bir değer&quot; anlamına gelen * işaretini kullanabilirsiniz, tek bir değer, veya birden fazla,
| işaretiyle ayrılmış çoklu değerler. Bütün değerler şifrelenmeli/kodlanmalıdır. <em>Örneğin: isim=Değer|Mehmet&amp;id=124&amp;sayfa=*</em>.</li>
<li><strong>Biçim</strong> bu kurala uyan URL\'lerde önceliğin hangi kuralda olacağını belirtir. Ardışık değerlerin yerine gelecek olan   
şeylerin sırasını belirtir. Normal bir sırada {$name} anlam olarak &quot;isim&quot; yerine geçmektedir (GET değişkeni),
ve bu belirtilen sabitin yerine geçecektir. Ayrıca URL parametrelerine bağlı olmayan bir kaç özel
ardışık değer de bulunmaktadır (&quot;sorgu satırı&quot;):
	<ul>
		<li><em>{$_area}</em> - script adı;</li>
		<li><em>{$_host}</em> - ana URL\'ınızdan gelen sunucu adı;</li>
		<li><em>{$_rhost}</em> - HTTP talebini yapan, hâlihazırdaki sunucu adı;</li>
		<li><em>{$_path}</em> - sunucuya bağlı site yolunuz, / eğer site bir sunucunun kök dizininde ise.</li>
	</ul>
Ayrıca sitede belli bölümleri -kesin bir dille belirterek- subdomain altında gösteriyormuş gibi yapabilirsiniz, örneğin : <em>http://{$c}.site.com/{$al}.html</em>.
Şu anda subdomain tarzı gösterim biçimi sadece Apache sunucularda mümkün olmaktadır.
</li>
<li><strong>Yeni kural</strong> kural tablosuna yeni bir satır ekler.</li>
<li><strong>Düzen</strong> - kuralların düzeninin/sırasının önemli olduğunu unutmayın. URL Değişim
algoritması kuralları şöyle yorumluyor: önce, uygulanması istenen yere, tüm belirtilmiş kuralları çağırıyor, sonra da 
<em>ilk kuralı</em> belirtilmiş parametrelerde bulmaya çalışıyor; eğer hiç bir sonuç bulamazsa, * bölgesine geri dönüyor ve
burada belirtilen ilk kuralı seçiyor. Yaratacağınız (veya hâlihazırda oluşturulmuş) ilk kuralın (*
bölge ve * parametreleriyle) *-bölge kurallarının en sonuncusu olduğuna, hatta genel olarak en son kural olduğuna dikkat etmeniz önerilir.<br />
Bir kuralın konumunu mouse\'unuzla istediğiniz bölgeye taşıyabilirsiniz.
Kuralların yerini değiştirmeden önce, onları kaydetmeniz önerilir.</li>
<li><strong>Sorgu satırı</strong> genelde linklerde, soru işaretinden sonra gördüğünüz şeydir. Kullanım amacı
GET metodlarını gerçekleştirmek ve kodlayıcıya kolaylık sağlayarak bir çok seferde
otomatik geçişi sağlamaktır.</li>
<li><strong>Kaydet</strong> düğmesi yaptığınız değişiklikleri ve kuralları kaydederek uygulamaya sokacak. Aynı zamanda 
.htaccess (eğer yazılabilir hâldeyse) dosyanızı da değiştirecek ve .htaccess/IsapiRewrite4.ini/nginx.conf\'i kullanıma sokacak.
(sunucu türünüze göre değişkenlik gösterebilir).</li>
</ol>';

$L['cfg_preset'] = array('URL Yenileme');
$L['cfg_preset_params'] = array(
	'handy' => 'Pratik',
	'compat' => 'Genoa/Seditio uyumlu',
	'custom' => 'Kişisel urltrans.dat',
	'none' => 'Devre Dışı'
);

$L['info_desc'] = 'Mevcut bağlantılarınızı arama motoru optimizasyonuna (SEO) uyumlu hale getirir.';

?>
