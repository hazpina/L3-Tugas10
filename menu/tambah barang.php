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
    <?php include '../sys/koneksi.php' ?>
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
    <div class="container">
    <h2 class="tambahBarang">Tambah Barang</h2>
    <form method="post" action="../sys/tambah.php">
        <label for="formInput" class="form-label">Nama Product</label>
        <input class="form-control" type="text" placeholder="Masukan Nama Product" aria-label="default input example" name="nama_produk" required />
        <label for="formInput" class="form-label">Warna Product</label>
        <input class="form-control" type="text" placeholder="Masukan Warna Product" aria-label="default input example " name="keterangan_warna" required />
        <label for="formInput" class="form-label">Harga Product</label>
        <input class="form-control" type="number" placeholder="Masukan Harga Product" aria-label="default input example" name="harga" required />
        <label for="formInput" class="form-label">Jumlah Product</label>
        <input class="form-control" type="number" placeholder="Masukan Jumlah Product" aria-label="default input example" name="jumlah" required />
        <input type="submit" class="btn btn-success btn-mg" value="Submit"/>
    </form>
    </div>
    </div>
</body>
</html>