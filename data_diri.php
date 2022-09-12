<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
  mysqli_query($con, "insert into data_diri set
  nama_lengkap = '$_POST[nama_lengkap]',
  tempat_tanggallhr = '$_POST[tempat_tanggallhr]',
  gender = '$_POST[gender]',
  alamat = '$_POST[alamat]',
  no_hp = '$_POST[no_hp]',
  email = '$_POST[email]',
  agama = '$_POST[agama]',
  statusp = '$_POST[statusp]',
  nip = '$_POST[nip]',
  jabatans = '$_POST[jabatans]',
  golongan = '$_POST[golongan]',
  namaatasan = '$_POST[namaatasan]',
  jabatanatasan = '$_POST[jabatanatasan]'");


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
                    <h3>II. LINGKUNGAN KELUARGA</h3>
                </div>
                <div class="card-body">
                    <form action="keluarga.php" method="POST">
                        <div class="form-group">
                            <label for="inputAddress">Nama (Pasangan)</label>
                            <input type="text" name="nama_pasangan" class="form-control" id="namap" placeholder="Nama Pasangan Anda">
                          </div>
                          <div class="form-group">
                            <label for="genderp">L/P</label>
                            <input type="text" name="genderp" class="form-control" id="gender" placeholder="L/P">
                          </div>
                          <div class="form-group">
                            <label for="ttlp">Tempat/Tgl Lahir</label>
                            <input type="text" name="ttlp" class="form-control" id="ttl" placeholder="Tempat/Tgl Lahir Pasangan Anda">
                          </div>
                          <div class="form-group">
                            <label for="pendidikanp">Pendidikan</label>
                            <input type="text" name="pendidikanp" class="form-control" id="pendidikan" placeholder="Pendidikan Pasangan Anda">
                          </div>
                          <div class="form-group">
                            <label for="pekerjaanp">Pekerjaan</label>
                            <input type="text" name="pekerjaanp" class="form-control" id="pekerjaan" placeholder="Pekerjaan Pasangan Anda">
                          </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="nama_anak1"><font color="red">Nama (Anak 1)</font><br></label>
                            <input type="text" name="nama_anak1" class="form-control" id="namaank" placeholder="Nama Anak 1">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="namaank2"><font color="orange">Nama (Anak 2)</font></label>
                            <input type="text" name="nama_anak2" class="form-control" id="namaank" placeholder="Nama Anak 2">
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="gender1">L/P</label>
                              <input type="text" name="gender1" class="form-control" id="gender" placeholder="L/P Anak 1">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="gender2">L/P</label>
                              <input type="text" name="gender2" class="form-control" id="gander" placeholder="L/P Anak 2">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="ttl1">Tempat/Tgl Lahir</label>
                              <input type="text" name="ttl1" class="form-control" id="ttl" placeholder="Tempat/Tgl Lahir Anak 1">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="ttl2">Tempat/Tgl Lahir</label>
                              <input type="text" name="ttl2" class="form-control" id="ttl" placeholder="Tempat/Tgl Lahir Anak 2">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="pendidikan">Pendidikan</label>
                              <input type="text" name="pendidikan1" class="form-control" id="pendidikan" placeholder="Pendidikan Anak 1">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="pendidikan">Pendidikan</label>
                              <input type="text" name="pendidikan2" class="form-control" id="pendidikan" placeholder="Pendidikan Anak 2">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="pekerjaan">Pekerjaan</label>
                              <input type="text" name="pekerjaan1" class="form-control" id="pekerjaan" placeholder="Pekerjaan Anak 1">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="pekerjaan">Pekerjaan</label>
                              <input type="text" name="pekerjaan2" class="form-control" id="pekerjaan" placeholder="Pekerjaan Anak 2">
                            </div>
                          </div>
                        <button type="submit" name="simpan" class="btn btn-warning btn-block">Simpan Data</button>
                      </form>
                </div>
                  </div>
                  </div>
</body>
</html>