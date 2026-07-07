<?= $this->include('admin/layout/header') ?>

<h2 class="judul-halaman"><?= $title ?></h2>

<a href="/admin/merchandise/create" class="btn btn-tambah">Tambah Merchandise</a>

<table class="tabel">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($merchandise as $item): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($item['nama']) ?></td>
            <td><?= esc($item['deskripsi']) ?></td>
            <td>Rp<?= number_format($item['harga'], 0, ',', '.') ?></td>
            <td><?= esc($item['stok']) ?></td>
            <td>
                <a href="/admin/merchandise/edit/<?= $item['id'] ?>" class="btn btn-edit">Edit</a>
                <a href="/admin/merchandise/delete/<?= $item['id'] ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-hapus">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->include('admin/layout/footer') ?>
