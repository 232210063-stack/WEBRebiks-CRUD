<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - Pembelian</title>
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

        table th, table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }

        table th {
            background-color: #071A14;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #eee;
        }

        .badge-sudah {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
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
    <a href="/admin/merchandise-dashboard">Merchandise</a>
    <a href="/admin/tiket-dashboard">Ticket</a>
    <a href="/admin/pembelian">Pembelian</a>
    <a href="/logout">Logout</a>
</div>

<div class="content">
    <div class="table-container">
        <h3>Data Pembelian</h3>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Ukuran</th>
                <th>Jenis</th>
                <th>Produk/Laga</th>
                <th>Jumlah</th> 
                <th>Waktu</th>
            </tr>

            <?php foreach ($pembelian as $i => $item): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= esc($item['nama']) ?></td>
                    <td><?= esc($item['email']) ?></td>
                    <td><?= esc($item['alamat']) ?></td>
                    <td><?= esc($item['ukuran']) ?></td>
                    <td><?= esc($item['jenis']) ?></td>
                    <td><?= esc($item['nama_item'] ?? '-') ?></td>
                    <td><?= esc($item['jumlah']) ?></td> 
                    <td><?= esc($item['created_at']) ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>

</body>
</html>
