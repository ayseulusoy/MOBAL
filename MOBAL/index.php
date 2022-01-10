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


<div  class="container-xxl text-center bg-transparent text-dark w-100 p-5" style="margin-bottom:0">  

<p class="text-center">
<h1> <a class="nav-link text-dark" href="index.php">M O B A L </h1>
  <p>Evinizin Modası!</p> 
 </p>

</div> 


<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand text-light" aria-current="page" href="index.php">Anasayfa</a>
  <a class="nav-link text-light" href="oturmagrubu.php">Oturma Grubu</a>
  <a class="nav-link text-light" href="yemekodasi.php">Yemek Odası</a>
  <a class="nav-link text-light" href="yatakodasi.php">Yatak Odası</a>
  <a class="nav-link text-light" href="gencvebebekodasi.php">Genç ve Bebek Odası</a>
  <a class="nav-link text-light" href="mutfakmasasandalye.php">Mutfak Masa-Sandalye</a>
  <a class="nav-link text-light" href="aksesuar.php">Aksesuar</a>
  
  
  <script>
  function showResult(str) {
    if (str.length==0) {
      document.getElementById("livesearch").innerHTML="";
      document.getElementById("livesearch").style.border="0px";
      return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("livesearch").innerHTML=this.responseText;
        document.getElementById("livesearch").style.border="1px solid #A5ACB2";
      }
    }
    xmlhttp.open("GET","livesearch.php?q="+str,true);
    xmlhttp.send();
  }
  </script>                  
  <form class="d-flex">
        <input class="form-control me-2 bg-light text-dark " type="text" placeholder="Ara" onkeyup="showResult(this.value)">      
  </form>
  
  </div>
</nav>
<div  class="bg-dark text-light end"id="livesearch"></div>

<div id="carouselExampleDark" class="carousel carousel-dark slide mt-3" data-bs-ride="carousel">
  
  <div class="carousel-inner ">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="resimler\mutfak1_urun.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><a class="nav-link bg-transparent text-light"href="urun/mutfak1.php">Forest Banklı Mutfak Masa Seti</a></h5>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="resimler\yemekodasi1_urun.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><a class="nav-link bg-transparent text-light"href="urun/yemekodasi1.php">Karat Yemek Odası Takımı</a></h5>
      </div>
    </div>
    <div class="carousel-item">
    <img src="resimler\yatakodasi1_urun.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><a class="nav-link bg-transparent text-light"href="urun/yatakodasi1.php">Gusto Yatak Odası Takımı</a></h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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
