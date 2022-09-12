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
                  <div class="container">
                    <div class="card ">
                        <div class="card-header">
                        <h3>III. RIWAYAT PENDIDIKAN</h3>
                    </div>
                    <div class="card-body">
                        <form>
                        <p><b><h5>1. Pendidikan Formal</h5></p>
                            <p><b><font color="red">S3</font></p>
                            <div class="form-group row">
                              <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
                              <div class="col-sm-10">
                                <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" placeholder="Nama Sekolah">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                              <div class="col-sm-10">
                                <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan Anda">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                              <div class="col-sm-10">
                                <input type="text" name="tempat"  class="form-control" id="tempat" placeholder="Tempat">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="thn" class="col-sm-2 col-form-label">Thn s/d Thn</label>
                              <div class="col-sm-10">
                                <input type="text" name="thn" class="form-control" id="thn" placeholder="Thn s/d Thn">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                              <div class="col-sm-10">
                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan">
                              </div>
                            </div>
                            <p><b><font color="red">S2</font></p>
                            <div class="form-group row">
                              <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
                              <div class="col-sm-10">
                                <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" placeholder="Nama Sekolah">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                              <div class="col-sm-10">
                                <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan Anda">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                              <div class="col-sm-10">
                                <input type="text" name="tempat"  class="form-control" id="tempat" placeholder="Tempat">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="thn" class="col-sm-2 col-form-label">Thn s/d Thn</label>
                              <div class="col-sm-10">
                                <input type="text" name="thn" class="form-control" id="thn" placeholder="Thn s/d Thn">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                              <div class="col-sm-10">
                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan">
                              </div>
                            </div>
                            <p><b><font color="red">Univ/Inst</font></p>
                            <div class="form-group row">
                              <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
                              <div class="col-sm-10">
                                <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" placeholder="Nama Sekolah">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                              <div class="col-sm-10">
                                <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan Anda">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                              <div class="col-sm-10">
                                <input type="text" name="tempat"  class="form-control" id="tempat" placeholder="Tempat">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="thn" class="col-sm-2 col-form-label">Thn s/d Thn</label>
                              <div class="col-sm-10">
                                <input type="text" name="thn" class="form-control" id="thn" placeholder="Thn s/d Thn">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                              <div class="col-sm-10">
                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan">
                              </div>
                            </div>
                            <p><b><font color="red">Akademi</font></p>
                            <div class="form-group row">
                              <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
                              <div class="col-sm-10">
                                <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" placeholder="Nama Sekolah">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                              <div class="col-sm-10">
                                <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan Anda">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                              <div class="col-sm-10">
                                <input type="text" name="tempat"  class="form-control" id="tempat" placeholder="Tempat">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="thn" class="col-sm-2 col-form-label">Thn s/d Thn</label>
                              <div class="col-sm-10">
                                <input type="text" name="thn" class="form-control" id="thn" placeholder="Thn s/d Thn">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                              <div class="col-sm-10">
                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan">
                              </div>
                            </div>
                          <p><b><font color="red">SLTA</font></p>
                            <div class="form-group row">
                              <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
                              <div class="col-sm-10">
                                <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" placeholder="Nama Sekolah">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                              <div class="col-sm-10">
                                <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan Anda">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                              <div class="col-sm-10">
                                <input type="text" name="tempat"  class="form-control" id="tempat" placeholder="Tempat">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="thn" class="col-sm-2 col-form-label">Thn s/d Thn</label>
                              <div class="col-sm-10">
                                <input type="text" name="thn" class="form-control" id="thn" placeholder="Thn s/d Thn">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                              <div class="col-sm-10">
                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan">
                              </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Simpan Data</button>
                      </form>
                      <form action="pendidikan_informal.php" method="POST">
                        <p><b><h5>2. Pendidikan Informal (Kursus atau Training)</h5></p>
                            <div class="form-group row">
                              <label for="jenis_kursus" class="col-sm-3 col-form-label">Jenis Kursus/Training</label>
                              <div class="col-sm-8">
                                <input type="text" name="jenis_kursus" class="form-control" id="jenis_kursus" placeholder="Jenis Kursus/Training">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
                              <div class="col-sm-8">
                                <input type="text" name="tempat"  class="form-control" id="tempat" placeholder="Tempat">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                              <div class="col-sm-8">
                                <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Tahun">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                              <div class="col-sm-8">
                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan">
                              </div>
                            </div>
                            <button type="submit" name="simpan" class="btn btn-success btn-block">Simpan Data</button>
                      </form>
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
