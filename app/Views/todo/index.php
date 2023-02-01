<?= $this->extend('layouts/app') ?>

<?= $this->section('css') ?>
<style>
    #logo-todo {
        width: 100px;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<img id="logo-todo" src="<?= base_url('img/logo.png'); ?>" />
<h1>Todo</h1>
<a class="btn btn-success" href="<?= site_url('todo/new') ?>" role="button">Tambah</a>
<a class="btn btn-info" href="<?= site_url('todo/pdfall'); ?>" role="button">Cetak</a>
<table class="table">
    <tr>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Tanggal Dibuat</th>
        <th>Tanggal diupdate</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($rows as $row): ?>
        <tr>
            <th>
                <?= $row->judul; ?>
            </th>
            <td>
                <?= $row->deskripsi; ?>
            </td>
            <td>
                <?= $row->created_at; ?>
            </td>
            <td>
                <?= $row->updated_at; ?>
            </td>
            <td>
                <form method="post" action="<?= site_url('todo/delete/' . $row->id); ?>"
                    onsubmit="return confirm('Apakah anda yakin?');">
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="<?= site_url('todo/pdf/' . $row->id) ?>" class="btn btn-info" target="__blank">
                            cetak
                        </a>
                        <a href=" <?= site_url('todo/edit/' . $row->id) ?>" class="btn btn-warning">
                            edit
                        </a>
                        <button type="submit" class="btn btn-danger">hapus</button>
                    </div>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>