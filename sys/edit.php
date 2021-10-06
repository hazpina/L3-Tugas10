<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.arkademy.com/img/logo%20arkademy.1c82cf5c.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>Arkademy L3-T10</title>
</head>
<body>
    <?php include 'koneksi.php' ?>
    <!-- Sidebar -->
    <div class="w3-sidebar w3-teal w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item">Menu</h3>
    <a href="../index.php" class="w3-bar-item w3-button">Home</a>
    <a href="../menu/daftar barang.php" class="w3-bar-item w3-button">Daftar Barang</a>
    <a href="../menu/tambah barang.php" class="w3-bar-item w3-button">Tambah Barang</a>
    </div>

<!-- Page Content -->
    <div style="margin-left:25%">

    <div class="w3-container w3-grey">
    <h1>Arkademy</h1>
    </div>
    <div class="container">
    <h2 class="tambahBarang">Edit Barang</h2>
    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from produk where id='$id'");
	while($d = mysqli_fetch_array($data)){
	?>
    <form action="update.php" method="post" >
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <label for="formInput" class="form-label">Nama Product</label>
        <input class="form-control" type="text" value="<?php echo $d['nama_produk']; ?>" aria-label="default input example" name="nama_produk"  />
        <label for="formInput" class="form-label">Warna Product</label>
        <input class="form-control" type="text" value="<?php echo $d['keterangan_warna']; ?>" aria-label="default input example " name="keterangan_warna"  />
        <label for="formInput" class="form-label">Harga Product</label>
        <input class="form-control" type="number" value="<?php echo $d['harga']; ?>" aria-label="default input example" name="harga"  />
        <label for="formInput" class="form-label">Jumlah Product</label>
        <input class="form-control" type="number" value="<?php echo $d['jumlah']; ?>" aria-label="default input example" name="jumlah"  />
        <input type="submit" class="btn btn-success btn-mg" value="Save"/>
    </form>
    </div>
    </div>
    <?php
    }
    ?>
</body>
</html>