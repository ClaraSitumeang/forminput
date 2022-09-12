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
    <header style="text-align: center;">
        <img align="center-right" src="image/foto-profile.jpg" width="200" height="200" style="border-radius: 50%;"/>
        <h1></h1>
        <tr><td><h6>&nbsp Upload Foto</h6></td><td></td></tr>
        <tr><td></tr></td><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="file" value="upload gambar"/></td></tr>
  
    </header>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
              <h3>I. IDENTITAS DIRI</h3>
            </div>
            <div class="card-body">
                <form action="data_diri.php/index.php" method="POST">
                    <div class="form-group row">
                      <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-5">
                        <input type="text" name="nama_lengkap" class="form-control" id="nama" placeholder="Nama Lengkap">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat_tanggallhr" class="col-sm-3 col-form-label">Tempat/Tanggal Lahir</label>
                        <div class="col-sm-5">
                          <input type="text" name="tempat_tanggallhr" class="form-control" id="ttl" placeholder="Tempat/Tanggal Lahir">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-5">
                          <input type="text" name="gender" class="form-control" id="gender" placeholder="Jenis Kelamin">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-5">
                          <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Anda">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="no_hp" class="col-sm-3 col-form-label">Telepon / HP</label>
                        <div class="col-sm-5">
                          <input type="text" name="no_hp" class="form-control" id="nohp" placeholder="Telepon/HP">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Alamat e-mail</label>
                        <div class="col-sm-5">
                          <input type="text" name="email" class="form-control" id="email" placeholder="Alamat e-mail">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                        <div class="col-sm-5">
                          <input type="text" name="agama" class="form-control" id="agama" placeholder="Agama">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="statusp" class="col-sm-3 col-form-label">Status Pernikahan</label>
                        <div class="col-sm-5">
                          <input type="text" name="statusp" class="form-control" id="spernikahan" placeholder="Status Pernikahan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                        <div class="col-sm-5">
                          <input type="text" name="nip" class="form-control" id="nip" placeholder="NIP">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="jabatans" class="col-sm-3 col-form-label">Jabatan Sekarang</label>
                        <div class="col-sm-5">
                          <input type="text" name="jabatans" class="form-control" id="jabatansekarang" placeholder="Jabatan Saat Ini">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="golongan" class="col-sm-3 col-form-label">Golongan</label>
                        <div class="col-sm-5">
                          <input type="text" name="golongan" class="form-control" id="golongan" placeholder="Golongan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="namaatasan" class="col-sm-3 col-form-label">Nama Atasan Langsung</label>
                        <div class="col-sm-5">
                          <input type="text" name="namaatasan" class="form-control" id="namaatasan" placeholder="Nama Atasan Langsung">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="jabatanatasan" class="col-sm-3 col-form-label">Jabatan Atasan Langsung</label>
                        <div class="col-sm-5">
                          <input type="text" name="jabatanatasan" class="form-control" id="jabatanatasan" placeholder="Jabatan Atasan Langsung">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <button type="submit" name="simpan" class="btn btn-primary btn-block">Simpan Data</button>
                    </div>
                      </div>
            
                  </form>
            </div>

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
        <div class="container">
        <div class="card mt-3">
            <div class="card-header">
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
            <div class="container">
        <div class="card mt-3">
            <div class="card-header">
              <h3>VIII. MINAT DAN HARAPAN</h3>
            </div>
            <div class="card-body">
                <form action="minat_harapan.php" method="POST">
                    <div class="form-group"><div>
                      <p><b><h5>&nbsp; 1. Apakah yang Anda sukai dari Pekerjaan Anda sekarang? (kondisi, tugas-tugas, dsb).</h5></p>
                       <textarea class="form-control" id="sukai" name="sukai" placeholder="Uraikan di sini" rows="5">&nbsp;</textarea>
                    </div>
                    <div class="form-group"><div>
                      <p><b><h5>&nbsp; 2. Apa yang paling Anda tidak sukai dari pekerjaan/jabatan Anda sekarang? (kondisi, tugas, dsb). Mengapa?
                      </h5></p>
                       <textarea class="form-control" id="tidak_suka" name="tidak_suka"  placeholder="Uraikan di sini" rows="5">&nbsp;</textarea>
                    </div></div>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                  </form>
                  </div>    
            </div></div>
            <div class="container">
        <div class="card mt-3">
            <div class="card-header">
              <h3>VII. KEKUATAN DAN KELEMAHAN</h3>
            </div>
            <div class="card-body">
                <form action="kekuatan_kelemahan.php" method="POST">
                    <div class="form-group"><div>
                      <p><b><h5>&nbsp; 1. Apakah yang menjadi kekuatan (Strong Point) Anda?</h5></p>
                       <textarea class="form-control" id="kekuatan" name="kekuatan" placeholder="Strong Point" rows="5">&nbsp;</textarea>
                    </div>
                    <div class="form-group"><div>
                      <p><b><h5>&nbsp; 2. Apakah yang menjadi Kelemahan (Week Point) Anda?
                      </h5></p>
                       <textarea class="form-control" id="kelemahan" name="kelemahan"  placeholder="Week Point" rows="5">&nbsp;</textarea>
                    </div></div>
                    <div class="form-group"><div>
                      <p><b><h5>&nbsp; 3. Ceritakan tujuan Anda ke depan baik jangka pendek maupun jangka panjang. (Setelah selesai, tuliskan tanggal tes,
                        tanda tangan, dan nama lengkap di bawah jawaban Anda).
                      </h5></p>
                       <textarea class="form-control" id="tujuan" name="tujuan"  placeholder="Uraikan di sini" rows="5">&nbsp;</textarea>
                    </div></div>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
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
