<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
  body {
    background: url('https://source.unsplash.com/random/1920x1080/?gunung-everest') no-repeat center center fixed;
    background-size: cover;
  }
</style>
    <title>Hello, world!</title> 
  </head>
  <body style="font-family:cursive;">
   <!-- NAVBAR --> 

   <!-- /NAVBAR --> 

   <!-- CONTENT -->  
   <center>  
    <img src="bandoeng.jpeg">
    <h3><br>Penggajihan</br><h3> 
      <h3>Guru/Karyawan Yayasan Assalaam</h3>
   <div class="card mt-5 ml-5 mr-5"  style="background-color: #a9a9a9; max-width: 50rem;">
    <div class="card-header text-left">
        Data Penggajihan
    </div>
    <div class="card-body text-left" style="background-color: #a9a9a9;">
        <form method="post" action="">
            <div class="form-group">
                <label for="exampleInputName1">No</label>
                <input type="name" class="form-control" name="no" id="exampleInputText" aria-describedby="emailHelp" placeholder="No">
                <small id="emailHelp" class="form-text text-muted"></small> 
            </div>
            <div class="form-group">
                <label for="exampleInputDate">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleInputText" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Unit Pendidikan</label>
                <select class="form-control" name="unit_pendidikan" id="exampleFormControlSelect1">
                    <option>Pilih Unit Pendidikan</option>
                    <option>TK</option> 
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                    <option>SMK</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputDate">Tanggal gaji</label>
                <input type="date" class="form-control" name="tanggal_gaji" id="exampleInputText" placeholder="Tanggal Gaji"> 
            </div>
            <div class="text-center">
              <div class="row">
                <div class="col">
                  <h3>
                    GAJI
                  </h3>
                </div>
                <div class="col">
                  <h3>
                    POTONGAN
                  </h3>
                </div>
              </div>
            </div> 
        <div class="row">
        <div class="col">
                <label for="exampleInputName1">Jabatan</label>
                <small id="emailHelp" class="form-text text-muted"></small>
            <select class="form-control" name="jabatan" id="exampleFormControlSelect1">
                    <option>Pilih Jabatan Anda</option>
                    <option>Kepsek</option> 
                    <option>Wakasek</option>
                    <option>Guru</option> 
                    <option>Karyawan</option>
            </select>
        </div>
        <div class="col">
                <label for="exampleInputDate">BPJS</label>
                <input type="text" class="form-control" name="bpjs" id="exampleInputText" placeholder="BPJS">
        </div>
        </div> 
        <div class="row">
        <div class="col">
                 <label for="exampleInputDate">Lama Kerja</label>
                 <input type="text" class="form-control" name="lama_kerja" id="exampleInputText" placeholder="Lama Kerja">
        </div>
        <div class="col">
                <label for="exampleInputDate">Pinjaman</label>
                <input type="text" class="form-control" name="pinjaman" id="exampleInputText" placeholder="Pinjaman">
        </div>
        </div> 
        <div class="row">
        <div class="col">
                <label for="exampleInputName1">Status Kerja</label>
                <small id="emailHelp" class="form-text text-muted"></small>
            <select class="form-control" name="status_kerja" id="exampleFormControlSelect1">
                    <option>Pilih Status Kerja Anda</option>
                    <option>Karyawan Tetap</option> 
                    <option>Karyawan Kontrak</option>
            </select>
        </div> 
        <div class="col">
                <label for="exampleInputDate">Tabungan</label>
                <input type="text" class="form-control" name="tabungan" id="exampleInputTex" placeholder="Tabungan">
        </div>   
      </div>  
        <div class="row">
          <div class="col">
          </div>
          <div class="col">
              <label for="exampleInputDate">Lainnya</label>
              <input type="text" class="form-control" name="lainnya" id="exampleInputText" placeholder="Lainnya">
          </div>
        </div>
        <center>
        <button type="submit" class="btn btn-success mt-3" name="daftar">Daftar</button>
        </center>
</form>
</div>
</div>
</center>
   <!-- /CONTENT --> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
</body>
</html> 

<?php 
if(isset($_POST['daftar'])){ 
    $no = $_POST['no']; 
    $nama = $_POST['nama'];
    $unit_pendidikan = $_POST['unit_pendidikan']; 
    $tanggal_gaji = $_POST['tanggal_gaji'];  
    $jabatan = $_POST['jabatan'];  
    $bpjs = $_POST['bpjs'];  
    $lama_kerja = $_POST['lama_kerja'];  
    $pinjaman = $_POST['pinjaman'];  
    $status_kerja = $_POST['status_kerja'];  
    $tabungan = $_POST['tabungan'];  
    $lainnya = $_POST['lainnya']; 
  
    
    class hasil{ 

      public function pendaftaran($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status_kerja2,$bonus2,$bpj2,$pinjaman2,$tabungan2,$lainnya2,$gaji_bersih2){
      }
  }
?> 
<?php 
// penjumlahan 
$bonus = 0;  
if($status_kerja == "Karyawan Tetap"){
 $bonus += 1000000; 
} else{
 $bonus += 0;
} 

$gaji = 0; 
if($jabatan == "Kepsek"){
 $gaji += 5000000;
} else if($jabatan == "Wakasek"){
 $gaji += 4000000;
} else if($jabatan == "Guru"){
 $gaji += 3000000;
} else{
 $gaji += 2000000;
} 
$gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya
// akhir penjumlahan

 ?>

  <br><center>
   <div class="card text-white bg-secondary mb-3" style="max-width: 35rem; margin-top: 20rem: margin-bottom: 20rem:">
  <div class="card-header"><h3>JARZZ STORE</h3></div>
  <div class="card-body">
    <h5 class="card-title">STRUK GAJI</h5>
    <table>
      <tr>
        <td>No</td> 
        <td>:</td> 
        <td><?php echo $no; ?></td>
      </tr> 
      <tr>
        <td>Nama</td> 
        <td>:</td> 
        <td><?php echo $nama; ?></td>
      </tr> 
      <tr>
        <td>Unit Pendidikan</td> 
        <td>:</td> 
        <td><?php echo $unit_pendidikan; ?></td>
      </tr> 
      <tr>
        <td>Tanggal Gaji</td>
        <td>:</td> 
        <td><?php echo $tanggal_gaji; ?></td>
      </tr> 
      <tr>
        <td>Jabatan</td>
        <td>:</td> 
        <td><?php echo $jabatan; ?></td>
      </tr> 
      <tr>
        <td>Gaji</td>
        <td>:</td> 
        <td><?php echo $gaji; ?></td>
      </tr> 
      <tr>
        <td>Lama Kerja</td>
        <td>:</td> 
        <td><?php echo $lama_kerja; ?></td>
      </tr> 
      <tr>
        <td>Status Kerja</td>
        <td>:</td> 
        <td><?php echo $status_kerja; ?></td>
      </tr> 
      <tr>
        <td>Bonus</td>
        <td>:</td> 
        <td><?php echo $bonus; ?></td>
      </tr> 
      <tr>
        <td>BPJS</td>
        <td>:</td> 
        <td><?php echo $bpjs; ?></td>
      </tr> 
      <tr>
        <td>Pinjaman</td>
        <td>:</td> 
        <td><?php echo $pinjaman; ?></td>
      </tr> 
      <tr>
        <td>Tabungan</td>
        <td>:</td> 
        <td><?php echo $tabungan; ?></td>
      </tr>  
      <tr>
        <td>Lainnya</td>
        <td>:</td> 
        <td><?php echo $lainnya; ?></td>
      </tr>  
      <tr>
        <td>Gaji Bersih</td>
        <td>:</td> 
        <td><?php echo $gaji_bersih; ?></td>
      </tr>  

    </table>
  </div>
</div>
</center>
</br>
<?php



$cetak = new hasil(); 

echo $cetak->pendaftaran($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$gaji_bersih);

} 
