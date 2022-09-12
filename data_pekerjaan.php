<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
  mysqli_query($con, "insert into data_pekerjaan set
  nama = '$_POST[nama]',
  bagian = '$_POST[bagian]',
  peran = '$_POST[peran]',
  struktur = '$_POST[struktur]',
  tanggung_jawab = '$_POST[tanggung_jawab]',
  uraian_aktivitas = '$_POST[uraian_aktivitas]'");
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
        <div class="container">
        <div class="card mt-3">
            <div class="card-header">
              <h3>VI. KONDISI KERJA</h3>
            </div>
            <div class="card-body">
                <form action="kondisi_kerja.php" method="POST">
                <p><b><h5>1. Bagaimanakah kondisi kerja Anda (tempat, suasana, tugas) saat ini? </h5></p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="kondisi" id="baik" value="baik">
                  <label class="form-check-label" for="baik">Baik</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="kondisi" id="cukup baik" value="cukup baik">
                  <label class="form-check-label" for="cukup_baik">Cukup Baik</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="kondisi" id="perlu perbaikan" value="perlu perbaikan">
                  <label class="form-check-label" for="perlu_perbaikan">Perlu Perbaikan</label>
                </div>
                    <div class="form-group"><div>
                      <p><b><h5>&nbsp; Ceritakan kondisi yang Anda maksud dan usulan perbaikan yang perlu dilakukan:</h5></p>
                       <textarea class="form-control" id="usulan" name="usulan" placeholder="Uraikan di sini" rows="5">&nbsp;</textarea>
                    </div>
                    <div class="form-group"><div>
                      <p><b><h5>&nbsp; 2. Ada beberapa aspek/situasi/kondisi yang membuat Anda dapat optimal dalam bekerja. Jelaskan aspek apa saja yang
                        dapat mendukung optimalisasi Anda dalam bekerja?
                      </h5></p>
                       <textarea class="form-control" id="uraian" name="aspek" placeholder="Uraikan di sini" rows="5">&nbsp;</textarea>
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
