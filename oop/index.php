<?php 
    include "Mobil.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Mobil Ku </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
    <h1> Profile Mobil Ku </h1>
    <hr> 
    <?php 

        $arr = array(
            array("merk"=>"Honda","warna"=>"Hitam","km"=>50,"jam"=>2),
            array("merk"=>"Audi","warna"=>"Silver","km"=>200,"jam"=>4),
        )
    ?>
    
    <?php
     $objMobil = new Mobil();// $objMobil adalah object dari class Mobil
    foreach($arr as $row){
       
        
        $merk = $objMobil->setMerk($row["merk"]);
        $kecepatan = $objMobil->jalan($row["km"],$row["jam"]);
        $warna = $objMobil->setWarna($row["warna"]);
    ?>
    <div style='font-size:16px'>
        <div> Merk : <?php echo $merk ?></div> 
        <div> Warna : <?php echo $warna ?></div>
        <div> Kecepatan : <?php echo $kecepatan ?></div> 
    </div>
    <br>
    <?php
    } //end for


    echo Mobil::ini_static();
    ?>


</body>
</html>