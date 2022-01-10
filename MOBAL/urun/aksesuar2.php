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


<style>
.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 40px;
  height: 40px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 450px;
  height: 250px;
}
</style>
<script>
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>

</head>


<body>

<nav class="navbar sticky-top navbar-dark bg-dark">
<div class="container-fluid">
  <div class="nav">  
   <a class="navbar-brand bg-light text-dark rounded" href="../index.php">M O B A L</a>
  </div>
    <div class="nav justify-content-end">
    <form method="post" class="mt-2">
                <?php
                    if(isset($_SESSION['email'])){
                        
                        echo '<a class="navbar-brand bg-light text-dark rounded " href="../hesabim.php">Hesabım</a>';
                        
                        echo '<a class="navbar-brand bg-light text-dark rounded" href="../logout.php">Çıkış Yap</a>';
                        
                    } else {
                        
                        echo '<a class="navbar-brand bg-light text-dark rounded " href="../kayitol.php">Kayıt Ol</a>';
                        
                        echo '<a class="navbar-brand bg-light text-dark rounded " href="../girisyap.php">Giriş Yap</a>';
                        
                    }
                ?>
    </form>
    <img src="../resimler/user.png" class="nav img-thumbnail" alt="sepet" >

    
</div>
  </div>
</nav>


<div  class="container-xxl text-center bg-transparent text-dark w-100 p-5" style="margin-bottom:0">  

<p class="text-center">
<h1> <a class="nav-link text-dark" href="../index.php">M O B A L </h1>
  <p>Evinizin Modası!</p> 
 </p>

</div> 


<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand text-light" aria-current="page" href="../index.php">Anasayfa</a>
  <a class="nav-link text-light" href="../oturmagrubu.php">Oturma Grubu</a>
  <a class="nav-link text-light" href="../yemekodasi.php">Yemek Odası</a>
  <a class="nav-link text-light" href="../yatakodasi.php">Yatak Odası</a>
  <a class="nav-link text-light" href="../gencvebebekodasi.php">Genç ve Bebek Odası</a>
  <a class="nav-link text-light" href="../mutfakmasasandalye.php">Mutfak Masa-Sandalye</a>
  <a class="nav-link text-light" href="../aksesuar.php">Aksesuar</a>
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
    xmlhttp.open("GET","../livesearchurun.php?q="+str,true);
    xmlhttp.send();
  }
  </script>                  
  <form class="d-flex">
        <input class="form-control me-2 bg-light text-dark " type="text" placeholder="Ara" onkeyup="showResult(this.value)">      
  </form>
  
  </div>
</nav>
<div  class="bg-dark text-light end"id="livesearch"></div>



<div class="container-xxl mt-3">
<div class="row row-cols-2">
    <div class="col">
    <form method="POST" action="../sepeteekle.php">
    <h1 ><input type="text" class="bg-light text-dark" style="border:none transparent;outline:none;text-align:left;font-weight:500;" id="urunAdi" name="urunAdi" value="Elizya Portmanto" readonly></h1>
        <div class="img-zoom-container">
        <img id="myimage" src="../resimler/aksesuar2_urun.jpg" width="450" height="250">
        <br></br>
        <div id="myresult" class="img-zoom-result"></div>
        </div>
    </div>
    <div class="col bg-light text-dark rounder">
        <p>
        Genel Bilgiler;<br>
        -İnsan sağlığına dost, kanserojen madde içermeyen E1 standartlarında malzemeler kullanılmaktadır. Bu malzemeler kullanım açısından çizilme, sürtünme ve yanmaya dayanıklı olup, kolay temizlenme özelliğine sahiptir.
        </p>
        <h2 class="float-right text-dark"><input type="text" class="bg-light text-dark mb-5" style="border:none transparent;outline:none;text-align:right;font-weight:500;" id="urunFiyat" name="urunFiyati" value="3.545,00" readonly> ₺</h2>
        <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="number" min="1" placeholder="Adet" id="urunAdet" name="urunAdet" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-dark " name="sepeteEkle" id="sepeteEkle">Sepete Ekle</button>
                            </div>
                        </div>

        </div>
    </form>
    </div>
</div>    
</div>
<div class="container-xxl">
<table class="table table-bordered border-dark mt-3 bg-light ">
  <thead>
    <tr>
      <th scope="col">Portmanto</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Derinlik:	50.00 cm</td>
      
      
      
    </tr>
    <tr>
      <td>Genişlik:	132.00 cm</td>
      
      
    </tr>
    <tr>
      <td>Yükseklik: 206.00 cm</td>
      
    </tr>
  </tbody>
</table>
</div>


<script>
// Initiate zoom effect:
imageZoom("myimage", "myresult");
</script>


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
           <a href="../hakkimizda.php" class="text-reset">Hakkımızda</a> 
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
            <a href="../oturmagrubu.php" class="text-reset">Oturma Grubu</a>
          </p>
          <p>
            <a href="../yemekodasi.php" class="text-reset">Yemek Odası</a>
          </p>
          <p>
            <a href="../yatakodasi.php" class="text-reset">Yatak Odası</a>
          </p>
          <p>
            <a href="../gencvebebekodasi.php" class="text-reset">Genç ve  Bebek Odası</a>
          </p>
          <p>
            <a href="../mutfakmasasandalye.php" class="text-reset">Mutfak Masa-Sandalye</a>
          </p>
          <p>
            <a href="../aksesuar.php" class="text-reset">Aksesuar</a>
          </p>
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-3">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Müşteri Hizmetleri
          </h6>
          <p>
          <a href="../iletisim.php" class="text-reset">İletişim</a> 
          </p>
          <p>
            <a href="../sikcasorulansorular.php" class="text-reset">Sıkça Sorulan Sorular</a>
          </p>
          <p>
            <a href="../kisiselverilerinkorunmasikanunu.php" class="text-reset">Kişisel Verilerin Korunması Kanunu</a>
          </p>
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->

  <!-- Copyright -->
  <div class="text-center p-4 bg-light text-dark">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="../index.php">MOBAL.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>
