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

<div class="container-xxl">
    <div class="container">
        <h1 class="text-center rounded"> M O B A L </h1>
        <h3 class="text-center">Hesabım</h3>
    </div>  
</div>

<div class="accordion accordion-flush " id="accordionFlushExample">
  
    <div class="accordion-item">
        <h2 class="accordion-header " id="flush-headingOne">
        <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Hesap Bilgileri
        </button>
        </h2>
        <?php include "hesapbilgileri.php" ?>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card-body bg-dark">
                            <div class="form-group">
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="adi" placeholder="Ad" name="adi"  value="<?php echo $adi;?>" READONLY>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="soyadi" placeholder="Soyad" name="soyadi" value="<?php echo $soyadi;?>" READONLY>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $email; ?>" READONLY>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-5">          
                                    <input type="password" class="form-control" id="pwd" placeholder="Şifre" name="pwd" value="<?php echo $pwd; ?>" READONLY>
                                </div>
                            </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header " id="flush-headingTwo">
        <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Sepetim
        </button>
        </h2>

        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="card-body bg-dark">
                            <form action="sepetim.php" method="get">
                                <?php 
                                include "C:\\xampp\\htdocs\\MOBAL\\sepetim.php";
                                ?>
                            </form>
                            <form action="sepetitemizle.php" method="post">
                            <button class="btn btn-outline-light float-right ml-2" name="sepettenCikar" id="sepettenCikar">Sepeti Temizle</button>
                            </form>
                          
                            <button class="btn btn-outline-light float-right" data-bs-toggle="modal" data-bs-target="#siparisModal">Sipariş Ver</button>
                            
                                <div class="modal fade" id="siparisModal" tabindex="-1" role="dialog" aria-labelledby="siparisModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                        <h5 class="modal-title" id="siparisModalLabel">Sipariş Ver</h5>
                                        <button type="button" class="close bg-danger" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>

                                        <div class="modal-body">
                                        <form action="siparisver.php" method="POST">

                                            <div class="form-group">
                                            <label for="toplamFiyat" class="col-form-label">Toplam Fiyat: </label>
                                            <?php
                                                include "C:\\xampp\\htdocs\\MOBAL\\toplamfiyat.php";
                                            ?>
                                            <input type="text" class="form-control bg-transparent" id="toplamFiyat" name="toplamFiyat" value="<?php echo $toplamFiyat; ?> ,00 TL" READONLY>
                                            </div>

                                            <div class="form-group">
                                            <label for="adres" class="col-form-label">Adres: </label>
                                            <textarea class="form-control" id="adres" name="adres" rows="5"></textarea>
                                            </div>

                                            <div class="form-group">
                                            <div class="container border border-primary mb-2">
                                                <label for="hesapNumara" class="col-form-label">Hesap Numarası: </label>
                                                <input type="text" class="form-control mb-2" id="hesapNumara" name="hesapNumara" maxlength="16">
                                                <label for="sonKullanmaTarihi" class="col-form-label">Son Kullanma Tarihi: </label>
                                                <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control w-100" id="sonKullanmaTarihi" name="sonKullanmaTarihiAy" maxlength="2" placeholder="Ay">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control w-100" id="sonKullanmaTarihi" name="sonKullanmaTarihiYil" maxlength="2" placeholder="Yıl">
                                                </div>
                                                </div>
                                                <label for="cvc2" class="col-form-label">CVC2: </label>
                                                <input type="text" class="form-control mb-2" maxlength="3" id="cvc2" name="cvc2">
                                            </div>
                                            </div>
                                            <hr class="my-5">
                                            <div class="form-group">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                                            <button type="submit" class="btn btn-dark" id="siparisVer" name="siparisVer">Sipariş Ver</button>
                                            </div>
                                        </form>
                                        </div>
                                            
                                    </div>    
                                    </div>
                                </div>
                            <br></br>
                            

            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header " id="flush-headingFour">
        <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        Siparişlerim
        </button>
        </h2>

        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div class="card-body bg-dark">
                            <form action="sepetim.php" method="get">
                                <?php 
                                include "C:\\xampp\\htdocs\\MOBAL\\siparislerim.php";
                                ?>
                            </form>
                            <br></br>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header " id="flush-headingThree">
        <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Şifremi Değiştir
        </button>
        </h2>
        <?php include "sifredegistir.php" ?>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="card-body bg-dark">
                            <form  method="post" action="<?php $_PHP_SELF?>" onSubmit="return validatePassword()">
                                <div class="form-group">
                                    <div class="col-sm-10">          
                                        <input type="password" class="form-control" id="pwd1" placeholder="Mevcut Şifre" name="pwd1">
                                        <span id="pwd1" class="required"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">          
                                        <input type="password" class="form-control" id="pwd2" placeholder="Yeni Şifre" name="pwd2">
                                        <span id="pwd2" class="required"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">          
                                        <input type="password" class="form-control" id="pwd2_tekrar" placeholder="Yeni Şifre Tekrarı" name="pwd2_tekrar">
                                        <span id="pwd2_tekrar" class="required"></span>
                                    </div>
                                </div>
                                <br></br>
                                <div class="form-group">        
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-outline-light" name="submit">Onayla</button>
                                </div>
                            </form>
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
