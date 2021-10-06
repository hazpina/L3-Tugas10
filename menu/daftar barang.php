<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.arkademy.com/img/logo%20arkademy.1c82cf5c.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Arkademy L3-T10</title>
    <?php include '../sys/koneksi.php'?>
</head>
<body>
    <!-- Sidebar -->
    <div class="w3-sidebar w3-teal w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item">Menu</h3>
    <a href="../index.php" class="w3-bar-item w3-button">Home</a>
    <a href="daftar barang.php" class="w3-bar-item w3-button">Daftar Barang</a>
    <a href="tambah barang.php" class="w3-bar-item w3-button">Tambah Barang</a>
    </div>

<!-- Page Content -->
    <div style="margin-left:25%">

    <div class="w3-container w3-grey">
    <h1>Arkademy</h1>
    </div>
    <!-- table -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Product</th>
      <th scope="col">Warna Product</th>
      <th scope="col">Harga Product</th>
      <th scope="col">Jumlah Product</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
  <?php
            $no=1;
            $data = mysqli_query($koneksi, "SELECT * FROM produk");
            while($d = mysqli_fetch_array($data)){
             ?> 
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $d['nama_produk']; ?></td>
      <td><?php echo $d['keterangan_warna']; ?></td>
      <td><?php echo $d['harga']; ?></td>
      <td><?php echo $d['jumlah']; ?></td>
      <td>
            <a href="../sys/edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
			<a href="../sys/hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
      </td>
      <?php
        }
        ?>
    </tr>
  </tbody>
</table>
    </div>
</body>
</html>