<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
  mysqli_query($con, "insert into pendidikan_informal set
  jenis_kursus = '$_POST[jenis_kursus]',
  tempat = '$_POST[tempat]',
  tahun = '$_POST[tahun]',
  keterangan = '$_POST[keterangan]'");
}
?>
<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
  mysqli_query($con, "insert into keluarga set
  nama_pasangan = '$_POST[nama_pasangan]',
  genderp = '$_POST[genderp]',
  ttlp = '$_POST[ttlp]',
  pendidikanp = '$_POST[pendidikanp]',
  pekerjaanp = '$_POST[pekerjaanp]',
  nama_anak1 = '$_POST[nama_anak1]',
  gender1 = '$_POST[gender1]',
  ttl1 = '$_POST[ttl1]',
  pendidikan1 = '$_POST[pendidikan1]',
  pekerjaan1 = '$_POST[pekerjaan1]',
  nama_anak2 = '$_POST[nama_anak2]',
  gender2 = '$_POST[gender2]',
  ttl2 = '$_POST[ttl2]',
  pendidikan2 = '$_POST[pendidikan2]',
  pekerjaan2 = '$_POST[pekerjaan2]'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Diri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-dark bg-dark">
            <p align="center" class="navbar-brand"><h3 >FORMULIR DATA PRIBADI</h3></p>
    </div><br>
              <h3>IV. Riwayat Pekerjaan</h3>
            </div>
            <div class="card-body">
                <form action="riwayat_pekerjaan.php" method="POST">
                <p><b><h5>1. Uraikan Dengan Singkat Pekerjaan Anda selama ini (dimulai dari posisi terakhir):</h5></p>
                    <div class="form-group row">
                      <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                      <div class="col-sm-5">
                        <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="bln" class="col-sm-3 col-form-label">Bln/Thn s/d Bln/Thn</label>
                        <div class="col-sm-5">
                          <input type="text" name="bln_thn" class="form-control" id="bln" placeholder="Bln/Thn s/d Bln/Thn">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="unit_kerja" class="col-sm-3 col-form-label">Unit Kerja</label>
                        <div class="col-sm-5">
                          <input type="text" name="unit_kerja" class="form-control" id="unit_kerja" placeholder="Unit Kerja">
                       </div>
                      <div class="form-group">
                      <p><b><h5>&nbsp; 2. Uraikan dengan Singkat pekerjaan Anda selama ini ( dilimulai dari posisi terakhir):</h5></p>
                       <textarea class="form-control" id="uraian_tugas" name="uraian_tugas" placeholder="Uraikan di sini" rows="5">&nbsp;</textarea>
                       </div>
                    </div>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                  </form>
                  </div>    
            </div>
            </div>
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
              </div>
          </div>
    </div>
</body>
</html>
