<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
  mysqli_query($con, "insert into kekuatan_kelemahan set
  kekuatan = '$_POST[kekuatan]',
  kelemahan = '$_POST[kelemahan]',
  tujuan = '$_POST[tujuan]'");
}
?>