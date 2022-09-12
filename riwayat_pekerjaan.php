<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
  mysqli_query($con, "insert into riwayat_pekerjaan set
  jabatan = '$_POST[jabatan]',
  bln_thn = '$_POST[bln_thn]',
  unit_kerja = '$_POST[unit_kerja]',
  uraian_tugas = '$_POST[uraian_tugas]'");
}
?>
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
        <div class="container">
        <div class="card mt-3">
            <div class="card-header">
              <h3>V. Data Pekerjaan</h3>
            </div>
            <div class="card-body">
                <form action="data_pekerjaan.php" method="POST">
                <p><b><h5>1. Berapa Orang bawahan langsung Anda di jabatan sekarang? Di bagian apa dan sebagai apa mereka bekerja?.....Orang.</h5></p>
                    <div class="form-group row">
                      <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                      <div class="col-sm-5">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="bagian" class="col-sm-3 col-form-label">Bagian</label>
                        <div class="col-sm-5">
                          <input type="text" name="bagian" class="form-control" id="bagian" placeholder="bagian">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="peran" class="col-sm-3 col-form-label">Peran / Jabatan</label>
                        <div class="col-sm-5">
                          <input type="text" name="peran" class="form-control" id="peran" placeholder="Peran/ Jabatan">
                       </div>
                       </div><br>
                      <div class="form-group"><div>
                      <p><b><h5>&nbsp; 2. Untuk memperoleh gambaran lebih jelas mengenai posisi jabatan Anda di dalam struktur organisasi, tolong Anda gambarkan di bawah
                      ini struktur organisasi tempat Anda bekerja, dan dimana posisi jabatan Anda.</h5></p>
                       <textarea class="form-control" id="uraian" name="struktur" placeholder="Uraikan di sini" rows="5">&nbsp;</textarea>
                    </div>
                    <div class="form-group"><div>
                      <p><b><h5>&nbsp; 3. Apa saja tanggung jawab pekerjaan/jabatan Anda saat ini?</h5></p>
                       <textarea class="form-control" id="uraian" name="tanggung_jawab" placeholder="Uraikan di sini" rows="5">&nbsp;</textarea>
                    </div>
                    </div>
                    <div class="form-group"><div>
                      <p><b><h5>&nbsp; 4. Uraikan secara terperinci apa saja yang Anda lakukan selama ini dalam rangka menunaikan tiap-tiap tanggung jawab di atas.</h5></p>
                       <textarea class="form-control" id="uraian" name="uraian_aktivitas" placeholder="Uraikan di sini" rows="5">&nbsp;</textarea>
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
