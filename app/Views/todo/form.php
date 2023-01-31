<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<h2>Input Todo</h2>
<form method="post" action="<?= site_url('todo/' . $action); ?>">
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" value="<?= $row->judul; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi" value="<?= $row->deskripsi; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?= $this->endSection() ?>