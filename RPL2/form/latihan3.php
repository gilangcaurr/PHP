<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <h2>Daftar SMK</h2> 
        <!-- form --> 
            <form method ="POST" action= ""> 
                <table>
                    <tr> 
                        <td>Nama</td> 
                        <td>:</td> 
                        <td><input type='text' name='nama'></td> 
                    </tr>  
                    <tr> 
                        <td>Tanggal lahir</td> 
                        <td>:</td> 
                        <td><input type='date' name='tanggal_lahir'></td> 
                    </tr>  
                    <tr> 
                        <td>Jenis kelamin</td> 
                        <td>:</td> 
                        <td><input type='radio' name='jk' value="laki-laki">laki-laki</td> 
                        <td><input type='radio' name='jk' value="perempuan">perempuan</td> 
                    </tr>   
                    <td>
                        <label>Biaya Register</label>
                        <td>:</td> 
                        <td><input type='number' name='biaya'></td>
                    </td>
                    <tr> 
                        <td>Jurusan</td> 
                        <td>:</td> 
                        <td><select name="jurusan"> 
                            <option value=""></option>
                            <option value="RPL">RPL</option>
                            <option value="TBSM">TBSM</option>
                            <option value="TKRO">TKRO</option>
                    </tr>  
                    <tr> 
                        <td></td> 
                        <td></td> 
                        <td><input type="submit" name="simpan" value='KIRIM'></td> 
                    </tr>  
</table>
</form>
</body>  
</html>

<?php 
    if(isset($_POST['simpan'])) {
    $nama = $_POST['nama']; 
    $tanggal_lahir = $_POST['tanggal_lahir']; 
    $jk = $_POST['jk']; 
    $biaya = $_POST['biaya'];
    $jurusan = $_POST['jurusan'];


if($jurusan == "RPL") {
    $biayajurusan=2500000;
} else if ($jurusan == "TBSM") {
    $biayajurusan=3000000;
} else if($jurusan == "TKRO") {
    $biayajurusan=3500000;
} 

$total = $biaya + $biayajurusan; 

echo "========== STRUK REGISTER ==========<br>"; 
    echo "==================================<br>"; 
    echo "Nama  = $nama <br>";
    echo "Tanggal lahir  = $tanggal_lahir <br>";
    echo "Jenis kelamin  = $jk <br>"; 
    echo "Biaya  = $biaya <br>"; 
    echo "Jurusan  = $jurusan <br>"; 
    echo "Biaya jurusan = $biayajurusan <br>";
    echo "Total =$total <br>";
}
?>