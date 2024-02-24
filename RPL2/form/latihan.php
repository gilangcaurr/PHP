<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <h2>Form Pendaftaran</h2> 
<form action="proses-latihan.php" method="POST">
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis" value="Pria"> Pria <br>
        <input type="radio" name="jenis" value="Wanita"> Wanita
    </div>
    <div>
         <label>Tanggal lahir</label> <br>
         <input type="date" name="tanggal">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Kategori olahraga</label> <br>
        <input type="radio" name="kategori" value="sepakbola"> Sepakbola <br>
        <input type="radio" name="kategori" value="bulutangkis"> Bulutangkis <br>
        <input type="radio" name="kategori" value="renang"> Renang<br>
    </div>
    <div>
    <div style="margin-bottom: 1rem;">
        <label>Pilihan kelas</label> <br>
        <input type="checkbox" name="kelas" value="pemula"> Pemula <br>
        <input type="checkbox" name="kelas" value="menengah"> Menengah<br> 
        <input type="checkbox" name="kelas" value="lanjutan"> Lanjutan<br> 
    </div>
    <div>
    <div style="margin-bottom: 1rem;">
        <label>Kemampuan fisik</label> <br>
        <textarea name="kemampuan" cols="30" rows="4"></textarea>
    </div>
        <div style="margin-bottom: 1rem;"> 
        <label>Metode Pembayaran</label> <br> 
        <select name="metode"> 
            <option value="Transfer Bank">Transfer Bank</option> 
            <option value="Kartu Kredit">Kartu Kredit</option> 
        </select>
    </div>
    <div>
        <button>Submit</button>
    </div> 
</form>
</body>
</html>