<h2>Daftar Tiket</h2>
<a href="/admin/tiket/create">Tambah Tiket</a>
<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Laga</th>
        <th>Tanggal</th>
        <th>Lokasi</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($tiket as $i => $row): ?>
    <tr>
        <td><?= $i+1 ?></td>
        <td><?= $row['nama_laga'] ?></td>
        <td><?= $row['tanggal'] ?></td>
        <td><?= $row['lokasi'] ?></td>
        <td><?= $row['harga'] ?></td>
        <td>
            <a href="/admin/tiket/edit/<?= $row['id'] ?>">Edit</a>
            <a href="/admin/tiket/delete/<?= $row['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
<link rel="stylesheet" href="<?= base_url('css/daftartiket.css') ?>">
