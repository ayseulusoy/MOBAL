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
 
                        echo '<a class="navbar-brand bg-light text-dark rounded" href="logout.php">Çıkış Yap</a>';
                        
                    } 
                ?>
    </form>
    <img src="resimler\user.png" class="nav img-thumbnail" alt="sepet" >

    
</div>
  </div>
</nav>


<div  class="container-xxl text-center bg-transparent text-dark w-100 p-5" style="margin-bottom:0"> 
<p class="text-center">
<h1> M O B A L </h1>
  <p>Evinizin Modası!</p> 
 </p>
</div> 

<div class="container">
<h1 class="text-center rounded"> Admin Paneli </h1>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header " id="flush-headingOne">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Siparişler
      </button>
      <form action="kargoyaVer.php" method="post">
        <button type="submit" class="btn btn-primary" name="kargoyaVer" id="kargoyaVer">
          Kargoya ver
        </button>
        </form>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
    <div class="container">
          <?php 
          $conn = mysqli_connect("localhost", "root", "", "mobal");
          if($conn){
              $sql = "select * from siparis";
              $result = $conn->query($sql);
              if(mysqli_num_rows($result)>0){
                $i = 1;
                echo '<div class="row row-cols-1 row-cols-md-3 g-4 mt-1">';
                while($row=mysqli_fetch_assoc($result)){
                  if($row['KargoDurumu'] == "Kargoya verilmedi."){
                    echo '<div class="col mb-4">';
                        echo '<div class="card h-100 border-primary">';
                            echo '<div class="card-body">';
                                echo '<div class="list-group">';
                                    echo '<button type="button" class="list-group-item list-group-item-action active" aria-current="true">';
                                    echo 'Sipariş '.$i;
                                    echo '</button>';
                                    echo '<button type="button" class="list-group-item list-group-item-action">'.$row['Email'].'</button>';
                                    echo '<button type="button" class="list-group-item list-group-item-action">'.$row['Urunler'].'</button>';
                                    echo '<button type="button" class="list-group-item list-group-item-action">'.$row['ToplamFiyat'].'</button>';
                                    echo '<button type="button" class="list-group-item list-group-item-action">'.$row['Adres'].'</button>';
                                    echo '<button type="button" class="list-group-item list-group-item-action list-group-item-danger">'.$row['KargoDurumu'].'</button>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                  }
                  $i++;
                }
                echo '</div>';
              }
          }
          else {
              echo "Connection Failed.";
          }
          ?>
        </div>
    </div>
  </div>


<!-- Footer -->
<footer class=" text-center text-lg-start bg-dark text-light">  
  <!-- Copyright -->
  <div class="text-center p-4 bg-light text-dark">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="admin.php">MOBAL.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>
