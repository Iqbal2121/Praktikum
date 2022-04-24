<?php
    require_once 'class_persegi.php';

    $persegi1= new persegi(40);
    $persegi2 = new persegi(25);
    
    echo "Sisi Persegi 1 = 40 <br> Sisi Persegi 2 = 25<br>";
    echo "<br>Luas Persegi 1 =".$persegi1->luas();
    echo "<br>Keliling Persegi 1 = ".$persegi1->keliling();
    echo "<br>Luas Persegi 2 = ".$persegi2->luas();
    echo "<br>Keliling PErsegi 2 =".$persegi2->keliling();
?>