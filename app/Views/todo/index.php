<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<h1>Todo</h1>
<table class="table">
    <tr>
        <th scope="col">Judul</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Tanggal Dibuat</th>
        <th scope="col">Tanggal diupdate</th>
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
        </tr>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>