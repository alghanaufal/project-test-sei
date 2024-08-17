<!DOCTYPE html>
<html>
<head>
    <title>Daftar Proyek</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Daftar Proyek</h2>
        <a href="<?= site_url('proyek/input') ?>" class="btn btn-primary mb-2">Tambah Proyek Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Proyek</th>
                    <th>Client</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Selesai</th>
                    <th>Pimpinan Proyek</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proyek as $item): ?>
                    <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->namaProyek ?></td>
                        <td><?= $item->client ?></td>
                        <td><?= $item->tglMulai ?></td>
                        <td><?= $item->tglSelesai ?></td>
                        <td><?= $item->pimpinanProyek ?></td>
                        <td><?= $item->keterangan ?></td>
                        <td>
                            <a href="<?= site_url('proyek/edit/' . $item->id) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= site_url('proyek/delete/' . $item->id) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
