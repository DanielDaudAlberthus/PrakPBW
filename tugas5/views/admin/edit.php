<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="./style/edit.css">
</head>
<body>
<div class="container">
        <div class="card">
            <h2>Edit Barang</h2>
            <form action="<?= BASEURL; ?>index.php?url=admin/update" method="POST">
                <input type="hidden" name="id" value="<?= $data['item']['id']; ?>">
                
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" name="nama" id="nama" value="<?= $data['item']['nama']; ?>" required placeholder="Masukkan nama barang">
                </div>

                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" id="stok" value="<?= $data['item']['stok']; ?>" required placeholder="Masukkan jumlah stok">
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" value="<?= $data['item']['harga']; ?>" required placeholder="Masukkan harga barang">
                </div>

                <div class="button-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= BASEURL; ?>index.php?url=admin" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>