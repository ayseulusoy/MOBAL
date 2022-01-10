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

<div class="container">
<h1 class="text-center rounded"> M O B A L </h1>
<h3 class="text-center">Sıkça Sorulan Sorular</h3>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header " id="flush-headingOne">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Nasıl üye olabilirim?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">MOBAL.com’dan “ÜYE OL” linkine tıklayarak,üyelik formunu doldurup hemen üye olabilir ve alışverişe başlayabilirsiniz. Sitemize üye olmak için herhangi bir ücret ödemeniz gerekmemektedir.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header " id="flush-heading2">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
      Üye olmadan da alışveriş yapabilir miyim?
      </button>
    </h2>
    <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">MOBAL.com’da üye olmadan da alışveriş yapamazsınız.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header " id="flush-heading3">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
      Şifremi unuttum ne yapmalıyım?
      </button>
    </h2>
    <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Şifrenizi unuttuysanız, üye girişi bölümünde bulunan ‘ŞİFREMİ UNUTTUM’ linkine tıklayıp, gelen sayfadaki kutuya üye olurken belirttiğiniz e-posta adresinizi yazmanız yeterli olacaktır. Şifrenizi değiştirebilmeniz içim mail adresinize bir link gönderilecektir. Linke tıklayarak yeni bir şifre belirleyebilirsiniz. </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header " id="flush-heading4">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
      Kişisel verilerim korunuyor mu?
      </button>
    </h2>
    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">MOBAL sitesine  üye olurken ve alışveriş yaparken sağladığınız kişisel verileriniz 6698 sayılı Kişisel Verilerin Korunması Kanunu (“KVKK”) uyarınca işleme amacı ile bağlantılı, sınırlı ve ölçülü olacak şekilde, işlenmelerini gerektiren amaç çerçevesinde kaydedilir, depolanır, muhafaza edilir, yeniden düzenlenir, hukuken bu kişisel verileri talep etmeye yetkili olan kurumlar ile paylaşılır, KVKK’nın ve diğer kanunların öngördüğü koşullarda üçüncü kişilere aktarılabilir, devredilebilir ve KVKK’da sayılan diğer şekillerde işlenebilir.</div>
      </div>
    </div>

  <div class="accordion-item">
    <h2 class="accordion-header " id="flush-heading5">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
      Siparişimde değişiklik yapabilir miyim?
      </button>
    </h2>
    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Siparişinizin içerisinde değişiklik yapılamamaktadır. Siparişinizde değişiklik yapmak isterseniz eğer siparişiniz kargoya verilmediyse eski siparişinizin ödemesi iade edilir. Daha sonra tekrar yeni bir sipariş oluşturmanız gerekmektedir. Eğer siparişiniz kargoya teslim edildiyse ürünleri tarafımıza değişim talebiyle göndermeniz gerekmektedir.</div>
      </div>
    </div>

  <div class="accordion-item">
    <h2 class="accordion-header " id="flush-heading6">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
      Alışverişlerimde hangi ödeme seçeneklerini kullanabilirim?
      </button>
    </h2>
    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Siparişlerinizin ödemesini, Kredi Kartı, Kapıda Ödeme, Banka Kartı, Havale/EFT ve BKM yöntemi ile gerçekleştirebilirsiniz.</div>
      </div>
    </div>

  <div class="accordion-item">
    <h2 class="accordion-header " id="flush-heading7">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
      Hangi kargo firması ile çalışıyorsunuz?
      </button>
    </h2>
    <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Ürünlerimizi Aras Kargo, PTT Kargo ve HepsiJet Kargo ile teslim ediyoruz. Aynı şekilde iadelerinizi de Aras Kargo, PTT Kargo ve HepsiJet Kargo ile bize ücretsiz olarak gönderebilirsiniz.</div>
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