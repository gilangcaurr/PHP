<?php 

function persegi(){
        echo "<h3>Menghitung Luas Persegi</h3>"; 
        $sisi = 5; 
        echo "Sisi : $sisi <br>"; 
        echo "Luasnya : ". $sisi * $sisi;
} function persegiPanjang(){
        echo "<h3>Menghitung Luas Persegi Panjang</h3>"; 
        $panjang = 5; 
        $lebar = 4; 
        echo "Panjang : $panjang <br>"; 
        echo "Lebar : $lebar <br>"; 
        echo "Luasnya : ". $panjang * $lebar;
} function segitiga(){
    echo "<h3>Menghitung Luas Segitiga</h3>"; 
    $alas = 10; 
    $tinggi = 5; 
    echo "Alas : $alas <br>"; 
    echo "Tinggi : $tinggi <br>"; 
    echo "Luasnya : ". $alas * $tinggi * 0.5;
} function lingkaran(){
    echo "<h3>Menghitung Luas Lingkaran</h3>"; 
    $jarijari = 5; 
    echo "Jari jari : $jarijari <br>"; 
    echo "Luasnya : ". $jarijari * $jarijari * 3.14;
} 

persegi(); 
persegiPanjang(); 
segitiga(); 
lingkaran(); 
    


?>