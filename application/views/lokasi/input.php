<!DOCTYPE html>
<html>
<head>
    <title>Tambah Lokasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Lokasi Baru</h2>
        <form action="<?= site_url('proyek/store') ?>" method="post">
            <div class="form-group">
                <label for="namaLokasi">Nama Lokasi</label>
                <input type="text" class="form-control" id="namaLokasi" name="namaLokasi">
            </div>
            <div class="form-group">
                <label for="negara">Negara</label>
                <input type="text" class="form-control" id="negara" name="negara">
            </div>
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <input type="text" class="form-control" id="provinsi" name="provinsi">
            </div>
            <div class="form-group">
                <label for="kota">Kota</label>
                <textarea class="form-control" id="kota" name="kota"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
