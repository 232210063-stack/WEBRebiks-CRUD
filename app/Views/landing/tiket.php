<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tiket Rebik's</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: url('/assets/bg-tiket.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 999;
            backdrop-filter: blur(8px);
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px;
            margin-right: 12px;
        }

        .club-name {
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        .nav-links a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: rgb(2, 51, 31)
        }

        h2 {
            text-align: center;
            margin-top: 60px;
            font-size: 36px;
            color: #fff;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.7);
        }

        .ticket-wrapper {
            max-width: 1000px;
            margin: 40px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 20px;
            padding: 0 20px;
        }

        .ticket-box {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 25px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            box-shadow: 0 8px 24px rgba(0,0,0,0.2);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .ticket-box:hover {
            transform: scale(1.03);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
            background: rgba(255, 255, 255, 0.15);
        }

        .ticket-info h3 {
            font-size: 22px;
            margin-bottom: 6px;
        }

        .ticket-info p {
            font-size: 14px;
            margin: 2px 0;
            opacity: 0.9;
        }

        .btn-beli {
            margin-top: 20px;
            background-color: #00c776;
            color: white;
            padding: 14px 28px;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-beli:hover {
            background-color: #009e5a;
        }

        @media (max-width: 768px) {
            .ticket-wrapper {
                grid-template-columns: 1fr;
            }

            .btn-beli {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">
        <img src="/assets/rebiks-logo.png" alt="Rebik's FC">
        <span class="club-name">Rebik's Football Club</span>
    </div>
    <div class="nav-links">
        <a href="/">HOME</a>
        <a href="/landing/tiket">TICKET</a>
        <a href="/landing/merchandise">MERCHANDISE</a>
    </div>
</div>

<!-- CONTENT -->
<h2>Daftar Tiket Pertandingan</h2>
<div class="ticket-wrapper">
    <?php foreach ($tiket as $item): ?>
        <div class="ticket-box">
    <div class="ticket-info">
        <h3><?= $item['nama_laga'] ?></h3>
        <p>Tanggal: <?= $item['tanggal'] ?></p>
        <p>Lokasi: <?= $item['lokasi'] ?></p>
        <p>Harga: Rp<?= number_format($item['harga'], 0, ',', '.') ?></p>
        <p>Kapasitas: <?= $item['stok'] > 0 ? $item['stok'] . ' tiket tersedia' : 'Sold Out' ?></p>
    </div>

    <?php if ($item['stok'] > 0): ?>
        <a href="/landing/tiket/<?= $item['id'] ?>/beli" class="btn-beli">BELI SEKARANG</a>
    <?php else: ?>
        <button class="btn-beli" style="background-color: grey; cursor: not-allowed;" disabled>SOLD OUT</button>
    <?php endif; ?>
</div>
    <?php endforeach ?>
</div>

</body>
</html>
