<?php 
require "koneksi.php";

// ambil id dari get
$id = $_GET["id"];

$result = mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = '$id'");

if($result){
  echo "
    <script>
      alert('berhasil hapus data mahasiswa');
      document.location.href = 'index.php';
    </script>
  ";
}

?>