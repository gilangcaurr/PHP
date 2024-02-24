<?php 
$nama = @$_REQUEST['nama']; 
$jenis = @$_REQUEST['jenis']; 
$tanggal = @$_REQUEST['tanggal']; 
$kategori = @$_REQUEST['kategori']; 
$kelas = @$_REQUEST['kelas']; 
$kemampuan = @$_REQUEST['kemampuan']; 
$metode = @$_REQUEST['metode']; 
$diskon = 0; 

if ($kategori == "sepakbola") {
    if ($kelas == "pemula") {
        $harga = 200000; 
    } 
    else if ($kelas == "menengah") {
        $harga = 250000; 
    } 
    else if ($kelas == "lanjutan") {
        $harga = 300000;
    } 
    
} 
else if ($kategori == "bulutangkis") {
    if ($kelas == "pemula") {
        $harga = 150000;
       if ($jenis == "Wanita") {
        $diskon = $harga * 0.1; 
    }
} 
else if ($kelas == "menengah") { 
    $harga = 200000; 
    if ($jenis == "Wanita") {
        $diskon = $harga * 0.1;
    } 
} 
else if ($kelas == "lanjutan") {
    $harga = 250000; 
    if ($jenis == "Wanita") {
        $diskon = $harga * 0.1;
    }
} 
}
else if ($kategori = "renang") {
    if ($kelas == "pemula") {
        $harga = 180000;
    }
    else if ($kelas == "menengah") {
        $harga = 220000;
    }
    else if ($kelas == "lanjutan") {
        $harga = 270000;
    }
} 

$total = $harga - $diskon;

if ($total > 500000) {
    $keputusan = "Selamat Anda Mendapatkan Merchandise Gratisss";
} else {
    $keputusan = "Sayang Sekali Anda Tidak Mendapatkan Diskon";
} 


echo "Nama : $nama<br>"; 
echo "Jenis kelamin : $jenis<br>"; 
echo "Tanggal lahir : $tanggal<br>"; 
echo "Kategori : $kategori<br>"; 
echo "Kelas : $kelas<br>"; 
echo "Kemampuan fisik : $kemampuan<br>"; 
echo "Metode pembayaran : $metode<br>"; 
echo "Harga : Rp. $harga<br>"; 
echo "Diskon : Rp. $diskon<br>"; 
echo "Total harga : $total<br>"; 
echo $keputusan;
?>



