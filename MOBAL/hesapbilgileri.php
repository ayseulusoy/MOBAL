<?php

$connection=mysqli_connect("localhost","root","","mobal");

            if(!$connection){
				echo "Connection Failed...";
			}
			$search = $_SESSION["email"];
            $sql = "select * from uye where email like '%$search%'";
            //$result = $connection->query($sql);
			$result=mysqli_query($connection,$sql);
            /*if ($result->num_rows > 0) 
                    $row = $result->fetch_assoc()*/
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					$adi = $row['ad'];
                    $soyadi= $row['soyad'];
					$email = $row['email'];
					$pwd =$row['sifre'];
				}
			}
			
			
?>