<!DOCTYPE html>
<html>
<head>
    <title>Edit Proyek</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Proyek</h2>
        <form action="<?= site_url('proyek/update/' . $proyek->id) ?>" method="post">
            <div class="form-group">
                <label for="namaProyek">Nama Proyek</label>
                <input type="text" class="form-control" id="namaProyek" name="namaProyek" value="<?= $proyek->namaProyek ?>">
            </div>
            <div class="form-group">
                <label for="client">Client</label>
                <input type="text" class="form-control" id="client" name="client" value="<?= $proyek->client ?>">
            </div>
            <div class="form-group">
                <label for="tglMulai">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tglMulai" name="tglMulai" value="<?= $proyek->tglMulai ?>">
            </div>
            <div class="form-group">
                <label for="tglSelesai">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tglSelesai" name="tglSelesai" value="<?= $proyek->tglSelesai ?>">
            </div>
            <div class="form-group">
                <label for="pimpinanProyek">Pimpinan Proyek</label>
                <input type="text" class="form-control" id="pimpinanProyek" name="pimpinanProyek" value="<?= $proyek->pimpinanProyek ?>">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan"><?= $proyek->keterangan ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
