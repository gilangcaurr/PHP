<?php 

class Bangundatar{ 

    public $nama = "Menghitung Luas Persegi"; 
    public $nama2 = "Menghitung Luas Persegi Panjang"; 
    public $nama3 = "Menghitung Luas Segitiga"; 
    public $nama4 = "Menghitung Luas Lingkaran"; 


    public function persegi(){
        echo "<h3>$this->nama</h3>"; 
        $sisi = 5; 
        echo "Sisi : $sisi <br>"; 
        echo "Luasnya : ". $sisi * $sisi;
} public function persegiPanjang(){
        echo "<h3>$this->nama2</h3>"; 
        $panjang = 5; 
        $lebar = 4; 
        echo "Panjang : $panjang <br>"; 
        echo "Lebar : $lebar <br>"; 
        echo "Luasnya : ". $panjang * $lebar;
} public function segitiga(){
    echo "<h3>$this->nama3</h3>"; 
    $alas = 10; 
    $tinggi = 5; 
    echo "Alas : $alas <br>"; 
    echo "Tinggi : $tinggi <br>"; 
    echo "Luasnya : ". $alas * $tinggi * 0.5;
} public function lingkaran(){
    echo "<h3>$this->nama4</h3>"; 
    $jarijari = 5; 
    echo "Jari jari : $jarijari <br>"; 
    echo "Luasnya : ". $jarijari * $jarijari * 3.14;
} 
} 

//buat object 
$cetak = new Bangundatar(); 

echo $cetak->persegi(); 
echo "<br>"; 
echo $cetak->persegiPanjang(); 
echo "<br>"; 
echo $cetak->segitiga(); 
echo "<br>"; 
echo $cetak->lingkaran();
?>