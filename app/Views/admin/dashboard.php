<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
        }

        .header {
            background-color: #071A14;
            padding: 20px;
            color: white;
            text-align: center;
        }

        .sidebar {
            width: 180px;
            background-color: #071A14;
            color: white;
            height: calc(100vh - 70px);
            float: left;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px 20px;
            color: white;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            background-color: #0f332a;
        }

        .content {
            margin-left: 180px;
            padding: 30px;
        }

        .table-container {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th,
        table td {
            padding: 12px;
            text-align: center;
        }

        table th {
            background-color: #071A14;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #eee;
        }

        .aksi-btn {
            display: inline-block;
            width: 25px;
            height: 25px;
            margin: 0 3px;
            border-radius: 3px;
        }

        .btn-edit {
            background-color: blue;
        }

        .btn-delete {
            background-color: red;
        }

        .btn-tambah {
            background-color: #071A14;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            float: right;
            cursor: pointer;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 100px;
        }
    </style>
</head>

<body>

    <div class="header">
        <h2>Rebik’s <br><small>Admin Control Panel</small></h2>
    </div>

    <div class="sidebar">
        <div class="logo">
            <img src="/assets/rebiks-logo.png" alt="Logo">
        </div>
        <a href="/admin/merchandise">Merchandise</a>
        <a href="/admin/tiket">Ticket</a>

        <a href="/admin/pembelian">Pembelian</a>
        <a href="/logout">Logout</a>
    </div>

    <div class="content">
        <div class="table-container">
            <!-- bagian isi table -->
            <?php
            $tipe = $tipe ?? 'merchandise';
            $merchandise = $merchandise ?? [];
            $tiket = $tiket ?? [];
            $items = $tipe === 'tiket' ? $tiket : $merchandise;
            ?>
            <h3><?= $tipe === 'tiket' ? 'Ticket' : 'Merchandise' ?></h3>


            <table>
                <tr>
                    <th>No</th>
                    <?php if ($tipe === 'tiket'): ?>
                        <th>Laga</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    <?php else: ?>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                    <?php endif ?>
                    <th>Aksi</th>
                </tr>

                <?php foreach ($items as $i => $item): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>

                        <?php if ($tipe === 'tiket'): ?>
                            <td><?= $item['nama_laga'] ?></td>
                            <td><?= $item['tanggal'] ?></td>
                            <td><?= $item['lokasi'] ?></td>
                            <td>Rp.<?= number_format($item['harga'], 0, ',', '.') ?></td>
                            <td><?= $item['stok'] ?> tiket</td>
                        <?php else: ?>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['deskripsi'] ?></td>
                            <td>Rp.<?= number_format($item['harga'], 0, ',', '.') ?></td>
                            <td><?= $item['stok'] ?> pcs</td>
                            <td>
                                <?= !empty($item['gambar']) ? '✅ Sudah diupload' : '❌ Belum ada gambar' ?>
                            </td>
                        <?php endif ?>


                        <td>
                            <a href="/admin/<?= $tipe ?>/edit/<?= $item['id'] ?>"
                                style="background-color: blue; color: white; padding: 5px 10px; border-radius: 10px; text-decoration: none; margin-right: 5px; font-size: 12px;">
                                Update
                            </a>
                            <a href="/admin/<?= $tipe ?>/delete/<?= $item['id'] ?>"
                                style="background-color: red; color: white; padding: 5px 10px; border-radius: 10px; text-decoration: none; font-size: 12px;"
                                onclick="return confirm('Yakin ingin hapus?')">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>

            <!-- Tombol Tambah -->
            <a href="/admin/<?= $tipe ?>/create">
                <button class="btn-tambah">Tambah</button>
            </a>

</body>

</html>