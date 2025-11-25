<?php
require_once('UI/Login.php');
require_once('UI/Register.php');
require_once('UI/Footer.php');
require_once('UI/ToolBar.php');
require_once('UI/Support.php');
require_once('UI/Admin.php');
require_once('UI/Errors.php');
require_once('UI/Build.php');
require_once('UI/News.php');
require_once('UI/Plus.php');
require_once('UI/Map.php');
require_once('UI/Nachrichten.php');
require_once('UI/Options.php');
require_once('UI/Manual.php');

define("BUILDING_BUILDING", "Binalar:");
define("BUILDING_COMPLETE", "inşaatı hemen tamamla");
define("UPG12", "Mimara inşaat emri ver");
define("BUILDING_LEVEL", "Seviye");
define("BUILDING_QUEUE", "Sıra");
define("BUILDING_TIMER", "sürer ve bu saatte hazır: ");
define("BUILDING_ARCHITECT", "Bina");
define("SIDEINFO_HERO1", "Kahramanın öldü");
define("SIDEINFO_HERO2", "Kahraman sağlıklı");
define("SIDEINFO_HERO3", "Kahraman kendi köyünde");
define("SIDEINFO_HERO4", "Sen kahramanın köyündesin");
define("SIDEINFO_HERO5", "yolda");
define("SIDEINFO_HERO5H", "köyde");
define("SIDEINFO_HERO6", "Kahramanın Merkez Köyü");
define("SIDEINFO_HERO7", "Kahraman Yok.");
define("SIDEINFO_HERO8", "Genel Bakış");
define("SIDEINFO_HERO9", "Maceralar");
define("SIDEINFO_HERO10", "Mevcut Maceralar");
define("SIDEINFO_HERO11", "Kahramanın Sağlık Bilgisi");
define("SIDEINFO_HERO12", "Tecrübe");
define("MEDALS99", "Madalya zamanı:");

define("LANG_UR","ar-AE");
define("DIRECTION","ltr");
define("DIRECTION_2","left");
define("LOCATION_NAME","Global - ar-AE");

define("YILMAZ1","buildingsV1");
define("YILMAZ3","buildingsV3");
	define("A1453","A1453");
define("A1071","A1071");
define("YILMAZV1V3","Version Değiştir");
	define("INCLUDED","");
define("INS0", "Klasörler üzerindeki hakları değiştirir (CHMOD)");
define("INS1", "Yüklemeden sonra");
define("INS2", "Kurulum klasörünü silin");
define("INS3", "CHMOD GameEngine'i 644'e geri değiştirin");
define("INS4", "Bu oyunun kurulumu / kullanımıyla birlikte, bu oyunun kopyasının yayınlanmasına izin verdiğiniz herhangi bir lisanssız içeriğin sahipleri tarafından başlatılan tüm yasal sonuçlardan tamamen sorumlu olacaksınız.");
define("INS5", "Ne bu betiği oluşturan ekip ne de bu dağıtımı / sürümü oluşturmak için özelleştiren ekip, bilgisayarınıza / sunucu sisteminize yapılan herhangi bir hasardan sorumlu olmayacaktır.");
define("INS6", "Tüm kodun, yayınlandığı anda farkında oldukları herhangi bir görünür güvenlik riski olmadan, oluşturma ekibi tarafından doğru çalıştığı onaylandı. Benzer şekilde, bu dağıtımı / sürümü oluşturmak için onu özelleştiren özelleştirme ekibi için.");
define("INS7", "Kullanıcılardan kodu kendi rızaları ve adına incelemeleri istenir.");
define("INS8", "Telif hakkı bildirimlerini düzenleme ve / ve bu komut dosyasını size aitmiş gibi talep etme hakkınız yoktur.");
define("INS9", "Keyfini çıkarın.");
define("INS10", "Constant.php check cmod oluşturulurken hata oluştu.");
define("INS11", "Ay");
define("INS12", "Gün");
define("INS13", "Yıl");
define("INS14", "Saat");
define("INS15", "Dakika");
define("INS16", "Saniye");
define("INS17", "Sunucu adı:");
define("INS18", "Sunucu hızı:");
define("INS19", "Birlik hızı:");
define("INS20", "Pazar yeri kapasitesi (1 = 1x ...):");
define("INS21", "Harita kapasitesi:");
define("INS21M", "25x25");
define("INS22", "50x50");
define("INS23", "100x100");
define("INS24", "150x150");
define("INS25", "200x200");
define("INS26", "250x250");
define("INS27", "300x300");
define("INS28", "350x350");
define("INS29", "400x400");
define("INS30", "Anasayfa:");
define("INS31", "Yeni oyuncu koruması");
define("INS31M", "2 saat");
define("INS32", "3 saat");
define("INS33", "5 saat");
define("INS34", "8 saat");
define("INS35", "10 saat");
define("INS36", "12 saat");
define("INS37", "24 saat (1 Gün)");
define("INS38", "48 saat (2 Gün)");
define("INS39", "72 saat (3 Gün)");
define("INS40", "120 saat (5 Gün)");
define("INS41", "Depo kapasitesi:");
define("INS42", "Arena eylemi (x kareden sonra):");
define("INS43", "Admin");
define("INS44", "Yöneticinin sayfadaki görünürlüğü:");
define("INS45", "True");
define("INS46", "False");
define("INS47", "SQL RELATED");
define("INS48", "Hostname:");
define("INS49", "Username:");
define("INS50", "Password:");
define("INS51", "DB name:");
define("INS52", "Travian plus seçenekleri");
define("INS53", "Travian +plus süresi:");
define("INS54", "12 hours");
define("INS55", "1 Gün");
define("INS56", "2 Gün");
define("INS57", "3 Gün");
define("INS58", "4 Gün");
define("INS59", "5 Gün");
define("INS60", "6 Gün");
define("INS61", "7 Gün");
define("INS62", "+25% bonus:");
define("INS63", "12 hours");
define("INS64", "1 Gün");
define("INS65", "2 Gün");
define("INS66", "3 Gün");
define("INS67", "4 Gün");
define("INS68", "5 Gün");
define("INS69", "6 Gün");
define("INS70", "7 Gün");
define("INS71", "Kaynaklar satılabilir mi?");
define("INS72", "True");
define("INS73", "False");
define("INS74", "Kültür puanları satılabilir mi?");
define("INS75", "True");
define("INS76", "False");
define("INS77", "Kaç tane kaynak satılacak?");
define("INS78", "Kaynak maliyeti");
define("INS79", "Kültür puanı fiyatı");
define("INS80", "Ne kadar kültür puanı?");
define("INS81", "Varsayılan altın sayısı");
define("INS82", "Sevk köy numarası");
define("INS83", "Davet için altın");
define("INS84", "Sunucu seçenekleri");
define("INS85", "<center>Sunucun Başlamasına Kalan Zaman</center>");
define("INS86", "Zaman damgası tarihi (oluşturma UTC + 0'dan itibaren olacaktır!)");
define("INS87", "Eserler:");
define("INS88", "(Timestamp date)");
define("INS89", "Dünya Harikası köyleri:");
define("INS90", "Timestamp date ");
define("INS91", "Kaydırma sayısı:");
define("INS92", "Timestamp date");
define("INS92M", "Kültür puanı Adetı:");
define("INS93", "High");
define("INS94", "Low");
define("INS95", "Quests");
define("INS96", "True");
define("INS97", "False");
define("INS98", "Harita için maksimum sayıda önbellek görüntüsü");
define("INS99", "Kahraman için maksimum sayıda önbellek görüntüsü");
define("INS100", "Haritanın kalitesi ");
define("INS101", "Anlık birlik oluşturma");
define("INS102", "True");
define("INS103", "False");
define("INS104", "Müzayede zamanı");
define("INS105", "Vaha Oranları");
define("INS106", "Başlangıç koruması her 12 saatte bir en uzun olacak ... (saniye cinsinden)");
define("INS107", "Ev sahibinizin çok fazla alanı yoksa lütfen düşünün! ");
define("INS108", "1000 pictures=~80MB");
define("INS109", "Ana makinenizde büyük Adetda bellek RAM yeri yoksa,");
define("INS110", "1000 Pictures=~2.60ГБ");
define("INS111", "Mükemmel kalite - 100, orta - 75 (Resim, maksimum kaliteye kıyasla 3 kat daha kötü olacaktır)");
define("INS112", "Vahaları Doldurun");
define("INS113", "Uyarı");
define("INS114", ": Bu biraz zaman alabilir. Tıklamayın, bir sonraki sayfa yüklenene kadar bekleyin!");
define("INS115", "Multihunter hesabı oluşturun");
define("INS116", "Name:");
define("INS117", "Password:");
define("INS118", "Not: Bu parolayı unutmayın! ACP için ihtiyacınız var");
define("INS119", "Wdata oluşturulurken hata meydana geldi. Yapılandırmayı veya dosyayı kontrol edin.");
define("INS120", "Dünya Verileri Oluşturun");
define("INS121", "Uyarı");
define("BUILDING_CANCEL", "İptal");
define("INS122", ": Bu biraz zaman alabilir. Tıklamayın, bir sonraki sayfa yüklenene kadar bekleyin!");
define("INS123", "Komut dosyasını yüklediğiniz için teşekkürler.");
define("INS124", "Lütfen kurulum klasörünü kaldırın / yeniden adlandırın.");
define("INS125", "Tüm dosyalar yerleştirilir. Veritabanı oluşturulur, böylece artık kendi Travian'ınızda oynamaya başlayabilirsiniz.");
define("INS126", "Veritabanını içe aktarırken hata oluştu. Yapılandırmayı kontrol edin.");
define("INS127", "SQL Yapısı Oluşturun");
define("INS128", "Uyarı: Bu biraz zaman alabilir. Tıklamayın, sadece bir sonraki sayfa yüklenene kadar bekleyin");
define("INS129", "Günde ne kadar macera veriyor?");

define("CLANG", "Bir dil seç:");
define("MULTI_RULES", "Yasak: <br/> 1 IP'de 1 hesaba daha fazla kaydol. <br/> İlginç değiliz: erkek / kız kardeş / aile vb. İle oynuyorsun: 1 IP - 1 Hesap. <br/>
Arkadaşların yardımıyla / sahte IP'lerle yasaklanmış kayıt hesapları, <br/> bunun gibi hesaplar bulunacak ve cezalandırılacaksınız: <br/> Örneğin% 50 askerlerden. <br /> Dürüst olun ve vicdanlı olun adil oyna.");
define("OK", "Ok");
define("CROPFINDER", "Tarla bulucu");
define("MAP", "Map");
define("MINIMAP", "Mini Map");
define("GO", "Go");
define("GO_TO", "Go to");
define("PLEASE_WAIT", "Yükleniyor");

define("CATEGORY", "'Kategori");
define("EDITPROFILE", "Profili Düzenle");
define("COORDIANTES", "Koordinatlar");
define("POPULATION", "Nüfus");
define("WOOD", "Orman");
define("ABONDENDVALLY", "Vahadan Ayrıl");
define("UNOCCUPIEDOASES", "Boş Vaha");
define("UNOCCUPIEDOASIS", "Boş Vaha");
define("OCCUPIEDOASES", "İşgal Edilmiş Vaha");
define("OCCUPIEDOASIS", "İşgal Edilmiş Vaha");
define("ABANDONEDVALLEY", "Terk edilmiş vadi");
define("BUILDRALLYPOINTTORAID", "(Askeri Üs oluştur)");
define("PLAYER", "Oyuncu");
define("TRIBE", "Kabile");
define("VILLAGE", "Köy");
define("ALLIANCE", "Birlik");
define("SIDEINFO_ADVENTURES", "Macera");
define("SIDEINFO_AUCTIONS", "Açık arttırma");
define("SIDEINFO_PROFILE", "Profil");
define("SIDEINFO_ALLIANCE", "Birlik");
define("SIDEINFO_ALLY_FORUM", "Birlik Forum");
define("SIDEINFO_CHANGE_TITLE", "Köyü yeniden adlandırmak için çift tıklayın");
define("SIDEINFO_CHANGEVIL_TITLE", "Köyü yeniden adlandırın");
define("SIDEINFO_CHANGEVIL_LABEL", "Yeni köy adı");
define("SIDEINFO_CHANGEVIL_BTN", "Kabul etmek");
define("HEADER_MESSAGE_NEW", "Yeni");


define("MAINMENU", "Ana menü");


define("POPUALTION", "Nüfus");
//MAIN MENU
define("TRIBE1", "Romalılar");
define("TRIBE2", "Cermenler");
define("TRIBE3", "Galyalılar");
define("TRIBE4", "Natureza");
define("TRIBE5", "Natarlar");
define("TRIBE6", "Mısırlılar");
define("TRIBE7", "Hunlular");
define("PRISONERS", "Mahkumlar");
define("PRISONERSIN", "Prisioners in");
define("PRISONERSFROM", "Esirler");
define("HOME", "AnaSayfa");
define("PW_ER", "yanlış geçmek");
define("INSTRUCT", "Talimatlar");
define("ADMIN_PANEL", "Admin Panel");
define("MASS_MESSAGE", "Toplu Mesaj");
define("LOGOUT", "Çıkış");
define("PROFILE", "Profil");
define("SUPPORT", "Support");
define("RULES", "Kurallar");

define("P", "P");
define("L", "l");
define("U", "u");
define("S", "s");
define("UPDATE_T_10", "İlk 10'u Güncelle");
define("SYSTEM_MESSAGE", "Sistem mesajı");
define("TRAVIAN_PLUS", "Travian <b><font color=\"#71D000\">P</font><font color=\"#FF6F0F\">l</font><font color=\"#71D000\">u</font><font color=\"#FF6F0F\">s</font></b>");
define("CONTACT", "Bize Ulaşın!");
define("HEADER_MESSAGES_NEW", "Yeni");

define("HEADER_PLUS", "Plus");
define("HEADER_ADMIN", "Admin");
define("HEADER_PLUSMENU", "Plus menu");

define("HEADER_DORF1", "Kaynaklar");
define("HEADER_DORF2", "Köy Merkezi");
define("HEADER_STATS", "İstatistik");
define("HEADER_MAP", "Harita");
define("HEADER_NOTICES", "Raporlar");
define("HEADER_MESSAGES", "Mesajlar");

define("HEADER_GOLD", "Gold");
define("HEADER_SILVER", "Silver");
define("HEADER_NIGHT", "Night");
define("HEADER_DAY", "Day");
define("HEADER_NOTICES_NEW", "Yeni Rapor");
define("NO_PERMISSION", "İzin yok");



define("LOGOUT_TITLE", "Çıkış tamamlandı!");
define("LOGOUT_H4", "ziyaret ettiğiniz için teşekkürler");
define("LOGOUT_DESC", "Bu bilgisayarı başkaları da kullanıyorsa, kendi güvenliğiniz için çerezlerinizi silmelisiniz.");
define("LOGOUT_LINK", "Çerezleri temizle");
define("PREREG1", "Birlik Hızı");
define("PREREG2", "Yönetici");
define("PREREG3", "Madalyalar ");
define("PREREG4", "Sunucu şu saatte başlayacak: ");
define("PREREG5", "Başlama Zamanı: ");

define("LOGIN_PW_SENT", "Şifre yenileme mesajınız gönderildi.");

define("REGISTER_USERINFO", "Kayıt Ol");
define("REGISTER_USERNAME", "İsim");
define("REGISTER_EMAIL", "Email");
define("REGISTER_PASSWORD", "Password");
define("REGISTER_STARTER", "");
define("REGISTER_SELECT_TRIBE", "Halk Seçin");
define("REGISTER_LOCATION", "Yer");
define("REGISTER_NE", "Kuzey-Doğu");
define("REGISTER_NW", "Kuzey Batı");
define("REGISTER_SE", "Güney-Doğu");
define("REGISTER_SW", "Güney-Batı");
define("REGISTER_RANDOM", "Random");
define("REGISTER_MOREINFO", "<font color=blue>Türkiyenin En İyi T4.4 PVP Serverine Hoşgeldiniz!</font>");
define("REGISTER_CLOSED", "Kayıt kapalıdır. Bu sunucuya kayıt olamazsınız.");
define("newmsg", "Yeni Mesaj:");
//MENU
define("REG", "Kayıt ol");
define("FORUM", "Forum");
define("CHAT", "Sohbet");
define("IMPRINT", "Künye");
define("MORE_LINKS", "Daha Fazla Bağlantı");
define("TOUR", "Oyun Turu");
//PLUS
define("PLUS0", "Plus Bağlantıları");
define("PLUS1", "Genel Bakış");
define("PLUS2", "Süresi");
define("PLUS3", "Altın");
define("PLUS4", "Aksiyon");
define("PLUS5", "Var ");
define("PLUS6", "Altın Paralar");
define("PLUS7", "Kalan:");
define("PLUS8", "Gün");
define("PLUS9", "Saat");
define("PLUS10", "Dakika");
define("PLUS11", "Gold");
define("PLUS12", "Etkinleştir");
define("PLUS13", "Uzat");
define("PLUS14", "Yetersiz altın");
define("PLUS15", "Üretim: Odun");
define("PLUS16", "Üretim: Tuğla");
define("PLUS17", "Üretim: Demir");
define("PLUS18", "Üretim: Tarla");
define("PLUS19", "NPC Market ");
define("PLUS20", "Şimdi");
define("PLUS21", "Markete!");
define("PLUS22", "Altın ve Gümüş Takas");
define("PLUS23", "Değiş tokuş");
define("PLUS24", "Tüm inşaatları ve araştırmaları tamamlayın");
define("PLUS25", "Tamamlayınız");
define("PLUS26", "Satın al");
define("PLUS27", "Kültür Puanı");
define("PLUS28", "Satın al");
define("PLUS29", "Her Türlü Kaynak");
define("PLUS30", "Gün");
define("PLUS31", "Gold Club");
define("PLUS32", "Gold Club Avantajları:");
define("PLUS33", "1.Çiftlik Listesi");
define("PLUS34", "2.Ticaret Yolları");
define("PLUS35", "3.Otomatik Yağma");
define("PLUS36", "4.Tarla Bulucu");
define("PLUS37", "5.Hızlı İnşaat");
define("PLUS38", "6.x3 Ticaret");
define("PLUS39", "Tüm işlevler ücretsizdir!");
define("PLUS40", "Tüm oyun");
define("PLUS41", "Aktif");



//active
define("ACTIV1", "Merhaba");
define("ACTIV2", "Kayıt başarılı oldu. Önümüzdeki birkaç dakika içinde, erişim bilgilerini içeren bir e-posta alacaksınız.<br /><br />

	E-posta aşağıdaki adrese gönderilecektir:");

define("ACTIV3", "Hesabınızı etkinleştirmek için kodu girin veya e-postanızdaki bağlantıya tıklayın.");
define("ACTIV4", "Activation code");
define("ACTIV5", "E-posta alınmadı mı?");
define("ACTIV6", "Bazen e-posta spam klasörüne taşınır. Daha fazla yardım için tıklayın ");
define("ACTIV7", "buraya");
define("ACTIV8", "Kaydı geri alabilir ve farklı bir <u> e-posta adresiyle yeniden kaydolabilirsiniz</u>.
	Ardından aktivasyon kodu tekrar gönderilecek");
define("ACTIV9", "Hesabınız başarıyla aktive edildi.</p><p class=\"f9\">Bu bağlantıyı takip edin <a href=\"login.php\">Giriş Yap</a>");
define("ACTIV10", "Ya şifre yanlış ya da kayıt zaten silinmiş.");
//ERRORS
define("USRNM_EMPTY", "(Kullanıcı adı boş)");
define("USRNM_TAKEN", "(Ad zaten kullanılıyor.)");
define("USRNM_SHORT", "(Min 3 Karakter)");
define("USRNM_CHAR", "(Yalnızca geçerli karakterler А-Я,A-Z,0-9)");
define("PW_EMPTY", "(Şifre boş)");
define("PW_SHORT", "(min. 4 uzunluk)");
define("PW_INSECURE", "(Parola güvensiz. Lütfen daha güvenli bir tane seçin.)");
define("EMAIL_EMPTY", "(E-posta Boş)");
define("EMAIL_INVALID", "(Geçersiz e-posta adresi)");
define("EMAIL_TAKEN", "(E-posta zaten kullanımda)");
define("TRIBE_EMPTY", "<li>Lütfen bir Halk seçin.</li>");
define("AGREE_ERROR", "<li>Kaydolmak için oyun kurallarını ve genel hüküm ve koşulları kabul etmelisiniz.</li>");
define("LOGIN_USR_EMPTY", "İsim giriniz.");
define("LOGIN_PASS_EMPTY", "Şifre girin.");
define("EMAIL_ERROR", "E-posta mevcut ile eşleşmiyor");
define("PASS_MISMATCH", "Parolalar uyuşmuyor");
define("ALLI_OWNER", "Lütfen silmeden önce bir ittifak sahibi atayın");
define("SIT_ERROR", "Bakıcı zaten ayarlandı");
define("USR_NT_FOUND", "İsim mevcut değil.");
define("LOGIN_PW_ERROR", "Parola yanlış.");
define("WEL_TOPIC", "Yararlı ipuçları ve bilgiler ");
define("ATAG_EMPTY", "Etiket boş");
define("ANAME_EMPTY", "İsim boş");
define("ATAG_EXIST", "Etiket alındı");
define("ANAME_EXIST", "Alınan isim");


define("CUR_PROD", "Mevcut üretim");
define("NEXT_PROD", "Düzeyde üretim ");

//BUILDINGS
define("B1", "Orman");
define("B1_DESC", "Oduncu, kereste üretmek için ağaçları keser. Teklifi1 ne kadar uzatırsanız, onun tarafından o kadar fazla kereste üretilir.");
define("B2", "Tuğla Ocağı");
define("B2_DESC", "Tuğla Ocağı burada üretilir. Seviyesini artırarak kil üretimini arttırırsınız.");
define("B3", "Demir Madeni");
define("B3_DESC", "Burada madenciler değerli demir kaynağı üretirler. Madenin seviyesini yükselterek demir üretimini arttırırsınız.");
define("B4", "Tarla");
define("B4_DESC", "Nüfusunuzun yemeği burada üretiliyor. Çiftliğin seviyesini yükselterek Tahıl üretimini arttırırsınız.");

//DORF1
define("LUMBER", "Odun");
define("CLAY", "Tuğla");
define("IRON", "Demir");
define("CROP", "Tahıl");
define("LEVEL", "Level");
define("CROP_COM", CROP . " Tüketimi");
define("PER_HR", "Saatte");
define("PROD_HEADER", "Üretim");
define("ANNOUNCEMENT", "Duyuru");
define("GO2MY_VILLAGE", "Go to my village");
define("VILLAGE_CENTER", "Köy Merkezi");
define("FINISH_GOLD", "Bu köydeki tüm inşaat ve araştırma siparişlerini 2 Altın karşılığında hemen bitir?");
define("WAITING_LOOP", "(bekleme döngüsü)");
define("HRS", "(Saat.)");
define("DONE_AT", "de yapılır");
define("CANCEL", "İptal");
define("LOYALTY", "Sadakat");
define("CALCULATED_IN", "Hesaplanan");
define("SEVER_TIME", "Sunucu Süresi:");
define("HAMMADDELER", "Hammaddeler");
define("carkinfo", "Çevirme hakkınız");
define("cmenu1", "Çark Çevir");
define("cmenu2", "Satın Al");
define("cevir", "Çevir");
define("carkyok", "Üzgünüz! Çark Hakkınız Bulunmamaktadır.");
//DORF1
define("alisveris", "Alışveriş");
define("satinalma", "Satın Alma Bölümü");
define("altinvecark", "ALTIN VE ÇARK SATIN AL");
define("carkcevir", "Çark Çevir");
define("natars", "Natarlar");
define("bolhayvan", "Bol hayvanlı vaha");
define("flag", "Ülke");
define("rank", "Rütbe");
define("mesafe", "Mesafe");

//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
define("U0", "Kahraman");

//ROMAN UNITS
define("U1", "Lejyoner");
define("U2", "Pretoryan");
define("U3", "Emperyan");
define("U4", "Equites Legati");
define("U5", "Equites Imperatoris");
define("U6", "Equites Caesaris");
define("U7", "Koçbaşı");
define("U8", "Ateş Mancınığı");
define("U9", "Senator");
define("U10", "Göçmen");

//TEUTON UNITS
define("U11", "Tokmak Sallayan");
define("U12", "Mızrakçı");
define("U13", "Balta Sallayan");
define("U14", "Casus");
define("U15", "Paladin");
define("U16", "Toyton");
define("U17", "Koçbaşı");
define("U18", "Mancınık");
define("U19", "Reis");
define("U20", "Göçmen");

//GAUL UNITS
define("U21", "Phalanx");
define("U22", "Kılıçlı");
define("U23", "Casus");
define("U24", "Toytatın Şimşeği");
define("U25", "Druyid");
define("U26", "Heduan");
define("U27", "Koçbaşı");
define("U28", "Mancınık");
define("U29", "Kabile Reisi");
define("U30", "Göçmen");
define("U99", "tuzaklar");

//NATURE UNITS
define("U31", "Sıçan");
define("U32", "Örümcek");
define("U33", "Yılan");
define("U34", "Yarasa");
define("U35", "Yaban domuzu");
define("U36", "Kurt");
define("U37", "Ayı");
define("U38", "Timsah");
define("U39", "Kaplan");
define("U40", "Fil");

//NATARS UNITS
define("U41", "Sipahi");
define("U42", "Kalkan Kıran");
define("U43", "Natar Muhafızı");
define("U44", "Natar Kartalı");
define("U45", "Baltalı");
define("U46", "Natar Şövalyesi");
define("U47", "Savaş Fili");
define("U48", "Kurşun Mancınığı");
define("U49", "Natar Prensi");
define("U50", "Göçmen");

//Egyptian UNITS
define("U51", "Köle Milis");
define("U52", "Kül Bekçisi");
define("U53", "Kopeş Savaşçısı");
define("U54", "Sopdu Kaşifi");
define("U55", "Anhur Bekçisi");
define("U56", "Savaş Arabalı Reşef");
define("U57", "Koçbaşı");
define("U58", "Taş Mancınığı");
define("U59", "Eyalet Başkanı");
define("U60", "Yerleşimci");

//Huns UNITS
define("U61", "Paralı Asker");
define("U62", "Okçu");
define("U63", "Gözcü");
define("U64", "Bozkır Atlısı");
define("U65", "Nişancı");
define("U66", "Akasir Atlısı");
define("U67", "Koçbaşı");
define("U68", "Mancınık");
define("U69", "Logades");
define("U70", "Yerleşimci");


define("U99", "Traps");
//INDEX.php

define("PLAYER_STATISTICS", "Oyuncu istatistikleri");


define("P_ONLINE", "Online Oyuncular ");
define("P_TOTAL", "Toplam Oyuncular ");
define("CHOOSE", "Lütfen bir sunucu seçin.");
//define("STARTED"," The server started ". round((time()-COMMENCE)/86400) ." days ago.");

//ANMELDEN.php
define("NICKNAME", "Kullanıcı Adı");

define("INVITED", "(Varsa) tarafından davet edildi");
define("EMAIL", "E-posta");
define("PASSWORD", "Şifre");
define("ROMANS", "Romalılar");
define("TEUTONS", "Cermenler");
define("GAULS", "Galyalılar");
define("NW", "Kuzey Batı");
define("NE", "Kuzey Doğu");
define("SW", "Güney Batı");
define("SE", "Güney Doğu");
define("RANDOM", "random");
define("ACCEPT_RULES", " Oyun kurallarını ve genel kabul ediyorum <a href='rules.php' target='_blank'>Şartlar</a> ve koşullar.");
define("ONE_PER_SERVER", "Her oyuncunun sunucu başına yalnızca BİR hesabı olabilir.");
define("BEFORE_REGISTER", "Bir hesap açmadan önce <a href='../anleitung.php' target='_blank'>Kurallar</a>");
define("MULTIBAN", "Bir bilgisayar-1 hesap.Tüm çoklu hesaplar yasaklanacak!");
define("HOURS", "Saat");
define("SIGN1", "Kayıt yaptır");
define("SIGN2", "Kabile seçin");
define("SIGN3", "Bölge Seç");
define("SIGN4", "Ana sayfa");
define("SIGN5", "Kayıt yaptır");
define("SIGN6", "Giriş Yap");
define("SIGN7", "Hesabı Etkinleştir");
define("SIGN8", "Banka");

//QUESTS
define("QST0", "Arayışı");
define("QST1", "Görev");
define("QST2", "Oduncu");
define("QST3", "Kereste Fabrikası Level <b>5</b>");
define("QST4", "Kırpma Arazisi");
define("QST5", "Kırpma Arazisi Seviyesi oluşturun <b>3</b>");
define("QST6", "Demir ve Tuğla");
define("QST7", "Tuğla Çukuru ve Demir madeni inşa etmek <b>4</b> Level");
define("QST8", "Ana Bina");
define("QST9", "Yapı Ana Bina Seviyesi <b>8</b>");
define("QST10", "Ekonomik");
define("QST11", "Ambar ve granary Seviye oluşturun <b>4</b>,Pazar Yeri Seviyesi <b>1</b>");
define("QST12", "Militarizasyon");
define("QST13", "Ralli noktası Düzeyi oluşturun <b>1</b>, Barracks Level <b>3</b>");
define("QST14", "Güvenilir Koruma");
define("QST15", "Yetiştir 100 adet ve Duvar seviyesi inşa <b>8</b>");
define("QST16", "İlk Kan");
define("QST17", "Al <b>1000</b> Saldırı noktaları.");
define("QST18", "Yaşasın Socium!");
define("QST19", "Gruplarımızdan birini ziyaret edin");
define("QST20", "Görevlerin sonu!");
define("QST21", "Şu anda başka arayış yok. Gelecekte daha fazla görevler olacak, ama şimdi-iyi oyun!:)");
define("QST22", "Mükemmel! Yor ödül:");
define("QST23", "Sonraki Göreve!");

//ATTACKS ETC.
define("TROOP_MOVEMENTS", "Asker Hareketleri:");
define("ARRIVING_REINF_TROOPS", "Gelen Destek Askerleri");
define("ARRIVING_REINF_TROOPS_SHORT", "Destek.");
define("OWN_ATTACKING_TROOPS", "Kendi saldıran askerler");
define("ATTACK", "Saldırı");
define("OWN_REINFORCING_TROOPS", "Kendi Destek Askerleri");
define("TROOPS_DORF", "Asker Sayısı:");


//LOGIN.php
define("COOKIES", "Giriş Yapmak için çerezlerin etkinleştirilmiş olması gerekir. Bu bilgisayarı başka larıyla paylaşıyorsanız, kendi güvenliğiniz için her oturumdan sonra oturumu açmanız gerekir.");
define("NAME", "Adı");
define("PW_FORGOTTEN", "Parola unutuldu?");
define("PW_REQUEST", "Daha sonra e-posta adresinize gönderilecek yeni bir istekte bulunabilirsiniz.");
define("PW_GENERATE", "Gerekli tüm alanlar");
define("EMAIL_NOT_VERIFIED", "E-posta doğrulanmadı!");
define("EMAIL_FOLLOW", "Hesabınızı etkinleştirmek için bu bağlantıyı izleyin.");
define("VERIFY_EMAIL", "E-postayı doğrula.");
define("LOGIN_SERVER_START", "<center>Sunucun Başlamasına Kalan Zaman</center>");
define("LOGIN_FOR_GAME", "Giriş");

//404.php
define("NOTHING_HERE", "Burada bir şey yok.!");
define("WE_LOOKED", "404 kez baktık ama bir şey bulamadık.");

//TIME RELATED
define("CALCULATED", "Hesaplanan");
define("SERVER_TIME", "Sunucu süresi:");

//MASSMESSAGE.php
define("MASS", "İleti İçeriği");
define("MASS_SUBJECT", "Konu:");
define("MASS_COLOR", "İleti rengi:");
define("MASS_REQUIRED", "Gerekli tüm alanlar");
define("MASS_UNITS", "Görüntüler (birimler):");
define("MASS_SHOWHIDE", "Göster/Gizle");
define("MASS_READ", "Bunu okuyun: smilie ekledikten sonra, sola veya sağa sonra sayı eklemeniz gerekir aksi takdirde görüntü çalışmaz");
define("MASS_CONFIRM", "Onay");
define("MASS_REALLY", "Gerçekten MassIGM göndermek istiyor musunuz?");
define("MASS_ABORT", "Şu anda iptal etme");
define("MASS_SENT", "Toplu IGM gönderildi");

// Menu items

define("GAME_TOUR", "Oyun Turu");

define("FORUM_LINK", "http://forum.travian.com");
define("MORE_GAMES", "Daha fazla oyun");
define("REGISTER", "Kayıt yaptır");
define("LOGIN", "Giriş");
define("MANUAL", "El ile");
define("TUTORIAL", "Öğretici");

define("FAQ", "FAQ");
define("SPIELREGELN", "Oyun Kuralları");
define("AGB", "Terim");

define("LINKS", "Bağlantı");

define("INSTRUCTIONS", "Talimatları");
define("MULTIHUNTER_PANEL", "Multihunter Panel");
define("UPDATE_TOP_TEN", "En İyi 10'u Güncelle");

define("HELP", "Yardım");

// Index


//profile
define("PROFHEAD", "");
define("ACC1", "Parolayı değiştirme");
define("ACC2", "Eski parola");
define("ACC3", "Yeni parola");
define("ACC4", "E-postayı değiştirme");
define("ACC5", "Lütfen eski ve yeni e-posta adreslerinizi girin. Daha sonra buraya girmeniz gereken her iki e-posta adresinde nisbete bir kod snippet alacaksınız.");
define("ACC6", "Eski e-posta");
define("ACC7", "Yeni e-posta");
define("ACC8", "Hesap bakıcıları");
define("ACC9", "Bir bakıcı adınızı ve şifrenizi kullanarak hesabınıza giriş yapabilir. En fazla iki bakıcınız olabilir.");
define("ACC10", "Bakıcının adı");
define("ACC11", "Bakıcın yok..");
define("ACC12", "<td class=\"note\" colspan=\"2\">For delete sitter click <img class=\"del\" src=\"img/x.gif\" title=\"del\" alt=\"del\"></td>");
define("ACC13", "Hesabı silme");
define("ACC14", "Hesabınızı buradan silebilirsiniz.<br> İptal işlemine başladıktan sonra hesabınızın iptalinin tamamlanması 24 saat sürer.<br> Bu işlemi ilk 12 saat içinde iptal edebilirsiniz!<br>");
define("ACC15", "Hesabı Silme?");
define("ACC16", "Şifre girin:");
define("ACC17", "Evet");
define("ACC18", "Hayır");
define("ACC19", "Hesabın Silinmesine Kalan:");
define("ACC20", "Bunlar için oturduğunuz hesaplar.");
define("ACC21", "Bakıcı");
define("SAVE", "Kaydetmek");
//menu prof
define("PROFM1", "Yönetim");
define("PROFM2", "Profil");
define("PROFM3", "Bağlantı");
define("PROFM4", "Hesabı");
define("PROFM5", "Giriş");
define("PROFM6", "Durum");
define("PROFM7", "Kim");
define("PROFM8", "Son Etkinlik");
define("PROFM9", "Sahibi");
define("PROFM10", "Yardımcısı");
define("PROFM11", "Çift");
define("PROFM12", "Sen");
//OVERVIEW
define("OVERVIEW1", "Oyuncu");
define("OVERVIEW2", "Şey");
define("OVERVIEW3", "Açıklama");
define("OVERVIEW4", "Rütbe");
define("OVERVIEW5", "Halk");
define("OVERVIEW6", "Birlik");
define("OVERVIEW7", "Nüfus");
define("OVERVIEW8", "Köyler");
define("OVERVIEWLIG", "Lig");
define("OVERVIEWRANK", "Rütbe");
define("OVERVIEWFLAG", "Ülke");
define("OVERVIEW9", "Yaş");
define("OVERVIEW10", "Erkek");
define("OVERVIEW11", "Bayan");
define("OVERVIEW12", "Cinsiyet");
define("OVERVIEW13", "Konum");
define("OVERVIEW14", "Profil");
define("OVERVIEW15", "İleti yazma");
define("OVERVIEW16", "Köy");
define("OVERVIEW17", "Adı");
define("OVERVIEW18", "Nüfus");
define("OVERVIEW19", "Koordinatları");
define("OVERVIEW20", "Sermaye");
define("OVERVIEW21", "Yasaklı");
define("OVERVIEW22", "Doğum günü");
define("OVERVIEW23", "Ocak");
define("OVERVIEW24", "Şubat");
define("OVERVIEW25", "Mart");
define("OVERVIEW26", "Nisan");
define("OVERVIEW27", "Mayıs");
define("OVERVIEW28", "Haziran");
define("OVERVIEW29", "Temmuz");
define("OVERVIEW30", "Ağustos");
define("OVERVIEW31", "Eylül");
define("OVERVIEW32", "Kasım");
define("OVERVIEW33", "Aralık");
define("OVERVIEW35", "Madalya");
define("OVERVIEW36", "Kategori");
define("OVERVIEW37", "Hafta");
define("OVERVIEW38", "Kod");
define("OVERVIEW39", "Erkek");
define("OVERVIEW40", "Bayan");
//medals
define("MEDAL1", "Haftanın Saldırıda ");
define("MEDAL2", "Haftanın Savunmada ");
define("MEDAL3", "Haftanın Başarıda ");
define("MEDAL4", "Haftanın Yağmalamada ");
define("MEDAL5", "Hem Saldırı ve Savunucuları Top 10");
define("MEDAL6", "Saldırganların En İyi 3'ü ");
define("MEDAL7", "Top 3 Savunucuları ");
define("MEDAL8", "Pop dağcıların en iyi 3'ü ");
define("MEDAL9", "Top 3 Soyguncular ");
define("MEDAL10", "Rank Climber ");
define("MEDAL11", "En iyi 3 Rank dağcılar ");
define("MEDAL12", "En Iyi 10 Rank Saldırganlar ");
define("MEDAL20", "Gün");
define("DNYA", "En Iyileri");
define("TIMES", "Kez");
define("MEDAL15", "");
define("MEDAL16", "");
define("MEDAL17", "Kahramanı ");
define("MEDAL18", "Tüccar ");
define("MEDAL19", "arka arkaya");
define("BONUS", "Bonus");
//statistic..zzzest'
define("STATISTIC1", "Oyuncu İstatistikleri");
define("STATISTIC2", "Oyuncu bulunamadı");
define("STATISTIC3", "Bulunamadı");
define("STATISTIC4", "Aliances İstatistik");
define("STATISTIC5", "Birlik bulunamadı");
define("STATISTIC6", "Puan");
define("STATISTIC7", "Birliklar İstatistik(Kapalı)");
define("STATISTIC8", "Birliklar İstatistik(kesinlikle)");
define("STATISTIC9", "Top");
define("STATISTIC10", "Kahraman İstatistik");
define("STATISTIC11", "Tecrübe");
define("STATISTIC12", "Kahraman bulunamadı");
define("STATISTIC13", "Oyuncu İstatistikleri(Kapalı)");
define("STATISTIC14", "Oyuncular İstatistik (kesinlikle)");
define("STATISTIC15", "Oyuncu İstatistikleri(Romalılar)");
define("STATISTIC16", "Oyuncular İstatistik(Cermenler)");
define("STATISTIC17", "Oyuncu İstatistikleri(Galyalılar)");
define("STATISTIC18", "Depo");
define("STATISTIC19", "Oyuncu");
define("STATISTIC20", "Toplam kayıtlı");
define("STATISTIC21", "Aktif oyuncular");
define("STATISTIC22", "Çevrimiçi oyuncular");
define("STATISTIC23", "Halklar");
define("STATISTIC24", "Halk");
define("STATISTIC25", "Kayıtlı");
define("STATISTIC26", "Yüzde");
define("STATISTIC27", "<b>Dünya harikası");
define("STATISTIC28", "Oyuncu");
define("STATISTIC29", "Birlik");
define("STATISTIC30", "Kahraman");
define("STATISTIC31", "Genel");
define("STATISTIC32", "İstatistik");
define("STATISTIC33", "veya");
define("STATISTIC34", "Geri");
define("STATISTIC35", "İleri");
define("STATISTIC36", "Oyuncu İstatistikleri (Canavarlar)");
define("STATISTIC37", "Savunma");
define("STATISTIC39", "General");
define("STATISTIC38", "Köy");
//alliance
define("ALLIANCE1", "Seçenekler");
define("ALLIANCE2", "Pozisyona ata");
define("ALLIANCE3", "İsmini değiştir");
define("ALLIANCE4", "Oyuncuyu At");
define("ALLIANCE5", "Açıklamayı Değiştir");
define("ALLIANCE6", "Diplomasi");
define("ALLIANCE7", "Oyuncuyu Davet Et");
define("ALLIANCE8", "Birliktan at");
define("ALLIANCE9", "Birlik Etkinlikleri");
define("ALLIANCE10", "Etkinlik");
define("ALLIANCE11", "Tarih");
define("ALLIANCE12", "Birliktan çıkmak için güvenlik nedeniyle şifrenizi tekrar girmeniz gerekir.");
define("ALLIANCE13", "Birlik diplomasisi");
define("ALLIANCE14", "bir konfederasyon önermek");
define("ALLIANCE15", " saldırmazlık anlaşması yapmak");
define("ALLIANCE16", " savaş ilan etmek");
define("ALLIANCE17", "Manuel");
define("ALLIANCE18", "Birlik açıklamasında bağlantıları otomatik olarak görmek istiyorsanız, yazın <span class=\"e\">[diplomatie]</span> açıklamaya, <span class=\"e\">[ally]</span>, <span class=\"e\">[nap]</span> ve <span class=\"e\">[war]</span> da mümkündür.");
define("ALLIANCE19", "Kendi teklifleri");
define("ALLIANCE20", "Yabancı teklifler");
define("ALLIANCE21", "Mevcut ilişkiler");
define("ALLIANCE22", "Conf.");
define("ALLIANCE23", "Güneş");
define("ALLIANCE24", "Savaş");
define("ALLIANCE25", "durum");
define("ALLIANCE26", "İzin ekleniyor");
define("ALLIANCE27", "Toplu mesaj");
define("ALLIANCE28", "Burada oyunculara ittifak haklarınız ve mevkilerinizden verebilirsiniz.");
define("ALLIANCE29", "Saldırılar");
define("ALLIANCE30", "Burada oyuncuları ittifakınızdan atabilirsiniz.");
define("ALLIANCE31", "Davet edildi");
define("ALLIANCE32", "konfederasyonlar");
define("ALLIANCE33", " tarafından davet edildi ");
define("ALLIANCE34", " daveti reddetti");
define("ALLIANCE35", " için daveti sildi");
define("ALLIANCE36", " ittifaka katıldı");
define("ALLIANCE37", "Birlikta çok fazla insan var");
define("ALLIANCE38", "Alliance kurucusu");
define("ALLIANCE39", "Birlik tarafından kuruldu");
define("ALLIANCE40", " ittifak adını değiştirdi");
define("ALLIANCE41", " ittifaka katıldı");
define("ALLIANCE42", " ittifak tanımını değiştirdi");
define("ALLIANCE43", " izinleri değiştirdi");
define("ALLIANCE44", " ittifaktan ayrıldı");
define("ALLIANCE45", " bir konfederasyon önermek");
define("ALLIANCE46", " saldırmazlık anlaşması yapmak");
define("ALLIANCE47", " savaş ilan etmek");
define("ALLIANCE48", "Davet gönderildi");
define("ALLIANCE49", "Onlara zaten bir davetiye gönderdin");
define("ALLIANCE50", "hacker? evet?");
define("ALLIANCE51", "Birlik mevcut değil");
//crop finder or nice place for ddos,lol
define("FINDER1", "Burada Tahıl vahaları olan 9 ve 15 Tahıl tarlalarına sahip köyleri arayabilirsiniz.");
define("FINDER2", "Arama");
define("FINDER3", "Başlangıç ​​pozisyonu");
define("FINDER4", "Tür");
define("FINDER5", "Vaha");
define("FINDER6", "Boş");
define("FINDER7", "Boş");
define("FINDER8", "Mesafe");
define("FINDER9", "Durum");
define("FINDER10", "İşgal Eden");
define("FINDER11", "9 ve 15 ekin tarlası olan köyleri arama");
define("FINDER12", "Oases");
define("FINDER13", "");
define("FINDER14", "");
define("FINDER15", "");
define("FINDER16", "");
define("FINDER17", "");
//Otpravka figni
define("OTPRAV1", "Asker gönder");
define("OTPRAV2", "Güçlendirme");
define("OTPRAV3", "Saldırı");
define("OTPRAV4", "Saldırı");
define("OTPRAV5", "İzci");
define("OTPRAV6", "İçin Destek");
define("OTPRAV7", "Saldırı");
define("OTPRAV8", "Saldırı");
define("OTPRAV9", "İzci");
define("OTPRAV10", "İzci kaynağı ve Askerler<br>");
define("OTPRAV11", "İzci Askerleri ve savunma eşyaları");
define("OTPRAV12", "Hedef");
define("OTPRAV13", "Rastgele");
define("OTPRAV14", "Bir bira partiniz var, sadece rastgele hedefler.");
define("OTPRAV15", "(mancınık tarafından saldırıya uğrayacak)");
define("OTPRAV16", "Eser");
define("OTPRAV17", "Geldi");
define("OTPRAV18", "Kullanıcı şu anda yeni başlayanlar için korumaya sahip");
define("OTPRAV19", "Başka bir oyuncunun herhangi bir saldırısı, başlangıç ​​korumanızı kaldıracaktır.");
define("OTPRAV20", "");

//Artefacti
define("ART1", "Mimarlar hafif sır");
define("ART2", "Mimarlar büyük sır");
define("ART3", "Mimarların eşsiz sırrı");
define("ART4", "Hafif titan botlar");
define("ART5", "Harika titan botları");
define("ART6", "Eşsiz titan botları");
define("ART7", "Kartalların hafif gözleri");
define("ART8", "Kartalların harika gözleri");
define("ART9", "Kartalların eşsiz gözleri");
define("ART10", "Eğitmenler hafif yetenek");
define("ART11", "Eğitmenler büyük yetenek");
define("ART12", "Eğitmenlerin eşsiz yetenekleri");
define("ART13", "Depolama master planı");
define("ART14", "WW İnşaat Planı");
define("ART15", "Binaya erişim.");
define("ART16", "Bu eser, köyünüzü mancınıklardan ve koçlardan koruyor. Onun sayesinde tüm binalar ve duvar daha da güçlenir.");
define("ART17", "Bu eser, Askerlerinizin hareketini hızlandırır.");
define("ART18", "Bu eser, gözcülerinizi güçlendirir. Tüm izciler, köyde olmanın yanı sıra onu başka bir köye keşfe göndererek bu bonusu alır. Ayrıca size yapılan bir saldırıda, düşman Askerlerinin toplama noktası tipini görebilirsiniz.");
define("ART19", "Artefakt, kışlalarda, ahırlarda ve atölyede askerlerin eğitimini azaltır.");
define("ART20", "Bu eser size büyük bir depo ve büyük bir tahıl ambarı inşa etme fırsatı verir. Artefakt, her iki binayı da iyileştirmek için gereklidir.");
define("ART21", "Wonder'ın yapımı için gerekli olan eser.");
//karta vrode
define("BAN", "Yasaklandı");
define("KAR1", "Terk edilmiş vadi");
define("KAR2", "Boş vaha");
define("KAR3", "İşgal edilmiş vaha");
define("KAR4", "<br> bilgi yok.");
define("KAR5", "Yeni Köy Bulundu");
define("KAR6", "Kültür Puanları");
define("KAR7", "Yerleşimciler");
define("KAR8", "toplanma noktası inşa etmek");
define("KAR9", "Asker gönder");
define("KAR10", "yeni başlayanlar için koruma");
define("KAR11", "Tüccara gönder");
define("KAR12", "Çiftlik listesine ekle");
define("KAR13", "Çiftlik listesine ekle (zaten)");
define("KAR14", "Çiftlik listesine ekle (maks. Sınır)");
define("KAR15", "Arazi dağıtımı");
define("KAR16", "Merkezi harita");
define("KAR17", "pazar yeri inşa etmek");
define("KAR18", "Harita");
define("KAR19", "Arama");
define("KAR20", "Sık kullanılan hedeflerin listesi");
define("KAR21", "Durum");
define("KAR22", "Son Saldırı");
define("KAR23", "Ölü");
define("KAR24", "Ödül");

//ss6Ilo4ki EBAN6IE:D
define("LINK1", "Bağlantı");
define("LINK2", "Adres");
define("LINK3", "");
define("LINK4", "");
//pravila anti-gad6I
define("RULES1", "Oyunun kuralları");
define("RULES2", "Bu oyun kuralları, zazugame.com yönetimi tarafından geliştirilen kurallardır. Hesap bloke etme durumunda ve ayrıca yasaklanmış eylemlerin daha iyi anlaşılması için Multhunter, §3'e bakınız.<br>
Oyunun kurallarını atlamak bir ihlaldir. Kurallar tek tiptir ve hesaplarını silen veya zaten silmekte olan oyuncular da dahil olmak üzere tüm oyuncular tarafından izlenmelidir.");
define("RULES3", "§ 1 Hesap");
define("RULES4", "§1.1. Her oyuncunun aynı oyun sunucusunda yalnızca bir hesaba sahip olma hakkı vardır.");
define("RULES5", "§1.2. Oyun hesabının sahibi, e-posta adresi hesap ayarlarında kayıtlı olan oyuncudur. E-posta adresinizi hesap profilinizden (Profil »Hesap) değiştirebilirsiniz.");
define("RULES6", "§1.3. Parolanın hesaptan aynı sunucuda oynayan kişilere aktarılması yasaktır. Diğer oyuncuların hesaplarına sahibinin şifresini kullanarak giriş yapmak da yasaktır. Bu tür eylemler, aynı oyun sunucusunda iki veya daha fazla hesaba sahip olmak olarak sınıflandırılır. ");
define("RULES7", "Oyuncuların hiçbirinin aynı oyun sunucusunda başka hesaplara sahip olmaması ve / veya başka hesaplarda oynamaması koşuluyla, birden fazla oyuncunun aynı hesapta oynamasına izin verilir.");
define("RULES8", "Aynı şifrelerin, paylaşılan bir bilgisayar ve / veya ikame kullanılırken hesaplarda kullanılması da yasaktır.");
define("RULES9", "§1.4. Hesap sahibi, hesabına olan her şeyden tek başına sorumludur.");
define("RULES10", "§ 2 Oyun etiği");
define("RULES11", "§2.1. Hesapların, birlik birimlerinin, kaynakların veya oyuncu eylemlerinin satılması ve satın alınması yasaktır. Bu aynı zamanda hesaba yatırılan süre için de geçerlidir.");
define("RULES12", "§2.2. Oyunun herhangi bir yerinde ve herhangi bir şekilde diğer oyuncular hakkında hakaret, aşağılama veya diğer şüpheli yorumlar yasaktır. Küfür kullanımı (örtülü dahil) ve gerçek hayatla ilgili her türlü tehdit de yasaktır.");
define("RULES13", "§2.3. zazugame.com'in resmi yapılarını taklit etmek, ahlaki ve siyasi normlar açısından saldırgan ve yanlış isim, isim kullanımı yasaktır.");
define("RULES14", "§2.4. Oyun Profillerinin Ve Ittifak Profillerinin Derlenmesine Yalnızca Rusça Ve İngilizce Olarak Izin Verilir.");
define("RULES15", "§2.5. Her türlü reklam, spam veya zincir mektup yasaktır.");
define("RULES16", "§2.6. Oyunculardan, çoklu avcılardan veya topluluk yöneticilerinden oyun mesajları, e-postalar göndermek yasaktır.");
define("RULES17", "§2.7. Oyuncuları oyunun kurallarını çiğnemeye, silmeye, şifre aktarmaya, aynı hesapta birlikte oynamaya, bir hesabı devretme talebinde bulunmak veya yedek olarak belirtmek yasaktır.");
define("RULES18", "§2.8. Oyunda herhangi bir fayda sağlamak için hataların kullanılması yasaktır. Oyuncunun faaliyetlerini otomatikleştiren ve / veya taklit eden ve ayrıca oyunun görünümünü herhangi bir şekilde değiştiren herhangi bir programın kullanılması yasaktır. Bir istisna, grafik paketlerinin kullanılmasıdır.");
define("RULES19", "§ 3 İdari düzenlemeler");
define("RULES20", "§3.1. Kuralları çiğnemenin cezalandırılma yöntemi multihunters ve / veya idare tarafından belirlenir. Her durumda ceza, ihlalden elde edilen faydayı aşacaktır. Herhangi bir istisna olmaksızın, kuralları çiğneyen tüm hesaplar cezalandırılacaktır. Blokaj sırasında kaybolan hammaddeler, binalar, köyler veya askerler geri ödenmez. Engelleme ve xtravian.net Plus'a erişim süresi nedeniyle kaybedilen altın iade edilmez. Harfleri işlerken ve cezaları belirlerken altın alan oyuncular için bir ayrıcalık yoktur.");
define("RULES21", "§3.2. Multihunter, kural ihlalleri için tek temas noktasıdır. Oyuncular, bir multihunter'a mesaj göndererek haklı olduklarını kanıtlamak için argümanlar sağlayabilirler. Çok oyuncunun kararıyla anlaşmazlık durumunda, oyuncu yönetimle iletişime geçebilir.");
define("RULES22", "İhlaller ve cezalarla ilgili tüm sorular zazugame.com ekibi tarafından yalnızca hesap sahibi ile çözümlenir.");
define("RULES23", "§3.3. zazugame.com ekibi, oyunun kurallarını herhangi bir zamanda değiştirme hakkını saklı tutar.");
define("PERC", "Yüzde");

$lang['header'] = array(
	0 => 'Kaynaklar',
	1 => 'Köy Merkezi',
	2 => 'Harita',
	3 => 'İstatistik',
	4 => 'Raporlar',
	5 => 'gönderiler',
	6 => 'Plus Menu'
);

$lang['buildings'] = array(
	1 => "Oduncu",
	2 => "Tuğla Ocağı",
	3 => "Demir madeni",
	4 => "Tarla",
	5 => "Oduncu fabrikası",
	6 => "Tuğla fabrikası",
	7 => "Demir dökümhanesi",
	8 => "Tahıl değirmeni",
	9 => "Fırın",
	10 => "Depo",
	11 => "Tahıl ambarı",
	12 => "Zırh Dökümhanesi",
	14 => "Turnuva Meydanı",
	15 => "Merkez Binası",
	16 => "Askeri Üst",
	17 => "Pazar yeri",
	18 => "Elçilik",
	19 => "Kışla",
	20 => "Ahır",
	21 => "Atölye",
	22 => "Akademi",
	23 => "Sığınak",
	24 => "Belediye binası",
	25 => "Köşk",
	26 => "Saray",
	27 => "Hazine",
	28 => "Ticaret Ofisi",
	29 => "Büyük Kışlalar",
	30 => "Büyük Ahır",
	31 => "Şehir duvarı",
	32 => "Toprak Duvarı",
	33 => "Palisade",
	34 => "Taş ustası",
	35 => "Bira fabrikası",
	36 => "Tuzakçı",
	37 => "Taverna",
	38 => "Büyük Depo",
	39 => "Büyük Tahıl Ambarı",
	40 => "Dünya harikası",
	41 => "At İçme Havuzu",
	42 => "Taş duvar",
	43 => "Eğreti Duvar",
	44 => "Komuta Merkezi",
	45 => "İdrar yolları"
);

$lang['desc'][1] = array(0 => 'Oduncu, odun üretmek için ağaçları keser. Seviyesinin yüksekliğine göre daha fazla odun keser ve hazırlar.<br>
Bir marangozhane inşa ederek üretimi daha da arttırabilirsiniz.');
$lang['desc'][2] = array(0 => 'Tuğla ocaklarında tuğla üretilir. Her tuğla ocağı seviyesinin yüksekliğine göre tuğla üretir. Seviye artırıldıkça üretim de artar.<br>
Bir tuğla fabrikası inşa ederek üretimi daha da arttırabilirsiniz.');
$lang['desc'][3] = array(0 => 'Demir madenlerinden demir madeni çıkarılır. Seviye artırıldıkça çıkarılan demir miktarı da artar.<br>
Bir dökümhane inşa ederek üretimi daha da arttırabilirsiniz.');
$lang['desc'][4] = array(0 => 'Tarlada yetiştirilen tahıllar köy halkının beslenmesinde köyün geliştirilmesinde kullanılır. Tarlanın seviyesi artırıldıkça, tarlada üretilen tahıl miktarı da artar.<br>
Değirmen ve ekmek fırını inşa edere tahıl üretiminizi daha da arttırabilirsiniz.');
$lang['desc'][5] = array(0 => 'Marongozhanede oduncunun kestiği odunlar kereste yapılır ve bina yapımında kullanılır. Marangozhanenin seviyesine göre odun üretimi 25% e kadar yükselir.');
$lang['desc'][6] = array(0 => 'Tuğla fırınında tuğla üretilir. Tuğla fırınının seviyesine göre tuğla üretimi 25% e kadar yükselir.');
$lang['desc'][7] = array(0 => 'Dökümhanede demir eritilir. Binanın seviyesine göre Dökümhane demir üretimini yüzde 25 e kadar arttırabilir.');
$lang['desc'][8] = array(0 => 'Un değirmeni üzerinde tahıl melyatına un haline getirilir. Tahıl üretimi, un değirmeninin gelişme düzeyiyle ilişkilidir ve yüzde 25 oranında artırılabilir.');
$lang['desc'][9] = array(0 => 'Ekmek pişirmek için unlu mamuller. Tahıl üretimi, gelişme düzeyiyle ilişkilendirilir ve fırınlar değirmenle birlikte yüzde 50 oranında artırılabilir.');
$lang['desc'][10] = array(0 => 'Hammadde deposunda odun, tuğla ve demir depolanır.Deponun seviyesi artırıldıkça kapasitesi de artar.20. seviyeden sonra ikinci bir hammadde deposu kurulabilir.');
$lang['desc'][11] = array(0 => 'Tahıl ambarında tahıllar depolanır.Tahıl ambarının seviyesi artırıldıkça kapasitesi de artar.20. seviyeden sonra ikinci bir tahıl ambarı kurulabilir.');
$lang['desc'][12] = array(0 => 'Zırh dökümhanesindeki fırınlarda savaşçılarınızın silahları ve zırhları geliştirilir. Bu binanın seviyesi artırıldıkça daha da kaliteli silah ve zırh siparişi verebilirsiniz.');
$lang['desc'][13] = array(0 => 'Dökümhaneler zırh oluşturur, askerlerin performansını artırabilir. Binanın gelişmesiyle zırhın maksimum iyileştirme seviyesi artar.');
$lang['desc'][14] = array(0 => 'Savaşçılarınızda dayanıklılık eğitimi alın. Geliştirme arenası ile Askerlerin 20 alandan daha uzak mesafelerde hareket hızı artar.');
$lang['desc'][15] = array(0 => 'Merkez binasında mimarlar ve inşaat ustaları yaşıyorlar. Bu binanın seviyesinin yüksekliğine göre inşaat süreleri kısalır ve daha kısa sürede yeni binalar kurulabilir.');
$lang['desc'][16] = array(0 => 'KöyAskeri üs askerlerin toplandığı alandır. Askerler buradan başka birlik üyelerini desteklemeye, başka köyleri yağmalamaya veya fethetmeye gönderilir.<br>
Askeri üs sadece köyün merkezinde ayrılmış olan özel bölgeye kurulabilir.<br>
Askeri üs seviye gelişiminden daha az asker saldırdığı takdirde, asker tiplerini tanıyabilirim.');
$lang['desc'][17] = array(0 => 'Pazaryeri aracılığıyla diğer oyuncularla kaynak ticareti yapabilirsiniz. Seviye ne kadar yüksek olursa, daha fazla tüccar mevcut olur.');
$lang['desc'][18] = array(0 => 'Elçilik diplomatların bulunduğu yerdir.1.seviyeden itibaren bir birliğe üye olabilirsiniz ve 3. seviyeden itibaren kendi birliğinizi kurabilirsiniz.');
$lang['desc'][19] = array(0 => 'Kışlada kara birlikleri yetiştirilir. Askerler binanın yapı seviyesi artırıldıkça birlikler daha hızlı yetiştirilirler. ');
$lang['desc'][20] = array(0 => 'Ahırda süvariler yetiştirilir. Ahırın seviyesi yükseltildikçe süvariler daha hızlı yetiştirilirler. ');
$lang['desc'][21] = array(0 => 'Tamirhanede mancınıklar ve koçbaşları üretilir. Tamirhanenin seviyesi ne kadar yüksek olursa, üretim o kadar kısa sürede tamamlanır');
$lang['desc'][22] = array(0 => 'Akademide yeni askeri birlikler yetiştirilir. Bu binanın yapı seviyesi ne kadar yüksek olursa askeri birliklerde o kadar iyi yetiştirilirler.');
$lang['desc'][23] = array(0 => 'Sığınaklarda savaş anında hammaddelerin bir miktarı saklanabilir. Bu hammaddeler aşırılamaz.

1. seviyede her hammaddeden 200 birim saklanabilir. Galya sığınaklarının sığası 1,5 kat daha fazladır.

Eğer Cermen bir kahraman bir köye saldırırsa, sığınaklar sığalarının sadece %80 ini saklayabilirler.');
$lang['desc'][24] = array(0 => 'Belediye binasında halk için eğlenceli festivaller düzenleyebilirsiniz. Bu festivallerle kültür puanlarınızı artırabilirsiniz.<br>
Kültür puanları başka köyler kurmak için yada başka köyleri ele geçirebilmek için gereklidir. Her yapı kültür puanı üretir. Bu yapıların seviyeleri artırıldıkça üretilen kültür puanları da artar. ');
$lang['desc'][25] = array(0 => 'Köşk, köyü düşmanların fetih saldırılarına karşı korur. Her köye bir Köşk inşa edebilirsiniz.Yeni bir köy kurabilen veya var olan köyleri fethedebilen birimler burada eğitilebilirler.

Ek olarak köşk, 10uncu ve 20nci seviyede birer genişleme boşluğu sağlar. ');
$lang['desc'][26] = array(0 => 'Bir kral veya kraliçenin sarayında İmparatorluk yaşıyor. Saray, başkentin hakimiyetine atanması için vali olarak hizmet eder ve bu nedenle sadece bir saray inşa edilebilir. ');
$lang['desc'][27] = array(0 => 'Hazine binasında krallığınızın değerli eşyaları bulunmaktadır. Her hazine binası seviye 10 da bir tılsım için yer bulunmaktadır.<br><br>Hazine seviye 10 olduğu takdirde küçük bir tılsım, seviye 20 olması halinde ise büyük tılsım burada tutulabilir.');
$lang['desc'][28] = array(0 => 'Ticaret Odasında güçlü yetiştirilmiş at arabalarının ve atların performansını artırabilir. Ticaret Odasının gelişmesiyle birlikte, bir tüccar taşıyabilen maksimum hammadde Adetı artmaktadır. ');
$lang['desc'][29] = array(0 => 'Büyük Kışla, askerleri eğitmenize izin verir. Ancak, bir asker yetiştirmenin maliyeti üç kat daha fazladır. Büyük bir kışla ve kışla kullanmak, aynı anda iki kat daha fazla askeri eğitebilir. başkentte kışla inşa etmek en imkansız. ');
$lang['desc'][30] = array(0 => 'Büyük Ahır süvari Yetiştirine izin verir. Ancak eğitimin maliyeti üç kat daha fazladır. en istikrarlı başkentte inşa edemez. ');
$lang['desc'][31] = array(0 => 'Köyün etrafındaki surlar dışarıdan gelen saldırılara karşı köyü korur. Seviyesi ne kadar yüksek olursa askeri güçlerinizin savunmasına o kadar katkıda bulunur.<br>

Bu surlar köy savunmasına çitlerden ve toprak siperlerden daha çok yardımcı olurlar.Koçbaşlarının düşmanlar tarafından doğru kullanılması durumunda ise bu avantaj kaybolur.');
$lang['desc'][32] = array(0 => 'Köyün etrafındaki surlar dışarıdan gelen saldırılara karşı köyü korur. Seviyesi ne kadar yüksek olursa askeri güçlerinizin savunmasına o kadar katkıda bulunur.<br>

Bu surlar köy savunmasına çitlerden ve toprak siperlerden daha çok yardımcı olurlar.Koçbaşlarının düşmanlar tarafından doğru kullanılması durumunda ise bu avantaj kaybolur.');
$lang['desc'][33] = array(0 => 'Köyün etrafındaki surlar dışarıdan gelen saldırılara karşı köyü korur. Seviyesi ne kadar yüksek olursa askeri güçlerinizin savunmasına o kadar katkıda bulunur.<br>

Bu surlar köy savunmasına çitlerden ve toprak siperlerden daha çok yardımcı olurlar.Koçbaşlarının düşmanlar tarafından doğru kullanılması durumunda ise bu avantaj kaybolur.');
$lang['desc'][34] = array(0 => 'Taşçı inşaatlarda çalışan ve çok başarılı ustadır. Taşçıların derecesinin yüksekliğine göre köydeki binaların da saldırılara karşı dayanıklılığı artar.<br>
Taşçı binası sadece merkez köyde kurulabilir. ');
$lang['desc'][35] = array(0 => 'Lezzetli içecekler için hazırlanmış bir bira fabrikası. Askerlerinizi savaşlarda daha cesur ve daha güçlü kılarlar. Ama madalyonun o kadar pembe olmayan başka bir tarafı var. Düşman köylerinde liderleriniz o kadar iyi konuşmuyor ve mancınık sadece rastgele hedeflere düşüyor. Bira fabrikası sadece başkentte kurulabilir. ');
$lang['desc'][36] = array(0 => "Tuzakçı, köyünüzü iyi gizli tuzaklarla korur. Düşmanlar hapsedilebilir ve artık köyünüze zarar veremez. Tuzaklara hapsedilen askerler, aslen ait oldukları köyün Tahılünü yerler.");

$lang['desc'][37] = array(0 => 'Kahramanın malikanesinde, çevredeki vahaya genel bir bakış elde edebilirsiniz. Seviye 10 dan başlayarak, kahramanınızla vahaları işgal edebilir ve köyünüzün kaynak üretimini artırabilirsiniz. ');
$lang['desc'][38] = array(0 => 'Büyük depo, normal bir depoya göre 3 kat daha fazla kaynak barındırır. ');
$lang['desc'][39] = array(0 => 'Büyük ahır, geleneksel bir ahırdan 3 kat daha fazla kaynak barındırır. ');
$lang['desc'][40] = array(0 => 'Dünya Harikası medeniyetin tacıdır. Yalnızca en güçlü ve zengin imparatorluk bir sanat eseri inşa edebilir ve onu düşmanların saldırılarından başarıyla koruyabilir. ');
$lang['desc'][41] = array(0 => 'Teşekkürler atlarınızı sulamak daha iyi hisseder ve böylece atlı askerleri öğrenmeyi hızlandırır ve onlar tarafından tüketilen tahıl Adetını azaltır. ');
$lang['desc'][42] = array(0 => 'Taş bir duvar inşa ederek köyünüzü düşmanlarınızın barbar ordularına karşı koruyabilirsiniz. Seviyesi ne kadar yüksekse, kuvvetlerinizin savunmasına verilen bonus o kadar yüksek olur. <br> Taş duvar yalnızca Mısırlılar tarafından inşa edilebilir, savunma bonusu Galya Palisade gibidir ve dayanıklılığı Tötonik toprak duvar gibidir.');
$lang['desc'][43] = array(0 => 'Derme çatma bir duvar inşa ederek köyünüzü düşmanlarınızın barbar ordularına karşı koruyabilirsiniz. Seviyesi ne kadar yüksekse, kuvvetlerinizin savunmasına verilen bonus o kadar yüksek olur. <br> Derme çatma duvar yalnızca Hunlar tarafından inşa edilebilir, savunma bonusu Cermen toprak duvarı gibidir ve dayanıklılığı Roma surları gibidir.');
$lang['desc'][44] = array(0 => 'Komuta Merkezi, köyü düşman fetihlerine karşı korur. Her köy için bir Komuta Merkezi inşa edebilirsiniz. Yerleşimciler ve Senatörler / Şefler / Şefler / Nomarchs / Logades orada eğitilebilir.');
$lang['desc'][45] = array(0 => 'Waterworks ile vahalarınıza giden su akışını düzenlersiniz. Bu sadece ağaç ve Tahıl yetiştirmeye yardımcı olmakla kalmaz, aynı zamanda işçilere su sağlayan ve kaynakları taşıyan taş ocakları ve madenler için de yararlıdır. <br> Bu bina, eklenmiş tüm vahaların bonusunu arttırır. Seviye 20 üzerindeki maksimum etkisi vahaların etkisini ikiye katlar. <br> Su İşleri sadece Mısırlılar tarafından inşa edilebilir.');

$lang['descs'][5] = array(0 => array(1, 10), array(15, 5));
$lang['descs'][6] = array(0 => array(2, 10), array(15, 5));
$lang['descs'][7] = array(0 => array(3, 10), array(15, 5));
$lang['descs'][8] = array(0 => array(4, 5));
$lang['descs'][9] = array(0 => array(4, 10), array(15, 5));
$lang['descs'][12] = array(0 => array(22, 1), array(15, 3));
$lang['descs'][13] = array(0 => array(22, 1), array(15, 3));
$lang['descs'][14] = array(0 => array(16, 15));
$lang['descs'][17] = array(0 => array(15, 3), array(10, 1), array(11, 1));
$lang['descs'][19] = array(0 => array(16, 1), array(15, 3));
$lang['descs'][20] = array(0 => array(22, 5), array(12, 3));
$lang['descs'][21] = array(0 => array(22, 10), array(15, 5));
$lang['descs'][22] = array(0 => array(19, 3), array(15, 3));
$lang['descs'][24] = array(0 => array(15, 10), array(22, 10));
$lang['descs'][25] = array(0 => array(15, 5));
$lang['descs'][26] = array(0 => array(18, 1), array(15, 5));
$lang['descs'][27] = array(0 => array(15, 10));
$lang['descs'][28] = array(0 => array(17, 20), array(20, 10));
$lang['descs'][29] = array(0 => array(19, 20));
$lang['descs'][30] = array(0 => array(20, 20));
$lang['descs'][34] = array(0 => array(26, 3), array(15, 5));
$lang['descs'][35] = array(0 => array(11, 20), array(16, 10));
$lang['descs'][36] = array(array(16, 1));
$lang['descs'][37] = array(0 => array(16, 1), array(15, 3));
$lang['descs'][38] = array(0 => array(15, 10));
$lang['descs'][39] = array(0 => array(15, 10));
$lang['descs'][41] = array(0 => array(20, 20), array(16, 10));
$lang['fields'] = array(
	0 => '&nbsp;level',
	1 => 'Kereste fabrikası seviyesi',
	2 => 'Tuğla ocağı seviyesi ',
	3 => 'Demir madeni seviyesi',
	4 => 'Çiftlik seviyesi',
	5 => 'Açık şantiye',
	6 => 'İnşaat sahası',
	7 => 'Toplama noktası şantiye'
);

$lang['npc'] = array(
	0 => 'NPC tüccarı'
);

$lang['upgrade'] = array(
	0 => 'Bina zaten maksimum seviyede',
	1 => 'Binanın maksimum seviyesi inşa ediliyor',
	2 => 'Bina yıkılacak',
	3 => 'Seviye oluşturma <b> maliyeti </b>&nbsp;',
	4 => 'İşçiler meşgul.',
	5 => 'Yetersiz yiyecek. Çiftlikler geliştirin.',
	6 => 'Bir depo inşa et.',
	7 => 'Bir ahır inşa edin.',
	8 => 'Yeterli kaynaklar olacak&nbsp;',
	9 => '&nbsp;в&nbsp;&nbsp;',
	10 => 'Bu seviyeye geliştir ',
	11 => 'Bugün',
	12 => 'yarın'
);

$lang['movement'] = array(
	0 => 'içinde&nbsp;'
);

$lang['troops'] = array(
	0 => 'Hayır',
	1 => 'Kahraman'
);

// Player statics


define("PLAYERS_ACTIVE", "Aktif oyuncular");
define("PLAYERS_ONLINE", "Çevrimiçi oyuncular");
define("PLAYERS", "Oyuncular");
define("ACTIVE", "Aktif");
define("ONLINE", "Online");


//NOTICES
define("REPORT_SUBJECT", "Konu:");
define("REPORT_ATTACKER", "Saldırgan");
define("REPORT_DEFENDER", "Defans oyuncusu");
define("REPORT_RESOURCES", "Kaynaklar");
define("REPORT_FROM_VIL", "köyden");
define("REPORT_FROM_ALLY", "müttefikten");
define("REPORT_SENT", "Gönderilme tarihi:");
define("REPORT_SENDER", "Gönderen");
define("REPORT_RECEIVER", "Alıcı");
define("REPORT_AT", "Şurada:");
define("REPORT_TO", "İçin");
define("REPORT_SEND_RES", "kaynakları gönder");
define("REPORT_DEL_BTN", "raporu sil");
define("REPORT_DEL_QST", "Raporu silmek istediğinizden emin misiniz?");
define("REPORT_WARSIM", "savaş simülatörü");
define("REPORT_ATK_AGAIN", "saldırıya geri dönmek");
define("REPORT_TROOPS", "Askerler");
define("REPORT_REINF", "Yeniden tahmin");
define("REPORT_CASUALTIES", "Kayıplar");
define("REPORT_INFORMATION", "bilgi");
define("REPORT_BOUNTY", "Ödül");
define("REPORT_CLOCK", "Zaman");
define("REPORT_UPKEEP", "Bakım");
define("REPORT_PER_HOURS", "saat başı");
define("REPORT_SEND_REINF_TO", "köye Destek göndermek");
define("REPORT_NO", "Kullanılabilir rapor yok.");
define("REPORT1", " izciler ");
define("REPORT2", " saldırılar ");


define("NGZ2", "Şu andaki inşa süresi");
define("NGZ3", "İnşa süresi Seviye");


//CTENA
define("C1", " Şehir Duvarı Seviyesi");
define("C2", " Bir Şehir Duvarı inşa ederek köyünüzü düşmanlarınızın barbar ordularına karşı koruyabilirsiniz. Duvarın seviyesi ne kadar yüksekse, kuvvetlerinizin savunmasına verilen bonus o kadar yüksek olur.");
define("C3", "Defense Bonus no");
define("C4", "Düzeyde Savunma Bonusu");
define("C5", " ");
define("C6", " ");
define("C7", "Toprak Duvar Seviyesi");
define("C8", "Palisade Seviyesi");
define("C9", "Şehir Duvarı Seviyesi");

//CKLAD
define("CK0", "Depo Seviyesi ");
define("CK", " Odun, kil ve demir kaynakları depoda saklanır. Seviye ne kadar yüksek olursa, kaynak depolama kapasitesi o kadar büyük olur. ");


//AMBAR
define("AM", " Tahıl Seviyesi ");
define("AM1", " Buğday tarlalarınızdaki buğday, tahıl ambarında saklanır. Seviye ne kadar yüksekse, depolama kapasitesi o kadar büyüktür.");

define("AM4", "Seviye kapasitesi");

define("CAPACITY", "Kapasite");
define("CAPACITYA", "Seviye kapasitesi");



//upgrade.php
define("UPG0", "Bina maksimum seviyede.");
define("UPG1", "Maksimum seviyeyi inşa ediyoruz.");
define("UPG2", "Bina yıkım aşamasında.");
define("UPG3", "Maliyet");
define("UPG4", "seviyeye iyileştirme");
define("UPG5", "Tüm Çalışanlar meşgul.");
define("UPG6", "Tüm Çalışanlar meşgul. (Kuyruk)");
define("UPG7", "Öğün kaçırmayın. Çiftlik geliştirin.");
define("UPG8", "Depo Geliştir.");
define("UPG9", "Tahıl Ambarı Geliştir.");
define("UPG10", "Yeterli kaynak - Asla");
define("UPG11", "Bu seviyeye geliştir");


//отправка войск
define("nap0", "Destek");
define("nap1", "Saldırı: Normal");
define("nap2", "Saldırı: Saldırı");



define("PY1", "Köye hareketler");
define("PY2", "Asker Gönder");
define("PY3", "Birlik Gönder");
define("PY5", "Köydeki Askerler");
define("PY6", "Деревня");
define("PY7", "Kendi Askerleri");
define("PY8", "Askerler");
define("PY9", "Bakım");
define("PY10", "Saat Başı");
define("PY11", "Geri Gönder");
define("PY12", "Başka köylerdeki Askerler");
define("PY13", "Destek İçin");
define("PY14", "Geri Al");
define("PY15", "Birlik hareketleriniz");
define("PY16", "Kaçınma");
define("PY17", "Çiftlik Listesi");
define("PY18", "Vaha");
define("PY19", "Vahalarda Askerler");
define("GOLDC", "Gold Club");
//KAZARMA
define("KA", "Kışla Seviyesi");
define("KA1", "Tüm piyadeler kışlada eğitilir. Kışlanın seviyesi ne kadar yüksekse, askerler o kadar hızlı eğitilir.");
define("KA2", "Kışla");
define("KA3", "Eğitim, kışla tamamlandığında başlayabilir.");

//RYNOK
define("RY", "Pazar Yeri Düzeyi");
define("RY1", "Pazarda, kaynakları diğer oyuncularla takas edebilirsiniz. Seviyesi ne kadar yüksek olursa, aynı anda daha fazla kaynak taşınabilir.");




//DVOREZ
define("DV", "Saray Seviyesi");
define("DV1", "Ulusun kralı sarayda yaşıyor. Saray sadece başkentte inşa edilebilir. Seviye ne kadar yüksekse, düşmanların köyü fethetmesi o kadar zor olur.");
define("dvrc0", "şifre yanlış");
define("dvrc1", "Yeni bir köy kurmak için seviye 10, 15 veya 20 saray ve 3 yerleşimciye ihtiyacınız var. Yeni bir köyü fethetmek için seviye 10, 15 veya 20 bir saray ve bir senatör, şefe ihtiyacınız var veya reis. ");
define("dvrc2", "Bu sizin başkentiniz");
define("dvrc3", "Başkentinizi değiştirmek istediğinizden emin misiniz?");
define("dvrc4", "Bunu geri alamazsınız!");
define("dvrc5", "Güvenlik amacıyla onaylamak için şifrenizi girmelisiniz:");
define("dvrc6", "Değiştir");
define("dvrc7", "Yapım aşamasındaki Saray");
define("dvrc8", "Şifre:");
define("dvrc9", "Ad");
define("dvrc10", "Adet");
define("dvrc11", "Maks");

//POSOLbSTVO
define("posl0", "Birlik");
define("posl1", "Etiket");
define("posl2", "Ad");
define("posl3", "ittifaka");
define("posl4", "Davetler");
define("posl5", "Kabul Et");
define("posl6", "Kullanılabilir davetiye yok");
define("posl7", "birlik bulundu");
define("posl8", "Oluştur");

//masterskaya
define("mastr0", "Birimler araştırılmalıdır");
define("mastr1", "Yetiştir");
define("mastr2", "Eğitim");
define("mastr3", "Süre");
define("mastr4", "Bitti");
define("mastr5", "Toplam");

//REZA
define("RE", "İkamet Seviyesi");
define("RE1", "Köşk, kralın ziyaret ettiği sırada yaşadığı küçük bir saraydır. Köşk, köyü düşman güçleri tarafından fethedilmekten korur.");
define("RE2", "Bu sizin başkentiniz");
define("RE3", "İkamet");
define("RE4", "Yetiştir");
define("RE5", "Kültür noktaları");
define("RE6", "Sadakat");
define("RE7", "Genişletme");
define("RE8", "Ulusunuzu genişletmek için kültür puanlarına ihtiyacınız var. Bunlar zamanla binalarınızdan birikir ve daha yüksek seviyelerde daha hızlı.");
define("RE9", "Bu köyün üretimi:");
define("RE10", "Günlük kültür puanı");
define("RE11", "Tüm köylerin üretimi:");
define("RE12", "Köyleriniz üretti");
define("RE13", "toplam puan. Yeni bir köy bulmak veya fethetmek için ihtiyacınız olan");
define("RE14", "puan");
define("RE15", "Senatörlerle, şeflerle veya reislerle saldırarak bir köyün sadakati azaltılabilir. Sıfıra ulaşırsa, köy saldırganın diyarına katılır. Bu köyün sadakati şu anda");
define("RE16", "Bu köy tarafından kurulan veya fethedilen köyler");
define("RE17", "Köy");
define("RE18", "oyuncu");
define("RE19", "Yerleşikler");
define("RE20", "Koordinatlar");
define("RE21", "Tarih");
define("RE22", "Bu köy tarafından henüz başka bir köy kurulmamış veya fethedilmemiştir.");
define("RE23", "Eğitim");
define("RE24", "Time");
define("RE25", "Yakında");
define("RE26", "Yetiştir");
define("RE27", "Yeni bir köy kurmak için seviye 10 veya 20 Köşk ve 3 yerleşimciye ihtiyacınız var. Yeni bir köyü fethetmek için seviye 10 veya 20 Köşk ve bir senatör, şef veya şefe ihtiyacınız var.");

//AKADEM
define("AK", "Akademi Düzeyi");
define("AK1", "Akademide yeni birim türleri araştırılabilir. Seviyesini artırarak daha iyi birimlerin araştırılmasını sipariş edebilirsiniz.");
define("AK2", "Akademi");
define("AK3", "Mevcut araştırma yok");
define("AK4", "Eylem");
define("AK5", "Önkoşullar");
define("AK6", "daha fazlasını göster");
define("AK7", "daha fazla gizle");
define("AK8", "Araştırma");

//MELNIZA
define("ME", "Un Değirmeni Düzeyi");
define("ME1", "Buğday değirmende öğütülür. Seviyeye bağlı olarak değirmen, buğday üretimini yüzde 25'e kadar artırabilir");
define("ME2", "");
define("ME3", "");




//KON
define("KO", "Ahır Seviye");
define("KO1", "Tüm atlı Askerler ahırda eğitilir. Seviye ne kadar yüksekse, Askerler o kadar hızlı eğitilir.");
define("KO2", "Kullanılabilir birim yok. Akademide araştırma");
define("KO3", "Eğitim, büyük ahırlar tamamlandığında başlayabilir.");
define("KZ333", "Eğitim, büyük kışlalar tamamlandığında başlayabilir.");


//GLAVNOE ZDANIE
define("gz0", "Binanın yıkılması:");
define("gz1", "Bir binaya artık ihtiyacın kalmazsa yapı ustalarına binayı yıkma emri verebilirsin:");
define("gz2", "Yıkım");
define("gz3", "Bu köydeki tüm inşaat ve araştırma siparişlerini 2 Altın karşılığında hemen bitirilsin mi?");
define("gz4", "Yıkım");

//COKRA
define("CO", "Hazine Odası Seviyesi");
define("CO1", "İmparatorluğunuzun zenginlikleri hazine odasında tutulur. Hazine odanızda yalnızca bir hazine için yer vardır. Bir eseri ele geçirdikten sonra, normal bir sunucuda 24 saat ve 3x'te 12 saat sürer yapının etkili olması için hız sunucusu. ");
define("CO2", "");
define("CO3", "");
define("CO4", "");

//GHYGYN
define("GH", "Demir Dökümhane Seviyesi");
define("GH1", "Demir dökümhanede eritilir. Seviyeye bağlı olarak, dökümhane demir üretimini yüzde 25'e kadar artırabilir.");
define("GH2", "Mevcut demir bonusu");
define("GH3", "Düzeyde Demir bonusu");
define("GH4", "");

//KIRPIGH
define("KI", "Tuğla İşi Seviyesi");
define("KI1", "Kil, tuğlalarda tuğla olarak pişirilir. Seviyeye bağlı olarak, tuğla işi kil üretimini yüzde 25'e kadar artırabilir.");
define("KI2", "Mevcut kil bonusu");
define("KI3", "Düzeyde kil bonusu");
define("KI4", "");
define("KI5", "");
define("KI6", "");

define("CURB", "Mevcut bonus");
define("CURBL", "Düzeyde Bonus");
define("NOTDONEU", "Derleme henüz tamamlanmadı.");
define("SPEEDB", "Mevcut hız bonusu");
define("SPEEDBL", "Seviyede hız bonusu");

//ратуша
define("ratusha0", "Kutlamalar, belediye binası tamamlandığında başlayabilir.");
define("ratusha1", "Kutlamalar");
define("ratusha2", "Eylem");
define("ratusha3", "Kutlama");
define("ratusha4", "devam ediyor");
define("ratusha5", "Tahıl üretimi negatiftir, böylece gerekli kaynaklara asla ulaşamazsınız");
define("ratusha6", "Çok az");
define("ratusha7", "kaynaklar");
define("ratusha8", "beklet");
define("ratusha9", "Büyük kutlama (2000 kültür puanı)");
define("ratusha10", "Yeterli kaynaklar");
define("ratusha11", "kültür noktaları");
define("ratusha12", "Süre");
define("ratusha13", "Bitir");
define("ratusha14", "Küçük Kutlama");
define("ratusha15", "");
define("ratusha16", "");
define("ratusha17", "");
define("ratusha18", "");
define("ratusha19", "");
define("ratusha20", "");


//ARENA
define("AR", "Turnuva Yeri");
define("AR1", "Turnuva Alanında askerlerinizin dayanıklılıklarını arttırabilirsiniz. Turnuva yerinin seviyesini yükselttikçe askerler 20 sektörden fazla mesafelerde %10 daha hızlı olur.");
define("AR2", "");
define("AR3", "");
define("AR4", "");

//MASTERSKAI
define("MA", "Tamirhane");
define("MA1", "Tamirhanede mancınıklar ve koçbaşları üretilir. Tamirhanenin seviyesi ne kadar yüksek olursa, üretim o kadar kısa sürede tamamlanır.");
define("MA2", "");
define("MA3", "");
define("MA4", "");

//PEKARNIA
define("PE", "Tahıl değirmeni");
define("PE1", "Un değirmeni üzerinde tahıl melyatına un haline getirilir. Tahıl üretimi, un değirmeninin gelişme düzeyiyle ilişkilidir ve yüzde 25 oranında artırılabilir.");
define("PE2", "");
define("PE3", "");
define("PE4", "");

//RATYSHA
define("RAT", "Belediye Binası");
define("RAT1", "Belediye binasında halk için eğlenceli festivaller düzenleyebilirsiniz. Bu festivallerle kültür puanlarınızı artırabilirsiniz.
<br>
Kültür puanları başka köyler kurmak için yada başka köyleri ele geçirebilmek için gereklidir. Her yapı kültür puanı üretir. Bu yapıların seviyeleri artırıldıkça üretilen kültür puanları da artar.");
define("RAT2", "");
define("RAT3", "");
define("RAT4", "");

//PALATA
define("PAL", "Ticaret Ofisi Seviyesi");
define("PAL1", "Pazar yerinizin ticaret arabaları ticaret ofisinde geliştirilebilir. Seviye ne kadar yüksek olursa, her bir tüccar o kadar fazla taşıyabilir.");
define("PAL2", "");
define("PAL3", "");
define("PAL4", "");

//VODOPOI
define("VO", "At İçme Teknesi Seviyesi");
define("VO1", "At içme teknesi atlarınızın sağlığına önem verir, Tahıl tüketimini azaltır ve eğitimlerini hızlandırır. Seviye başına, ahırınızdaki eğitim süresi kısalır.");
define("VO2", "");
define("VO3", "");
define("VO4", "");


//BA
define("BA", "Büyük Tahıl Ambarı Seviyesi");
define("BA1", "Tahıl ambarında çiftlikleriniz tarafından üretilen buğday depolanır. Büyük tahıl ambarı, buğdayın kuru ve güvende ve kurtçuklardan uzak tutmanız için size daha fazla alan sunar.");
define("BA2", "");
define("BA3", "");
define("BA4", "");

//BK
define("BK", "Büyük Depo Seviyesi");
define("BK1", "Deponuzda odun, kil ve demir kaynakları depolanır. Büyük depo, kaynaklarınızı kuru ve güvenli tutmak için size daha fazla alan sağlar.");
define("BK2", "");
define("BK3", "");
define("BK4", "");
define("BK5", "");

//PIVO
define("PI", "Brewery Level");
define("PI1", "Lezzetli bal likörü bira fabrikasında demlenir ve daha sonra kutlamalar sırasında askerler tarafından quaffed edilir.");
define("PI2", "");
define("PI3", "");
define("PI4", "");

//CHYDO
define("CHY", "Wonder Of The World Level");
define("CHY1", "Dünya harikası, yaratmanın gururunu temsil eder. Sadece en güçlü ve en zenginler böyle bir şaheser inşa edebilir ve onu kıskanç düşmanlara karşı savunabilir.");
define("CHY2", "");
define("CHY3", "");
define("CHY4", "");
define("CHY5", "");

//KAZARMA BIG
define("BIG", "Büyük Kışla Seviyesi ");
define("BIG1", "Harika kışlalar aynı anda daha fazla birim inşa etmenize izin verir, ancak orijinal Adetın üç katına mal olurlar. ");
define("BIG2", "");
define("BIG3", "");
define("BIG4", "");

//KONI BIG
define("KONI", "Büyük Ahır Seviye");
define("KONI1", "Büyük ahır, aynı anda daha fazla birim oluşturmanıza izin verir, ancak orijinal Adetın üç katı maliyeti vardır.");
define("KONI2", "");
define("KONI3", "");
define("KONI4", "");

//KAPKAN
define("KAP", "Tuzakçı Seviyesi");
define("KAP1", "Tuzakçı, köyünüzü çok iyi gizlenmiş tuzaklarla korur. Bu, dikkatsiz düşmanların hapsedilebileceği ve artık köyünüze zarar veremeyeceği anlamına gelir.");
define("KAP2", "");
define("KAP3", "");
define("KAP4", "");

//KYZNIA
define("KY", "Cephanelik Seviyesi");
define("KY1", "Cephanelik'nin eritme fırınlarında, savaşçılarınızın zırhı geliştirilir. Seviyesini yükselterek, daha da iyi zırhların imal edilmesini sipariş edebilirsiniz.");
define("KY2", "");
define("KY3", "");
define("KY4", "");


//KYZNIZA
define("KZ", "Zırh Dökümhanesi Seviyesi");
define("KZ1", "Zırh Dökümhanesinin eritme fırınlarında, savaşçılarınızın silahları geliştirilir. Seviyesini yükselterek, daha da iyi silahların imal edilmesini sipariş edebilirsiniz.");
define("KZ2", "Yükselt");
define("KZ3", "Zırh Dökümhanesi");
define("KZ4", "Eylem");
define("KZ5", "Yükseltme");
define("KZ6", "Süre");
define("KZ7", "Tamamlandı");
define("KZ8", "Yükseltiliyor<br>Zırh Dökümhanesi");
define("KZ9", "Yükseltiliyor<br> devam etmekte");

define("oasis", "Vahalar");
define("Namet", "İsim");
define("Quantityе", "Adet");
define("Maxе", "Max");
define("Avaliablet", "Mevcut");
define("TRA1", "Eğitim");
define("TRA2", "Süresi");
define("TRA3", "Bitti");
define("Workshop", "Atölye");
define("RallyPoint", "Askeri Üs");
define("Blacksmith", "Zırh Dökümhanesi");
define("Armoury", "Cephanelik");
define("Stable", "Ahır");
define("SendResouces", "Kaynakları Gönder");
define("Buyma", "Satın Al");
define("Offerma", "Teklif");
define("ONPCtrading", "NPC ticareti");
define("ilior", "veya");
define("markgo", "Git");
define("Constructnewbuilding", "Yeni bina inşa et");
define("SOCR", "İmparatorluğunuzun zenginlikleri hazinede tutulur. Bir hazine yalnızca bir eseri saklayabilir. <br> <br> Küçük bir eser için hazine seviyesi 10'a veya harika bir eser için seviye 20'ye ihtiyacınız var.");
define("mesotkogo", "Gönderen:");
define("mestena", "Konu:");
define("meskomy", "Alıcı:");
//Самая жопа avaliable
define("avaAcademy", "Akademi");
define("avaAcademy1", "Akademide yeni birim türleri araştırılabilir. Seviyesini artırarak daha iyi birimlerin araştırılmasını sipariş edebilirsiniz.");
define("avaArmoury", "Cephanelik");
define("avaArmoury1", "Silah eritme fırınlarında savaşçılarınız; zırh geliştirildi. Seviyesini yükselterek, daha da iyi zırhların imal edilmesini sipariş edebilirsiniz.");
define("avaCityWall", "Şehir duvarı");
define("avaCityWall1", "Bir Şehir Duvarı inşa ederek köyünüzü düşmanlarınızın barbar ordularına karşı koruyabilirsiniz. Duvarın seviyesi ne kadar yüksekse, kuvvetlerinizin savunmasına verilen bonus o kadar yüksek olur.");


define("ITEM0", "Farkındalık Kaskı");
define("IEFF0", "+% 15 daha fazla Tecrübe.");
define("ITEM1", "Aydınlanma Miğferi");
define("IEFF1", "+% 20 daha fazla Tecrübe.");
define("ITEM2", "Bilgelik Miğferi");
define("IEFF2", "+% 25 daha fazla Tecrübe.");
define("ITEM3", "Rejenerasyon Kaskı");
define("IEFF3", "+ 10 sağlık puanı / gün");
define("ITEM4", "Sağlık Kaskı");
define("IEFF4", "+ 15 sağlık puanı / gün");
define("ITEM5", "Helmet of Healing");
define("IEFF5", "+ 20 sağlık puanı / gün");
define("ITEM6", "Gladyatörün Kaskı");
define("IEFF6", "+ 100 Kültür Puanı / gün");
define("ITEM7", "Tribün Başlığı");
define("IEFF7", "+ 400 Kültür Puanı / gün");
define("ITEM8", "Konsolos Kaskı");
define("IEFF8", "+ 800 Kültür Puanı / gün");
define("ITEM9", "Süvari Kaskı");
define("IEFF9", "Sabit modda eğitim süresi% 10 azaltıldı");
define("ITEM10", "Süvari Miğferi");
define("IEFF10", "Sabit modda eğitim süresi% 15 azaltıldı");
define("ITEM11", "Ağır Süvari Miğferi");
define("IEFF11", "Sabit modda eğitim süresi% 20 azaltıldı");
define("ITEM12", "Paralı Asker Miğferi");
define("IEFF12", "Kışlalarda eğitim süresi% 10 azaltıldı");
define("ITEM13", "Savaşçının Miğferi");
define("IEFF13", "Kışlalarda eğitim süresi% 15 azaltıldı");
define("ITEM14", "Archon'un Miğferi");
define("IEFF14", "Kışlalarda eğitim süresi% 20 azaltıldı");
define("ITEM15", "Yenilenme Zırhı");
define("IEFF15", "+ günde 20 sağlık puanı yenilenmesi");
define("ITEM16", "Sağlık Zırhı");
define("IEFF16", "+ günde 30 sağlık puanı yenilenmesi");
define("ITEM17", "İyileştirme Zırhı");
define("IEFF17", "+ günde 40 sağlık puanı yenilenmesi");
define("ITEM18", "Hafif ölçekli Zırh");
define("IEFF18", "Hasar 4 sağlık puanı + 10 SP yenilenmesi azaldı");
define("ITEM19", "Ölçek Zırhı");
define("IEFF19", "Hasar 6 sağlık puanı + 15 SP yenilenmesi azaldı");
define("ITEM20", "Ağır Ölçekli Zırh");
define("IEFF20", "Hasar 8 sağlık puanı + 20 SP yenilenmesi azaldı");
define("ITEM21", "Hafif Göğüs plakası");
define("IEFF21", "Kahraman için + 500 dövüş gücü");
define("ITEM22", "Göğüs plakası");
define("IEFF22", "Kahraman için + 1000 dövüş gücü");
define("ITEM23", "Ağır Göğüs plakası");
define("IEFF23", "+ 1500 Kahraman için dövüş gücü");
define("ITEM24", "Hafif Parçalı zırh");
define("IEFF24", "Hasar 3 azaltıldı; Kahraman için +250 dövüş gücü");
define("ITEM25", "Parçalı zırh");
define("IEFF25", "Hasar 4 azaltıldı; Kahraman için +500 dövüş gücü");
define("ITEM26", "Heavy Segmented-armor");
define("IEFF26", "Hasar 5 azaltıldı; Kahraman için +750 dövüş gücü");
define("ITEM27", "Küçük Harita");
define("IEFF27", "% 30 daha hızlı getiri");
define("ITEM28", "Harita");
define("IEFF28", "% 40 daha hızlı getiri");
define("ITEM29", "Büyük Harita");
define("IEFF29", "% 50 daha hızlı dönüş");
define("ITEM30", "Küçük Flama");
define("IEFF30", "kendi köyleri arasında% 30 daha hızlı asker");
define("ITEM31", "Flama");
define("IEFF31", "kendi köyleri arasında% 40 daha hızlı asker");
define("ITEM32", "Büyük Flama");
define("IEFF32", "kendi köyleri arasında% 50 daha hızlı asker");
define("ITEM33", "Küçük Standart");
define("IEFF33", "Birlik üyeleri arasında% 15 daha hızlı asker");
define("ITEM34", "Standart");
define("IEFF34", "Birlik üyeleri arasında% 20 daha hızlı asker");
define("ITEM35", "Büyük Standart");
define("IEFF35", "Birlik üyeleri arasında% 25 daha hızlı asker");
define("ITEM36", "Hırsızın Kesesi");
define("IEFF36", "+% 10 yağma bonusu");
define("ITEM37", "Hırsızın Çantası");
define("IEFF37", "+% 15 yağma bonusu");
define("ITEM38", "Hırsızın Torbası");
define("IEFF38", "+% 20 yağma bonusu");
define("ITEM39", "Küçük kalkan");
define("IEFF39", "+ 500 kahraman gücü");
define("ITEM40", "Kalkan");
define("IEFF40", "+ 1000 kahraman gücü");
define("ITEM41", "Büyük kalkan");
define("IEFF41", "+ 1500 kahraman gücü");
define("ITEM42", "Yerli'nin Küçük Boynuzu");
define("IEFF42", "Natarlara karşı +% 20 savaş gücü");
define("ITEM43", "Yerli Boynuzu");
define("IEFF43", "Natarlara karşı +% 25 savaş gücü");
define("ITEM44", "Natar'ın büyük boynuzu");
define("IEFF44", "Natarlara karşı +% 30 savaş gücü");
define("ITEM45", "Lejyonerin Kısa Kılıcı");
define("IEFF45", "+ 500'den kahraman gücüne Her Lejyoner için: +3 saldırı ve +3 savunma");
define("ITEM46", "Lejyoner Kılıcı");
define("IEFF46", "+ 1000'den kahraman gücü Her Lejyoner için: +4 saldırı ve +4 savunma");
define("ITEM47", "Lejyonerin Uzun Kılıcı");
define("IEFF47", "+ 1500'den kahraman gücüne Her Lejyoner için: +5 saldırı ve +5 savunma");
define("ITEM48", "Praetorian'ın Kısa Kılıcı");
define("IEFF48", "+ 500'den kahraman gücüne Her Praetorian için: +3 saldırı ve +3 savunma");
define("ITEM49", "Praetorian Kılıcı");
define("IEFF49", "+ 1000'den kahraman gücüne Her Praetorian için: +4 saldırı ve +4 savunma");
define("ITEM50", "Praetorian'ın Uzun Kılıcı");
define("IEFF50", "+ 1500'den kahraman gücüne Her Praetorian için: +5 saldırı ve +5 savunma");
define("ITEM51", "Imperian'ın Kısa Kılıcı");
define("IEFF51", "+ 500'den kahraman gücüne Her İmparatorluk için: +3 saldırı ve +3 savunma");
define("ITEM52", "İmparatorun Kılıcı");
define("IEFF52", "+ 1000'den kahraman gücüne Her İmparatorluk için: +4 saldırı ve +4 savunma");
define("ITEM53", "İmparatorun Uzun Kılıcı");
define("IEFF53", "+ 1500'den kahraman gücüne Her İmparatorluk için: +5 saldırı ve +5 savunma");
define("ITEM54", "Imperatoris'in Kısa Kılıcı");
define("IEFF54", "+ 500'den kahraman gücüne Her Equites Imperatoris için: +9 saldırı ve +9 savunma");
define("ITEM55", "Imperatoris'in Kılıcı");
define("IEFF55", "+ 1000'den kahraman gücü Her Equites Imperatoris için: +12 saldırı ve +12 savunma");
define("ITEM56", "Imperatoris'in Uzun Kılıcı");
define("IEFF56", "+ 1500'den kahraman gücüne Her Equites Imperatoris için: +15 saldırı ve +15 savunma");
define("ITEM57", "Sezarilerin Hafif Mızrağı");
define("IEFF57", "+ 500'den kahraman gücüne Her Equites Caesaris için: +12 saldırı ve +12 savunma");
define("ITEM58", "Sezarilerin Mızrağı");
define("IEFF58", "+ 1000'den kahraman gücü Her Equites Caesaris için: +16 saldırı ve +16 savunma");
define("ITEM59", "Sezarilerin Ağır Mızrağı");
define("IEFF59", "+ 1500'den kahraman gücüne Her Equites Caesaris için: +20 saldırı ve +20 savunma");
define("ITEM60", "Falanks Mızrağı");
define("IEFF60", "+ 500'den kahraman gücüne Her Phalanx için: +3 saldırı ve +3 savunma");
define("ITEM61", "Falanks'ın Kargası");
define("IEFF61", "+ 1000'den kahraman gücüne Her Phalanx için: +4 saldırı ve +4 savunma");
define("ITEM62", "Falanks Mızrağı");
define("IEFF62", "+ 1500'den kahraman gücüne Her Phalanx için: +5 saldırı ve +5 savunma");
define("ITEM63", "Kılıç Ustasının Kısa Kılıcı");
define("IEFF63", "+ 500'den kahraman gücüne Her Kılıçlı İçin: +3 saldırı ve +3 savunma");
define("ITEM64", "Kılıç Ustasının Kılıcı");
define("IEFF64", "+ 1000'den kahraman gücüne Her Kılıçlı İçin: +4 saldırı ve +4 savunma");
define("ITEM65", "Kılıç Ustasının Uzun Kılıcı");
define("IEFF65", "+ 1500'den kahraman gücüne Her Kılıçlı İçin: +5 saldırı ve +5 savunma");
define("ITEM66", "Theutates'in Kısa Yayını");
define("IEFF66", "+ 500'den kahraman gücüne Her Theutates Thunder için: +6 saldırı ve +6 savunma");
define("ITEM67", "Theutates Yayı");
define("IEFF67", "+ 1000'den kahraman gücü Her Theutates Thunder için: +8 saldırı ve +8 savunma");
define("ITEM68", "Theutates'in Uzun Yayını");
define("IEFF68", "+ 1500'den kahraman gücüne Her Theutates Thunder için: +10 saldırı ve +10 savunma");
define("ITEM69", "Druidrider Kadrosu");
define("IEFF69", "+ 500'den kahraman gücüne Her Druidrider için: +6 saldırı ve +6 savunma");
define("ITEM70", "Druidrider'ın büyük kadrosu");
define("IEFF70", "+ 1000'den kahraman gücüne Her Druidrider için: +8 saldırı ve +8 savunma");
define("ITEM71", "Druidrider'ın dövüş kadrosu");
define("IEFF71", "+ 1500'den kahraman gücüne Her Druidrider için: +10 saldırı ve +10 savunma");
define("ITEM72", "Haeduan'ın Hafif Mızrağı");
define("IEFF72", "+ 500'den kahraman gücüne Her Haeduan için: +9 saldırı ve +9 savunma");
define("ITEM73", "Haeduan'ın Mızrağı");
define("IEFF73", "+ 1000'den kahraman gücü Her Haeduan için: +12 saldırı ve +12 savunma");
define("ITEM74", "Haeduan'ın Ağır Mızrağı");
define("IEFF74", "+ 1500'den kahraman gücüne Her Haeduan için: +15 saldırı ve +15 savunma");
define("ITEM75", "Clubswinger Kulübü");
define("IEFF75", "+ 500'den kahraman gücüne Her Maceman için: +3 saldırı ve +3 savunma");
define("ITEM76", "Sopalı Topuz");
define("IEFF76", "+ 1000'den kahraman gücüne Her Maceman için: +4 saldırı ve +4 savunma");
define("ITEM77", "Clubswinger'ın sabah yıldızı");
define("IEFF77", "+ 1500'den kahraman gücüne Her Maceman için: +5 saldırı ve +5 savunma");
define("ITEM78", "Mızrakçı Mızrağı");
define("IEFF78", "+ 500'den kahraman gücüne Her Spearman için: +3 saldırı ve +3 savunma");
define("ITEM79", "Mızrakçının Başak");
define("IEFF79", "+ 1000'den kahraman gücü Her Mızrakçı için: +4 saldırı ve +4 savunma");
define("ITEM80", "Mızrakçı Mızrağı");
define("IEFF80", "+ 1500'den kahraman gücüne Her Mızraklı için: +5 saldırı ve +5 savunma");
define("ITEM81", "Baltacı Baltası");
define("IEFF81", "+ 500'den kahraman gücüne Her Axeman için: +3 saldırı ve +3 savunma");
define("ITEM82", "Axeman'ın Baltası");
define("IEFF82", "+ 1000'den kahraman gücüne Her Axeman için: +4 saldırı ve +4 savunma");
define("ITEM83", "Axeman'ın Savaş Baltası");
define("IEFF83", "+ 1500'den kahraman gücüne Her Axeman için: +5 saldırı ve +5 savunma");
define("ITEM84", "Paladin'in Hafif çekici");
define("IEFF84", "+ 500'den kahraman gücüne Her Paladin için: +6 saldırı ve +6 savunma");
define("ITEM85", "Paladin'in Çekici");
define("IEFF85", "+ 1000'den kahraman gücüne Her Paladin için: +8 saldırı ve +8 savunma");
define("ITEM86", "Paladin'in ağır çekici");
define("IEFF86", "+ 1500'den kahraman gücüne Her Paladin için: +10 saldırı ve +10 savunma");
define("ITEM87", "Cermen Şövalyesinin Kısa Kılıcı");
define("IEFF87", "+ 500'den kahraman gücüne Her Töton Şövalyesi için: +9 saldırı ve +9 savunma");
define("ITEM88", "Cermen Şövalyesinin Kılıcı");
define("IEFF88", "+ 1000'den kahraman gücü Her Töton Şövalyesi için: +12 saldırı ve +12 savunma");
define("ITEM89", "Cermen Şövalyesinin Uzun Kılıcı");
define("IEFF89", "+ 1500'den kahraman gücüne Her Töton Şövalyesi için: +15 saldırı ve +15 savunma");
define("ITEM90", "Yenileme Çizmeleri");
define("IEFF90", "+ 10 sağlık puanı / gün");
define("ITEM91", "Sağlıklılık Çizmeleri");
define("IEFF91", "+ 15 sağlık puanı / gün");
define("ITEM92", "İyileştirme Çizmeleri");
define("IEFF92", "+ 20 sağlık puanı / gün");
define("ITEM93", "Paralı Asker Botları");
define("IEFF93", "+% 25 ordunun hızı");
define("ITEM94", "Savaşçının Botları");
define("IEFF94", "+% 50 ordunun hızı");
define("ITEM95", "Archon'un Çizmeleri");
define("IEFF95", "+% 75 ordunun hızı");
define("ITEM96", "Küçük mahmuzlar");
define("IEFF96", "kahraman hızı +3");
define("ITEM97", "Spurs");
define("IEFF97", "kahraman hızı +4");
define("ITEM98", "Edepsiz mahmuzlar");
define("IEFF98", "kahraman hızı +5");
define("ITEM99", "Kahraman At (Binici)");
define("IEFF99", "Kahraman hızı 14");
define("ITEM100", "Thoroughbred");
define("IEFF100", "Kahraman hızı 17");
define("ITEM101", "Savaş Atı");
define("IEFF101", "Kahraman hızı 20'dir");
define("ITEM102", "Küçük bandaj");
define("IEFF102", "İyileştirilebilir, maksimum% 25 İstiflenebilir");
define("ITEM103", "Bandaj");
define("IEFF103", "İyileştirilebilir, maksimum% 33 İstiflenebilir");
define("ITEM104", "Kafes");
define("IEFF104", " Hayvan istiflenebilir vahada yakalanabilir");
define("ITEM105", "Kaydırma");
define("IEFF105", "kahraman 10'a İstiflenebilir Tecrübe verir");
define("ITEM106", "Merhem");
define("IEFF106", "Kahramanı anında istiflenebilir% 1 iyileştirir");
define("ITEM107", "Kova");
define("IEFF107", "Kahramanınızı anında yeniden başlatın");
define("ITEM108", "Bilgelik Kitabı");
define("IEFF108", "Kahraman becerilerini yeniden dağıtır");
define("ITEM109", "Hukuk Tableti");
define("IEFF109", "Köyde +% 1 sadakat, maksimum% 125 İstiflenebilir");
define("ITEM110", "Yapıt");
define("IEFF110", "Anında CP Adetını verir, günlük üretime eşit, ancak 5000'den fazla İstiflenebilir");
define("ITEM111", "");
define("IEFF111", "");
define("ITEM112", "");
define("IEFF112", "");
define("ITEM113", "");
define("IEFF113", "");
define("ITEM114", "");

// New tribes items
define("ITEM115", "köle milis çubuğu");
define("IEFF115", "kahramanın + 500 savaş yetkinliği; +3 saldırı bonusu + her köle milis için +3 savunma bonusu");
define("ITEM116", "milis köle değnek asası");
define("IEFF116", "Kahramanın + 1000 savaş etkinliği; +4 saldırı bonusu + her köle milis için +4 savunma bonusu");
define("ITEM117", "köle milis yıldızı");
define("IEFF117", "+ kahramanın 1500 savaş etkinliği; +5 saldırı bonusu + her köle milis için +5 savunma bonusu");
define("ITEM118", "kül tutucu balta");
define("IEFF118", "Kahramanın + 500 savaş etkinliği; +3 saldırı bonusu, her Kül Kolcusu için +3 Savunma bonusu");
define("ITEM119", "kül tutucu balta");
define("IEFF119", "+ 1000 Kahraman Savaşı Verimliliği; +4 Saldırı Bonusu + Her Kül Kolcusu için +4 Savunma Bonusu");
define("ITEM120", "Ash Ranger Savaş Baltası");
define("IEFF120", "+ 1500 Kahramanın Silah Verimliliği; +5 Saldırı Bonusu + Her Kül Kolcusu için +5 Savunma Bonusu");
define("ITEM121", "Savaşçının Kısa Khopesh");
define("IEFF121", "+ 500'den kahraman gücüne Her Khopesh Savaşçısı için: +3 saldırı ve +3 savunma");
define("ITEM122", "Savaşçının Khopesh'i");
define("IEFF122", "+ 1000'den kahraman gücü Her Khopesh Savaşçısı için: +4 saldırı ve +4 savunma");
define("ITEM123", "Savaşçının Uzun Khopesh");
define("IEFF123", "+ 1500'den kahraman gücüne Her Khopesh Savaşçısı için: +5 saldırı ve +5 savunma");
define("ITEM124", "Anhor Muhafızının Mızrağı");
define("IEFF124", "+ 500'den kahraman gücüne Her Anhur Muhafızı için: +6 saldırı ve +6 savunma");
define("ITEM125", "Anhor Muhafızının Mızrağı");
define("IEFF125", "+ 1000'den kahraman gücü Her Anhur Muhafızı için: +8 saldırı ve +8 savunma");
define("ITEM126", "Anhor Muhafızlarının Mızrağı");
define("IEFF126", "+ 1500'den kahraman gücüne Her Anhur Muhafızı için: +10 saldırı ve +10 savunma");
define("ITEM127", "Resheph Arabasının Kısa Pruvası");
define("IEFF127", "+ 500'den kahraman gücüne Her Resheph Chariot için: +9 saldırı ve +9 savunma");
define("ITEM128", "Resheph Arabasının Yayı");
define("IEFF128", "+ 1000'den kahraman gücüne Her Resheph Chariot için: +12 saldırı ve +12 savunma");
define("ITEM129", "Resheph Arabasının Uzun Pruvası");
define("IEFF129", "+ 1500'den kahraman gücüne Her Resheph Chariot için: +15 saldırı ve +15 savunma");
define("ITEM130", "Paralı Asker Hatchet");
define("IEFF130", "+ 500'den kahraman gücüne Her Paralı Asker için: +3 saldırı ve +3 savunma");
define("ITEM131", "Paralı Asker Baltası");
define("IEFF131", "+ 1000'den kahraman gücüne Her Paralı Asker için: +4 saldırı ve +4 savunma");
define("ITEM132", "Paralı Asker Savaş Baltası");
define("IEFF132", "+ 1500'den kahraman gücüne Her Paralı Asker için: +5 saldırı ve +5 savunma");
define("ITEM133", "Okçunun Kompozit Kısa Yayı");
define("IEFF133", "+ 500'den kahraman gücüne Her Okçu için: +3 saldırı ve +3 savunma");
define("ITEM134", "Okçunun Kompozit Yayı");
define("IEFF134", "+ 1000'den kahraman gücüne Her Okçu için: +4 saldırı ve +4 savunma");
define("ITEM135", "Okçunun Kompozit Uzun Yayı");
define("IEFF135", "+ 1500'den kahraman gücüne Her Okçu için: +5 saldırı ve +5 savunma");
define("ITEM136", "Bozkır Binicisinin Kısa Spatha Kılıcı");
define("IEFF136", "+ 500'den kahraman gücüne Her Bozkır Sürücüsü için: +6 saldırı ve +6 savunma");
define("ITEM137", "Bozkır Binicisinin Spatha Kılıcı");
define("IEFF137", "+ 1000'den kahraman gücüne Her Bozkır Sürücüsü için: +8 saldırı ve +8 savunma");
define("ITEM138", "Bozkır Binicisinin Uzun Spatha Kılıcı");
define("IEFF138", "+ 1500'den kahraman gücüne Her Bozkır Sürücüsü için: +10 saldırı ve +10 savunma");
define("ITEM139", "Nişancının Kompozit Kısa Yayı");
define("IEFF139", "+ 500'den kahraman gücüne Her Nişancı İçin: +6 saldırı ve +6 savunma");
define("ITEM140", "Nişancının Kompozit Yayı");
define("IEFF140", "+ 1000'den kahraman gücüne Her Nişancı İçin: +8 saldırı ve +8 savunma");
define("ITEM141", "Nişancının Kompozit Uzun Yayı");
define("IEFF141", "+ 1500'den kahraman gücüne Her Nişancı İçin: +10 saldırı ve +10 savunma");
define("ITEM142", "Çapulcunun Kısa Spatha Kılıcı");
define("IEFF142", "+ 500'den kahraman gücüne Her Çapulcu için: +9 saldırı ve +9 savunma");
define("ITEM143", "Çapulcunun Spatha Kılıcı");
define("IEFF143", "+ 500'den kahraman gücüne Her Çapulcu için: +12 saldırı ve +12 savunma");
define("ITEM144", "Çapulcunun Uzun Spatha Kılıcı");
define("IEFF144", "+ 500'den kahraman gücüne Her Çapulcu için: +15 saldırı ve +15 savunma");
define("HEROI0", "Nitelikler");
define("HEROI1", "Nokta");
define("HEROI2", "öznitelik güç ipucu");
define("HEROI3", "Dövüş Gücü, kahraman savunmanız ve hücumunuzla birleşir. Dövüş gücü ne kadar yüksekse, savaşta o kadar iyidir.");
define("HEROI4", "Mücadele Gücü:");
define("HEROI5", "kahramandan");
define("HEROI6", "öznitelik güç ipucu");
define("HEROI7", "Dövüş Gücü, kahramanların savunması ve hücumuyla birleşir. Dövüş gücü ne kadar yüksekse, savaşta o kadar iyidir.");
define("HEROI8", "Mücadele Gücü:");
define("HEROI9", "kahramandan +");
define("HEROI10", "Nitelikler");
define("HEROI11", "Mücadele Gücü");
define("HEROI12", "Maks");
define("HEROI13", "Hücum bonusu saldırırken bonus verir.");
define("HEROI14", "Hücum Bonusu");
define("HEROI15", "Savunma Bonusu saldırıya uğradığında ekstra bonus verir.");
define("HEROI16", "Savunma Bonusu");
define("HEROI17", "Kahraman ayrıca kaynakları toplar, seviye ne kadar yüksek olursa o kadar fazla kaynak.");
define("HEROI18", "Kaynaklar bonusu:");
define("HEROI19", "Kaynaklar");
define("HEROI20", "Dağıt");
define("HEROI21", "Kahramanınızın kaynak üretimini değiştirin");
define("HEROI22", "Tüm kaynaklar");
define("HEROI23", "Kahraman yenilenmeniz:");
define("HEROI24", "günlük");
define("HEROI25", "Sağlık:");
define("HEROI26", "Kahraman bu köyde canlanacak");
define("HEROI27", "Kahramanın canlanması için yeterli kaynak yok");
define("HEROI28", "Canlandır");
define("HEROI29", "Herói estará pronto em");
define("HEROI30", "Süre");
define("HEROI31", "Kahramanınızın daha fazlasına ihtiyacı var");
define("HEROI32", "seviyeye ulaşma Tecrübesi");
define("HEROI33", "Tecrübe:");
define("HEROI34", "Kahraman seviyesi ne kadar yüksekse, o kadar çok puan alırsınız.");
define("HEROI35", "Kahraman seviyesi");
define("HEROI36", "Kahraman hızınız, bir saatte kaç alan gittiğini belirler");
define("HEROI37", "Hız:");
define("HEROI38", "Saatlik alan sayısı");
define("HEROI39", "Kahramanınız her zaman Askerlerde kalacaktır.");
define("HEROI40", "Kahraman, kendi köyüne yapılan bir saldırı sırasında saklanacaktır.");
define("HEROI41", "Esconder herói:");
define("HEROI43", "Kahraman üretimi:");
define("HEROI44", "Kahramanınızın mevcut yenilenmesi: günde% 20");
define("HEROI45", "hız");
define("HEROI46", "Kahramanınızın Hızı");
define("HEROI47", "Kahramanınızın güncel üretimi:");
define("HEROI48", "Nitelikler:");
define("HEROI49", "Lütfen değişikliklerinizi kaydedin.");
define("HEROI50", "Serbest puanlar:");
define("HEROI51", "Değişiklikleri kaydet");
define("HEROI53", "Kahramanı geri yüklemek için gereken kaynaklar:");
define("HEROA0", "Yerel");
define("HEROA1", "Süre");
define("HEROA2", "Zorluk");
define("HEROA3", "Kalan süre");
define("HEROA4", "Bağlantı");
define("HEROA5", "Macera bulunamadı.");
define("HEROA6", "Macera Gönder");
define("HEROA7", "Orman");
define("HEROA8", "Göl");
define("HEROA9", "Dağ");
define("HEROA10", "Okyanus");
define("HEROF0", "head");
define("HEROF1", "saç rengi");
define("HEROF2", "saç stili");
define("HEROF3", "kulaklar");
define("HEROF4", "kaşlar");
define("HEROF5", "gözler");
define("HEROF6", "burun");
define("HEROF7", "ağız");
define("HEROF8", "sakal");
define("HEROAC0", "Kask Filtresi");
define("HEROAC1", "Gövde Öğeleri için Filtre");
define("HEROAC2", "Sol El Öğeleri için Filtre");
define("HEROAC3", "Sağ El Öğeleri için Filtre");
define("HEROAC4", "Ayakkabılar için Filtre");
define("HEROAC5", "Atlar için Filtre");
define("HEROAC6", "Küçük Bandajlar için Filtre");
define("HEROAC7", "Bandajlar için Filtre");
define("HEROAC8", "Kafesler için Filtre");
define("HEROAC9", "Kaydırmalar için Filtre");
define("HEROAC10", "Merhem Filtresi");
define("HEROAC11", "Kepçeler için Filtre");
define("HEROAC12", "Bilgelik Kitabı Filtresi");
define("HEROAC13", "Hukuk Tabletleri Filtresi");
define("HEROAC14", "Sanat Eserleri Filtresi");
define("HEROAC15", "Öğeler bulunamadı.");
define("HEROAC16", "Açıldı");
define("HEROAC17", "Kapalı");
define("HEROAC18", "Gümüş Yetersizliği");
define("HEROAC19", "Mevcut teklif:");
define("HEROAC20", "En yüksek teklifi veren:");
define("HEROAC21", "Yeni teklif:");
define("HEROAC22", "Teklif");
define("HEROAC23", "Müzayedeler");
define("HEROAC24", "Teklif Bulunamadı.");
define("HEROAC25", "Zaman");
define("HEROAC26", "Kazandı");
define("HEROAC27", "Bitmiş müzayedeler");
define("HEROAC28", "Tümünü Seç");
define("HEROAC29", "Mevcut Öğe Yok.");
define("HEROAC30", "Satın Al");
define("HEROAC31", "Sat");
define("HEROAC32", "Teklifler");
define("HEROAC33", "Öğe Yok");
define("HEROAC34", "Her birim için");
define("HEROAC35", "Şu anda sahipsiniz");
define("HEROAC36", "açık artırmada satışa sunulan ürünler (Aynı anda izin verilen maksimum 5 adettir)");
define("HEROAC37", "Bitmiş müzayedeler.");
define("HEROAC38", "Satış bulunamadı.");
define("HEROAC39", "Bu ürün gerçekten satılsın mı?");
define("HEROAC40", "Sat & lt");
define("HEROAC41", "Adet");
define("HEROAC42", "Teklifi Değiştir");
define("HEROAC43", "Teklif ekle");
define("HEROAC44", "Birim başına");

define("PRODUCTION_OVERVIEW", "Üretime genel bakış");
define("PRODUCTION_BONUS", "Üretim bonusu");
define("PRODUCTION_TOTAL_BONUS", "Toplam bonus");
define("PRODUCTION_FIELD", "Kaynak");
define("ÜRETİM", "Üretim");
define("PRODUCTION_BONUS2", "Bonus");
define("PRODUCTION_HP", "Kahraman üretimi");
define("PRODUCTION_BALANCE", "Ara bakiye");
define("PRODUCTION_P25", "+% 25 Üretim");
define("PRODUCTION_INACTIVE", "Pasif");
define("PRODUCTION_TOTAL", "Toplam");
define("PRODUCTION_PROD_TOTAL", "Saatte toplam üretim:");
define("PRODUCTION_PROD_S1", "Tuğla Ocağı Seviyesi");
define("PRODUCTION_PROD_S2", "Oduncu Seviyesi");
define("PRODUCTION_PROD_S3", "Demir Madeni Seviyesi");
define("PRODUCTION_PROD_S4", "Tarla Düzeyi");
define("PRODUCTION_PROD_S5", "Üretim bonusu dahil saatlik üretim:");
define("PRODUCTION_PROD_S6", "Üretim bonusu, kaynağın üretimini artırır. <span class=\"underlined\">herşey</span> köyleriniz.");
define("PRODUCTION_PROD_T1", "Kereste Fabrikası Seviyesi");
define("PRODUCTION_PROD_T2", "Oasis");
define("PRODUCTION_PROD_T3", "Tuğlahane Seviyesi");
define("PRODUCTION_PROD_T4", "Demir Dökümhane Seviyesi");
define("PRODUCTION_PROD_T5", "Tahıl Değirmen Seviyesi");
define("PRODUCTION_PROD_T6", "Fırın Seviyesi");

define("ESCAPE_GORIZ", "Kaçış");
define("CAPTCHA_1", "Yenisi için resme tıklayın");
define("PLUS_TIME_ENABLE", "<p>Artı hesabınız için aktif <b><span id=\"timer100\">%s</span></b> günler.</p>");
define("RENEW", "Yenile");
define("USERS_ACTIVE", "Aktif kullanıcılar");
define("USERS_ONLINE", "Çevrimiçi kullanıcılar");
define("USERS_TOTAL", "Toplam kullanıcılar");
define("dorf1_links", "Bağlantı listesi");
define("dorf1_activateplus", "Artı hesabı etkinleştir");
define("dorf1_villageNameBox_1", "Pazar yeri yok");
define("dorf1_villageNameBox_2", "Pazar yeri oluştur");
define("dorf1_villageNameBox_3", "Kışla yok");
define("dorf1_villageNameBox_4", "Kışla inşa et");
define("dorf1_villageNameBox_5", "Ahır yok");
define("dorf1_villageNameBox_6", "Ahır inşa et");
define("dorf1_villageNameBox_7", "Bu köyde atölye yok");
define("dorf1_villageNameBox_8", "Atölye yok");
define("dorf1_villageNameBox_9", "Pazara git");
define("dorf1_villageNameBox_10", "Kışlaya git");
define("dorf1_villageNameBox_11", "Eğitim devam ediyor");
define("dorf1_villageNameBox_11n", "Devam eden eğitim yok");
define("dorf1_villageNameBox_12", "Ahır'a git");
define("dorf1_villageNameBox_13", "Eğitim devam ediyor");
define("dorf1_villageNameBox_14", "Atölyeye git");
define("dorf1_villageNameBox_15", "Eğitim devam ediyor");
define("dorf1_villageNameBox_16", "Köyün adını değiştirin");
define("dorf1_villageNameBox2_1", "Köy istatistikleri");
define("dorf1_villageNameBox2_2", "Koordinatları Göster");
define("dorf1_villageNameBox2_4", "Koordinatları gizle");
define("dorf1_villageNameBox2_3", "Köyler");
define("dorf1_villageNameBox2_5", "Başka bir köyün kontrolünü ele geçirmek için oluşturulan kültür noktaları:");
define("Link_desc_text_1", "Travian Plus, bir bağlantı listesi oluşturmanıza izin verir.");
define("infobox_desc_text_1", "Bilgi kutusu");
define("Questbox_desc_text_1", "Hoş Geldiniz");
define("Questbox_desc_text_2", "Görevi başlat");
define("LVL", 'level');
define("SIDE_I_1", "Eserler çıkacak");
define("SIDE_I_2", "");
define("SIDE_I_3", "Eserler yayınlandı");
define("SIDE_I_4", "<font style='font-size:11px;'>Bina planları şu tarihte yayınlanacak:</font>");
define("SIDE_I_5", "Bina planları yayınlandı");
define("SIDE_I_6", "Madalyalar verilecektir");
define("SIDE_I_7", "");
define("CS", "İnşaat alanı");
define("UPGRADECOST", "Bu seviyeye geliştirme maliyetleri %s ");
define("SERVER_INFO", "Sunucu bilgisi");
define("MORE_ADVS_1", "Maceraya çıkmalısın");
define("MORE_ADVS_2", "bir şeyler satın alabilmek için daha fazla kez");
define("WORLDWONDER", "Dünya harikası");
define("WAREHOUSE", "Depo");
define("NO_FARM", "Şimdiye kadar çiftlik yok!");
define("FARMLIST_FOOTER", "<small>
Çiftlik kaynakları yaklaşık 30 saniyede bir hesaplanır. <br>
Depo depolama ve Tahıl, çiftliklerde eşittir. <br>
Liste, her öğenin oluşturulma zamanına göre sıralanır.<br>
</small>");
define("PROTECTION_TIME", "Koruma Süreniz <b><span class=\"timer\" counting=\"down\" value=\"%s\">%s</span></b>");
define("ACCOUNT_DELETION", "Hesabınız silinecek <b><span class=\"timer\" counting=\"down\" value=\"%s\">%s</span></b>");
define("Ally_dorf1", "Birlik");
define("DIRECT_LINK", "Doğrudan bağlantı");
define("NO_PLUS_ESI", "Bu seçenek, aktif bir artı hesabı gerektirir");
define("NO_PLUS_ESI2", "Dükkana git");
define("NO_PLUS_ESI3", "Markete gitmek");

define("plus_goldcount", "Altın");
define("buygold_DESC_1", "yer");
define("buygold_DESC_2", "konumunuzu seçin:");
define("buygold_DESC_3", "Değişiklik");
define("buygold_DESC_4", "Altın paketleri:");
define("buygold_DESC_5", "Bir paket seçin");
define("buygold_DESC_7", "Ödeme ağ geçitleri");
define("buygold_DESC_8", "Seçilmeli");
define("buygold_DESC_9", "Fiyatlar nihai olarak işaretlenmiştir");
define("buygold_DESC_10", "Ödemeler hemen yapılacaktır");
define("buygold_DESC_11", "Altın al");
define("buygold_DESC2_1", "Başka bir paket seçin");
define("buygold_DESC_6", "Adım 2 - Bir paket seçin");
define("first_desc1", "Bir trbie seçin");
define("first_desc2", "Hesabınızı etkinleştirdiğiniz için teşekkürler");
define("first_desc3", "Bu sunucuda oynamak için bir kabile seçin");
define("first_desc4", "İlk travian Tecrübesinizse, Galyalılara tavsiye ederiz");
define("first_Gauls_desc1", "Galyalılar");
define("first_Gauls_desc2", "Özellikler:");
define("first_Gauls_desc3", "Çok az zaman gerekiyor.");
define("first_Gauls_desc4", "Oyunun en başından itibaren yağmaya karşı daha iyi savunulur.");
define("first_Gauls_desc5", "Karayolu sistemleri oyundaki mükemmel ve en hızlı Askerlerdir.");
define("first_Gauls_desc6", "Yeni oyuncular en iyi seçimdir.");
define("first_Roman_desc1", "Romalılar");
define("first_Roman_desc2", "özellikleri:");
define("first_Roman_desc3", "Zaman yönetimi gereklidir.");
define("first_Roman_desc4", "Köyünün geri kalanından daha hızlı genişleyebilirler.");
define("first_Roman_desc5", "Güçlü ordu, ancak değerlidirler; uygulanan sistemler çok güçlüdür.");
define("first_Roman_desc6", "Yarış oyunun başlarında çok zordu ve bu tür yeni oyuncular için tavsiye edilmiyor.");
define("first_Teutons_desc1", "Cermen");
define("first_Teutons_desc2", "özellikleri:");
define("first_Teutons_desc3", "Agresif oyuncular için yeterli zaman var.");
define("first_Teutons_desc4", "Ucuz askerler hızlı bir şekilde eğitilebilir ve ganimet için iyidir.");
define("first_Teutons_desc5", "Agresif ve tecrübeli oyuncular için.");
define("first_page_second_step_desc1", "Köy, seçtiğiniz konumdur.");
define("first_page_tribe1", "Romalılar");
define("first_page_tribe2", "Cermenler");
define("first_page_tribe3", "Galyalılar");
define("first_page_tribe1_lead", "Kvyntvs");
define("first_page_tribe2_lead", "Henrik");
define("first_page_tribe3_lead", "Ambyvryks");
define("first_Gauls_chosen_desc1", "Sen seçtin %s. Bundan beri rehberiniz %s .");
define("first_Romans_chosen_desc1", "Sen yarış  %s Siz seçildiniz. Şu andan itibaren %s Rehberiniz olacak.");
define("first_Teutons_chosen_desc1", "Sen yarış %s  Siz seçildiniz. Şu andan itibaren %s Rehberiniz olacak.");
define("first_page_second_step_desc2", "Kabile değiştir");
define("first_page_second_step_desc3", "Köyünüzü veya yerinizi biz inşa ederiz, haritaya tıklayarak seçiminizi değiştirebilir.");
define("first_page_second_step_desc4", "Kuzey-batıdan başlayacaksınız");
define("first_page_second_step_desc5", "Kuzey-doğudan başlayacaksınız");
define("first_page_second_step_desc6", "Güneybatıdan başlayacaksınız");
define("first_page_second_step_desc7", "Güneydoğu'dan başlayacaksınız");
define("first_page_second_step_desc8", "Köy oluştur");
define("BUILDINGS", "Köy merkezi");
define("CHANGING_YOUR_VILLAGE_NAME", "Köy Adını değiştir");
define("NEW_NAME", "yeni Köy Adı");
define("IS_ON_ADVENTURE", "Bir macerada");
define("MOVING_FROM", "Bir yerden taşınmak");
define("LN_TO", "-e");
define("SOME_CHANGES_DONE", "Değişiklikleriniz geri alınacak. Ayrılacağınızdan emin misiniz?");
define("MORE_INFO_25_BUTTON", "% 25 ekstra kaynak üretimi hakkında daha fazla bilgi");
define("HEROFULLLVL", "Kahramanınız maksimum seviyesine ulaştı.");
define("LN_QUEST", "Görev");
define("SHOW_HINTS_PANEL", "İpuçları panelini göster");
define("JR_CONSTRUCTION_PLANS_TITLE", "WW İnşaat Planı");
define("JR_CONSTRUCTION_PLANS_VNAME", "İnşaat Planı Köy");
define("JR_CONSTRUCTION_PLANS_DESC", "Bu eski yapım planıyla, World Wonder'i 50. seviyeye kadar inşa edebileceksiniz. daha fazlasını inşa etmek için, ittifakınızın en az iki planı olması gerekir.");
define("JR_CONSTRUCTION_PLANS_RELEASE_TITLE", "İnşaat Planları");
define("JR_CONSTRUCTION_PLANS_RELEASE_DESC", "On yıllar önce Travian kabileleri, aptalın beklenmedik dönüşü karşısında şaşırdılar. Bu kadim bilgeliğin, eşsiz büyüklük ve ihtişamın bu kabilesi, özgür insanları yeniden rahatsız etmek üzereydi. Natarlara karşı son bir savaş hazırlamak ve sonsuza dek sürmek için tüm çabalar böyle yapıldı. Birçoğu sözde düşündü \"Dünyanın harikaları\", a efsanevi yapı, tek çözüm. Sonun inşaatçıları liderler ve fatihleri ​​Travian yapacağı söylendi. ");
define("JR_CONSTRUCTION_PLANS_RELEASE_TREASURY_DESC", "Ancak böyle bir bina inşa etmek için bir plana ihtiyacınız olacağını söylediniz. Bu nedenle mimarlar, bunları güvenli bir şekilde saklamak için akıllı yollar tasarladılar. Bir süre sonra birçok kasaba ve şehirdeki tapınaklar gibi binaları - hazineleri - bir an önce görebildiler.");
define("JR_CONSTRUCTION_PLANS_RELEASE_MYTHS_DESC", "Ne yazık ki, hiç kimse - bilge ve tecrübeli bile - bu planların nerede bulunabileceği hakkında hiçbir fikre sahip değil. Ne kadar çok insan bulmaya çalışırsa, o kadar çok efsane gibi görünüyordu.");
define("JR_CONSTRUCTION_PLANS_RELEASE_DISCOVERED_DESC", "Ancak bugün, bu son sır keşfedilecektir. Bugün birkaç kabilenin keşifçileri bu inşaat planlarının yerlerini buldukları için kayıplar ve geçmişteki özlemler boşunaydı. Natarlar tarafından iyi korunuyor, birçok vahada gizli yatıyor karayolu boyunca dağılmış durumda. Sadece en cesur kahramanlar böyle bir planı yakalayabilir ve inşaatın başlayabilmesi için güvenli bir şekilde eve getirebilir. ");
define("JR_CONSTRUCTION_PLANS_RELEASE_LINK_DESC", "İnşaat planlarının işleyişi ile ilgili tüm bilgiler sunucularda bulunabilir.");
define("JR_HERE", "Burada");
define("JR_travian_TEAM", "ZazuGame");
define("JR_CONTINUE", "devam");
define("JR_ATTACK_COMBAT_MODEL", "Savaş Modeli");
define("JR_ATTACK_NORMAL", "Normal saldırı");
define("JR_ATTACK_RAID", "Saldırı Saldırı");
define("JR_WARSIM_ATTACKER", "Saldıran");
define("JR_WARSIM_DEFENDERS", "Savunucular");
define("JR_WARSIM_ATTACKCONFIG", "Saldırı konfigürasyonu");
define("JR_WARSIM_SIMULATE", "Simülasyon");
define("JR_POWERED_BY", "YILMAZ tarafından desteklenmektedir");
define("JR_RIGHTS", "Tüm hakları saklıdır");
define("JR_ZRAVIANX", "YILMAZ");
define("JR_COPYYEAR", "&copy; 2011 - 2012");
define("JR_FOOTER_SPECIAL_S", "<b>Geliştiren: <a href=\"404/\" target=\"_blank\" style=\"color:purple\">YILMAZ</a> (Geliştirici ve çevirmen ve tasarımcı)</b> <br/><br/> Çok teşekkürler <a style=\"color:green\">YILMAZ (Geliştirici), Yılmaz (English Translator) and ErenZazu (Developer) </a>");
define("JR_NOT_ADMIN", "Erişim Engellendi: Yönetici değilsiniz!");
define("JR_ART_BPTTL", "Antik İnşaat Planı");
define("JR_ART_BPVN", "WW İnşaat Planı");
define("JR_ART_BPDES", 'Bu eski inşaat planı ile yapabileceksiniz Dünya Harikasını 50. seviyeye inşa et. ittifakınızın en az iki planı olmalıdır.');
define('WILLACTIN', 'İçinde etkinleştirilecek');
define("JR_CATEGORY", "Kategori");
define("JR_SELECT", "Seçiniz");
define("JR_GENERALQUESTIONS", "Genel Sorular");
define("JR_ICANNOTLOGIN", "Giriş Yapamıyorum");
define("JR_ICANNOTREGISTER", "Kayıt olamıyorum");
define("JR_SEND", "Gönder");
define("JR_REGISTERFIRST", "Lütfen önce hesabınızı kaydedin.");
define("JR_HEROATTRIBUTES", "Öznitellikler");
define("JR_HEROAPPEARANCE", "Görünüm");
define("JR_HEROADVENTURE", "Macera");
define("JR_HEROAUCTION", "Açık arttırma");
define("JR_HEROHEAD", "baş");
define("JR_HEROHAIRCOLOR", "saç rengi");
define("JR_HEROHAIRSTYLE", "saç stili");
define("JR_HEROEARS", "kulaklar");
define("JR_HEROEYEBROWS", "kaşlar");
define("JR_HEROEYES", "gözler");
define("JR_HERONOSE", "burun");
define("JR_HEROMOUTH", "ağız");
define("JR_HEROBEARD", "sakal");
define("JR_HEROLOCATION", "Yerel");
define("JR_HEROTIME", "Süre");
define("JR_HERODIFFICULTY", "Zorluk");
define("JR_HEROTIMELEFT", "Kalan süre");
define("JR_HEROLINK", "Bağlantı");
define("JR_HEROBIDERROR1", "Bu eşyayı almak için yeterli gümüş paranız yok. En azından sahip olmalısınız");
define("JR_HEROBIDERROR2", "madeni paralar");
define("JR_HEROBIDERROR3", "Teklif için yeterli gümüş para yok.");
define("JR_HEROBIDERROR4", "Daha büyük bir teklif var.");
define("JR_HEROBIDERROR5", "Müzayede bitti.");
define("JR_HEROBIDERROR6", "Açık artırma mevcut değil.");
define("JR_HEROEVASION", "İşaretlendiğinde, köy saldırıya uğradığında kahraman gizlenir.");
define("JR_HERODEADORNOTHERE", "Kahramanınız öldü veya bu köyde değil, bu yüzden bu eşyayı kullanamazsınız.");
define("HEROISDEAD", "Kahraman öldü");
define("JR_HEROBUYITEMS", "Ürünleri Satın Al");
define("JR_HEROSELLITEMS", "Ürünleri Sat");
define("JR_HEROEXP", "Tecrübe");
define("JR_HEROEXPGROW", "Tecrübe kazancı");
define("JR_HEROEXPWILLBE", "kullanımdan sonra Tecrübe olacaktır");
define("JR_HEROCURRENTCP", "Mevcut kültürel nokta");
define("JR_HEROCPVALUE", "Kültürel nokta");
define("JR_HEROCPAFTERUSE", "Kullanımdan sonra kültürel nokta");
define("JR_HEROWANNAWEAR", "Bu eşyayı gerçekten giymek istiyor musunuz?");
define("JR_HEROTIU", "Kullanılan toplam öğe");
define("HEROGENEL", "Kahraman Genel Bakış");
define("HEROSADE", "Kahraman");
define("HEROPUANLAR", "Kullanılmamış Puanlar || Kahramana tıklayarak bu puanları kahramana ekleyebilirsin.");

define("JR_SAVE", "Kayıt etmek");

define("JR_FOREST", "orman");
define("JR_FIELD", "alan");
define("JR_MOUNTAIN", "dağ");
define("JR_SEA", "deniz");
define("JR_OK", "Tamam");

define("JR_CANCEL", "İptal");
define("JR_YES", "Evet");
define("JR_NO", "Hayır");
define("NUM", "Hayır.");
define("JR_NOTFINISHED", "Bitmedi");
define("JR_CONSUMPTION", "Tüketim");

define("JR_MOW", "Haftanın Madalyaları");
define("JR_MEDALSCONFIRM", "Madalya vermek için onayla");
define("JR_MEDALSCONFIRMNOTE", "Not: bu zaman alacaktır");
define("JR_CONFIRM", "Onayla");
define("CİNSİYET", "Cinsiyet");
define("CİNSİYET0", "Belirtilmemiş");
define("CİNSİYET1", "Adam");
define("GENDER2", "Kadın");

//logint4.4
define("logint40", "Daha büyük harita || Bu özellik için Travian Plus'ın etkinleştirilmesi gerekir.");
define("logint41", "Dolu");
define("logint42", "Boş");
define("logint43", "Vahşi");
define("logint410", "Orta Harita");
define("logint411", "Yeni köy bulundu");
define("logint412", "Raporlar");
define("logint413", "Oyuncu");
define("logint414", "Kabile");
define("logint415", "Alliance");
define("logint416", "Sahip");
define("logint417", "Nüfus");
define("logint418", "Dağıtım");
define("logint419", "Birlik gönder");
define("logint420", "Mesafe");
define("logint421", "Birimler");
//pluspalladiys
define("pluss0", "Başka yollarla altın alışverişi (qiwi, webmoney, paypal) iletişim");
define("pluss1", "yönetici");
define("pluss2", "Altın satın aldıktan sonra gitmelisiniz");
define("pluss3", "Banka");
define("pluss4", "Orada, sunucudaki herhangi bir hesaba kısmen veya tamamen kullanılabilir altın transfer edebileceksiniz.");
define("pluss5", "Altın Satın Alma");
define("pluss6", "Artı işlevi");
define("pluss7", "Açıklama");
define("pluss8", "Süre");
define("pluss9", "Altın");
define("pluss10", "Aksiyon");
define("pluss11", "Hesap");
define("pluss12", "Kalan");
define("pluss13", "günler");
define("pluss14", "Doviz burosu");
define("pluss15", "Değiştirmek istediğiniz Altın veya Gümüş Adetını girin.");
define("pluss16", "Döviz kurları");
define("pluss17", "1 Altın: 100 Gümüş");
define("pluss18", "2000 Gümüş: 1 Altın");
define("pluss19", "değiş tokuş");
define("pluss20", "Hata");
define("pluss21", "Altın Satın Al");
define("pluss22", "Fonksiyon");
define("pluss23", "Altın yap");
define("pluss24", "Altın ve Gümüş Takas");
define("pluss25", "Etkinleştir");
define("pluss26", "Uzat");
define("pluss27", "Altına İhtiyaç Var");
define("pluss28", "Kalan");
define("pluss29", "günler");
define("pluss30", "saatler");
define("pluss31", "dakika");
define("pluss32", "Var");
define("pluss33", "altınlar");
define("pluss34", "Üretim: Kereste");
define("pluss35", "Üretim: Kil");
define("pluss36", "Üretim: Demir");
define("pluss37", "Üretim: Tahıl");
define("pluss38", "1:1 NPC");
define("pluss39", "");
define("pluss40", "");
define("pluss41", "");
define("pluss42", "");
define("pluss43", "");
define("pluss44", "");
define("pluss45", "");

//herohome
define("herohero0", "Nitelikler");
define("herohero1", "Görünüm");
define("herohero2", "Macera");
define("herohero3", "Müzayedeler");
define("herohero4", "Ürünü satın al.");
define("herohero5", "Ürünü sat.");
define("herohero6", "Rastgele");

//ban_msg.tpl
define("yubnd", "Engellendiniz. Lütfen Multihunter'a mesaj gönderin");

define("SOKI_1", "Macera");
define("SOKI_2", "Birimler");
define("SOKI_3", "Varış");
define("SOKI_4", "Maceraya Başla");
define("SOKI_5", "Uyarı");
define("SOKI_6", "Görünen parşömenler");
define("attack1", "Kaynaklar");
define("attack2", "Altyapı");
define("attack3", "Askerler");
define("attack4", "Kaynaklar");
define("attack5", "Altyapı");
define("attack6", "Askerler");
define("attack7", "Elmas Keski");
define("attack8", "Dev Mermer Çekiç)");
define("attack9", "Hemon's Scrolls");
define("attack10", "Opal At Nalı");
define("attack11", "Altın Savaş Arabası");
define("attack12", "Pheidippides' Sandals");
define("attack13", "Sıçan Masalı");
define("attack14", "Generalin Mektubu");
define("attack15", "Sun Tzu'nun Günlüğü");
define("attack16", "Yazılı Askerin Yemini");
define("attack17", "Savaş İlanı");
define("attack18", "Büyük İskender'in Anıları");
define("attack19", "Büyük depo veya harika tahıl ambarı planı!");
define("attack20", "Dünya Harikası kurucuları!");
define("attack21", "onayla");

define("newdorf1", "Yeni köy bulundu");
define("newdorf2", "yeni");
define("newdorf3", "Yeni köy bulundu");
define("newdorf4", "asker");
define("newdorf5", "Süre");
define("newdorf6", "Kaynaklar");
define("newdorf7", "onayla");
define("newdorf8", "kültür noktaları");

define("search1", "Destek");
define("search2", "Normal saldırı");
define("search3", "Saldırı");
define("search4", "Koordinat");
define("search5", "X"); // gerçekten gerekli olup olmadığından emin değilim lol
define("search6", "Y");
define("search7", "Onayla");

define("sendback1", "Eve gönder");
define("sendback2", "Bu Askerleri geri gönder");
define("sendback3", "Birimler");
define("sendback4", "Zaman");
define("sendback5", "içinde");
define("sendback6", "-e");
define("sendback7", "Onayla");

define("startraid1", "Yeterli askeriniz yok!");


define("activated1", "Oyuna Kaydol");
define("activated2", "Kayıt");

define("delete", "Oyuna Kaydol");
define("delete2", "sil");

define("allimenu1", "aktif");
define("allimenu2", "normal");
define("allimenu3", "Haberler");
define("allimenu4", "Saldırılar");
define("allimenu5", "Seçenekler");

define("allidesc1", "Mağaza");

define("assignpos1", "Atamak");

define("attacker1", "Kullanılabilir rapor yok");

define("defender1", "Kullanılabilir rapor yok");

define("attacks1", "Askeri olaylar");
define("attacks2", "Defans oyuncusu");
define("attacks3", "Saldırgan");

define("changepos0", "İsim");
define("changepos1", "Atamak");
define("changepos2", "Atmak");
define("changepos3", "Açıklamayı Değiştir");
define("changepos4", "Birlik Diplomasisi");
define("changepos5", "Tüm ittifak için IGM'ler");
define("changepos6", "Davet et");
define("changepos7", "Pozisyon Adı");

define("changediplo1", "Yok");

define("invite1", "Davet Yok");
define("invite2", "Reddedildi");
define("invite3", "Davet edildi");


define("kick1", "Git");

define("option1", "Git");

define("overvieww1", "Detaylar");
define("overvieww2", "Durum");
define("overvieww", "Üyeler");


define("quitally1", "Çık");

define("bids1", "Her birim için");
define("bids2", "Teklifler");
define("bids3", "Gümüş");
define("bids4", "Zaman");
define("bids5", "Of the");

define("buy1", "gümüş");
define("buy2", "birim başına");
define("buy3", "Yeni teklif");
define("buy4", "Teklif");

define("build1", "Depoyu Yükselt");
define("build2", "Tahıl Ambarı Yükseltme");
define("build3", "Yeterli Kaynaklar");
define("build4", "Buğday üretimi olumsuz, asla yeterli kaynak olmayacak");
define("build5", "birkaç kaynak");
define("build6", "Tamamıyla gelişmiş");
define("build7", "Zırh Dökümhanesiyi geliştirin");
define("build8", "Araştırma devam ediyor");
define("build9", "geliştirme");
define("build10", "Birim");
define("build11", "Kalan süre");
define("build12", "Bitti");
define("build13", "Binanın yıkılması");
define("build14", "Bir binaya artık ihtiyacın kalmazsa yapı ustalarına binayı yıkma emri verebilirsin:");
define("build15", "Yıkım");
define("build16", "Bu köydeki tüm inşaat ve araştırma siparişlerini 2 Altın karşılığında hemen bitirilsin mi?");
define("build17", "Binayı yıkın");
define("build18", "Kill");
define("build19", "Çiftlik listesi ücretsizdir, ancak yalnızca altın kulüp mevcut olduğunda.");
define("build20", "Kaçınma ayarları");
define("build21", "Asker kaçırma işlemini merkez köy için aktifleştir. Askerler saldırı anında köyü terk eder ve 180 saniye sonra geri dönerler. Askerler sadece saldırıdan 10 saniye öncesine kadar köye dönen asker YOKSA (bu seçeneği kullanarak geri dönen askerler bu kuralın dışındadır) kaçabilirler. Bu köyü destekleyen askerler kaçamaz.");
define("build22", "Saldırı");
define("build23", "Saldırı");
define("build24", "Destek için");
define("build25", "Askerler");
define("build26", "Varış");
define("build27", "in");
define("build28", "Dönüş kaynağı");
define("build29", "Destek için");
define("build30", "Dönen");
define("build31", "Dönüş kaynağı");
define("build32", "Kapaktan dön");
define("build33", "Oasis");
define("build34", "Cover");
define("build35", "Dönüş kaynağı");
define("build36", "Askerler");
define("build37", "Çalıntı");
define("build38", "Varış");
define("build39", "Size Saldırın");
define("build40", "Oasis");
define("build41", "Askerler");
define("build42", "Varış");
define("build43", "in");
define("build44", "Askerler");
define("build45", "Tüketim");
define("build46", "por hora");
define("build47", "Destek için");
define("build48", "Scout");
define("build49", "Saldırı");
define("build50", "Saldırı");
define("build51", "Основание Поселения");
define("build52", "Macera");
define("build53", "Oasis");
define("build54", "Askerler");
define("build55", "Tüccarlar");
define("build56", "Ahşap");
define("build57", "Demir");
define("build58", "Buğday");
define("build59", "Koordinatlar");
define("build60", "Oyuncu");
define("build61", "süre");
define("build62", "Tüccarlar");
define("build63", "Satıcıları Gönder");
define("build64", "Kırp");
define("build65", "Koordinatlar");
define("build66", "Her satıcı taşıyabilir");
define("build67", "Kaynakları Gönder");
define("build68", "Koordinat seçilmedi");
define("build69", "Aynı köye kaynak gönderemezsiniz");
define("build70", "Oyuncu Yasaklandı. Ona kaynak gönderemezsiniz.");
define("build71", "Kaynaklar seçilmedi.");
define("build72", "Koordinatları veya köy adını girin.");
define("build73", "Çok az üye.");
define("build74", "Tüccarlar geliyor");
define("build75", "Transport from");
define("build76", "Varış");
define("build77", "Yoldaki tüccar sahibi olun");
define("build78", "Transport to");
define("build79", "Varış");
define("build80", "Resource");
define("build81", "Geri dönen tüccarlar");
define("build82", "Dönüş kaynağı");
define("build83", "Varış");
define("build84", "Kaynak");
define("build85", "arıyorum");
define("build86", "Ben teklif ediyorum");
define("build87", "Pazardaki Teklifler");
define("build88", "Sunulan");
define("build89", "bana");
define("build90", "Aranıyor");
define("build91", "benden");
define("build92", "Player");
define("build93", "Süre");
define("build94", "Eylem");
define("build95", "Yeterli Kaynak Yok");
define("build96", "Yeterli Satıcı Değil");
define("build97", "Teklifi kabul et");
define("build98", "Pazarda uygun teklif yok");
define("build99", "Teklif");
define("build100", "Wood");
define("build101", "Clay");
define("build102", "Demir");
define("build103", "Kırp");
define("build104", "azami taşıma süresi");
define("build105", "saat");
define("build106", "Aranıyor");
define("build107", "sadece kendi ittifakı");
define("build108", "Tüccarlar");
define("build109", "Sat");
define("build110", "Teklif");
define("build111", "Alliance");
define("build112", "Süre");
define("build113", "saat");
define("build114", "Tümü");
define("build115", "NPC tamamlandı");
define("build116", "Maliyet 3");
define("build117", "Binaya geri dön");
define("build118", "NPC Ticareti");
define("build119", "Kaynakları takas edin (adım 2/2)");
define("build120", "Maliyetler");
define("build121", "WW köyünde NPC ticaretini kullanamazsınız.");
define("build122", "Başlat");
define("build123", "Tüccarlar");
define("build124", "Eylem");
define("build125", "Etkin ticaret yolu yok");
define("build126", "Düzenle");
define("build127", "Yeni ticaret yolu oluştur");
define("build128", "Ticaret yolu oluştur");
define("build129", "Hedef köy");
define("build130", "Kaynaklar");
define("build131", "Başlangıç ​​zamanı");
define("build132", "Teslimatlar");
define("build133", "Ticaret yolunu düzenle");
define("build134", "Kaynaklar");
define("build135", "Başlangıç ​​zamanı");
define("build136", "Teslimatlar");
define("build137", "Alliance");
define("build138", "Etiket");
define("build139", "Ad");
define("build140", "Davetler");
define("build141", "Kabul Et");
define("build142", "Kullanılabilir davetiye yok");
define("build143", "birlik bulundu");
define("build144", "Etiket");
define("build145", "Ad");
define("build146", "oluştur");
define("build147", "Yetiştir");
define("build148", "Eğitim");
define("build149", "Kullanılabilir birim yok. Akademide araştırma");
define("build150", "Kullanılabilir");
define("build151", "tümü");
define("build152", "Birimler araştırılmalıdır");
define("build153", "Yetiştir");
define("build154", "Birimler araştırılmalıdır");
define("build155", "Eğitim");
define("build156", "Süre");
define("build157", "Bitti");
define("build158", "Akademi tamamlandığında araştırma başlayabilir");
define("build159", "Depoyu genişlet");
define("build160", "Genişlet <br> deposu");
define("build161", "Tahıl deposunu genişlet");
define("build162", "Genişlet <br> tahıl ambarı");
define("build163", "Yeterli kaynak");
define("build164", "Tahıl üretimi negatiftir, böylece gerekli kaynaklara asla ulaşamazsınız");
define("build165", "Çok az");
define("build166", "kaynaklar");
define("build167", "Araştırma devam ediyor");
define("build168", "Araştırma");
define("build169", "Süre");
define("build170", "Tamamlandı");
define("build171", "saat");
define("build172", "Şu anda kaynak başına gizli birimler");
define("build173", "Düzeyde kaynak başına gizli birimler");
define("build174", "Kutlamalar, belediye binası tamamlandığında başlayabilir.");
define("build175", "Kutlamalar");
define("build176", "Eylem");
define("build177", "devam ediyor");
define("build178", "at");
define("build179", "beklet");
define("build180", "Harika kutlama (2000 kültür puanı)");
define("build181", "Bitir");
define("build182", "Parti");
define("build183", "Ulusunuzu genişletmek için kültür puanlarına ihtiyacınız var. Bunlar zamanla binalarınızdan ve daha yüksek seviyelerde daha hızlı birikir ..");
define("build184", "Bu köyün üretimi");
define("build185", "Günlük kültür puanı");
define("build186", "Tüm köylerin üretimi");
define("build187", "Günlük kültür puanı");
define("build188", "Köyleriniz üretti");
define("build189", "toplam puan. Yeni bir köy bulmak veya fethetmek için ihtiyacınız olan");
define("build190", "puan.");
define("build191", "Senatörlerle, şeflerle veya reislerle saldırarak bir köyün sadakati azaltılabilir. Sıfıra ulaşırsa, köy saldırganın diyarına katılır. Bu köyün sadakati şu anda");
define("build192", "yüzde");
define("build193", "Bu köyün kurduğu veya fethettiği köyler");
define("build194", "Köy");
define("build195", "Oyuncu");
define("build196", "Yerleşikler");
define("build197", "Koordinatlar");
define("build198", "Tarih");
define("build199", "Bu köy tarafından henüz başka bir köy kurulmamış veya fethedilmemiştir.");
define("build200", "eğitim");
define("build201", "nokta");
define("build202", "hazır");
define("build203", "on");
define("build204", "Yetiştir");
define("build205", "Yeni bir köy kurmak için seviye 10 veya 20 Köşk ve 3 yerleşimciye ihtiyacınız var. Yeni bir köyü fethetmek için seviye 10 veya 20 Köşk ve bir senatör, şef veya şefe ihtiyacınız var.");
define("build206", "şifre yanlış");
define("build207", "Bu sizin başkentinizdir");
define("build208", "sermayeyi değiştir");
define("build209", "Başkentinizi değiştirmek istediğinizden emin misiniz? <br/> <b> Bunu geri alamazsınız! </b>. <br/> Güvenlik için şifrenizi girmelisiniz onaylamak");
define("build210", "Değiştir");
define("build211", "Saray yapım aşamasında");
define("build212", "Yeni bir köy kurmak için seviye 10, 15 veya 20 saray ve 3 yerleşimciye ihtiyacınız var. Yeni bir köyü fethetmek için seviye 10, 15 veya 20 bir saray ve bir senatör, şef veya reis. ");
define("build213", "Eserleriniz");
define("build214", "Başlık");
define("build215", "Köy");
define("build216", "Yakalanmış");
define("build217", "Elinizde Hiç Eseri Yok");
define("build218", "Elmas Keski");
define("build219", "Binalar mancınık ve koçların saldırılarına karşı daha dayanıklıdır. Dünya Harikası için değil, Dünya Harikası köyündeki diğer tüm binalar için hesap geniş ve benzersiz tipte sayılır.");
define("build220", "Dev Mermer Çekiç");
define("build221", "Binalar mancınık ve koçların saldırılarına karşı daha dayanıklıdır. Dünya Harikası için değil, Dünya Harikası köyündeki tüm diğer binalar için hesap geniş ve benzersiz tipte sayılır.");
define("build222", "Hemon's Scrolls");
define("build223", "Binalar mancınık ve koçların saldırılarına karşı daha dayanıklıdır. Dünya Harikası için değil, Dünya Harikası köyündeki diğer tüm binalar için hesap geniş ve benzersiz tipte sayılır.");
define("build224", "Opal At Nalı");
define("build225", "Askerler daha hızlı hareket eder.");
define("build226", "Altın Savaş Arabası");
define("build227", "Askerler daha hızlı hareket eder.");
define("build228", "Pheidippides 'Sandalet");
define("build229", "Askerler daha hızlı hareket eder.");
define("build230", "Bir Sıçanın Hikayesi");
define("build231", "İzciler, Equites Legati ve Pathfinders casuslukta ve casus saldırılarına karşı savunmada daha iyidir. Köydeki / hesaptaki tüm izciler ve bu köyden / hesaptan casusluk yapmak için gönderilen tüm izciler bundan etkilenir. Ancak, Artefact kapsamına girmeyen köylere Destek olarak yerleştirilen keşif görevlileri etkilenmez. Ek olarak, toplanma noktanızda size saldıran Askerlerin türünü görebilirsiniz, ancak birlik Adetını göremezsiniz. ");
define("build232", "Generalin Mektubu");
define("build233", "İzciler, Equites Legati ve Pathfinders casuslukta ve casus saldırılarına karşı savunmada daha iyidir. Köydeki / hesaptaki tüm izciler ve bu köyden / hesaptan casusluk yapmak için gönderilen tüm izciler bundan etkilenir. Ancak, Artefact kapsamına girmeyen köylere Destek olarak yerleştirilen keşif görevlileri etkilenmez. Ek olarak, toplanma noktanızda size saldıran Askerlerin türünü görebilirsiniz, ancak birlik Adetını göremezsiniz. ");
define("build234", "Sun Tzu Günlüğü");
define("build235", "İzciler, Equites Legati ve Pathfinders casuslukta ve casus saldırılarına karşı savunmada daha iyidir. Köydeki / hesaptaki tüm izciler ve bu köyden / hesaptan casusluk yapmak için gönderilen tüm izciler bundan etkilenir. Ancak, Artefact kapsamına girmeyen köylere Destek olarak yerleştirilen keşif görevlileri etkilenmez. Ek olarak, toplanma noktanızda size saldıran Askerlerin türünü görebilirsiniz, ancak birlik Adetını göremezsiniz. ");
define("build236", "Gümüş Tabak");
define("build237", "Askerler daha az ürün tüketir.");
define("build238", "Kutsal Av Yayı");
define("build239", "Askerler daha az ürün tüketir.");
define("build240", "Kral Arthur'un Kadehi");
define("build241", "Askerler daha az ürün tüketir.");
define("build242", "Yazılı Askerin Yemini");
define("build243", "Askerler daha hızlı eğitilir.");
define("build244", "Savaş İlanı");
define("build245", "Askerler daha hızlı eğitilir.");
define("build246", "Büyük İskender'in Anıları");
define("build247", "Askerler daha hızlı eğitilir.");
define("build248", "Büyük depo veya büyük tahıl ambarı planı");
define("build249", "Büyük bir ambar veya büyük bir ambar inşa etme yeteneği verir ..");
define("build250", "Binalara Erişim");
define("build251", "Gizli Mağaraların Haritası");
define("build252", "Eser, sığınak kapasitesini yükseltir ve ayrıca düşman mancınık saldırılarının rastgele ateşlenmesine neden olur. World Wonder her zaman hedeflenebilir ve vurulabilir.");
define("build253", "Bottomless");
define("build254", "Eser, sığınak kapasitesini artırır ve ayrıca düşman mancınık saldırılarının rastgele ateşlenmesine neden olur. World Wonder her zaman hedeflenebilir ve vurulabilir.");
define("build255", "Truva Atı");
define("build256", "Eser, sığınak kapasitesini artırır ve ayrıca düşman mancınık saldırılarının rastgele ateşlenmesine neden olur. World Wonder her zaman hedeflenebilir ve vurulabilir.");
define("build257", "Mischief Kolyesi");
define("build258", "Bu eser, etkisini her 24 saatte bir değiştirir ve World Wonders, Great Granaries ve Great Warehouses bina planları dışında diğer eserlerin herhangi bir etkisini alabilir. Ayrıca efekt kapsamı, hesap ile hesap arasında rastgele belirlenir. köy çapında 24 saatte bir. ");
define("build259", "Yanlışlıkla");
define("build260", "Yasak El Yazması");
define("build261", "Bu yapı, etkisini 24 saatte bir değiştirir ve Dünya Harikaları, Büyük Tahıl Ambarları ve Büyük Depolar için bina planları dışında diğer eserlerin tüm etkilerini alabilir. Ayrıca etki kapsamı, hesap ile hesap arasında rastgele belirlenir. köy çapında 24 saatte bir. ");
define("build262", "Yanlışlıkla");
define("build263", "Dünya Harikası İnşa Etmek");
define("build264", "Wonder'ı oluşturmak için Artefakt gerekli");
define("build265", "Binalara Erişim");
define("build266", "Köy");
define("build267", "Hesap");
define("build268", "Hazine");
define("build269", "Etki");
define("build270", "En yakın yapılar");
define("build271", "Başlık");
define("build272", "Player");
define("build273", "Mesafe");
define("build274", "En yakın eserler eksik.");
define("build275", "Elmas Keski");
define("build276", "Dev Mermer Çekiç");
define("build277", "Hemon's Scrolls");
define("build278", "Opal At Nalı");
define("build279", "Altın Savaş Arabası");
define("build280", "Pheidippides 'Sandalet");
define("build281", "Bir Fare Masalı");
define("build282", "Generalin Mektubu");
define("build283", "Sun Tzu Günlüğü");
define("build284", "Yazılı Askerin Yemini");
define("build285", "Savaş İlanı");
define("build286", "Büyük İskender'in Anıları");
define("build287", "Büyük depo veya büyük tahıl ambarı planı");
define("build288", "Binalara Erişim");
define("build289", "Dünya Harikası İnşa Etmek");
define("build290", "Binalara Erişim");
define("build291", "Köy");
define("build292", "Hesap");
define("build293", "Mesafe");
define("build294", "Etki");
define("build295", "Küçük eserler");
define("build296", "Başlık");
define("build297", "Oyuncu");
define("build298", "Alliance");
define("build299", "Hiç yapı yok.");
define("build300", "Elmas Keski");
define("build301", "Opal At Nalı");
define("build302", "Bir Fare Masalı");
define("build303", "Yazılı Askerin Yemini");
define("build304", "Büyük depo veya büyük tahıl ambarı planı");
define("build305", "Binalara Erişim");
define("build306", "Dünya Harikası İnşa Etmek");
define("build307", "Binalara Erişim");
define("build308", "Hazine");
define("build309", "Etki");
define("build310", "Köy");
define("build311", "Büyük eserler");
define("build312", "Başlık");
define("build313", "Oyuncu");
define("build314", "Alliance");
define("build315", "Dev Mermer Çekiç");
define("build316", "Hemon's Scrolls");
define("build317", "Altın Savaş Arabası");
define("build318", "Pheidippides 'Sandalet");
define("build319", "General's Letter");
define("build320", "Sun Tzu Günlüğü");
define("build321", "Savaş İlanı");
define("build322", "Büyük İskender'in Anıları");
define("build323", "Büyük depo veya büyük tahıl ambarı planı");
define("build324", "Binalara Erişim");
define("build325", "Hesap");
define("build326", "Hiç yapı yok.");
define("build327", "Hazine");
define("build328", "Etki");
define("build329", "Küçük Eserler");
define("build330", "Büyük Eserler");
define("build331", "Köy");
define("build332", "Hesap");
define("build333", "Aktif Değil");
define("build334", "Etkin");
define("build335", "Elmas Keski");
define("build336", "Binalar mancınık ve koçların saldırılarına karşı daha dayanıklıdır. Dünya Harikası için değil, Dünya Harikası köyündeki tüm diğer binalar için hesap geniş ve benzersiz tipte sayılır.");
define("build337", "Dev Mermer Çekiç");
define("build338", "Binalar mancınık ve koçların saldırılarına karşı daha dayanıklıdır. Dünya Harikası için değil, Dünya Harikası köyündeki diğer tüm binalar için hesap geniş ve benzersiz tipte sayılır.");
define("build339", "Hemon's Scrolls");
define("build340", "Binalar mancınık ve koçların saldırılarına karşı daha dayanıklıdır. Dünya Harikası için değil, Dünya Harikası köyündeki diğer tüm binalar için hesap geniş ve benzersiz tipte sayılır.");
define("build341", "Opal At Nalı");
define("build342", "Askerler daha hızlı hareket eder.");
define("build343", "Altın Savaş Arabası");
define("build344", "Askerler daha hızlı hareket eder.");
define("build345", "Pheidippides 'Sandalet");
define("build346", "Askerler daha hızlı hareket eder.");
define("build347", "Bir Fare Masalı");
define("build348", "İzciler, Equites Legati ve Pathfinders casuslukta ve casus saldırılarına karşı savunmada daha iyidir. Köydeki / hesaptaki tüm izciler ve bu köyden / hesaptan casusluk yapmak için gönderilen tüm izciler bundan etkilenir. Ancak, Artefact kapsamına girmeyen köylere Destek olarak yerleştirilen keşif görevlileri etkilenmez. Ek olarak, toplanma noktanızda size saldıran Askerlerin türünü görebilirsiniz, ancak birlik Adetını göremezsiniz. ");
define("build349", "Generalin Mektubu");
define("build350", "İzciler, Equites Legati ve Pathfinders casuslukta ve casus saldırılarına karşı savunmada daha iyidir. Köydeki / hesaptaki tüm izciler ve bu köyden / hesaptan casusluk yapmak için gönderilen tüm izciler bundan etkilenir. Ancak, Artefact kapsamına girmeyen köylere Destek olarak yerleştirilen keşif görevlileri etkilenmez. Ek olarak, toplanma noktanızda size saldıran Askerlerin türünü görebilirsiniz, ancak birlik Adetını göremezsiniz. ");
define("build351", "Sun Tzu Günlüğü");
define("build352", "İzciler, Equites Legati ve Pathfinders casuslukta ve casus saldırılarına karşı savunmada daha iyidir. Köydeki / hesaptaki tüm izciler ve bu köyden / hesaptan casusluk yapmak için gönderilen tüm izciler bundan etkilenir. Ancak, Artefact kapsamına girmeyen köylere Destek olarak yerleştirilen keşif görevlileri etkilenmez. Ek olarak, toplanma noktanızda size saldıran Askerlerin türünü görebilirsiniz, ancak birlik Adetını göremezsiniz. ");
define("build353", "Yazılı Askerin Yemini");
define("build354", "Askerler daha hızlı eğitilir.");
define("build355", "Savaş İlanı");
define("build356", "Büyük İskender'in Anıları");
define("build357", "Büyük depo veya büyük tahıl ambarı planı");
define("build358", "Büyük bir ambar veya büyük bir ambar inşa etme yeteneği verir ..");
define("build359", "Binalara Erişim");
define("build360", "Dünya Harikası İnşa Etmek");
define("build361", "Wonder'ı oluşturmak için Artefakt gerekli");
define("build362", "Binalara Erişim");
define("build363", "Sahip");
define("build364", "Köy");
define("build365", "Birlik");
define("build366", "Etki");
define("build367", "Bonus");
define("build368", "Aktivite");
define("build369", "Depolanan");
define("build370", "Hazine");
define("build371", "Seviye");
define("build372", "Yakalandı");
define("build373", "Mevcut satıcı yükü");
define("build374", "Düzeyde satıcı yükü");
define("build375", "Seviye 20'deki satıcı yükü");
define("build376", "Yetiştir");
define("build377", "Eğitim, büyük kışlalar tamamlandığında başlayabilir.");
define("build378", "Kullanılabilir");
define("build379", "Eğitim, büyük ahırlar tamamlandığında başlayabilir.");
define("build380", "Eğitim");
define("build381", "Süre");
define("build382", "Bitti");
define("build383", "Akademideki ilk süvari birimlerini eğitin.");
define("build384", "Mevcut bonusu");
define("build385", "Gerçek bonus");
define("build386", "Seviyeye bonus");
define("build387", "Şenlik");
define("build388", "Eylem");
define("build389", "Tatil");
define("build390", "sırasında");
define("build391", "Kaynaklar yeterli olacaktır");
define("build392", "Yeterli tane yok.");
define("build393", "Yeterli değil");
define("build394", "kaynaklar");
define("build395", "kutlamak");
define("build396", "Tatil sürer");
define("build397", "Tamamlanacak");
define("build398", "Eğitilecek maksimum tuzakları düzeltin");
define("build399", "Tuzaklar");
define("build400", "Seviyede eğitilebilecek maksimum tuzaklar");
define("build401", "Seviye 20'de eğitilecek maksimum tuzaklar");
define("build402", "Şu anda sahip olduğunuz");
define("build403", "Kullanılabilir");
define("build404", "Yap");
define("build405", "Trapper tamamlandığında eğitim başlayabilir.");
define("build406", "Oasis işgal eden");
define("build407", "köy");
define("build408", "Tür");
define("build409", "Sadakat");
define("build410", "Fethedildi");
define("build411", "Koordinatlar");
define("build412", "Kaynaklar");
define("build413", "1. Kahramanın Malikanesi Seviye 10'dan Sonraki Vaha");
define("build414", "2. Kahramanın Malikanesi Seviye 15'ten Sonraki Vaha");
define("build415", "3. Kahramanın Malikanesi Seviye 20'den Sonraki Vaha");
define("build416", "2. Kahramanın Malikanesi Seviye 15'ten Sonraki Vaha");
define("build417", "3. Kahramanın Malikanesi Seviye 20'den Sonraki Vaha");
define("build418", "3. Kahramanın Malikanesi Seviye 20'den Sonraki Vaha");
define("build419", "Diğer vahalar");
define("build420", "Sahip");
define("build421", "Köy");
define("build422", "Koordinatlar");
define("build423", "Kaynak");
define("build424", "Mevcut kapasite");
define("build425", "birimler");
define("build426", "Düzeyde kapasite");
define("build427", "Maliyet");
define("build428", "İşçiler çalışıyor");
define("build429", "Yiyecek kıtlığı: İlk olarak Cropland'ı yükseltin!");
define("build430", "Yükseltme deposu.");
define("build431", "Tahıl Ambarı Yükselt.");
define("build432", "Yeterli kaynak");
define("build433", "Yapıyı inşa et");
define("build434", "Kuyruk");
define("build435", "Yapıyı inşa et");
define("build436", "Mimar");
define("build437", "Yeni bina inşası");
define("build438", "Yakında kullanıma sunulan yapıları görüntüle");
define("build439", "Gerekli");
define("build440", "Seviye");
define("build441", "Bina maksimum seviyede.");
define("build442", "Oluşturulan maksimum seviye.");
define("build443", "Bina yıkım aşamasında.");
define("build444", "Maliyetler");
define("build445", "seviyeye ulaşmak için");
define("build446", "Tüm Çalışanlar meşgul");
define("build447", "Tüm Çalışanlar meşgul. (Kuyruk)");
define("build448", "Yiyecek sıkıntısı. Daha fazla çiftlik kurun.");
define("build449", "Depo Oluştur.");
define("build450", "Tahıl Ambarı Oluştur.");
define("build451", "Asla yeterli kaynak olmayacak");
define("build452", "yeterli kaynaklar");
define("build453", "Seviyesini artırın");
define("build454", "çevir");
define("build455", "Mimar");
define("build456", "Dünya Harikası");
define("build457", "Seviye");
define("build459", "Adını değiştirebilmek için World Wonder seviye 1'e sahip olmanız gerekir.");
define("build460", "Dünya Mucizesi adı");
define("build461", "Dünya harikası'in ismini 10. seviyeden sonra değiştiremezsiniz.");
define("build462", "Ad değiştirildi.");
define("build463", "Bina maksimum seviyede.");
define("build464", "Oluşturulan maksimum seviye.");
define("build465", "Bina yıkılmak üzeredir.");
define("build466", "Maliyetler");
define("build467", "seviyeye ulaşmak için");
define("build468", "Tüm Çalışanlar meşgul.");
define("build469", "Tüm Çalışanlar meşgul. (Kuyruk)");
define("build470", "Yiyecek sıkıntısı. Daha fazla çiftlik kurun.");
define("build471", "Depo İnşa Et.");
define("build472", "Tahıl Ambarı İnşa Et.");
define("build473", "yeterli kaynaklar");
define("build474", "in");
define("build475", "Düzeyini artırın");
define("build476", "Mimar");
define("build477", "WW inşaat planına ihtiyacınız var.");
define("build478", "Daha fazla WW inşaat planına ihtiyacınız var.");

define("dorf31", "Köy");
define("dorf32", "Köy");
define("dorf33", "Yapı");
define("dorf34", "Askerler");
define("dorf35", "Satıcılar");
define("dorf36", "Kaynaklar");
define("dorf37", "Toplam");
define("dorf38", "Depo");
define("dorf39", "Kültür noktaları");
define("dorf310", "CP / gün");
define("dorf311", "Kutlamalar");
define("dorf312", "Askerler");
define("dorf313", "Yuvalar");
define("dorf314", "Kendi Askerleri");
define("dorf315", "CP");
define("dorf316", "Saldırılar");

define("gclub0", "Köy");
define("gclub1", "on");
define("gclub2", "Mesafe");
define("gclub3", "Askerler");
define("gclub4", "Son Saldırı");
define("gclub5", "Herhangi bir Saldırı listesi yok.");
define("gclub6", "Oasis");
define("gclub7", "düzenle");
define("gclub8", "Tümünü Seç");
define("gclub9", "Saldırı Ekle");
define("gclub10", "Saldırı Başlat");
define("gclub11", "bu listeyi silmek istediğinizden emin misiniz?"); //farmlist.php 225 satırı, çalışıp çalışmayacağından emin değilim
define("gclub12", "Ayrıntılar");
define("gclub13", "Yeni bir liste oluştur");
define("gclub14", "Ad");
define("gclub15", "Köy");
define("gclub16", "Oluştur");
define("gclub17", "Bu koordinatlarda köy yok.");
define("gclub18", "Bulunduğunuz köyün listesine ekleme yapamazsınız.");
define("gclub19", "Hiçbir birlik seçilmedi.");
define("gclub20", "Doğru koordinatları girin.");
define("gclub21", "Yuva Ekle");
define("gclub22", "Çiftlik Adı");
define("gclub23", "Hedef seçin");
define("gclub24", "Bu sizin listeniz değil!");
define("gclub25", "Bu koordinatlarda köy yok.");
define("gclub26", "Bulunduğunuz köyün listesine ekleme yapamazsınız.");
define("gclub27", "Doğru koordinatları girin.");
define("gclub28", "Hiçbir birlik seçilmedi.");
define("gclub29", "Doğru koordinatları girin.");
define("gclub30", "Sil");

define("harita1", "Haritayı ortala");
define("harita2", "Yeni köy bulundu");
define("map3", "Birlik gönder");
define("map4", "Dağıtım:");
define("map5", "Askerler");
define("map6", "Player");
define("map7", "Kabile");
define("map8", "Alliance");
define("map9", "Owner");
define("map10", "Nüfus");
define("harita11", "Raporlar");

define("msg0", "Konu");
define("msg1", "Oyuncu");
define("msg2", "Gönderildi");
define("msg3", "Kullanılabilir mesaj yok.");
define("msg4", "Tümünü Kontrol Et");
define("msg5", "Sil");
define("msg6", "Gelen Kutusu");
define("msg7", "Yaz");
define("msg8", "Gönderildi");
define("msg9", "Mesaj yok.");
define("msg10", "Alıcı");
define("msg11", "Suject");
define("msg12", "Gönder");

define("notice0", "köyden");
define("notice1", "Askerler");
define("notice2", "kayıp");
define("notice3", "mahkumlar");
define("notice4", "Bilgi");
define("notice5", "savunma");
define("notice6", "güçlendirme");
define("notice7", "saldırı");
define("notice8", "köyden");
define("notice9", "Gönderildi");
define("notice10", "içinde");
define("notice11", "gönderen");
define("notice12", "köyden");
define("notice13", "Askerler");
define("notice14", "Askerler");
define("notice15", "Bilgi");
define("notice16", "Kaynak:");
define("notice17", "Gönderildi");
define("notice18", "köyden");
define("notice19", "Kaynaklar");
define("notice20", "köyde");
define("notice21", "izciler");
define("notice22", "Rapor yok");
define("notice23", "Hepsini kontrol et");
define("notice24", "Sil");

define("plus0", "ALTIN ​​satın al");
define("plus1", "Fiyat");
define("plus2", "numara");
define("plus3", "Satın Al");
define("plus4", "Şartname");
define("plus5", "Satın Al");
define("plus6", "ÖZEL");
define("plus7", "Altın fiyat");
define("plus8", "Fiyat");
define("plus9", "Adet");
define("plus10", "Satın Al(PayPal)");
define("plus11", "Şartname");
define("plus12", "Satın Al");
define("plus13", "Farklı bir Adet için altın satın almak(UnitPay) (TR)");
define("plus14", "Ödeme Adetı");
define("plus15", "Toplam");
define("plus16", "*300 dolar üzerinde altın alırken, altın tarifelerden daha karlı!");
define("plus17", "Herhangi bir sorunuz varsa lütfen iletişime geçin");
define("plus18", "Yönetici");
define("plus19", "Altın satın aldıktan sonra şu adrese gitmelisiniz:");
define("plus20", "Banka");
define("plus21", "Orada Gold'u mevcut bir sunucudaki herhangi bir hesaba kısmen veya tamamen aktarabilirsiniz..");
define("plus22", "ruble");
define("plus23", "Banka(mini versiyon)");
define("plus24", "Önceki turlardan satın alınan / aktarılan altın burada saklanır. (Bakiye 100 jetonu aştıysa) <br /> zazugame.com içindeki <s> başka bir hesaba </s> <b> hesabınıza </b> (mini sürüm) aktarabilirsiniz");
define("plus25", "Altın Transfer Kodunuzu girin.");
define("plus26", "(E-postanıza gönderildi.)");
define("plus27", "Email bulunamadı!");
define("plus28", "Kod kabul edildi!");
define("plus29", "Çeviri için uygun");
define("plus30", "altın");
define("plus31", "Çeviri için altın");
define("plus32", "Oyun Nick");
define("plus33", "Kod Yanlış!");
define("plus34", "Bir şeyler ters gitti. <br /> Lütfen tekrar deneyin.");
define("plus35", "oyuncu");
define("plus36", "Bulundu");
define("plus37", "Oyuncu Kimliği");
define("plus38", "Tercüme edilecek");
define("plus39", "altın");
define("plus40", "Oyuncu bulunamadı");
define("plus41", "Geri dön");
define("plus42", "Bir şeyler yanlış gitti.<br />Tekrar deneyin.");
define("plus43", "Altın Başarıyla Transfer Edildi!");
define("plus44", "Bir şeyler ters gitti. <br /> Lütfen tekrar deneyin.");
define("plus45", "E-mail");
define("plus46", "Tam versiyon");
define("plus47", "Arkadaşlarınızı davet edin ve altın kazanın!");
define("plus48", "Arkadaşınıza kişisel referans bağlantınızı gönderin");
define("plus49", "Ödülü almak için uygun koşullar");
define("plus50", "1. Davet ettiğiniz oyuncunun imparatorluğunun nüfusu artar artmaz ");
define("plus51", "sen alabilirsin");
define("plus52", "simgeye tıklayarak altın");
define("plus53", "2. Davet edilen bir oyuncunun yerine geçemezsiniz.");
define("plus54", "Davet Edilen Oyuncular");
define("plus55", "oyuncu");
define("plus56", "Kayıt Tarihi");
define("plus57", "Nüfus");
define("plus58", "Köyler");
define("plus59", "Almak");
define("plus60", "Henüz yeni oyuncu getirmediniz.");
define("plus61", "En Çok Başvuranlar");
define("plus62", "Bir yer");
define("plus63", "oyuncu");
define("plus64", "Doviz burosu");
define("plus65", "Değiştirmek istediğiniz Altın veya Gümüş Adetını girin");
define("plus66", "Döviz kurları");
define("plus67", "1 Altın: 100 Gümüş<br>2000 Gümüş: 1 Altın");
define("plus68", "değiş tokuş");
define("plus69", "ZazuGame");
define("plus74", "Altın Satın Al");
define("plus75", "Fonksiyonlar");
define("plus76", "Altın Kazan");
define("plus77", "Banka");

define("other0", "Engellendiniz. Yöneticiye bir mektup yazın");
define("other1", "zazugame.com");
define("other2", "Tamamlamak");
define("other3", "Tamamlandı");
define("other4", "Seviye");
define("other5", "Dış inşaat alanı");
define("other6", "Dünya harikası");
define("other7", "İnşaat alanı");
define("other8", "Ralli Noktası şantiye");
define("other9", "İnşaat sahası");
define("other10", "Temas halinde");
define("other11", "Facebook");
define("other12", "Macera");
define("other13", "koruma saatleri.");
define("other14", "Hesap, içinde silinecek");
define("other15", "Eserler");
define("other16", "Köyün mucizesi");
define("other17", "Kaydırır");
define("other18", "Dili Rusçaya Değiştir");
define("other19", "Dili İngilizceye çevirin");
define("other20", "Üretim");
define("other21", "Yok");
define("other22", "İçin tıklayın");
define("other23", "alana tıklayarak inşaat");

//пункт сбора
define("punktxuev0", "Özyineler");
define("punktxuev1", "Infra-estrutura");
define("punktxuev2", "Militar");
define("punktxuev3", "Confirmar");
define("punktxuev4", "Maceraya başla");
define("punktxuev5", "Tropas");
define("punktxuev6", "Chegada");
define("punktxuev7", "Kahramanınız henüz bu köyde değil.");
define("punktxuev8", "Kahramanınız öldü.");
define("punktxuev9", "Toplanma noktası oluşturmanız gerekiyor.");
define("punktxuev10", "Eve Gönder");
define("punktxuev11", "Bu Askerleri geri gönder");
define("punktxuev12", "Birimler");
define("punktxuev13", "zaman");
define("punktxuev14", "Yeterli asker yok!");

//активация
define("activate0", "Oynamak için hesabınızı etkinleştirmeniz gerekir.");
define("activate1", "Aktivasyon kodu:	");
define("activate2", "Etkinleştirin ve oyunu başlatın");
define("activate3", "Mistype E-posta veya kullanıcı adı?");
define("activate4", "Burada kaydı iptal edebilir ve yeniden kaydolabilirsiniz.");
define("activate5", "E-posta adresiniz:");
define("activate6", "Kullanıcı girişin:");
define("activate7", "Şifreniz:");
define("activate8", "Girilen verilerin doğruluğunu kontrol edin.");
define("activate9", "Hesabın etkinleştirilmediğinden emin olun.");
define("activate10", "Gönder");
define("activate11", "Veya");

//альянс
define("ally0", "Davetler");
define("ally1", "Davet Yok");
define("ally2", "Davet et");
define("ally3", "Git");
define("ally4", "Ayrıntılar");
define("ally5", "Konum");
define("ally6", "Üyeler");
define("ally7", "Çık");
define("ally8", "Haberler");
define("ally9", "Saldırılar");
define("ally10", "Seçenekler");
define("ally11", "Ata");
define("ally12", "Yok");
define("ally13", "");
define("ally14", "");

//фармлист
define("farmlist0", "Köy");
define("farmlist1", "Detaylar");
define("farmlist2", "");
define("farmlist3", "Mesafe");
define("farmlist4", "Askerler");
define("farmlist5", "Son Saldırı");
define("farmlist6", "Saldırı Ekle");
define("farmlist7", "Saldırı Başlat");
define("farmlist8", "bu listeyi silmek istediğinizden emin misiniz?");
define("farmlist9", "Yeni bir liste oluştur");
define("farmlist10", "Herhangi bir Saldırı listesi yok.");
define("farmlist11", "Name:");
define("farmlist12", "Oluştur");
define("farmlist13", "Bu sizin listeniz değil efendim!");
define("farmlist14", "Bu koordinatlarda köy yok.");
define("farmlist15", "Hiçbir birlik seçilmedi.");
define("farmlist16", "Doğru koordinatları girin.");
define("farmlist17", "Yuva ekle");
define("farmlist18", "Farm Name:");
define("farmlist19", "Hedef seçin:");
define("farmlist20", "Sil");
define("farmlist21", "Wilderness");

//dorf3
define("dorf0", "Genel Bakış");
define("dorf1", "Kaynaklar");
define("dorf2", "Depo");
define("dorf3", "Kültür noktaları");
define("dorf4", "Askerler");
define("dorf5", "Köy");
define("dorf6", "Saldırılar");
define("dorf7", "Yapı");
define("dorf8", "Askerler");
define("dorf9", "Satıcılar");
define("dorf10", "Toplam");
define("dorf11", "CP / gün");
define("dorf12", "Kutlamalar");
define("dorf13", "Yuvalar");
define("dorf14", "Kendi Askerleri");
define("dorf15", "");
define("dorf16", "");
define("dorf17", "");
define("dorf18", "");
define("dorf19", "");
define("dorf20", "");
define("dorf21", "");
define("dorf22", "");
define("dorf23", "");
define("dorf24", "");
define("dorf25", "");
define("dorf26", "");
define("dorf27", "");
define("dorf28", "");
define("dorf29", "");
define("dorf30", "");


//makegold в плюсе
define("mkg0", "Arkadaşlarınızı davet edin ve altını alın!");
define("mkg1", "Nasıl yapılır?");
define("mkg2", "Arkadaşınıza gönderin");
define("mkg3", "Kişisel yönlendirme bağlantınız");
define("mkg4", "Ödül için elverişli koşullar:");
define("mkg5", "1.Davet ettiğiniz imparatorluk oyuncunun sadece nüfusu nasıl daha yüksek olacaktır");
define("mkg6", ", alabilirsiniz");
define("mkg7", "simgeye tıklayarak altın");
define("mkg8", "2.Davet edilen oyuncuyu değiştiremezsiniz.");
define("mkg9", "davet edilen oyuncular:");
define("mkg10", "Oyuncu");
define("mkg11", "Kayıt tarihi");
define("mkg12", "Nüfus");
define("mkg13", "Köy");
define("mkg14", "al");
define("mkg15", "Yeni oyuncular bile davet etmediniz.");

//сообщения
define("MSG0", "Konu");
define("MSG1", "Oyuncu");
define("MSG2", "Gönderme tarihi");
define("MSG3", "Kullanılabilir mesaj yok");
define("MSG4", "Tümünü Kontrol Et");
define("MSG5", "Sil");
define("MSG6", "Gelen Kutusu");
define("MSG7", "Yaz");
define("MSG8", "Gönderildi");
define("MSG9", "Gönderildiği Tarih");
define("MSG10", "Cevapla");
define("MSG11", "Geri Dön");
define("MSG12", "Alıcı:");
define("MSG13", "Gönder");


//TAINIK
define("TA", " Sığınak Seviyesi  ");
define("TA1", " Sığınak, köy saldırıya uğradığında kaynaklarınızın bir kısmını saklamak için kullanılır. Bu kaynaklar çalınamaz. ");
define("TA2", " Huysuz ");
define("TA3", " birimleri");
define("TA4", " Cranny düzeyinde ");
define("TA6", " Bir seviyeye kadar inşaat maliyeti ");
define("TA7", " Seviyesine geliştirin ");
define("newrpt", "Yeni Rapor:");

//SOKR
define("sokr0", "Sahip");
define("sokr1", "Köy");
define("sokr2", "Birlik");
define("sokr3", "Etki");
define("sokr4", "Bonus");
define("sokr5", "Aktivite");
define("sokr6", "Kayıt Yeri:");
define("sokr7", "Hazine");
define("sokr8", "lvl");
define("sokr9", "Fethedildi");
define("sokr10", "Yapınız");
define("sokr11", "İsim");
define("sokr12", "Birliğinin defineleri yok");
define("sokr13", "En yakın Tılsımlar");
define("sokr14", "Oyuncu");
define("sokr15", "Mesafe");
define("sokr16", "En yakın Tılsımlar eksik.");
define("sokr17", "Hazine");
define("sokr18", "Küçük Tılsımlar");
define("sokr19", "Hiç yapı yok.");
define("sokr20", "Büyük Tılsımlar");
define("sokr21", "Etkin değil.");
define("sokr22", "Aktif");

//taverna
define("TVRN0", "İçinde vaha");
define("TVRN1", "");
define("TVRN2", "Tür");
define("TVRN3", "Sadakat");
define("TVRN4", "Fethedildi");
define("TVRN5", "Koordinatlar");
define("TVRN6", "Kaynaklar");
define("TVRN7", "Kahramanın Malikanesi Seviye 10'dan Sonraki Vaha");
define("TVRN8", "Kahramanın Malikanesi Seviye 15'ten Sonraki Vaha");
define("TVRN9", "Kahramanın Malikanesi Seviye 20'den Sonraki Vaha");
define("TVRN10", "Diğer vahalar");
define("TVRN11", "Sahip");
define("TVRN12", "Odun");
define("TVRN13", "Tuğla");
define("TVRN14", "Demir");
define("TVRN15", "Tahıl");

//отчеты
define("rpts0", "Askerler");
define("rpts1", "Kayıplar");
define("rpts2", "Yakalanan");
define("rpts3", "Bilgi");
define("rpts4", "köyden");
define("rpts5", "Destekler");
define("rpts6", "Konu");
define("rpts7", "Kaynak:");
define("rpts8", "Gönderen");
define("rpts9", "Savunma");
define("rpts10", "köyde");
define("rpts11", "Saldırı");
define("rpts12", "Casuslar");
define("rpts13", "(yeni)");
define("rpts14", "Rapor yok.");
define("rpts15", "gönderen");
define("ot4m0", "Hepsi");
define("ot4m1", "Saldırı");
define("ot4m2", "Destek");
define("ot4m3", "Çeşitli");
define("ot4m4", "Ticaret");
define("XUYXUYXUY", "Raporlar");
define("REPORT_TODAY", "Bugün");
define("REPROT_YESTERDAY", "Dün");
define("len0", "Depo");
define("len1", "Köy");

//рынок
define("MERCHANTS", "Tüccarlar");
define("IMSEARCHING", "arıyorum");
define("IMOFFERING", "Ben teklif ediyorum");
define("OFFEREDONTHEMARKET", "Ben teklif ediyorum");
define("rinok0", "Ticaret Yolları");
define("rinok1", "Pazardaki Teklifler");
define("rinok2", "Sunulan");
define("rinok3", "bana");
define("rinok4", "Aranıyor");
define("rinok5", "benden");
define("rinok6", "Oyuncu");
define("rinok7", "Süre");
define("rinok8", "Eylem");
define("rinok9", "Yeterli Kaynak Yok");
define("rinok10", "Yeterli Satıcı Değil");
define("rinok11", "Kabul Et");
define("rinok12", "Piyasada mevcut teklif yok");
define("rinok13", "Satıcıları Gönder");
define("rinok14", "Her satıcı taşıyabilir");
define("rinok15", "kaynak birimleri");
define("rinok16", "Koordinat seçilmedi");
define("rinok17", "Aynı köye kaynak gönderemezsiniz");
define("rinok18", "Oyuncu Yasaklandı. Ona kaynak gönderemezsiniz.");
define("rinok19", "Kaynaklar seçilmedi.");
define("rinok20", "Koordinatları veya köy adını girin.");
define("rinok21", "Çok az üye.");
define("rinok22", "Tüccarlar geliyor");
define("rinok23", "Varış");
define("rinok24", "Kaynak");
define("rinok25", "Yolda kendi tüccarları:");
define("rinok26", "Geri dönen tüccarlar");
define("rinok27", "Teklif");
define("rinok28", "Aranıyor");
define("rinok29", "azami taşıma süresi:");
define("rinok30", "saat");
define("rinok31", "sadece kendi ittifakı");
define("rinok32", "Sat");
define("rinok33", "Kendi teklifleri");
define("rinok34", "Teklif");
define("rinok35", "Ara");
define("rinok36", "Alliance");
define("rinok37", "saat");
define("rinok38", "Hepsi");
define("rinok39", "NPC tamamlandı.");
define("rinok40", "Maliyet");
define("rinok41", "Binaya geri dön");
define("rinok42", "Kaynakları dağıt (adım 1/2)");
define("rinok43", "Kaynakları takas et (adım 2/2)");
define("rinok44", "WW köyünde NPC ticaretini kullanamazsınız.");
define("rinok45", "Başlat");
define("rinok46", "Aktif ticaret yolu yok.");
define("rinok47", "Ticaret yolu");
define("rinok48", "düzenle");
define("rinok49", "Yeni ticaret yolu oluştur");
define("rinok50", "Kaynaklar");
define("rinok51", "Başlangıç ​​zamanı");
define("rinok52", "Teslimatlar");
define("rinok53", "Ticaret yolunu düzenle");
define("rinok54", "Hedef köy");

define("anlm0", "Lütfen giriş bilgilerinizi girin");
define("anlm1", "Lütfen e-mail adresinizi giriniz");
define("anlm2", "Lütfen şifrenizi girin");

define("upgra0", "Maliyet:");
define("upgra1", "İşçiler çalışıyor.");
define("upgra2", "Yiyecek kıtlığı: ilk Cropland'ı yükseltin!");
define("upgra3", "Yükseltme deposu.");
define("upgra4", "Granary'i Yükselt.");
define("upgra5", "Yeterli kaynaklar");
define("upgra6", "Yapı inşa et");
define("upgra7", "(Sıra)");
define("upgra8", "Mimar");
define("upgra9", "(maliyetler:");

//world wonder
define("ww0", "Dünya Harikası (Dünya Harikası olarak da bilinir) göründüğü kadar harikadır. Bu bina sunucuyu kazanmak için inşa edilmiştir. Dünya Harikası'nın her seviyesi yüz binlerce (hatta milyonlarca) kaynak inşa edilecek. ");
define("ww1", "Adını değiştirebilmek için World Wonder seviye 1'e sahip olmanız gerekir.");
define("ww2", "Dünya Mucizesi adı:");
define("ww3", "World Wonder'in adını 10. seviyeden sonra değiştiremezsiniz.");
define("ww4", "Ad değiştirildi.");
define("ww5", "WW inşaat planı gerekiyor.");
define("ww6", "Daha fazla WW inşaat planı gerekiyor.");
define("ww7", "Düzeye inşa için");
define("ww8", "WW 50+ seviyesini inşa etmek için 2 yapı planına ihtiyacınız var (biri siz ve ikincisi Birlikınızdan olmalı !!!)");
define("ww9", "WW9'u inşa etmek için hesabınızda ilk bina planına ihtiyacınız var veya / ve (50+ seviye) ikinci bina planında Birlikınızdan bir arkadaşınız olmalıdır!");

// kuznicaupgrade
define("kuzupg0", "Tamamen Geliştirilmiş");
define("kuzupg1", "Zırh Dökümhanesiyi geliştirin");
define("kuzupg2", "Araştırma devam ediyor");
define("destroyvil", "Köy zaten yok edildi.");

//sitter
//заместители
define("accsit0", "Saldırı gönder");
define("accsit1", "Diğer oyunculara Destek gönder");
define("accsit2", "Kaynakları diğer oyunculara gönder");
define("accsit3", "Altın harcama");
define("accsit4", "Mesajları okuyun ve yazın");
define("accsit5", "Mesajları ve raporları sil");



//онлайн в альянсе(online in alliance)
define("oweronline0", "Şimdi çevrimiçi");
define("oweronline1", "Çevrimdışı");
define("oweronline2", "Son 3 gün");
define("oweronline3", "Son 7 gün");

//doperevod
define("heroh0", "tüketim");
define("heroh1", "Bu eşyayı gerçekten giymek istiyor musunuz?");
define("heroh2", "Mevcut kültür sayısı");
define("heroh3", "Kültür noktaları ekle:");
define("heroh4", "Kullanımdan sonra şu şekilde olacaktır:");
define("sendmsg", "Mesaj gönder");

//EVERYDAY QUEST
define("questday0", "Görev bugün için tamamlandı");
define("questday1", "Quest hala açık");
define("questday2", "Günlük Görevler");
define("questday3", "Puanlar");
define("questday4", "25 puan toplayarak aşağıdaki ödüllerden birini alacaksınız:");
define("questday5", "5 Macera");
define("questday6", "+ 5000 kültür puanı");
if (!defined("HOWRES")) {
	define("HOWRES", 100000);
} //делаем опасный трюк.
define("questday7", HOWRES . " rastgele türden kaynaklar");
define("questday8", "50 puan toplayarak aşağıdaki ödüllerden birini alacaksınız:");
define("questday9", "+ 1 günlük PLUS Hesabı");
define("questday10", "+ 1 gün +% 25 kereste üretimi");
define("questday11", "+ 1 gün +% 25 kil üretimi");
define("questday12", "+ 1 gün +% 25 demir üretimi");
define("questday13", "+ 1 gün +% 25 Tahıl üretimi");
define("questday14", "75 puan toplayarak aşağıdaki ödüllerden birini alacaksınız:");
define("questday15", "+ 20 macera");
define("questday16", "+ 2 kova");
define("questday17", "+ 1000 silver");
define("questday18", "100 puan toplayarak aşağıdaki ödüllerden birini alacaksınız:");
define("questday19", "+ 50 altın");
define("questday20", "+ 4000 silver");
define("questday21", "+ 50 macera");
define("questday22", "Bu ücretsiz ödülleri her gün alın!");
define("questday23", "(Sonraki sıfırlama saat 12: 00'de. Ödülünüzü daha önce topladığınızdan emin olun!)");
define("questday24", "Bir macerayı tamamlayın");
define("questday25", "Madalya Al");
define("questday26", "Oyuncu davet et");
define("questday27", "Yeni köy inşa edin veya ele geçirin");
define("questday28", "Altın kazan veya harcama");
define("questday29", "1 vaha ele geçirme");
define("questday30", "Facebook grubumuzu ziyaret edin (Buraya tıklayın)");
define("questday31", "Herhangi bir birimi Smithy'de maksimum Bu seviyeye geliştir");
define("questday32", "Tebrikler! Bir ödül için gerekli sayıda puanı topluyorsunuz!");
define("questday33", "tip");
define("questday34", "nokta");
define("questday35", "Koleksiyon için bir ücret tahsil edebilirsiniz");
define("questday36", "bugün puan.");
define("questday37", "Ödül bu listeden rastgele seçilir:");
define("questday38", "Bugün toplandınız");
define("questday39", "puan ve bunun için aşağıdaki ücreti alırsınız:");
define("questday40", "Bugünkü ödülünüz:");

define("REP_С1", "<b> Tüm </b> Askerleri serbest bıraktı.");
define("REP_С2", "Resudence / Palace");
define("REP_С3", "Cranny Kapasitesi");
define("REP_С4", "Duvar");
define("REP_С5", "Kahramanınız o XP aldı");
define("REP_С6", "Kahramanınız var");
define("REP_С7", "Kahramanınız loylaty değerini düşürür");
define("REP_С8", "kime");
define("REP_С9", "ve var");
define("REP_С10", "Kahramanınız vahayı işgal etti ve var");
define("REP_С11", "");
define("REP_С12", "Köy işgal edilemez");
define("REP_С13", "Yeterli kültür puanı yok");
define("REP_С14", "Sakinleri");
define("REP_С15", "köy imparatorluğunuza katılmaya karar verdi");
define("REP_С16", "");
define("REP_С17", "Köşk veya Saray yok edilmemiş");
define("REP_С18", "Köy zaten yok edilmiş");
define("REP_С19", "Seviyeden yok edildi");
define("REP_С20", "");
define("REP_С21", "seviye");
define("REP_С22", "");
define("REP_С23", "Duvar hasar görmemiş");
define("REP_С24", "Duvar yok edildi");
define("REP_С25", "Burada duvar yok");
define("REP_С26", "Yeniden ihbar saldırıya uğradı");
define("REP_С27", "saldırılar");
define("REP_С28", "Destek alındı");
define("REP_С29", "Sağlanan Destek");
define("REP_С30", "İşgal edilmiş vaha");
define("REP_С31", "Değerli bir şey bulunamadı");
define("REP_С32", "");
define("REP_С33", "Kahramanınız artefakt aldı ve aldı");
define("REP_С34", "Kahramanınız artefakt aktive edilmedi ve var");
define("REP_С35", "Kahramanınız eser almadı ve aldı");
define("REP_С36", "Maksimum sayıda artefaktınız var. Kahraman var");
define("REP_С37", "casuslar");
define("REP_С38", "Kaynaklar alındı");
define("REP_С39", "Gönderilen kaynaklar");
define("REP_С40", "yok edildi");
define("REP_С41", "hasar görmemiş");
define("REP_С42", "Sadakat indirildi");
define("REP_С43", "Yakalayan hayvanlar");
define("REP_С44", "");
define("REP_С45", "Oasis");
define("REP_С46", "kahramanın maceradan sağ çıkamadı");
define("REP_С47", "");
define("REP_С48", "araştırır");
define("savebankgold", "Bir önceki turdan transfer edebileceğiniz altın bakiyesi");
define("allgold", "Tüm altın");
define("adminhelp", "Sorularınız varsa lütfen iletişime geçin");
define("endround", "Altın, ödeme yapıldıktan hemen sonra hesabınıza yatırılır");
define("endround1", "Tur sonunda / çıkarıldığında altın hesabı şu formülle Bankaya yatırılır:");

//КВЕСТЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫЫ
define("quest1", "Sonraki macera");
define("quest2", "Eğitim sırasında, zaten bir maceradan bazı Tecrübe Puanları topladınız. Bir sonraki maceraya kahramanınız köyünüze döner dönmez başlayın. Ganimet ve tecrübe daha hızlı büyümenizi sağlayacaktır.");
define("quest3", "İkinci maceraya geç");
define("quest4", "30 kahraman Tecrübesi");
define("quest5", "Güzel, kahramanınız zaten yolda. İpucu: Kahramanınız ne kadar çok dövüş gücüne sahipse, maceralardan o kadar az hasar alır.");
define("quest6", "Bir sığınak inşa et");
define("quest7", "Birçok oyuncu diğer oyuncuların kaynaklarını çalmakla geçinir. Oyunun başlangıcında, yeni başlayanlar için koruma altındasınız ve güvendesiniz. Kaynaklarınızın en azından bir kısmını yağmalamaktan kurtarmak için bir sığınak inşa edin.");
define("quest8", "Köyünüzde bir sığınak inşa et");
define("quest9", "Harika, artık yağmacılar artık sizden çalmayı o kadar kolay bulamayacaklar. Kalan acemi koruma zamanını görmek için bilgi kutusunu kontrol edin.");
define("quest10", "Kışla inşa et");
define("quest11", "Kışla, Askerleri eğitmenize izin veren ilk binadır. Barışı seven bir oyuncu olarak bile, kendinizi ve müttefiklerinizi düşmanlardan korumak için Askerlere ihtiyacınız olacak.");
define("quest12", "Kışla inşa et");
define("quest13", "Kışlalarınız inşa edildi! Dünya hakimiyetine doğru iyi bir adım!");
define("quest14", "Kahraman seviyesi");
define("quest15", "Kahramanınız her yeni seviyede daha da güçlenir. Kahramanın özelliklerine gidin ve kahraman puanlarınız için mevcut olanı dağıtın.");
define("quest16", "Yeni bir kahraman seviyesine ulaştıktan sonra mevcut puanları dağıtın.");
define("quest17", "Her öznitelik için puan dağılımını istediğiniz zaman değiştirebilirsiniz. Bunun için tek ihtiyacınız olan, maceralarda bulunabilecek bir bilgelik kitabıdır.");
define("quest18", "Askerleri eğitin");
define("quest19", "Şimdi ilk Askerlerinizi eğitme zamanı. Kışlada zaten bir tür piyade birimi eğitebilirsiniz.");
define("quest20", "Train" . round(250 * xQUEST) . "kışlada askerler");
define("quest21", "Şanlı bir ordunun temel taşı atılmıştır! Her zaman çevrimiçi olmasanız bile saldırıya uğrayabileceğinizi unutmayın.");
define("quest22", "Şehir Duvarı");
define("quest23", "Şimdi ayrıca bazı savunma sistemleri de inşa etmelisiniz. Bir tahkimat, temel savunmanızı artıracak ve ayrıca savunma Askerlerinin savaş gücünü artıracaktır.");
define("quest24", "Köyünüzün etrafına bir sur inşa edin.");
define("quest25", "Harika, köyünüzün savunucuları artık daha iyi korunuyor.");
define("quest26", "Saldırı vahası");
define("quest27", "Yakınlarda özgür bir vaha bulmak için haritayı arayın ve yağmalayın. Onu savunan hayvanlar varsa, onları ele geçirmek için kahramanınızı kafeslerle donatılmış olarak gönderin.");
define("quest28", "Haritada özgür bir vaha aç ve ona saldır.");
define("quest29", "2 üs-birim birlik");
define("quest30", "Tebrikler, ilk saldırınız yolda! Yine de kısa bir süre için toplanma noktanızdan iptal edebilirsiniz.");
define("quest31", "10 macera");
define("quest32", "Kahramanınızı maceralara göndermeye devam edin. Bunlardan 10 tanesini bitirdikten sonra, müzayedelere katılabilir ve diğer oyuncularla eşya takası yapabilirsiniz.");
define("quest33", "10 macerayı bitir");
define("quest34", "500 silver");
define("quest35", "Tebrikler, artık müzayede evini kullanabilirsiniz. Bu gümüşü alın, böylece hemen takas için biraz paranız olsun.");
define("quest36", "Müzayedeler");
define("quest37", "Müzayede evine gidin ve şu anda hangi öğelerin teklif edildiğini görün. Belki ganimetinizin bir kısmını maceralardan gümüşe dönüştürmek istersiniz?");
define("quest38", "Bir açık artırmada bir teklif oluşturun veya verin.");
define("quest39", "Harika, artık diğer oyuncularla ekipman ve sarf malzemeleri ticaretini nasıl yapacağınızı biliyorsunuz.");
define("quest40", "Kışlaları Yükselt");
define("quest41", "Kışlalarınızı şimdi yükseltin. Bununla, daha fazla binanın kilidini açmak için gereksinimleri yerine getiriyorsunuz.");
define("quest42", "Kışlalarınızı 3. Bu seviyeye geliştir");
define("quest43", "Güzel. Askerleriniz artık daha hızlı eğitiliyor ve bir akademi inşa edebilirsiniz.");
define("quest44", "Bir akademi inşa et");
define("quest45", "Köyünüz için yeni ve daha güçlü birimler akademide araştırılabilir. Bazı birimler çok pahalıdır ve araştırılmadan önce yüksek gereksinimleri vardır.");
define("quest46", "Şimdi bir akademi inşa edin.");
define("quest47", "Aferin. Yakında kabilenizin askerleri hakkında daha fazla şey öğreneceksiniz.");
define("quest48", "Araştırma birimi");
define("quest49", "Araştırma seçeneklerinizi şimdi kontrol edin. Kuşatma silahlarının yanı sıra piyade ve süvari birimleri de var. Birimler esas olarak saldırı veya savunma konusunda uzmanlaşmıştır.");
define("quest50", "Ek bir birlik türü araştırın.");
define("quest51", "Tek başına araştırma elbette yeterli değildir; birimlerinizin de eğitilmesi gerekecektir.");
define("quest52", "Zırh Dökümhanesi inşa et");
define("quest53", "Bir Zırh Dökümhanesi, askerlerinizi daha iyi silahlandırmanıza ve donatmanıza izin verir. Ayrıca, ek birlik binaları inşa etmek için bir Zırh Dökümhanesi gerekir.");
define("quest54", "Zırh Dökümhanesi inşa et.");
define("quest55", "Mükemmel. Artık askerlerinizi daha iyi donatabilirsiniz.");
define("quest56", "Birimleri geliştirin");
define("quest57", "Askerlerinizin teçhizatını iyileştirmek ucuz değildir. Ne kadar çok askere sahip olursanız, o kadar ödüllendirici bir gelişme olacaktır. Bu sefer, masrafların geri ödemesinden fazlasını alacaksınız.");
define("quest58", "Zırh Dökümhanesilikte bir birim gelişimini araştırın.");
define("quest59", "Mükemmel, şimdi Askerlerinizin saldırma ve savunma yetenekleri gelişti.");
define("quest60", "Demir madeni");
define("quest61", "Bir demir madeninin inşasını emredin! Birincil amacınız, hızlı bir şekilde büyüyebilmeniz için hala yüksek kaynak üretimidir.");
define("quest62", "Bir demir madeninin inşasına başla");
define("quest63", "Bir gün + tüm kaynakların üretiminde% 25 bonus");
define("quest64", "Köyünüz için daha yüksek demir üretimi. Bir üretim bonusu, belirli bir kaynağın üretimini daha da artırmanıza yardımcı olacaktır.");
define("quest65", "Daha fazla kaynak");
define("quest66", "Bir kereste, kil, demir ve Tahıl alanını her birini 1. seviyeye genişletin. Bu görevi tamamlamak için 0. seviyenin üzerindeki her kaynak türünden en az 2 alana sahip olmanız gerekir. Travian PLUS hala aktif olduğu sürece , her zaman aynı anda bir inşaat daha sipariş edebilirsiniz. ");
define("quest67", "Her kaynak karosundan bir tane daha 1. Bu seviyeye geliştir");
define("quest68", "Tebrikler! Köyünüz büyür ve büyür ...");
define("quest69", "Tahıl ambarı");
define("quest70", "Daha fazla Tahıl depolamak için, bir tahıl ambarına ihtiyacınız var. Mevcut depolama limitiniz, kaynaklar çubuğuna bakıldığında bulunabilir.");
define("quest71", "Bir tahıl ambarı inşa et");
define("quest72", "Harika! Tahıl ambarı artık daha fazla Tahıl depolamanıza izin veriyor.");
define("quest73", "Hepsi bir arada");
define("quest74", "Başlangıçta, kaynaklara odaklanmak en iyisidir. Lütfen tüm kaynak alanlarınızı 1. Bu seviyeye geliştir.");
define("quest75", "Tüm kaynak alanlarını seviye 1'e yükseltin");
define("quest76", "Kaynak üretiminiz güzel bir şekilde gelişiyor. Yakında köyünüzde daha fazla bina inşasına başlayabiliriz.");
define("quest77", "2'ye!");
define("quest78", "Üretiminizi artırmaya devam edin. Bir kereste, kil, demir ve Tahıl tarlasını her birini 2. Bu seviyeye geliştir!");
define("quest79", "Bir kaynak alanını her birini 2. Bu seviyeye geliştir");
define("quest80", "Bravo! Üretiminizle ilgili daha fazla bilgiye ihtiyaç duyuyorsanız, stoklarınıza tıklayın.");
define("quest81", "Marketplace");
define("quest82", "Bir kaynağın eksik olması durumunda, onu pazardaki diğer oyuncularla diğer kaynaklarla takas edebilirsiniz. Küçük bir pazar yeri inşa etmek için daha büyük bir ana binaya ihtiyacınız vardır.");
define("quest83", "Pazaryeri inşa et");
define("quest84", "Pazarınız hazır ve artık diğer oyuncularla ticarete başlayabilirsiniz. Yine de gerçekten kötü tekliflere kanmayın!");
define("quest85", "Ticaret");
define("quest86", "Pazardaki mevcut teklifler tıklandığında görülebilir \"buy\". Döviz kurunu ve mesafeyi kontrol edin. Uygun bir teklif bulamazsanız, tıklayın \"offer\" kendin bir teklif yaratmak.");
define("quest87", "Bir pazar teklifi oluşturun veya bir tane kabul edin");
define("quest88", "Harika, ilk ticaretinizi başlattınız.");
define("quest89", "Hepsi 2'ye");
define("quest90", "Daha pahalı binalar inşa etmeye başlamadan önce, kaynak üretiminizi daha da arttırmalıyız. Tüm kaynak alanlarınızı seviye 2'ye yükseltin.");
define("quest91", "Tüm kaynak alanlarını seviye 2'ye genişlet");
define("quest92", "Tebrikler! Kaynak üretiminiz güzel bir şekilde gelişiyor.");
define("quest93", "Depo seviyesi 3");
define("quest94", "Deponuzu artan üretime göre ayarlama zamanı. Kahramanınızdan gelen planlanmamış ganimet de deponuzun taşmasına neden olabilir.");
define("quest95", "Deponuzu seviye 3'e yükseltin");
define("quest96", "Gerçekten iyi, artık hiçbir değerli kaynak israf edilmeyecek.");
define("quest97", "Tahıl ambarı seviye 3");
define("quest98", "Üretiminiz ne kadar yüksekse, deponuz o kadar kolay dolar. Tahıl ambarı da yükseltilmelidir.");
define("quest99", "Tahıl ambarınızı seviye 3'e yükseltin");
define("quest100", "Şimdi tahıl ambarında yine yer var, böylece siz yokken bile üretim devam edebilir.");
define("quest101", "Tahıl Değirmeni");
define("quest102", "Bir tahıl değirmeni, tüm ekili alanlarınızın üretimini arttırır. Fiyatına değer olması için, yeterince yüksek bir baz üretime sahip olmanız gerekir.");
define("quest103", "1. seviye bir tahıl değirmeni inşa et");
define("quest104", "Tahıl Değirmeni Seviye 2");
define("quest105", "Artık daha fazla inşaat için çok sayıda ücretsiz Tahılünüz var. Diğer kaynakların üretimini artıran binalar da var.");
define("quest106", "Tümü 5'e");
define("quest107", "İkinci bir köy için gerekli bina ve yerleşimcileri karşılayana kadar uzun bekleme süresinden tasarruf etmek için çok daha yüksek bir üretime ihtiyacınız olacak. Tüm kaynak alanlarını 5. Bu seviyeye geliştir.");
define("quest108", "Tüm kaynak alanlarını seviye 5'e yükseltin");
define("quest109", "Bir gün + tüm kaynakların üretimine% 25 bonus.");
define("quest110", "Tebrikler, artık iyi bir üretiminiz var.");
define("quest111", "İstatistikleri göster");
define("quest112", "Travian dünyasında, diğer binlerce oyuncuya karşı rekabet edersiniz. Oyundaki kendi konumunuz hakkında daha fazla bilgi edinmek için istatistikleri kontrol edin.");
define("quest113", "İstatistikleri açın ve kendinizi diğer oyuncularla karşılaştırın.");
define("quest114", "Rütbenin yanı sıra başka yararlı bilgiler de var. Top10 sekmesi size en güçlü saldırganları ve en başarılı soyguncuları gösterecektir.");
define("quest115", "Köy adını değiştir");
define("quest116", "Sizin tarafınızdan seçilen bir köy adı, diğer oyunculara imparatorluğunuzun aktif olarak yönetildiğini gösteren bir işarettir.");
define("quest117", "Köy işaretindeki köy adını değiştirin.");
define("quest118", "33 kültür puanı");
define("quest119", "Güzel, şimdi Travian dünyasında izinizi bırakmak için ilk adımı tamamladınız.");
define("quest120", "Ana bina seviyesi 3");
define("quest121", "Daha büyük bir ana bina yeni binaların kilidini açar ve çalışanlarınızın hızı artar. Daha hızlı inşa edebilmek, ancak yeterli kaynak üretirseniz karşılığını verir.");
define("quest122", "Ana binanızı 3. Bu seviyeye geliştir");
define("quest123", "Harika, daha büyük ana bina artık yeni açtığınız bazı ek binaları inşa etmenize izin veriyor.");
define("quest124", "Bir elçilik inşa et");
define("quest125", "Travian dünyası tehlikeli bir yerdir ve kendinizi savunabilmeniz gerekir. En iyi ek savunma, güçlü müttefikler tarafından sunulur. Bir ittifaka katılmak için bir elçilik inşa edin.");
define("quest126", "Bir elçilik inşa edin.");
define("quest127", "Mükemmel, artık ittifak davetlerini kabul edebilirsiniz. Davetiyeler elçilik içinde bulunabilir.");
define("quest128", "Haritayı aç");
define("quest129", "Harita size Travian dünyasını gösterir. Müttefikler bulmak ve tehditleri belirlemek için komşularınızı kontrol edin");
define("quest130", "Haritayı menüde aç.");
define("quest131", "Yakınınızda güçlü oyuncular veya ittifaklar var mı? Harita ayrıca yeni köyler kurabileceğiniz vahalar ve noktalar bulmanıza yardımcı olur.");
define("quest132", "Mesajı oku");
define("quest133", "Az önce bazı yararlı ipuçları içeren bir mesaj aldınız. Okunmamış mesajlar, düğmenin üzerindeki sayı ile tanımlanabilir. Şimdi bir göz atın.");
define("quest134", "Mesajlara genel bakışı açın ve görev yöneticisinin mesajını okuyun!");
define("quest135", "Diğer oyuncularla iletişim kurmak için mesajları kullanın. Savaşta olsanız bile, her zaman sakin ve kibar olmak için ödeme yapar.");
define("quest136", "Bonus gold");
define("quest137", "Eğitim sırasında, inşaat siparişlerinizi hızlandırmak için zaten altın kullandınız. Altın dükkanında, altınınızı başka ne için kullanabileceğinizi öğrenebilirsiniz.");
define("quest138", "Altın ile satın alabileceğiniz avantajlara bir göz atın.");
define("quest139", "İşte yine biraz bedava altın, böylece bazı altın avantajlarından yararlanabilirsiniz.");
define("quest140", "Alliance");
define("quest141", "Müttefikler arayın ve bir ittifaka katılın. Henüz herhangi bir bağlantınız yoksa, yakınınızdaki oyuncuların ittifaklarını kontrol edin veya forumda bir ittifak arayın.");
define("quest142", "Bir ittifaka katılın.");
define("quest143", "Harika bir başlangıç ​​yaptık. Her bir oyuncu ne kadar güçlü ve daha aktif olursa, ekip olarak o kadar güçlü olursunuz. Birbirinize saldırıları nasıl bildireceğinizi ve nasıl soracağınızı öğrendiniz mi? yardım için? ");
define("quest144", "Ana bina seviyesi 5");
define("quest145", "Yeni binalar inşa edebilmeniz için ana binayı yükseltme zamanı gelmiştir. Lütfen aynı zamanda kaynak üretiminize de dikkat etmeyi unutmayın.");
define("quest146", "Ana binanızı 5. Bu seviyeye geliştir");
define("quest147", "Harika, şimdi bir Köşk inşa edebilirsiniz. Çalışanlarınızın hızı da arttı.");
define("quest148", "Hükümet makamı");
define("quest149", "Yakında yeni bir köy kurmak için şimdi bir hükümet koltuğu inşa edin. Bu köyün başkent köyünüz olarak kalmasını isteyip istemediğinizden emin değilseniz, lütfen ikametgahı seçin.");
define("quest150", "Bir Köşk veya saray inşa edin.");
define("quest151", "Bu bina, yeni bir köy kurmak veya fethetmek için gereklidir. Seviyesi olası genişletme Adetını sınırlar.");
define("quest152", "Kültür noktaları");
define("quest153", "İmparatorluğunuzda daha fazla köyde hüküm sürmek için kültür puanlarına ihtiyacınız vardır. Köşk veya saraydaki genel bakış size ne kadar uzakta olduğunuzu ve ne kadar süreceğini söyler.");
define("quest154", "Evinizdeki veya sarayınızdaki kültür puanları sekmesini açın.");
define("quest155", "Köy listesinde, olası yeni köylerin mevcut durumunu ve eksik kültür puanlarının Adetını da görebilirsiniz. Visit \"Answers\" kültür puanlarınızı nasıl hızlı bir şekilde artırabileceğinizi öğrenmek için.");
define("quest156", "Depo seviyesi 7");
define("quest157", "Kendinizi yeni bir köye yerleşmeye hazırlamak için deponuzu yükseltin. Mevcut depolama kapasiteniz kısa süre içinde gerekli binaları ve yerleşimcileri karşılamaya yetmeyecek.");
define("quest158", "Deponuzu 7. Bu seviyeye geliştir");
define("quest159", "Harika, depolama kapasiteniz bir süredir yeterli olmalı. Değerli kaynaklarınızı savunmayı veya saklamayı unutmayın.");
define("quest160", "Köşk veya saray seviyesi 10");
define("quest161", "Yerleşimciler bir sarayda veya bir Köşkta eğitilebilir. Sekme \"Train\" size gerekli bina seviyesini gösterir.");
define("quest162", "Evinizi veya sarayınızı 10. Bu seviyeye geliştir");
define("quest163", "167 kültür puanı");
define("quest164", "Her köyden sadece 2 ila 3 yeni köyü kontrol edebilirsiniz. Yeni bir köy için eksik olan tek şey 3 yerleşimci ve çok sayıda kültür puanıdır.");
define("quest165", "Üç yerleşimciyi eğitin");
define("quest166", "Yerleşimciler yeni bir köy kurarken her zaman küçük bir grup halinde seyahat ederler. Yerleşimcilerinizi, gitmeye hazır olana kadar saldırılardan koruyun.");
define("quest167", "Üç yerleşimciyi eğitin.");
define("quest168", "Güzel. Yerleşimciler her zaman yeni köy için bazı kaynakları yanlarında götürürler, böylece onu hemen inşa etmeye başlayabilirler.");
define("quest169", "Yeni köy bulundu");
define("quest170", "Yerleşmek için haritada iyi bir yer arayın. Köyünüze yakın olmasını, belirli bir kaynaktan daha fazla kaynak üretmesini veya birçok vahanın yakınında olmasını ister misiniz?");
define("quest171", "Yerleşimcilerinizi kullanarak ikinci bir köy bulduk.");
define("quest172", "Tebrikler. Şimdi size 2 gün daha Travian Plus vereceğim - bu size biraz fayda sağlayacaktır.");
define("quest173", "Günlük Görevler");
define("quest174", "Ödül Topla");
define("quest175", "Detaylar için tıklayınız");


//register mail
define("register1", "Hoş Geldiniz");
define("register2", "Merhaba");
define("register3", "Kaydolduğunuz için teşekkürler.");
define("register4", "Giriş");
define("register5", "Şifre");
define("register6", "Aktivasyon kodu");
define("register7", "Hesabınızı etkinleştirmek için aşağıdaki bağlantıya tıklayın:");
define("register8", "Selamlar");
define("register9", "TravianT4 Team");
define("register10", "Yeni şifre");
define("register11", "Travian için yeni bir şifre istediniz.");
define("register12", "Yeni şifrenizi etkinleştirmek için aşağıdaki bağlantıya tıklayın. Önceki şifreniz geçersiz olacaktır:");
define("register13", "Parolanızı değiştirmek istiyorsanız oyun içi profilinize gidin, orada değiştirebilirsiniz.");
define("register14", "Yeni bir şifre istemediyseniz, bu e-postayı dikkate almayın ..");

define("new_village", "Yeni köy");
define("new_village2", "Köy");


$lang_winner['1'] = 'Sayın Legends Travian ' . SERVER_NAME . ' oyuncular';
$lang_winner['2'] = 'Tüm güzel şeyler sona ermeli, bu çağ da öyle. Süleymana, dünyanın tüm sevinçlerini ve üzüntülerini ortadan kaldıracak bir mesajın yazılı olduğu bir yüzük verildiğinde, bu mesaj kabaca tercüme edildi, "bu da geçecek". <br>Legends Travian ' . SERVER_NAME . ' i herkese duyurmak hem sevincimiz hem de kederimizdir. bunun da geçtiği oyuncular! Size hizmet etmekten zevk aldığımız kadar bizimle vakit geçirmekten keyif aldığınızı umar ve sonuna kadar kaldığınız için teşekkür ederiz!';
$lang_winner['3'] = 'Sonuçlar: Gündüz çoktan geceye dönmüştü ama köyün işçileri';
$lang_winner['4'] = 'Kış arifesi boyunca emek verdi, zamana karşı yarıştıklarını ve özgür kabilelerin karşılaştığı en büyük tehdidi bilerek, çalışmalarını yok etmek için yürüyen sayısız orduya karşı daima temkinliydiler. Natarların düşüşünden bu yana tüm tarihin en büyük ve en görkemli yaratılışı olarak sonsuza dek bilinen şeyin son taşı, isimsiz bir işçi tarafından atılmasının ardından yorulmak bilmez mücadeleleri ödüllendirildi..';
$lang_winner['5'] = 'Birlikla birlikte';
$lang_winner['6'] = 'Milyonlarca kaynağı kullanırken aynı zamanda onu yüzbinlerce cesur savunucu ile koruyarak Dünya Harikasını ilk bitiren oldu. Bu nedenle ';
$lang_winner['7'] = 'Legends Travian ' . SERVER_NAME . ' Sunucusu Galibi Kalıcı VIP Ödülü kazandı!';
$lang_winner['8'] = 'En büyük kişisel imparatorluğun hükümdarıydı ve onu yakından takip ediyordu';
$lang_winner['9'] = 've';
$lang_winner['10 '] = ' Diğerlerinden daha fazla katledildi ve en güçlü, en korkutucu komutandı. ';
$lang_winner['11 '] = ' En görkemli savunucuydu, köy kapılarında düşmanları katletti, köylerin etrafındaki toprakları kanlarıyla boyadı. ';
$lang_winner['12 '] = ' Saygılarımızla ';
$lang_winner['13'] = 'Legends Travian ' . SERVER_NAME . ' takım';
$lang_winner['14'] = 'devam et';
$lang_winner['desc1'] = 'Toplam köyler';
$lang_winner['desc2'] = 'Toplam nüfus';
$lang_winner['desc3'] = 'Saldırı noktaları';
$lang_winner['desc4'] = 'Savunma noktaları';
define("PL_01", "Altın Kulüp");
define("PL_02", "Her oyun için harika özellikler !!");
define("PL_03", "Köyünüzdeki tüccarların kaynakları birden fazla kez otomatik olarak aktarmasına izin verin.Haritada domuzları bulun ve verdiğiniz savaşların mesajlarını ve raporlarını kaydedin. Saldırılarınızı planlamak için çiftlik menüsünü kullanın ... Bir rakip tarafından saldırıya uğradığında başkentteki Kaçış seçeneğini etkinleştirerek saldırı ordunuzu koruyun!");
define("PL_04", "Travian Plus");
define("PL_05", "Daha iyi görüntüleme yetenekleri ve özellikleri sağlar!");
define("PL_06", "Köyünüzdeki tüccarların kaynakları birden fazla kez otomatik olarak aktarmasına izin verin.Haritada domuzları bulun ve verdiğiniz savaşların mesajlarını ve raporlarını kaydedin. Saldırılarınızı planlamak için çiftlik menüsünü kullanın ... Rakip tarafından saldırıya uğradığında başkentteki Kaçış seçeneğini etkinleştirerek saldırı ordunuzu koruyun!");
define("PL_07", "+% 25 odun üretimi");
define("PL_08", "+% 25 Tuğla üretimi");
define("PL_09", "+% 25 demir üretimi");
define("PL_10", "Tahıl üretiminin +% 25'i");
define("PL_11", "Önünüzde gördüğünüz süre boyunca seçilmiş kaynaklardan köylerinizin üretkenliğinde% 25 artış sağlar.");
define("PL_12", "% 25 artış sadece köyünüzün temel üretimine değil, çeşitli binaları inşa ettikten sonra elde ettiğiniz artışlarla üretime eklenir!");

define("PL_13", "Lütfen kullanmak istediğiniz özelliği seçin:");
define("PL_14", "etkinleştir");
define("PL_15", "artış zamanı");
define("PL_16", "tam tur");
define("PL_17", "gün");
define("PL_18", "şimdi etkinleştir.");
define("PL_19", "sonra sonlandır");

// productionBoostPopup
define("BD_LEVEL", "seviye");
define("MAXLEVEL", "Bina maksimum seviyeye ulaştı");
define("TOP10", "top 10");


$lang['buildings']['texts'] = array(
	'TRA0' => 'Eğitim Listesi',
	'TRA1' => 'Birimler',
	'TRA2' => 'Süre',
	'TRA3' => 'Tamamlandı',
	'AKA1' => 'Zaten arama var',
	'AKA2' => 'Akademi inşa edildiğinde araştırma başlayabilir.',

);

$lang['profile'] = array(
	'1' => 'Profil',
	'2' => 'Nüfus sıralaması',
	'3' => 'Nüfus',
	'4' => 'Saldırı Sıralaması',
	'5' => 'Puanlar',
	'6' => 'Savunma sıralaması',
	'7' => 'Kahraman seviyesi',
	'8' => 'XP',

	// Medals
	'9' => 'Kategori',
	'10' => 'Hafta',
	'11' => 'Sıra',
	'12' => 'Puanlar'
);



$lang['quests'] = array(
	'Next' => 'devam et',
	'getRewards' => 'Ödül Al',
	'ActivateTips' => 'İpuçlarını Göster',
	'DeactivateTips' => 'İpuçlarını Gizle',
	'TipsToggleDescription' => 'İpuçları Göster / Gizle',
	'GetRewards' => 'Ödül Al',
	'Overview' => 'Genel Bakış',
	'Battle' => 'Savaş',
	'Economy' => 'Ekonomi',
	'World' => 'Dünya',

	'1' => array(
		'Title' => 'Hoşgeldiniz',
		'Description' => 'Merhaba ' . $session->username . ', Travian`a hoş geldiniz!<br>Kendine yeni bir köy inşa ettiğin sürece, ben\'Size yardımcı olacağım Bu eğitimde, kendi köyünüzü kurmalı ve oyunun amacı ve özellikleri hakkında bilgi edinmelisiniz.',
		'toDo' => array('Oyunun ana özelliklerini açıklayan eğitimler sadece birkaç dakika sürebilir. Şimdi başlayın!')
	),
	'2' => array(
		'Title' => 'Görevler ve yardım',
		'Description' => 'Görev sayfasını taşıyabilir veya kapatabilirsiniz. Tekrar açmak için sol üst köşedeki resmime tıklamanız yeterlidir. İpuçları ve Görevler oyunda size yardımcı olacaktır.',
		'toDo' => array('Görevleri Kapat', 'İpuçları sayfasını açmak için Danışmana tıklayın', 'Özellik ipuçlarını kapat (devre dışı bırak)'),
		'reward' => '1. seviye bir Tuğla Ocağı sizi bekliyor!',
		'completed' => 'Artık mevcut göreviniz hakkında her zaman bilgi alabilirsiniz. Taks ödülü aldığınızda sonraki göreve başlayabilirsiniz. Tuğla Ocağınızı alın.'
	),

	'3' => array(
		'Title' => 'Bir Oduncu İnşa Et',
		'Description' => 'köyünüzü yükseltmek, asker inşa etmek ve eğitmek ve hatta imparatorluğunuzu büyütmek için çok fazla kaynağa ihtiyacınız var! Önce Kaynak Üretiminizi Artırın - Bir Oduncu inşa edin!',
		'toDo' => array('Üzerine tıklayarak bir orman alanı açın ', ' Woodcutter seviye 1`i sipariş edin'),
		'reward' => 'Woodcutter seviye 1`i bitir',
		'completed' => 'Daha güçlü ekonomide ilerlemek güçlü bir başlangıçtır. Devam edebilmek için Woodcutter inşaatını yeni tamamladım.'
	),

	'4' => array(
		'Title' => 'Yükselt oduncu',
		'Description' => 'Daha büyük bir bina, her yükseltmede daha fazla kaynak gerektirecek, ancak aynı zamanda daha fazla üretecektir. Lütfen oduncuyu seviye 1`den seviye 2`ye şimdi yükseltin!',
		'toDo' => array('1. seviye oduncuyu açın ', ' 2. seviye bir oduncu inşa edin'),
		'reward' => 'Seviye 2 oduncu inşaatını hemen bitir',
		'completed' => 'Deponuzun ve stoğunuzun görüntüsü köyünüzün üzerinde bulunabilir. İnşaat maliyetleri stoklardan alınacaktır. Sizin için inşaatı hemen bitireceğim.'
	),

	'5' => array(
		'Title' => 'Tarla İnşa Et',
		'Description' => 'Kaynaklarının payına baktığınızda sol köşedeki buğday tüketimine dikkat edin. Askerleri ve binaları eğitmek için bu Adet gereklidir. Lütfen bir Tarla yapın.',
		'toDo' => array('Tarla Tarlası ', ' Tarla Tarlası inşa et 1. seviyeye tıklayın'),
		'reward' => 'Tarla 1. seviyeyi bitir ve 2. Bu seviyeye geliştir',
		'completed' => 'Artık köyünüzün buğdayı, yeni bir bina inşa etmeye yetecek Adetda üretiliyor. Nüfuslar yerel olarak buğday köyünde konuşlanmış beslenme güçleri destekleniyor.'
	),

	'6' => array(
		'Title' => 'Kahraman Yapımları',
		'Description' => 'Kahramanınız yaşıyorsa, köyü için kaynak üretebilir. İnşaatlarımıza göre biraz Tuğlamız var. Kahraman üretimini Tuğlaya çevirin.',
		'toDo' => array('Kahraman resmine tıklayın ve genel bakışı açın ', ' Kahraman Üretim`ınızı Tuğla olarak değiştirin ve kaydedin'),
		'reward' => '' . number_format(200 * SPEED) . ' <i class="r2"></i>',
		'completed' => 'Harika! şimdi kahramanınız daha fazla kaynak üretmenize yardımcı olacak. Üretilen tüm Kaynaklar ana köye eklenecektir. Sadece kaynağınızı artıracağım.'
	),

	'7' => array(
		'Title' => 'Köy merkezinize girin',
		'Description' => 'Ardından, oyun menüsünün üst kısmındaki köye genel bakışa göre stok değerini artıracağız. Bunu yapmak için köy içinde binalarımız olması gerekiyor. Köy merkezine gidin.',
		'toDo' => array('Köy merkezine girin')
	),

	'8' => array(
		'Title' => 'Depo',
		'Description' => 'depo olmadan, kaynakların sadece bir kısmı köyünüzde saklanabilir. Depo inşa etmek için İnşaat alanına tıklayın! İnşaat üzerindeki menüde depoyu bulun ve inşa edin.',
		'toDo' => array('inşaatı açın ve altyapıyı ve menüyü tıklayın ', ' Depo seviyesi 1 inşa etmek için sipariş verin'),
		'reward' => 'Bir gün Travian Plus',
		'completed' => 'İnşaat çalışmaları başladı ve yakında daha fazla kaynak kurtarabilir ve yağma yapabilirsiniz. Bir binaya komutlar verebilen ve binanın ilk inşaatının bitmediğini kuyruğa alabilen 1.8 saatlik Travian Plus vereceğim.'
	),

	'9' => array(
		'Title' => 'Askeri	Üs',
		'Description' => 'kahramanınızı maceralara göndermek için bir toplanma noktasına ihtiyacınız var - onu köy merkezinde bulabilirsiniz! İnşa edin ve 1. Bu seviyeye geliştir.',
		'toDo' => array('Toplanma noktasının inşaat alanına tıklayın ', ' Toplanma Noktası Oluştur 1. seviye'),
		'reward' => '<img src="img/x.gif" alt="gold" title="gold" class="gold"> 2',
		'completed' => 'Harika görünüyor! Artık Kahramanınızı maceraya gönderebilirsiniz. Bu görevi yerine getirmek için, size uygun bir şekilde harcayabileceğiniz biraz altın vereceğim..'
	),

	'10' => array(
		'Title' => 'Hemen bitir',
		'Description' => 'Köyün altında, mevcut tüm inşaat siparişlerinizin bulunduğu bir liste bulabilirsiniz. Bu sefer inşaatı kendiniz hızlandırabilirsiniz. Son görevdeki altını kullanın ve "inşaatı hemen tamamla" düğmesine tıklayarak inşaat siparişlerini bitirin".',
		'toDo' => array('İnşaat siparişlerini hemen tamamlayın'),
		'reward' => '<img src="img/x.gif" alt="gold" title="gold" class="gold"> 10',
		'completed' => 'Şimdi kahraman maceranızı gönderebilirsiniz. İlk olarak, köyünüzün her zaman büyümekte olduğu bazı kaynakları inşa etme emri verin. Bu Altını Alın ve Akıllıca Kullanın.'
	),

	'11' => array(
		'Title' => 'Maceraya Katılın',
		'Description' => 'Tecrübe ve değerli ganimetler toplamak için çevrenizdeki gizemli yerleri keşfedin. Macera listesini açın ve kahramanınızı ilk macerasına gönderin.',
		'toDo' => array('Kahramanınızı ilk macerasına gönderin'),
		'reward' => 'Kahramanınız Maceradan hemen dönecek',
		'completed' => 'HARİKA, kahramanınız macerasına atıldı - ne buldu? Kahramanınızın resminin altında onun yolda olduğunu görebilirsiniz. Ne olacağını görmek için çabuk gelmesine izin vereceğim.'
	),

	'12' => array(
		'Title' => 'Raporlar',
		'Description' => 'Kahramanınız şimdi ilk maceradan dönüş yolunda. Üstteki menüde raporları bulabilirsiniz. Rapor listesini açın ve macera raporunu okuyun. ',
		'toDo' => array('Rapor Listesini Aç', 'Yeni macera raporunu görüntüle'),
		'reward' => '<img src="img/x.gif" class="questRewardTypeItem item106"> <span class="questRewardValue">10</span>',
		'completed' => 'Kahramanınızın nasıl bir ödül bulduğunu görebilirsiniz. Kahramanınız aynı zamanda yüzeysel bir yara - bu olaydan kaçınmak için size biraz merhem vereceğim.'
	),

	'13' => array(
		'Title' => 'Kahraman İyileştir',
		'Description' => 'Kahramanınız hafif yaralandı. Resmine tıklayarak kahramanın genel görünümünü açın. Şimdi envanterdeki merhemlere tıklayın ve "tamam" ile kullanın. Sadece gerekli Adet kullanılacaktır.',
		'toDo' => array('Envanteri açmak için kahramanınızın resmine tıklayın ', ' Bunları kullanmak için envanterdeki merhemlere tıklayın'),
		'reward' => 'Ek olarak, Kahramanınız ' . number_format(20 * SPEED) . ' Tecrübe puanları.',
		'completed' => 'Tüm alet ve silahlar aynı şekilde kullanılabilir. Türüne bağlı olarak, imleci üzerinde tutarak öğe bilgilerini görüntüleyebilirsiniz..'
	),

	'14' => array(
		'Title' => 'Arayüz yardımı',
		'Description' => 'Resmimin yakınında, oyunla ilgili bazı ek yardımlar bulabilirsiniz. Burada, kullanıcı arayüzünün düzeni ve farklı bölümleri hakkında açıklamalar bulabilirsiniz. Sadece bir dene!',
		'toDo' => array('Kullanıcı arayüzü yardımını açın ve kullanıcı arayüzüne bir göz atın'),
		'reward' => '<i class="r1"></i> ' . number_format(270 * SPEED) . ' <i class="r2"></i> ' . number_format(300 * SPEED) . ' <i class="r3"></i> ' . number_format(270 * SPEED) . ' <i class="r4"></i> ' . number_format(220 * SPEED) . '',
		'completed' => 'Belirli sorularınız varsa, önce bunları "Travian Answers" bölümünde arayın ve yardım alın. Bunu yapmak için, bu pencerenin başlığındaki veya ekranınızın bir köşesindeki "i".'
	),

	'15' => array(
		'Title' => 'Eğitimin sonu',
		'completed' => 'Artık oyunun temellerini biliyorsunuz. Yeni gelenleri desteklemek için zaman açısından kritik veriler ve oyun gibi önemli bilgiler soldaki bilgi kutusunda gösterilecektir. Travian`ın tadını çıkarın!',
		'toDo' => array('Eğitimin sonu'),
		'reward' => 'Eğitimi bitir'
	),
	'15a' => array(
		'Title' => 'Eğiticiyi atla',
		'Description' => 'Artık oyunun temellerini biliyorsunuz. Yeni gelenleri desteklemek için zaman açısından kritik veriler ve oyun gibi önemli bilgiler soldaki bilgi kutusunda gösterilecektir. Travian`ın tadını çıkarın!',
		'toDo' => array(),
		'reward' => 'Askeri Üs, Tuğla ocağı, Oduncu 2, Tahıl alanı 2, 10 altın, 1.8 saat PLUS'
	),

);

$lang['quests']['battle'] = array(
	'1' => array(
		'Title' => 'Sonraki macera',
		'Description' => 'Eğitim sırasında, zaten bir maceradan bazı Tecrübe puanları topladınız. Kahramanınız köyünüze döner dönmez bir sonraki maceraya başlayın. Yağma ve tecrübe daha hızlı büyümeni sağlayacak.',
		'toDo' => array('İkinci maceraya geçin'),
		'reward' => '' . number_format(30 * SPEED) . ' kahraman Tecrübesi',

		'completed' => 'Güzel, kahramanın çoktan yola çıktı. İpucu: Kahramanınız ne kadar çok dövüş gücüne sahipse, maceralardan o kadar az hasar alır.'
	),
	'2' => array(
		'Title' => 'Bir sığınak inşa et',
		'Description' => 'Birçok oyuncu, diğer oyuncuların kaynaklarını çalmakla geçinir. Oyunun başlangıcında, yeni başlayanlar için korumanız var ve güvendesiniz. Kaynaklarınızın en azından bir kısmını yağmalamaktan kurtarmak için bir sığınak inşa edin.',
		'toDo' => array('Köyünde bir sığınak inşa et'),
		'reward' => '<i class="r1"></i> ' . number_format(130 * SPEED) . ' <i class="r2"></i> ' . number_format(150 * SPEED) . ' <i class="r3"></i> ' . number_format(120 * SPEED) . ' <i class="r4"></i> ' . number_format(100 * SPEED) . '',

		'completed' => 'Harika, artık yağmacılar senden çalmayı artık o kadar kolay bulamayacaklar. Yeni başlayanlar için bıraktığınız koruma süresini görmek için bilgi kutusunu işaretleyin.'
	),
	'3' => array(
		'Title' => 'Kışla inşa et',
		'Description' => 'Kışla, asker yetiştirmenize izin veren ilk binadır. Barış seven bir oyuncu olarak bile, kendinizi ve müttefiklerinizi düşmanlardan korumak için Askerlere ihtiyacınız olacak.',
		'toDo' => array('Kışla inşa et'),
		'reward' => '<i class="r1"></i> ' . number_format(110 * SPEED) . ' <i class="r2"></i> ' . number_format(140 * SPEED) . ' <i class="r3"></i> ' . number_format(160 * SPEED) . ' <i class="r4"></i> ' . number_format(30 * SPEED) . '',

		'completed' => 'Kışlan inşa edildi! Dünya hakimiyetine doğru iyi bir adım!'
	),
	'4' => array(
		'Title' => '5 Macera tamamla',
		'Description' => 'Daha fazla macera, daha fazla ganimet, bir macera mevcut olduğunda kahramanı maceraya gönderin, sağlığı zayıfsa kahramanı dinlendirin veya ona iyileştirici bir yağ verin.',
		'toDo' => array('5 Macera tamamla'),
		'reward' => '<img src="img/x.gif" title="Merhemler" class="questRewardTypeItem item106"> <span class="questRewardValue">150</span>',

		'completed' => 'Merhemler kahramanınızı iyileştirmek için kullanılabilir. Merhemleri kullanırsanız, kahraman hasar alır almaz kullanılacaktır.'
	),
	'5' => array(
		'Title' => 'Askerleri eğitin',
		'Description' => 'Şimdi ilk Askerlerinizi eğitme zamanı. Kışlada zaten bir tür piyade birimi eğitebilirsiniz.',
		'toDo' => array('Kışlada iki asker eğit'),
		'reward' => '<img src="img/x.gif" title="Kafes" class="questRewardTypeItem item114"> <span class="questRewardValue">1</span>',

		'completed' => 'Şanlı bir ordunun temel taşı atıldı! Çevrimiçi olmasanız bile yine de saldırıya uğrayabileceğinizi daima unutmayın.'
	),
	'6' => array(
		'Title' => 'Toprak Duvarı',
		'Description' => 'Şimdi ayrıca bazı savunmalar da oluşturmalısınız. Tahkimat, temel savunmanızı artıracak ve ayrıca savunma Askerlerinin savaş gücünü artıracaktır.',
		'toDo' => array('Köyünüzün etrafında bir sur inşa edin'),
		'reward' => '<i class="r1"></i> ' . number_format(120 * SPEED) . ' <i class="r2"></i> ' . number_format(120 * SPEED) . ' <i class="r3"></i> ' . number_format(90 * SPEED) . ' <i class="r4"></i> ' . number_format(50 * SPEED) . '',

		'completed' => 'Harika, köyünüzün savunucuları artık daha iyi korunuyor.'
	),
	'7' => array(
		'Title' => 'Saldırı vahası',
		'Description' => 'Haritada yakınlarda ücretsiz bir vaha arayın ve onu yağmalayın. Onu savunan hayvanlar varsa, onları yakalamak için kahramanınızı kafeslerle donatılmış olarak gönderin.',
		'toDo' => array('Haritada özgür bir vaha açın ve ona saldırın'),
		'reward' => '2 temel birim birlik',

		'completed' => 'Tebrikler, ilk saldırınız yolda! Yine de toplanma noktanızdan kısa bir süre için iptal edebilirsiniz.'
	),
	'8' => array(
		'Title' => '10 macera',
		'Description' => 'Kahramanınızı maceralara göndermeye devam edin. Bunlardan 10 tanesini bitirdikten sonra müzayedelere katılabilir ve diğer oyuncularla eşya takas edebilirsiniz.',
		'toDo' => array('10 macerayı bitir'),
		'reward' => '500 gümüş',

		'completed' => 'Tebrikler, artık müzayede evini kullanabilirsiniz. Bu gümüşü alın, böylece hemen ticaret için biraz paranız olur.'
	),
	'9' => array(
		'Title' => 'Müzayedeler',
		'Description' => 'Müzayede evine gidin ve şu anda hangi ürünlerin teklif edildiğini görün. Belki ganimetinizin bir kısmını maceralardan gümüşe dönüştürmek istersiniz?',
		'toDo' => array('Açık artırmada teklif oluşturma veya verme'),
		'reward' => '<i class="r1"></i> ' . number_format(280 * SPEED) . ' <i class="r2"></i> ' . number_format(120 * SPEED) . ' <i class="r3"></i> ' . number_format(220 * SPEED) . ' <i class="r4"></i> ' . number_format(110 * SPEED) . '',

		'completed' => 'Harika, artık diğer oyuncularla ekipman ve sarf malzemesi ticaretini nasıl yapacağınızı biliyorsunuz.'
	),
	'10' => array(
		'Title' => 'Kışlaları yükselt',
		'Description' => 'Kışlalarınızı şimdi yükseltin. Bununla, daha fazla binanın kilidini açmak için gereksinimleri yerine getirirsiniz.',
		'toDo' => array('Kışlalarınızı 3. Bu seviyeye geliştir'),
		'reward' => '<i class="r1"></i> ' . number_format(240 * SPEED) . ' <i class="r2"></i> ' . number_format(290 * SPEED) . ' <i class="r3"></i> ' . number_format(430 * SPEED) . ' <i class="r4"></i> ' . number_format(240 * SPEED) . '',

		'completed' => 'Güzel. Askerleriniz artık daha hızlı eğitiliyor ve bir akademi inşa edebilirsiniz.'
	),
	'11' => array(
		'Title' => 'Bir akademi inşa edin',
		'Description' => 'Köyünüz için yeni ve daha güçlü birimler akademide araştırılabilir. Bazı birimler çok pahalıdır ve araştırılmadan önce yüksek gereksinimleri vardır!',
		'toDo' => array('Şimdi bir akademi inşa edin'),
		'reward' => '<i class="r1"></i> ' . number_format(210 * SPEED) . ' <i class="r2"></i> ' . number_format(170 * SPEED) . ' <i class="r3"></i> ' . number_format(245 * SPEED) . ' <i class="r4"></i> ' . number_format(115 * SPEED) . '',

		'completed' => 'Aferin. Yakında kabilenin askerleri hakkında daha çok şey öğreneceksin.'
	),
	'12' => array(
		'Title' => 'Araştırma birimi',
		'Description' => 'Araştırma seçeneklerinizi şimdi kontrol edin. Kuşatma silahlarının yanı sıra piyade ve süvari birimleri de var. Birimler temel olarak saldırı veya savunma konusunda uzmanlaşmıştır.',
		'toDo' => array('Ek bir birlik türü araştırın'),
		'reward' => '<i class="r1"></i> ' . number_format(450 * SPEED) . ' <i class="r2"></i> ' . number_format(435 * SPEED) . ' <i class="r3"></i> ' . number_format(515 * SPEED) . ' <i class="r4"></i> ' . number_format(550 * SPEED) . '',

		'completed' => 'Tek başına araştırma elbette yeterli değil; birimlerinizin de eğitilmesi gerekecektir!'
	),
	'13' => array(
		'Title' => 'Construct a smithy',
		'Description' => 'A smithy allows you to better arm and equip your soldiers. Furthermore, a smithy is required in order to build additional troop buildings.',
		'toDo' => array('Construct a smithy'),
		'reward' => '<i class="r1"></i> ' . number_format(500 * SPEED) . ' <i class="r2"></i> ' . number_format(400 * SPEED) . ' <i class="r3"></i> ' . number_format(700 * SPEED) . ' <i class="r4"></i> ' . number_format(400 * SPEED) . '',

		'completed' => 'Perfect. Now you can better equip your soldiers!'
	),
	'14' => array(
		'Title' => 'Birimleri geliştirin',
		'Description' => 'Askerlerinizi geliştirmek\' ekipman değil\'t ucuz. Ne kadar çok askeriniz varsa, gelişme o kadar ödüllendirici olacaktır. Bu sefer, masrafların geri ödenmesinden daha fazlasını kazanacaksınız!',
		'toDo' => array('Bir birlik türünü yükseltmeyi tamamlayın'),
		'reward' => '<img src="img/x.gif" class="questRewardTypeItem item112"> <span class="questRewardValue">10</span>',

		'completed' => 'Zırh Dökümhaneside bir birim iyileştirme araştırın!'
	),
);

$lang['quests']['economy'] = array(
	'1' => array(
		'Title' => 'Demir madeni',
		'Description' => 'Köyünüz için daha yüksek demir üretimi. Bir üretim bonusu, belirli bir kaynağın üretimini daha da artırmanıza yardımcı olacaktır.',
		'toDo' => array('Asla demir madeni inşa etme'),
		'reward' => 'Tüm kaynakların üretiminde 1 gün +% 25 bonus',

		'completed' => 'Köyünüz için daha yüksek demir üretimi. Bir üretim bonusu, belirli bir kaynağın üretimini daha da artırmanıza yardımcı olacaktır.'
	),
	'2' => array(
		'Title' => 'Daha fazla kaynak',
		'Description' => 'Bir Odun, Tuğla, Demir ve Tahıl tarlasının her birini 1. Bu seviyeye geliştir. Bu görevi tamamlamak için 0. seviyenin üzerindeki her kaynak türünden en az 2 alana sahip olmanız gerekir. Travian PLUS hala aktif olduğu sürece, her zaman bir tane daha sipariş edebilirsiniz. aynı zamanda inşaat.',
		'toDo' => array('Her kaynak karosundan bir tane daha 1. Bu seviyeye geliştir'),
		'reward' => '<i class="r1"></i> ' . number_format(160 * SPEED) . ' <i class="r2"></i> ' . number_format(190 * SPEED) . ' <i class="r3"></i> ' . number_format(150 * SPEED) . ' <i class="r4"></i> ' . number_format(70 * SPEED) . '',

		'completed' => 'Tebrikler! Köyünüz büyüyor ve büyüyor.'
	),
	'3' => array(
		'Title' => 'Tahıl ambarı',
		'Description' => 'Daha fazla Tahıl depolamak için bir tahıl ambarına ihtiyacınız var. Mevcut depolama sınırınız, kaynaklar çubuğuna bakıldığında bulunabilir.',
		'toDo' => array('Bir tahıl ambarı inşa edin'),
		'reward' => '<i class="r1"></i> ' . number_format(250 * SPEED) . ' <i class="r2"></i> ' . number_format(290 * SPEED) . ' <i class="r3"></i> ' . number_format(100 * SPEED) . ' <i class="r4"></i> ' . number_format(130 * SPEED) . '',

		'completed' => 'Güzel yapılmış! Tahıl ambarı artık daha fazla Tahıl depolamanıza izin veriyor.'
	),
	'4' => array(
		'Title' => 'Hepsi bir arada',
		'Description' => 'Başlangıçta en iyisi kaynaklara odaklanmaktır. Lütfen tüm kaynak alanlarınızı 1. Bu seviyeye geliştir.',
		'toDo' => array('Tüm kaynak alanlarını 1. Bu seviyeye geliştir'),
		'reward' => '<i class="r1"></i> ' . number_format(400 * SPEED) . ' <i class="r2"></i> ' . number_format(460 * SPEED) . ' <i class="r3"></i> ' . number_format(330 * SPEED) . ' <i class="r4"></i> ' . number_format(270 * SPEED) . '',

		'completed' => 'Kaynak üretiminiz güzel bir şekilde gelişiyor. Yakında köyünüzde daha fazla bina inşaatına başlayabiliriz.'
	),
	'5' => array(
		'Title' => '2 ye!',
		'Description' => 'Aferin! Üretiminizle ilgili daha fazla bilgiye ihtiyaç duyarsanız stoklarınıza tıklayın 2.',
		'toDo' => array('Her kaynağın 1 alanını 2. Bu seviyeye geliştir'),
		'reward' => '<i class="r1"></i> ' . number_format(240 * SPEED) . ' <i class="r2"></i> ' . number_format(255 * SPEED) . ' <i class="r3"></i> ' . number_format(190 * SPEED) . ' <i class="r4"></i> ' . number_format(160 * SPEED) . '',

		'completed' => 'Aferin! Üretiminizle ilgili daha fazla bilgiye ihtiyacınız varsa stoklarınıza tıklayın.'
	),
	'6' => array(
		'Title' => 'Pazar yeri',
		'Description' => 'Bir kaynağınızın olmaması durumunda, onu pazardaki diğer oyuncularla başka kaynaklar için takas edebilirsiniz. Küçük bir pazar yeri inşa etmek için daha büyük bir ana binaya ihtiyacınız var.',
		'toDo' => array('Pazar yeri inşa et'),
		'reward' => '<i class="r1"></i> ' . number_format(600 * SPEED) . '',

		'completed' => 'Pazar yeriniz hazır ve artık diğer oyuncularla ticarete başlayabilirsiniz. Yine de gerçekten kötü tekliflere kanmayın!'
	),
	'7' => array(
		'Title' => 'Ticaret',
		'Description' => 'Piyasadaki mevcut teklifler, satın al a tıklandığında görülebilir. Döviz kurunu ve mesafeyi kontrol edin. Uygun bir teklif bulamıyorsanız, kendiniz bir teklif oluşturmak için teklife tıklayın.',
		'toDo' => array('Bir pazar teklifi oluşturun veya birini kabul edin'),
		'reward' => '<i class="r1"></i> ' . number_format(100 * SPEED) . ' <i class="r2"></i> ' . number_format(99 * SPEED) . ' <i class="r3"></i> ' . number_format(99 * SPEED) . ' <i class="r4"></i> ' . number_format(99 * SPEED) . '',

		'completed' => 'Harika, ilk ticaretinizi başlattınız.'
	),
	'8' => array(
		'Title' => 'Hepsi 2 ye',
		'Description' => 'Daha pahalı binalar inşa etmeye başlamadan önce, kaynak üretiminizi daha da artırmalıyız. Tüm kaynak alanlarınızı 2. Bu seviyeye geliştir.',
		'toDo' => array('Tüm kaynak alanlarını 2. seviyeye genişletin'),
		'reward' => '<i class="r1"></i> ' . number_format(400 * SPEED) . ' <i class="r2"></i> ' . number_format(400 * SPEED) . ' <i class="r3"></i> ' . number_format(400 * SPEED) . ' <i class="r4"></i> ' . number_format(200 * SPEED) . '',

		'completed' => 'Tebrikler! Kaynak üretiminiz güzel bir şekilde gelişiyor.'
	),
	'9' => array(
		'Title' => 'Depo Düzeyi 3',
		'Description' => 'Deponuzu artan üretime göre ayarlama zamanı. Kahramanınızdan planlanmamış ganimet de depolama alanınızın taşmasına neden olabilir.',
		'toDo' => array('Deponuzu 3. Bu seviyeye geliştir'),
		'reward' => '<i class="r1"></i> ' . number_format(620 * SPEED) . ' <i class="r2"></i> ' . number_format(730 * SPEED) . ' <i class="r3"></i> ' . number_format(560 * SPEED) . ' <i class="r4"></i> ' . number_format(230 * SPEED) . '',

		'completed' => 'Gerçekten iyi, artık hiçbir değerli kaynak israf edilmeyecek.'
	),
	'10' => array(
		'Title' => 'Tahıl ambarı seviyesi 3',
		'Description' => 'Üretiminiz ne kadar yüksek olursa, deponuz o kadar kolay dolar. Tahıl ambarı da yükseltilmelidir.',
		'toDo' => array('Tahıl ambarınızı 3. Bu seviyeye geliştir'),
		'reward' => '<i class="r1"></i> ' . number_format(880 * SPEED) . ' <i class="r2"></i> ' . number_format(1020 * SPEED) . ' <i class="r3"></i> ' . number_format(590 * SPEED) . ' <i class="r4"></i> ' . number_format(320 * SPEED) . '',

		'completed' => 'Artık tahıl ambarında yine yer var, böylece yokluğunuzda bile üretim devam edebilir.'
	),
	'11' => array(
		'Title' => 'Tahıl değirmeni',
		'Description' => 'Bir tahıl değirmeni, tüm ekili alanlarınızın üretimini artırır. Fiyatına değer olmak için yeterince yüksek bir temel üretime sahip olmanız gerekir.',
		'toDo' => array('Bir ekili alanı 1. Bu seviyeye geliştir'),
		'reward' => 'Tahıl Değirmeni Seviye 2',

		'completed' => 'Artık daha fazla inşaat için çok sayıda ücretsiz Tahılünüz var. Diğer kaynakların üretimini artıran binalar da var.'
	),
	'12' => array(
		'Title' => 'Hepsi 5 e',
		'Description' => 'İkinci bir köy için ihtiyaç duyulan bina ve yerleşimcileri karşılayana kadar uzun bir bekleme süresinden tasarruf etmek için çok daha yüksek bir üretime ihtiyacınız olacak. Tüm kaynak alanlarını 5. Bu seviyeye geliştir.',
		'toDo' => array('Tüm kaynak alanlarını 5. Bu seviyeye geliştir'),
		'reward' => 'Tüm kaynakların üretiminde 1 gün +% 25 bonus',

		'completed' => 'Mükemmel! Yerleşimcileri çıkarmanıza yardımcı olacak güçlü bir üretiminiz var.'
	),
);
$lang['quests']['world'] = array(
	'1' => array(
		'Title' => 'İstatistikleri görüntüleyin',
		'Description' => 'Travian dünyasında, diğer binlerce oyuncuya karşı yarışıyorsunuz. Oyundaki konumunuz hakkında daha fazla bilgi edinmek için istatistikleri kontrol edin.',
		'toDo' => array('İstatistikleri açın ve kendinizi diğer oyuncularla karşılaştırın'),
		'reward' => '<i class="r1"></i> ' . number_format(90 * SPEED) . ' <i class="r2"></i> ' . number_format(120 * SPEED) . ' <i class="r3"></i> ' . number_format(60 * SPEED) . ' <i class="r4"></i> ' . number_format(30 * SPEED) . '',

		'completed' => 'Sıralamanın yanı sıra başka faydalı bilgiler de var. Top10 sekmesi size en güçlü saldırganları ve en başarılı soyguncuları gösterecektir.'
	),
	'2' => array(
		'Title' => 'Köy adını değiştir',
		'Description' => 'Sizin tarafınızdan seçilen bir köy adı, diğer oyunculara imparatorluğunuzun aktif olarak yönetildiğini gösteren bir işarettir.',
		'toDo' => array('Köy tabelasındaki köy adını değiştirin'),
		'reward' => '100 kültür puanı',

		'completed' => 'Güzel, Travian dünyasında iz bırakmak için ilk adımı şimdi tamamladınız.'
	),
	'3' => array(
		'Title' => 'Ana bina seviyesi 3',
		'Description' => 'Bazı binaları inşa edebilmek için daha yüksek bir ana bina seviyesine ihtiyacınız var; Ana bina daha da yükseltildikçe köy mühendisleri işlerini daha hızlı tamamlayabilecekler. Ancak unutmamanız gereken bir şey var: her şeyin kaynağa ihtiyacı var!',
		'toDo' => array('Ana binayı 3. Bu seviyeye geliştir'),
		'reward' => '<i class="r1"></i> ' . number_format(170 * SPEED) . ' <i class="r2"></i> ' . number_format(100 * SPEED) . ' <i class="r3"></i> ' . number_format(130 * SPEED) . ' <i class="r4"></i> ' . number_format(70 * SPEED) . '',

		'completed' => 'Harika, daha büyük ana bina artık yeni açtığınız bazı ek binalar inşa etmenize izin veriyor.'
	),
	'4' => array(
		'Title' => 'Bir elçilik inşa edin',
		'Description' => 'Travian dünyası tehlikeli bir yer ve kendinizi savunabilmeniz gerekiyor. En iyi ek savunma, güçlü müttefikler tarafından sunulur. Bir ittifaka katılmak için bir elçilik inşa edin.',
		'toDo' => array('Bir elçilik inşa edin'),
		'reward' => '<i class="r1"></i> ' . number_format(215 * SPEED) . ' <i class="r2"></i> ' . number_format(145 * SPEED) . ' <i class="r3"></i> ' . number_format(195 * SPEED) . ' <i class="r4"></i> ' . number_format(50 * SPEED) . '',

		'completed' => 'Mükemmel, artık ittifak davetlerini kabul edebilirsiniz. Davetiyeler elçilik içinde bulunabilir.'
	),
	'5' => array(
		'Title' => 'Haritayı aç',
		'Description' => 'Harita size Travian dünyasını gösterir. Müttefikler bulmak ve tehditleri belirlemek için komşularınıza göz atın!',
		'toDo' => array('Haritayı menüde aç'),
		'reward' => '<i class="r1"></i> ' . number_format(90 * SPEED) . ' <i class="r2"></i> ' . number_format(160 * SPEED) . ' <i class="r3"></i> ' . number_format(90 * SPEED) . ' <i class="r4"></i> ' . number_format(95 * SPEED) . '',

		'completed' => 'Yakınınızda güçlü oyuncular veya ittifaklar var mı? Harita ayrıca yeni köyler kurabileceğiniz vahalar ve noktalar bulmanıza da yardımcı olur.'
	),
	'6' => array(
		'Title' => 'Mesajı oku',
		'Description' => 'Yararlı ipuçları içeren bir mesaj aldınız. Okunmamış mesajlar, düğmenin üzerindeki sayı ile tanımlanabilir. Şimdi bir göz atın.',
		'toDo' => array('Mesajlara genel bakışı açın ve taskmaster \ ın mesajını okuyun!'),
		'reward' => '<i class="r1"></i> ' . number_format(280 * SPEED) . ' <i class="r2"></i> ' . number_format(315 * SPEED) . ' <i class="r3"></i> ' . number_format(200 * SPEED) . ' <i class="r4"></i> ' . number_format(145 * SPEED) . '',

		'completed' => 'Diğer oyuncularla iletişim kurmak için mesajlar kullanın. Savaşta olsanız bile her zaman sakin ve kibar olmak size fayda sağlar.'
	),
	'7' => array(
		'Title' => 'Bonus gold',
		'Description' => 'Eğitim sırasında, inşaat siparişlerinizi hızlandırmak için zaten altın kullandınız. Altın dükkanında altınınızı başka ne için kullanabileceğinizi öğrenebilirsiniz.',
		'toDo' => array('Altın ile satın alabileceğiniz avantajlara bir göz atın'),
		'reward' => '<img src="img/x.gif" title="altın" class="gold"> 20',

		'completed' => 'İşte yine biraz bedava altın, böylece bazı altın avantajlarından yararlanabilirsiniz.'
	),
	'8' => array(
		'Title' => 'Birlik',
		'Description' => 'Müttefikler arayın ve bir ittifaka katılın. Henüz herhangi bir bağlantınız yoksa, yakınınızdaki oyuncuların ittifaklarını kontrol edin veya forumda bir ittifak arayın.',
		'toDo' => array('Bir ittifaka katılın'),
		'reward' => '<i class="r1"></i> ' . number_format(295 * SPEED) . ' <i class="r2"></i> ' . number_format(210 * SPEED) . ' <i class="r3"></i> ' . number_format(235 * SPEED) . ' <i class="r4"></i> ' . number_format(185 * SPEED) . '',

		'completed' => 'Harika bir başlangıç ​​yapıyoruz. Her bir oyuncu ne kadar güçlü ve aktifse, takım olarak o kadar güçlü olursunuz. Birbirinize saldırıları nasıl bildireceğinizi ve nasıl yardım isteyeceğinizi öğrendiniz mi?'
	),
	'9' => array(
		'Title' => 'Ana bina seviyesi 5',
		'Description' => 'Yeni binalar inşa edebilmeniz için ana binayı yükseltme zamanı. Lütfen aynı zamanda kaynak üretiminizle de ilgilenmeyi unutmayın.',
		'toDo' => array('Ana binanızı 5. Bu seviyeye geliştir'),
		'reward' => '<i class="r1"></i> ' . number_format(570 * SPEED) . ' <i class="r2"></i> ' . number_format(470 * SPEED) . ' <i class="r3"></i> ' . number_format(560 * SPEED) . ' <i class="r4"></i> ' . number_format(265 * SPEED) . '',

		'completed' => 'Harika! değil mi? Artık Binanız Daha Hızlı İnşa Edecek. Ödülünüzü Alın ve kendinizi bir sonraki Göreve hazırlayın.'
	),
	'10' => array(
		'Title' => 'Hükümet koltuğu',
		'Description' => 'Yakında yeni bir köy kurmak için hemen bir hükümet merkezi inşa edin. Bu köyün başkent köyünüz olarak kalmasını isteyip istemediğinizden emin değilseniz, lütfen Köşku seçin.',
		'toDo' => array('Hükümet koltuğu'),
		'reward' => '<i class="r1"></i> ' . number_format(525 * SPEED) . ' <i class="r2"></i> ' . number_format(420 * SPEED) . ' <i class="r3"></i> ' . number_format(620 * SPEED) . ' <i class="r4"></i> ' . number_format(335 * SPEED) . '',

		'completed' => 'Bu bina yeni bir köy kurmak ya da fethetmek için gereklidir. Seviyesi, olası genişletme Adetını sınırlar.'
	),
	'11' => array(
		'Title' => 'Kültür noktaları',
		'Description' => 'İmparatorluğunuzdaki daha fazla köyde hüküm sürmek için kültür puanlarına ihtiyacınız var. Köşk veya saraydaki genel bakış size ne kadar uzakta olduğunuzu ve bunun ne kadar süreceğini söyler.',
		'toDo' => array('Köşkunuzdaki veya sarayınızdaki kültür puanları sekmesini açın'),
		'reward' => '<i class="r1"></i> ' . number_format(650 * SPEED) . ' <i class="r2"></i> ' . number_format(800 * SPEED) . ' <i class="r3"></i> ' . number_format(740 * SPEED) . ' <i class="r4"></i> ' . number_format(530 * SPEED) . '',

		'completed' => 'Köy listesinde, olası yeni köylerin mevcut durumunu ve eksik kültür puanlarının Adetını da görebilirsiniz. Kültür puanlarınızı nasıl hızlı bir şekilde artırabileceğinizi öğrenmek için \ "Answers \" bölümünü ziyaret edin.'
	),
	'12' => array(
		'Title' => 'Depo seviyesi 7',
		'Description' => 'Kendinizi yeni bir köye yerleşmeye hazırlamak için deponuzu yükseltin. Şu anki depolama kapasiteniz, gerekli binaları ve yerleşimcileri karşılayacak kadar yakında yeterli olmayacak.',
		'toDo' => array('Upgrade your warehouse to level 7'),
		'reward' => '<i class="r1"></i> ' . number_format(2650 * SPEED) . ' <i class="r2"></i> ' . number_format(2150 * SPEED) . ' <i class="r3"></i> ' . number_format(1810 * SPEED) . ' <i class="r4"></i> ' . number_format(1320 * SPEED) . '',

		'completed' => 'Harika, depolama kapasiteniz bir süre için yeterli olmalı. Değerli kaynaklarınızı savunmayı veya saklamayı unutmayın!'
	),

	'13' => array(
		'Title' => 'Köşk veya saray seviyesi 10',
		'Description' => 'Yerleşimciler bir sarayda veya bir Köşkta eğitilebilir. "Eğitim" sekmesi size gerekli bina seviyesini gösterir.',
		'toDo' => array('Evinizi veya sarayınızı 10. Bu seviyeye geliştir'),
		'reward' => '500 kültür puanı',

		'completed' => 'Her köyden sadece 2 ila 3 yeni köyü kontrol edebilirsiniz. Şu anda yeni bir köy için eksik olan tek şey 3 yerleşimci ve çok sayıda kültür puanı!'
	),
	'14' => array(
		'Title' => 'Üç yerleşimciyi eğitin',
		'Description' => 'Yeni bir köy kurmak için üç yerleşimci birlikte başlamalıdır. Yani bunları köydeyken rakiplerin saldırılarından korumalısın; Ve koşullar hazır olur olmaz onlara en kısa zamanda dikkat edin.',
		'toDo' => array('Üç yerleşimciyi eğitin'),
		'reward' => '<i class="r1"></i> ' . number_format(1050 * SPEED) . ' <i class="r2"></i> ' . number_format(800 * SPEED) . ' <i class="r3"></i> ' . number_format(900 * SPEED) . ' <i class="r4"></i> ' . number_format(750 * SPEED) . '',

		'completed' => 'Yerleşimcilerinizi, gitmeye hazır olana kadar saldırılardan koruyun!'
	),
	'15' => array(
		'Title' => 'Yeni köy yaratmak',
		'Description' => 'Yerleşmek için haritada iyi bir yer arayın. Köyünüzün yakınında olmasını, belirli bir kaynaktan daha fazla kaynak üretmesini veya birçok vahanın yakınında olmasını ister misiniz? Yerleşimcilerinizi kullanarak ikinci bir köy bulun!',
		'toDo' => array('Yeni köy oluştur'),
		'reward' => '48 saat Travian artı.',

		'completed' => 'Harika, Travian dünyasının en güçlü imparatorluklarından birisiniz. Düşmanı savunmak için çok sayıda asker oynamaya ve takip etmeye devam edin.'
	),
);

$lang['quests']['monitor'] = array(
	'1' => array('Öğreticiyi başlat'),
	'2' => array('Görevleri Kapat', 'Görevleri Aç', 'İpuçlarını Devre Dışı Bırak'),
	'3' => array('Oduncu alanını aç', 'Oduncu inşa et'),
	'4' => array('Açık bina', 'Oduncu 2'),
	'5' => array('Açık Tahıl Arazisi', 'Tahıl Arazisi İnşa Et'),
	'6' => array('Kahraman Resmine Tıklayın', 'Üretimi Değiştir'),
	'7' => array('Köy merkezine girin'),
	'8' => array('Şantiyeye tıklayın', 'Depo İnşa Et'),
	'9' => array('RallyPoint yerine tıklayın', 'RallyPoint Oluşturun'),
	'10' => array('2 Altın Kullanarak İnsaat Tamamla'),
	'11' => array('Kahraman macera'),
	'12' => array('Rapor menüsü', 'Raporu oku'),
	'13' => array('Kahraman envanteri', 'Kahraman İyileştir'),
	'14' => array('Kullanıcı Arayüzü Yardımı'),
	'15' => array('Eğitimin sonu')
);

$lang['quests']['monitor']['battle'] = array(
	'01' => 'Sonraki Macera',
	'02' => 'Sığınak Oluştur',
	'03' => 'Kışla inşa et',
	'04' => '5 macerayı tamamla',
	'05' => 'Askerleri eğitin',
	'06' => 'Toprak Duvarı',
	'07' => 'Saldırı vahası',
	'08' => '10 macera ',
	'09' => 'Müzayedeler',
	'10' => 'Kışlaları Yükselt',
	'11' => 'Bir akademi inşa edin',
	'12' => 'Araştırma birimi',
	'13' => 'Bir Zırh Dökümhanesi inşa et',
	'14' => 'Birimleri geliştirin'
);

$lang['quests']['monitor']['economy'] = array(
	'01' => 'Demir madeni',
	'02' => 'Daha fazla kaynak',
	'03' => 'Tahıl ambarı',
	'04' => 'Hepsi bir arada',
	'05' => '2 ye!',
	'06' => 'Pazar Yeri',
	'07' => 'Ticaret',
	'08' => 'Hepsi 2 ye',
	'09' => 'Depo Düzeyi 3',
	'10' => 'Tahıl ambarı seviyesi 3',
	'11' => 'Tahıl Değirmeni',
	'12' => 'Tümü 5 e'
);

$lang['quests']['monitor']['world'] = array(
	'01' => 'İstatistikleri göster',
	'02' => 'Köy adını değiştir',
	'03' => 'Ana bina katı 3',
	'04' => 'Bir elçilik inşa et',
	'05' => 'Haritayı aç',
	'06' => 'Mesajı oku',
	'07' => 'Bonus altın',
	'08' => 'Birlik',
	'09' => 'Ana bina seviyesi 5',
	'10' => 'Hükümet koltuğu',
	'11' => 'Kültür puanları',
	'12' => 'Depo seviyesi 7',
	'13' => 'Köşk veya saray seviyesi 10',
	'14' => '3 Yerleşimci',
	'15' => 'Yeni köy',
);

$lang['quests']['Main'] = array(
	'QuestsList' => 'Görev listesi',
	'Quest' => 'Görev',
	'Reward' => 'Senin ödülün',
);

$lang['main']['options'] = array(
	'1' => 'Oyun',
	'2' => 'dil ayarları',
	'3' => 'Dil',
	'4' => 'İngilizce',
	'5' => 'Türkçe',
	'6' => 'kaydet',
);

$lang['links'] = array(
	'Farms' => 'Farmlist Sistemi',
	'Support' => 'İletişim desteği',
);

$lang['Report'] = array(
	'Silver' => 'Gümüş',
);


$lang['Msgs'] = array(
	'wMSGT' => 'Multihunter dan Mesaj',
	'wMSGI' => 'Merhaba ' . $session->username . ',<br><br>

Bu senin yeni evin.<br><br>

Etrafa bir göz at. Bereketli araziler, altın tahıl ve demir dağlar - tümü sana ait. Köyün şimdilik küçük olabilir ama yeterince kafa yorma ve yoğun çalışmayla köyünü bir imparatorluğa dönüştürebilirsin Yine de büyük bir hükümdarın yetenekten fazlasına ihtiyacı vardır – büyük bir hükümdara bilgelik gerekir. Bu yüzden beni sonuna kadar dinle:<br>

Dünya hammaddeler etrafında döner. Binaların onlara ihtiyaç duyar, askerlerin onları tüketir ve tüm savaşlar onların dışında başka hiçbir şeyle sürdürülemez. Ancak şunu anlamak önemlidir: Kaynaklar, sona giden yolda sadece bir araçtır. Onları her zaman harca. Başlangıç koruman 1 gün sonra düşecek; unutma, yağmacılar çok beklemez. Düzenli olarak oyna, yükselen bir ekonomiyi sürdürmek için sığınak ve daha fazla hammadde alanına yatırım yap.<br>

Derin bir nefes al. Hava yağmur yüzünden halen serin olabilir ama hala bir ipucu var. Savaşın işaretlerinden kaçamazsın. Ama diplomasi sanatı daha fazla gizli kalmamalı: Diğerleriyle konuş. Arkadaşlar bul ve bir birliğe katıl. İhtiyaç zamanlarında seni destekleyecek ve sana sayısız tavsiye verecekler. Ayrıca sana saldıranlara da yazmalısın. Genellikle ikinizin de çıkarına olan bir anlaşma bulabileceksin.<br>

Şimdi ilk taşı yerleştir. Bu senin anıtın. Ama bu tek anıtın olmayacak. Planın, olabildiğince hızlı ikinci bir köy kurmak olmalı. Seçeneklerin ve dolayısıyla gücün çok fazla artacak. Daha bol hammadde, binaları özelleştirmek için ilave yollar ve bu sayede daha iyi stratejiler. Arkadaşlarına yakın yerleşimler kurmak da görmezden gelinemeyecek bir fayda sağlar.<br>

Daha fazla sözcük boşa harcanmamalı. Şimdi hareket zamanı. Görev Ustasına danış - senin için şimdiden harika planları var. İzin ver, bir parça paha biçilemez bilgelikle bitireyim: Vazgeçene kadar asla gerçek anlamıyla kaybetmezsin. Zorluklar ve başarısızlıklar olacak ancak sadece bunların üstesinden geldiğinde büyüyeceksin. Her büyük hikaye biraz zorluk içerir. Şimdi oraya git ve dünyaya gerçek gücünü göster.',
	'Arts' => '<div style="width:450px; height:830px; padding: 95px 60px
	60px 25px; background:
	url(img/Natars_Banner_gross.jpg)
	no-repeat;">
			<center>
				<h1>Eserler Aktif Oldu</h1>
				<p style="font-size:85%; text-align:justify; width:400px">
				Sadece en iyi hikaye anlatıcılarının anlattığı efsanelerle ilgili fısıldayan söylentiler köylerde yankılanıyor. Travian’ın en korkunç savaşçıları Natarları ilgilendiriyorlar. Onları öldürmek her kahramanın hayalidir, her askerin hedefi. Natarların nasıl bu kadar güçlü olduklarını kimse bilmiyor, askerleri bu kadar korkutucu. Güçlerinin kaynağını keşfetmeye kararlı olan seçkin bir gözlemci grubu, onları gözetlemek için gönderilir. Birkaç saat sonra dehşete düşmüş yüzler ve çılgın teorilerle geri dönüyorlar: Görünüşe göre Natarların gücü, atalarınızdan çaldıkları eserler dedikleri gizemli eşyalardan geliyor. Eserleri çalmayı başardığınızı söylüyorlar ve güçlerini çalabilirsiniz.
					<br><br><img src="img/msg.jpg" alt="Artefacts" width="400" height="200" style="float:
	right">
					<br><br>
					Eserleri geri alma zamanı geldi. Birlikınızla komplo kurun ve bu imrenilen nesneleri almak için savaşçılarınızı bir araya getirin. Ancak Natarlar savaşmadan eserleri bırakmayacak… ve düşmanlarınız da vermeyecek. Artefaktları başarılı bir şekilde yeniden ele geçirmeyi ve düşmanlarınızı savuşturmayı başarırsanız, ödülleri alabileceksiniz. Binalarınız inanılmaz derecede güçlü ve güçlü olacak, Askerleriniz çok daha hızlı ve Tahıl açısından daha verimli olacak. Tarihi eserleri ele geçirin, imparatorluğunuza zafer kazandırın ve halefleriniz için yeni efsaneler olun </p><br><br>
	
	</center>
	</div>',


	'WW' => 'Nettarın duvarlarındaki ilk savaşlardan bu yana sayısız günler geçti, netarın duvarlarında birçok ordu yok edildi ve şimdi yayılma başladı ve bu dünyadaki ölüm kokusu yeni başladı! Gelecek için ordu kurduğunuzdan emin olun!
<br> <br>
Gözcüler, bedeni ürperten korkunç hikayeler, hikayeler ve sahnelerle geldi, kimsenin hayatlarının sonuna kadar önünden geçemeyeceği korku orduları, çok büyük bir güç, zalim ve acımasız bir güç, insanların umudunu kırıyor, yarış savunmanızı ve ordunuzu direniş ve saldırı için hazırlamaya başladı Bilen son kişi olmayın!
<br> <br>
Mucizenin seviyesini yükseltebileceğiniz planlar inşa ederek, rakip onları kapmadan eserleri kaçırabileceğiniz bina planları ortaya çıktı
<br> <br>
Herkesin etrafında bir şey arayan on binlerce izci dolaşıyor, ancak güçlü yerler onlara ulaşamayacak! Ancak bu imparatorluk için sorunlar başladı ve sırlar ortaya çıktı!
<br> <br>
Şimdi sonun başlangıcı, bu dünyanın savaş meydanlarındaki en güçlü orduların tüm tarafların kaderine karar vermek için çarpıştığı, kılıca karşı kılıcı ve bu zamanla tekrarlanacak olan savaş, bu senin savaşın, adını tarih boyunca kazmalısın, burada bir efsane olabilirsin .. .
<br> <br>

<br> <br>
<br> <br>
<b> Gereksinimler </b> <i>: Bir bina planını çalmak için bu koşulların karşılanması gerekir </i> <br>
<li> Planlanan köye saldırıyı tamamlayın </li>
<li> Planlanan köye saldırı başarılı oldu </li>
<li> Kasayı imha etmek için </li>
<li> Kahramanın saldırıya katılımı zorunludur </li>
<li> Güvenli seviye 10 olmalıdır </li>
<br> <br>
Sonra şaheseri alırsınız.Eğer saldırı başarılı olursa ve şaheser kaçırılırsa, mancınık hedefi (kasa) seçilmelidir.
<br> <br>
İnşaat için, mucizenin sahibi 49. seviyeye kadar bir bina planı edinmeli, ittifaktan başka bir oyuncu mucizeyi 100. Bu seviyeye geliştirmeye devam etmek için başka bir bina planına sahip olmalıdır.',
);

$lang['Footer'] = array(
	'Homepage' => 'Anasayfa',
	'Forum' => 'Forum',
	'Links' => 'Bağlantılar',
	'FAQ' => 'FAQ - Yanıtlar',
	'Terms' => 'Koşullar',
	'Imprint' => 'Künye'
);
$lang['Hero'] = array(
	'status01' => 'Kahraman macerada',
	'status02' => 'Kahraman geri dönüyor',
	'status03' => 'Kahraman öldü',
	'status04' => 'Kahraman köyde savunuyor',
	'status05' => 'Kahraman şu anda köyde',

	'adv00' => 'Yeni Macera',
	'adv01' => 'Macera zamanı',
	'adv02' => 'Varış',
	'adv03' => 'Geri dön',
	'adv04' => 'Saat',
	'adv05' => 'Maceraya',
	'adv06' => 'geri',
	'Speed' => 'hız',
	'Attributes' => 'Öznitellikler',
	'saveChanges' => 'Lütfen değişiklikleri kaydedin',

	'FSYetiştirgth' => 'Mücadele Gücü',
	'FHero' => 'form kahramanı',

	'OW01' => 'Varış',
	'OW02' => 'at',
	'OW03' => 'Maceranın ilerlemesini şurada görebilirsiniz',
	'OW04' => 'Toplanma Noktası',

	'Revive01' => 'Evi',
	'Revive02' => 'köyde canlanacak',
	'Revive03' => 'kahramanın ana köyünü değiştirmek veya onu başka bir köyde canlandırmak için',
	'Revive04' => 'Canlandırma maliyeti',
	'Revive05' => 'Kahraman yeniden canlanıyor',
	'Revive06' => 'Kalan süre',
);


$lang['quests']['achievements'] = array(
	'1' => array(
		'Title' => 'Bir macerayı tamamlayın',
		'Description' => 'Kahramanınızı bir maceraya gönderin. Bu görev, kahramanın maceradan sağ çıkamasa bile geldiğinde tamamlanır. Kahramanınızı bir maceraya göndermek için, resimde gösterilen simgeye tıklamanız yeterlidir. <br> <br> Bu görevin puanları günde 1 kez elde edilebilir.',
		'toDo' => 'Bu görev + 5 puan değerindedir',
		'questIn' => array('questGive' => 5, 'Hard' => 'moderate', 'needReq' => 'Available adventure')
	),
	'2' => array(
		'Title' => 'Boş bir vahaya saldırın',
		'Description' => 'Boş bir vahaya Saldırı yapmak için asker gönderin. Bu görev, savaş sırasında öldürülse bile, ordunuz geldiğinde tamamlanır. Çatışmadan kaçınmak için kafes kullanmak size bu görev için herhangi bir puan vermeyecektir. Savaş simülatörünü kullanarak Saldırın sonucunu hesaplayabilirsiniz. Onu toplanma noktanızda bulabilirsiniz. <br> <br> Bu görevin puanları günde 3 defa elde edilebilir.',
		'toDo' => 'Bu görev + 3 puan değerindedir',
		'questIn' => array('questGive' => 3, 'Hard' => 'hard', 'needReq' => '(Lots of) troops')
	),
	'3' => array(
		'Title' => 'Bir Natar köyüne Saldırı / saldırı',
		'Description' => 'Bir Natar köyüne Saldırı yapmak / saldırmak için asker gönderin. Bu görev, savaş sırasında öldürülse bile, ordunuz geldiğinde tamamlanır. En az 100.000 asker toplamadan önce Natarian kabilesinin kontrolünde olan bir Dünya Harikası köyüne Saldırı / saldırmaya çalışmamalısınız.
		<br><br>Bu görevin puanları günde 3 defa elde edilebilir.',
		'toDo' => 'Bu görev + 3 puan değerindedir',
		'questIn' => array('questGive' => 9, 'Hard' => 'challenging', 'needReq' => '(Çok) asker')
	),
	'4' => array(
		'Title' => 'Müzayede kazanın',
		'Description' => 'Bir müzayedeye katılmak, iki kez kazanmanıza izin verir - ilk önce müzayedeyi kazanıp istediğiniz öğeyi kazandığınızda ve ikincisi günlük ödül bakiyeniz için puan topladığınızda. Puanlar, teklif ettiğiniz herhangi bir müzayedeyi kazandığınızda verilecektir. <br> <br> Bu görevin puanları günde 1 kez elde edilebilir',
		'toDo' => 'Bu görev + 5 puan değerindedir',
		'questIn' => array('questGive' => 9, 'Hard' => 'challenging', 'needReq' => '10 macerayı tamamla')
	),
	'5' => array(
		'Title' => '0/3 Altın kazanın veya harcayın',
		'Description' => 'Bu görevin puanlarını elde etmek için ya altın kazanmalı ya da harcamalısınız. Altın bakiyenizin herhangi bir Adetını nasıl ve ne için kazanmak / kullanmak istediğinize karar vermek size kalmıştır. <br> <br> Bu görevin puanları günde 3 kez elde edilebilir.',
		'toDo' => 'Bu görev + 2 puan değerindedir',
		'questIn' => array('questGive' => 6, 'Hard' => 'moderate', 'needReq' => 'Gold')
	),
	'6' => array(
		'Title' => 'Bir binayı yükseltin',
		'Description' => 'Bu görevin puanlarını elde etmek için ya mevcut bir binayı yükseltmeniz ya da yeni bir tane inşa etmeniz gerekir. İnşaat tamamlandığında puanlar verilecek. <br> <br> Bu görevin puanları günde 3 kez elde edilebilir.',
		'toDo' => 'Bu görev + 4 puan değerindedir',
		'questIn' => array('questGive' => 12, 'Hard' => 'moderate', 'needReq' => 'Resources')
	),
	'7' => array(
		'Title' => 'Bir kaynak alanını yükseltme',
		'Description' => 'Bu görevin puanlarını elde etmek için ya mevcut bir kaynak alanını yükseltmeniz ya da yeni bir tane oluşturmanız gerekir. İnşaat tamamlandığında puanlar verilecek. <br> <br> Bu görevin puanları günde 3 kez elde edilebilir..',
		'toDo' => 'Bu görev + 5 puan değerindedir',
		'questIn' => array('questGive' => 15, 'Hard' => 'moderate', 'needReq' => 'Resources')
	),
	'8' => array(
		'Title' => 'Tek seferde 20 piyade birimi inşa et',
		'Description' => 'Bu görevin puanlarını elde etmek için kışlalarınızda aynı anda 20 piyade biriminin eğitimini sipariş etmeniz gerekiyor. Zaten eğitim kuyruğunda olan piyade birimlerinin bu görev için size puan vermeyeceğini lütfen unutmayın. <br> <br> Bu görevin puanları günde 3 kez elde edilebilir',
		'toDo' => 'Bu görev + 4 puan değerindedir',
		'questIn' => array('questGive' => 12, 'Hard' => 'challenging', 'needReq' => 'Barracks')
	),
	'9' => array(
		'Title' => 'Tek seferde 20 süvari birimi inşa et',
		'Description' => 'Bu görevin puanlarını elde etmek için ahırınızdaki 20 süvari biriminin eğitimini aynı anda sipariş etmeniz gerekiyor. Zaten eğitim kuyruğunda olan süvari birimlerinin size bu görev için puan vermeyeceğini lütfen unutmayın. <br> <br> Bu görevin puanları günde 3 kez elde edilebilir.',
		'toDo' => 'Bu görev + 4 puan değerindedir',
		'questIn' => array('questGive' => 12, 'Hard' => 'challenging', 'needReq' => 'Stable')
	),
	'10' => array(
		'Title' => 'Küçük veya büyük bir kutlama yapın',
		'Description' => 'Küçük veya büyük bir kutlama yapın Belediye binanızda küçük veya büyük bir kutlama yapın. <br> Herhangi bir kutlama yaptığınızda puanlar verilecektir. Zaten devam eden kutlamalar size puan vermez. <br> <br> Bu görevin puanları günde 3 kez elde edilebilir',
		'toDo' => 'Bu görev + 5 puan değerindedir',
		'questIn' => array('questGive' => 15, 'Hard' => 'hard', 'needReq' => 'Town Hall')
	),
);

$lang['Daily'] = array(
	'01' => 'Bir macerayı tamamla',
	'02' => 'Boş bir vahaya Saldırı yapın',
	'03' => 'Bir Natar köyüne Saldırı / saldır',
	'04' => 'Bir müzayede kazanın',
	'05' => 'Altın kazanın veya harcayın',
	'06' => 'Bir binayı yükselt',
	'07' => 'Bir kaynak alanını yükselt',
	'08' => 'Tek seferde 20 piyade birimi inşa et',
	'09' => 'Tek seferde 20 süvari birimi inşa et',
	'10' => 'Küçük veya büyük bir kutlama yapın',

	'Close' => 'kapat',
	'Overview' => 'Genel Bakış',
	'PG' => 'Bu görev için verilen puanlar:',
	'Difficulty' => 'Zorluk',
	'Requirement' => 'Gereklilik',
	'CRewards' => 'Ödül toplayın',

	'Congrats01' => 'Tebrikler! Ödül almaya yetecek kadar puan topladın!',
	'Congrats02' => 'Toplamak için',
	'Congrats03' => 'bugün puan, artık ödülünüzü toplayabilirsiniz',
	'Congrats04' => 'Günlük ödülünüz bu seçeneklerden rastgele belirlenir',
	'Congrats05' => 'Toplamak için',
	'Congrats06' => 'bugün puanlar, aşağıdaki ödülü alırsınız',
);

define('markASRead', 'Okundu olarak işaretle');
define('rMessage', 'Mesaj Yaz');
define('Ignored', 'Yoksayılan oyuncular');
define('Ignored01', 'Belirli bir oyuncunun mesajlarını yok saymak için profiline gidin ve "Yoksay" düğmesine tıklayın!');
define('Ignored02', 'Oyuncuyu yoksay.');
define('Ignored03', 'Oyuncu yok sayılacak.');
define('Ignored04', 'Bu oyuncuyu görmezden gelmeyi bırak.');
define('Ignored05', 'Oyuncudan gelen mesajları kabul edin.');

define("herostatus9", "Yolda");
define("herostatus100", "Köyde");
define("herostatus101", "Kahraman öldü");
define("herostatus102", "Kahraman kafeslendi");
define("herostatus103", "Kahraman savunuyor");


$lang['Profile'] = array(
	'00' => 'Oyuncu Profili',
	'01' => 'Ayrıntılar',
	'02' => 'Doğum Günü',
	'03' => 'Cinsiyet',
	'04' => 'Yok',
	'05' => 'erkek',
	'06' => 'kadın',
);

$lang['Alliance'] = array(
	'00' => 'Birlik Yok',
);

$lang['Unvan'] = array(
	'00' => 'Ünvan',
	'01' => 'Şövalye',
	'02' => 'Baron',
	'03' => 'Prens',
	'04' => 'Dük',
	'05' => 'İmparator',
);

$lang['Logout'] = array(
	'01' => 'Oyuna dön',
	'02' => 'Hesap adı veya e-posta adresi',
	'03' => 'Şifre',
	'04' => 'Giriş Yap',
);
