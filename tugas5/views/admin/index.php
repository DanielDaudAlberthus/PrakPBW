<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="./style/dashboard.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Dashboard Admin</h2>
            <div class="action-buttons">
                <a href="<?= BASEURL; ?>index.php?url=admin/add" class="btn btn-primary">Tambah Barang</a>
                <a href="<?= BASEURL; ?>index.php?url=login/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>

        <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($data['items'] as $item): ?>
                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['stok']; ?></td>
                    <td>Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
                    <td class="action-links">
                        <a href="<?= BASEURL; ?>index.php?url=admin/edit/<?= $item['id']; ?>" class="btn-edit">Edit</a>
                        <a href="<?= BASEURL; ?>index.php?url=admin/delete/<?= $item['id']; ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>