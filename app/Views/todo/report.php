<?= $this->extend('layouts/print') ?>

<?= $this->section('content') ?>
<h1>Todo</h1>
<table>
    <tr>
        <td>Judul</td>
        <td>:</td>
        <td>
            <?= $row->judul; ?>
        </td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td>:</td>
        <td>
            <?= $row->deskripsi; ?>
        </td>
    </tr>
</table>
<?= $this->endSection() ?>