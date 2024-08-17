<!DOCTYPE html>
<html>
<head>
    <title>Edit Lokasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Lokasi</h2>
        <form action="<?= site_url('proyek/update/' . $proyek->id) ?>" method="post">
            <div class="form-group">
                <label for="namaLokasi">Nama Lokasi</label>
                <input type="text" class="form-control" id="namaLokasi" name="namaLokasi" value="<?= $proyek->namaLokasi ?>">
            </div>
            <div class="form-group">
                <label for="negara">Negara</label>
                <input type="text" class="form-control" id="negara" name="negara" value="<?= $proyek->negara ?>">
            </div>
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $proyek->provinsi ?>">
            </div>
            <div class="form-group">
                <label for="kota">Kota</label>
                <textarea class="form-control" id="kota" name="kota"><?= $proyek->kota ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
