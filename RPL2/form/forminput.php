<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Form Biodata Diri</h2> 
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
                    <tr> 
                        <td>Alamat</td> 
                        <td>:</td> 
                        <td><textarea name="alamat" cols="" rows=""></textarea></td>
                    </tr> 
                    <tr> 
                        <td>Agama</td> 
                        <td>:</td> 
                        <td><select name="agama"> 
                            <option value=""></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                    </tr>  
                    <tr> 
                        <td>Pendidikan terakhir</td> 
                        <td>:</td> 
                        <td>
                        <select name="pendidikan">
                        <option value=""></option>
                            <option value="TK">TK</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option> 
                            <option value="SMK">SMK</option> 
                            <option value="S1">S1</option> 
                        </select> 
                        </td>
                    </tr>  
                    <tr> 
                        <td>Status</td> 
                        <td>:</td> 
                        <td><input type='text' name='status'></td> 
                    </tr>  
                    <tr> 
                        <td>Hobi</td> 
                        <td>:</td> 
                        <td><input type='text' name='hobi'></td> 
                    </tr>  
                    <tr> 
                        <td>Cita cita</td> 
                        <td>:</td> 
                        <td><input type='text' name='cita_cita'></td> 
                    </tr>  
                    <tr> 
                        <td></td> 
                        <td></td> 
                        <td><input type="submit" name="simpan" value='KIRIM'></td> 
                    </tr>  
                </table> 
            </form>  
    </center>   
</body>
</html> 


<?php 
echo "<center>";
if(isset($_POST['simpan'])){
    $nama = $_POST['nama']; 
    $tanggal_lahir = $_POST['tanggal_lahir']; 
    $jk = $_POST['jk']; 
    $alamat = $_POST['alamat']; 
    $agama = $_POST['agama']; 
    $pendidikan = $_POST['pendidikan'];    
    $status = $_POST['status']; 
    $hobi = $_POST['hobi']; 
    $cita_cita = $_POST['cita_cita'];   



    echo "========== Biodata Diri ==========<br>"; 
    echo "==================================<br>"; 
    echo "Nama  = $nama <br>";
    echo "Tanggal lahir  = $tanggal_lahir <br>";
    echo "Jenis kelamin  = $jk <br>";
    echo "Alamat  = $alamat <br>";
    echo "Agama  = $agama <br>";
    echo "Pendidikan terakhir  = $pendidikan <br>";
    echo "Status  = $status <br>";
    echo "Hobi  = $hobi <br>";
    echo "Cita cita  = $cita_cita <br>";

} 
echo "</center>";
?>