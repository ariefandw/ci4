<?= $this->extend('layouts/print') ?>

<?= $this->section('content') ?>
<table>
    <tr>
        <td style="width: 150px;">
            <img src="img/logo.png" style="width:100px;" />
        </td>
        <td>
            <h1>Universitas Gadjah Mada</h1>
            <h2>Fakultas Matematika dan Ilmu Pengetahuan Alam</h2>
        </td>
    </tr>
</table>
<h1>Todo</h1>
<table border="1">
    <tr>
        <td>Judul</td>
        <td>Deskripsi</td>
    </tr>
    <?php foreach ($rows as $row): ?>
        <tr>
            <td>
                <?= $row->judul; ?>
            </td>
            <td>
                <?= $row->deskripsi; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>