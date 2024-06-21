<?php 
require "koneksi.php";

// tampilkan data dari database
$result = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
// ambil data dari objek query result
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <a href="create_mahasiswa.php">Tambah Mahasiswa</a><br><br>
  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>No.</th>
      <th>Foto</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jurusan</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach($result as $row) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td>
        <img src="img/<?= $row["gambar"]; ?>" alt="Randi" width="70">
      </td>
      <td><?= $row["nim"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["jurusan"]; ?></td>
      <td><?= $row["alamat"]; ?></td>
      <td>
        <a href="">edit</a> | <a href="">hapus</a>
      </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </table>
</body>
</html>