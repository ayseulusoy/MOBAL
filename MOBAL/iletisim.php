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
                            <h2>İletişim</h2>
                            <p>Bize <a href="mailto:MOBAL@example.com">M O B A L</a> 'dan ulaşabilirsiniz.</p>
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