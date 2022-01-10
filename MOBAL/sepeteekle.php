<?php
session_start();
$geldigi_sayfa = $_SERVER['HTTP_REFERER'];
if(isset($_SESSION['email'])){
    $conn = mysqli_connect('localhost', 'root', '','mobal');
    if($conn){
        if(isset($_POST['sepeteEkle'])){
            $email = $_SESSION['email'];
            $urunAdi = $_POST['urunAdi'];
            $urunFiyati = $_POST['urunFiyati'];
            $urunAdedi = $_POST['urunAdet'];
            $sql1 = "select * from sepet where Email='$email' and UrunAdi='$urunAdi'";
            $result=$conn->query($sql1);

            if($result->num_rows > 0 ){
                $sql2 = "INSERT INTO sepet VALUES('$email','$urunAdi', '$urunFiyati', '$urunAdedi')";
                $done=$conn->query($sql2);
                //echo "<script>window.open('hesabim.php','_self')</script>";
                header("Refresh: 0; url=".$geldigi_sayfa."");
                
                
            }else {
                
                $sql2 = "INSERT INTO sepet VALUES('$email','$urunAdi', '$urunFiyati', '$urunAdedi')";
                $done=$conn->query($sql2);
                //echo "<script>window.open('hesabim.php','_self')</script>";
                header("Refresh: 0; url=".$geldigi_sayfa."");
            }
        }
    }
    else {
        echo "Connection Failed";
    }
}
else {
    echo "<script>window.open('girisyap.php','_self')</script>";
}

?>