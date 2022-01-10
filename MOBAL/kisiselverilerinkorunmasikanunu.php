<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar sticky-top navbar-dark bg-dark">
<div class="container-fluid">
  <div class="nav">  
   <a class="navbar-brand bg-light text-dark rounded" href="index.php">M O B A L</a>
  </div>
    <div class="nav justify-content-end">
    <form method="post" class="mt-2">
                <?php
                    if(isset($_SESSION['email'])){
                        
                        echo '<a class="navbar-brand bg-light text-dark rounded " href="hesabim.php">Hesabım</a>';
                        
                        echo '<a class="navbar-brand bg-light text-dark rounded" href="logout.php">Çıkış Yap</a>';
                        
                    } else {
                        
                        echo '<a class="navbar-brand bg-light text-dark rounded " href="kayitol.php">Kayıt Ol</a>';
                        
                        echo '<a class="navbar-brand bg-light text-dark rounded " href="girisyap.php">Giriş Yap</a>';
                        
                    }
                ?>
    </form>
    <img src="resimler\user.png" class="nav img-thumbnail" alt="sepet" >

    
</div>
  </div>
</nav>

<div class="container my-5" >
        <div class="row">
            <div class="col-3">
                
            </div>
                 
                    <div class="nav">     
                         <h1 class="rounded"> M O B A L </h1>
                         <div class="container bg-dark text-light">
                            <h2>6698 SAYILI KİŞİSEL VERİLERİN KORUNMASI KANUNU KAPSAMINDA AYDINLATMA METNİ</h2>
                            <p>MOBAL Sanayi ve Ticaret Anonim Şirketi, yürüttüğü faaliyetler kapsamında işlediği kişisel verilerinizi korumak için, 6698 Sayılı Kişisel Verilerin Korunması Kanunu’na (“KVKK”) uygun olarak her türlü teknik ve hukuki tedbiri almaktadır. İlgili kişiler; işlenen kişisel veri kategorilerini, kişisel verilerin işlenmesinin hukuki sebeplerini, üçüncü kişilere aktarımı yapılan verileri ve bu aktarımın amacı ile KVKK ve GDPR kapsamında yer alan haklarına ilişkin ayrıntılı bilgilere aşağıdaki aydınlatma metninden ulaşabilirler.

Veri Sorumlusu
MOBAL Sanayi ve Ticaret Anonim Şirketi

Mersis No               : 0481005419400017

İnternet Adresi        : http://www.MOBAL.com.tr/

Telefon Numarası    : 0 (352) 322 55 55

Adres                      : Organize Sanayi Bölgesi 6.Cadde No:35 38070 Melikgazi / Kayseri / Türkiye

Kişisel Verilerin İşlenme Amaçları
Kişisel verileriniz, MOBAL A.Ş. tarafından veri sorumlusu sıfatıyla aşağıda yer alan amaçlarla ve kapsamda KVKK’nın 5. ve 6. maddelerine uygun olacak şekilde işlenmektedir:

Ürün ve hizmetlerimizi iyileştirmek, geliştirmek, çeşitlendirmek ve ticari ilişki içerisinde olduğumuz gerçek/tüzel kişilere alternatifler sunabilmek amacıyla,
MOBAL A.Ş.  tarafından Erciyes Anadolu Holding ve Erciyes Anadolu Holding’e bağlı şirketler arasında iletişim ve işbirliğinin sağlanması, koordinasyonun temini, ortak iş alanlarının yürütülmesi, müşterilerimizin ve çalışanlarımızın ihtiyaçlarının belirlenmesi, sözleşme ile ilgili yükümlü olunan edimlerin yerine getirilmesi, reklam ve pazarlama faaliyetinin sürdürülmesi, müşteri takibinin sağlanması, iş güvenliği ve iş sürekliliğinin temini amacıyla,
Hizmet standartlarımızı yükseltmek ve geliştirmek amacıyla,
Ticari iş stratejilerimizin belirlenmesi ve uygulanması amacıyla,
MOBAL A.Ş.‘nin taraf olduğu sözleşmelerin MOBAL A.Ş. tarafından eksiksiz ifası ve bu sözleşmelerde karşı tarafların sözleşmeleri eksiksiz ifa ettiklerinin kontrolü amacıyla,
MOBAL A.Ş. ile ticari ilişki içerisinde olan gerçek/tüzel kişilerin hukuki güvenliğinin sağlanması amacıyla,
Mevzuattaki kanunlar uyarınca, MOBAL A.Ş. tarafından düzenlenmesi gereken ticari defterleri, faturaları, banka çek ve bordroları düzenleyebilmek amacıyla,
Çalışanların, misafirlerin ve MOBAL A.Ş.’ye ait binaların güvenliğini sağlayabilmek ve giriş-çıkışları kontrol edebilmek amacıyla,
Çalışan adaylarının işe alım süreçlerinin değerlendirilmesi, çalışanların özlük dosyalarının oluşturulması ve MOBAL A.Ş.’nin insan kaynakları politikalarının sürdürülmesi amacıyla,
MOBAL A.Ş. bünyesinde çalışan personelin moral ve motivasyonunu, performans düzeyini ve memnuniyetlerini, birbirleriyle ve şirketle olan etkileşimlerini artırmak ve şirkete olan bağlılıklarını sağlamak amacıyla,
MOBAL A.Ş.’nin halka açık alanlarında bulunan misafirlerin internete erişimini sağlamak amacıyla,
MOBAL A.Ş.’nin ticari satın alma işlemlerinin gerçekleştirilmesi amacıyla,
MOBAL A.Ş.’nin kurumsal yazışmalarının yapılması amacıyla,
İnternet sitemizin ziyaret edilmesi durumunda istatiksel verilerin oluşturulması ve ziyaretçi bilgilerinin kaydedilmesi ve geri dönüşlerin sağlanması amacıyla,
Bunlarla birlikte gerekli kalite ve standart denetimlerimizi yapabilmek ya da kanun ve yönetmelikler ile belirlenmiş sair yükümlülüklerimizin yerine getirilmesi gibi amaçlar üzerine.
Kişisel Verilerin Aktarılması
İşlediğimiz kişisel veriler yukarıdaki amaçlar çerçevesinde, KVKK’nın 8. ve 9. maddeleri dikkate alınarak:

Ticari faaliyetlerimizin yerine getirilebilmesi ve sürekliliğin sağlanabilmesi amacıyla, iş ortaklarımıza,
Ürün ve hizmetlerin sağlanabilmesi amacıyla sınırlı olarak tedarikçilerimize,
Kanunlarda öngörülen yasal yükümlülüklerin yerine getirilmesi ve güvenliğin sağlanması amacıyla başta SGK olmak üzere ilgili kamu kurum ve kuruluşlarına,
MOBAL A.Ş. bünyesinde istihdam edilen kişilerin sosyal ve mali haklarının karşılanmasını sağlamak amacıyla başta bankalar olmak üzere diğer özel ve kamu tüzel kişiliklerine,
İlgili kamu kurum ve kuruluşlarının talepleri doğrultusunda ve talep amaçlarıyla sınırlı olarak hukuken yetkili kamu kurum ve kuruluşlarına ve yargı organlarına,
Ortak veri tabanı oluşturulması, koordinasyon ve iş birliğinin sağlanması amacıyla Erciyes Anadolu Holding A.Ş. ve Holding’e bağlı iştirak şirketlerine,
Şirketimizin ve bağlı bulunduğumuz Erciyes Anadolu Holding’in kullandığı işletim sistemleri ve bilgisayar programlarının veri tabanlarının oluşturulması, program işlerliğinin sağlanması ve programın bakım ve onarımın yapılabilmesi amacıyla yurtiçi ve yurtdışında kurulu yazılım firmalarına ve teknoloji şirketlerine,
Bulut servis hizmeti aldığımız, bulut teknolojisi hizmeti veren yurtiçi ve yurtdışında kurulu teknoloji şirketlerine,
Müşteri takibi ve müşteri ihtiyaçlarının giderilmesi amacıyla Erciyes Anadolu Holding ve Erciyes Anadolu Holding’e bağlı şirketlere, şirketimiz ve Erciyes Anadolu Holding’e bağlı şirketlerin yurtiçi ve yurtdışında kurulu iş ortaklarına, bayilerine ve tedarikçilerine,
Etkinlik, konferans vb. sosyal ve kültürel etkinliklerin gerçekleştirilmesi amacıyla Erciyes Anadolu Holding’e bağlı şirketlere ve bu alanda faaliyet gösteren hizmet aldığımız firmalara,
İş sağlığı ve güvenliği önlemleri kapsamında çalışanların sağlık bilgilerinin sağlıklı bir iş ortamında çalışabilmeleri amacıyla ilgili sağlık hizmeti alınan kurumlara ve sigorta şirketlerine aktarılabilmektedir.
Kişisel Veri Toplamanın Yöntemi ve Hukuki Sebebi
Kişisel verileriniz MOBAL A.Ş. veya MOBAL A.Ş. adına veri işleme yetkisine sahip gerçek veya tüzel kişiler tarafından, beyan, başvuru formları, internet sitesinden doldurulan formlar, özlük dosyası oluşturmak üzere istenen belgeler, muhtelif sözleşmeler, her türlü bilgi formları, anketler, iş başvuru formları, çağrı merkezleri üzerinden sözlü, yazılı veya elektronik kanallar aracılığı ile açık rızanız ya da kanunda öngörülen kişisel veri işleme şartları kapsamında toplanmaktadır.

Bu bilgiler, ticari ve idari faaliyetlerimizin, yasalar çerçevesinde sunulabilmesi ve bu kapsamda MOBAL A.Ş.’nin hizmetlerini yürütebilmesi, ticari hayatını sürdürebilmesi ve yasalardan doğan mesuliyetlerini eksiksiz ve doğru bir şekilde yerine getirebilmesi amaçlarıyla edinilir. 

İlgili Kişinin KVKK Kapsamındaki Hakları
MOBAL A.Ş. bünyesinde kişisel verisi işlenen gerçek kişiler KVKK’nın 11. maddesi uyarınca aşağıdaki haklara sahiptirler:

Kişisel verisinin işlenip işlenmediğini öğrenme,
Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,
Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,
Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı veya aktarılacağı üçüncü kişileri, alıcıları ve alıcı kategorilerini,
Kişisel verilerin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme ve bu kapsamda yapılan işlemlerin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,
KVKK ve ilgili diğer kanun hükümlerine uygun olarak işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması hâlinde kişisel verilerin silinmesini veya yok edilmesini isteme ya da söz konusu işleme faaliyetinin durdurulmasını ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,
İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme,
Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması hâlinde zararın giderilmesini talep etme.
İlgili kişiler bu haklara ilişkin taleplerini, şirketimizin MOBAL A.Ş.’nin, Organize Sanayi Bölgesi 6.Cadde No:35 38070 Melikgazi / Kayseri adresine noter yoluyla çekilecek ihtarname ile veya kimlik ibrazıyla şirketimize yapılacak şahsen başvurular ile iletebilirler. İlgili kişinin talepleri en kısa sürede ve nihayetinde en geç otuz (30) gün içerisinde ücretsiz olarak değerlendirilip karara bağlanır. Değerlendirme ve karar verme işleminin ayrıca bir maliyeti gerektirmesi durumunda Veri Sorumlusuna Başvuru Usul ve Esasları Hakkında Tebliğ’de belirlenmiş olan tarifedeki ücret esas alınır. İlgili kişiler, şirketimize başvuru yaptıktan sonra, söz konusu başvuruya ilişkin yanıttan memnun kalmazlarsa Kişisel Verileri Koruma Kurumu’na şikayet yoluna gidebilirler.</p>
                         </div>   
                    </div>          
                
            <div class="col-3">

            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class=" text-center text-lg-start bg-dark text-light">  
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 mt-3">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>MOBAL
          </h6>
          <p>
           <a href="hakkimizda.php" class="text-reset">Hakkımızda</a> 
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 mt-3">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Ürünler
          </h6>
          <p>
            <a href="oturmagrubu.php" class="text-reset">Oturma Grubu</a>
          </p>
          <p>
            <a href="yemekodasi.php" class="text-reset">Yemek Odası</a>
          </p>
          <p>
            <a href="yatakodasi.php" class="text-reset">Yatak Odası</a>
          </p>
          <p>
            <a href="gencvebebekodasi.php" class="text-reset">Genç ve  Bebek Odası</a>
          </p>
          <p>
            <a href="mutfakmasasandalye.php" class="text-reset">Mutfak Masa-Sandalye</a>
          </p>
          <p>
            <a href="aksesuar.php" class="text-reset">Aksesuar</a>
          </p>
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-3">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Müşteri Hizmetleri
          </h6>
          <p>
          <a href="iletisim.php" class="text-reset">İletişim</a> 
          </p>
          <p>
            <a href="sikcasorulansorular.php" class="text-reset">Sıkça Sorulan Sorular</a>
          </p>
          <p>
            <a href="kisiselverilerinkorunmasikanunu.php" class="text-reset">Kişisel Verilerin Korunması Kanunu</a>
          </p>
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->

  <!-- Copyright -->
  <div class="text-center p-4 bg-light text-dark">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="index.php">MOBAL.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>