<?php 
require "koneksi.php";
if(isset($_POST["simpan"])){

  // tampung data dari post
  $nim = $_POST["nim_mhs"];
  $nama = $_POST["nama_mhs"];
  $jurusan = $_POST["jurusan_mhs"];
  $alamat = $_POST["alamat_mhs"];
  $gambar = $_POST["gambar_mhs"];

  $query = "INSERT INTO tb_mahasiswa
            VALUES
            ('', '$nim', '$nama', '$jurusan', '$alamat', '$gambar')
            ";
  $result = mysqli_query($koneksi, $query);

  if($result){
    echo "
      <script>
        alert('berhasil tambah data mahasiswa');
        document.location.href = 'index.php';
      </script>
    ";
  }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="" method="post">
    <label>
      Nim :
      <input type="number" name="nim_mhs">
    </label><br>
    <label>
      Nama :
      <input type="text" name="nama_mhs">
    </label><br>
    <label>
      Jurusan :
      <input type="text" name="jurusan_mhs">
    </label><br>
    <label>
      Alamat :
      <input type="text" name="alamat_mhs">
    </label><br>
    <label>
      Gambar :
      <input type="text" name="gambar_mhs">
    </label><br>
    <button type="submit" name="simpan">Tambah Mahasiswa</button>
  </form>
</body>
</html>