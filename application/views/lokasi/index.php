<!DOCTYPE html>
<html>
<head>
    <title>Daftar Lokasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Daftar Lokasi</h2>
        <a href="<?= site_url('lokasi/input') ?>" class="btn btn-primary mb-2">Tambah Lokasi Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lokasi</th>
                    <th>Negara</th>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lokasi as $item): ?>
                    <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->namaLokasi ?></td>
                        <td><?= $item->negara ?></td>
                        <td><?= $item->provinsi ?></td>
                        <td><?= $item->kota ?></td>
                        <td>
                            <a href="<?= site_url('lokasi/edit/' . $item->id) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= site_url('lokasi/delete/' . $item->id) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
