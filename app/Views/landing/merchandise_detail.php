<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - REBIK'S</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #ffffff;
            color: #071A14;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 999;
            background-color: #071A14;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
            font-size: 18px;
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
            color: rgb(2, 51, 31);
        }

        .container {
            max-width: 1000px;
            margin: 60px auto;
            padding: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            background-color: #f9f9f9;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }

        .left {
            flex: 1;
            min-width: 300px;
            display: flex;
            justify-content: center;
        }

        .left img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            object-fit: contain;
            background-color: white;
            padding: 10px;
        }

        .right {
            flex: 1;
            min-width: 300px;
        }

        .right h2 {
            margin-bottom: 10px;
            font-size: 26px;
            color: #071A14;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #c0392b;
        }

        .stok-info {
            margin-bottom: 15px;
            font-size: 14px;
            color: <?= $merchandise['stok'] > 0 ? '#333' : '#d92027' ?>;
        }

        .sizes {
            margin: 15px 0;
        }

        .sizes button {
            margin: 5px 10px 5px 0;
            padding: 8px 15px;
            background-color: #071A14;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .sizes button:hover {
            background-color: #093e2e;
        }

        .buy-button {
            margin: 20px 0;
            background-color: #d00000;
            color: white;
            padding: 12px 25px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .buy-button:hover {
            background-color: #a40000;
        }

        .buy-button:disabled {
            background-color: gray;
            cursor: not-allowed;
        }

        .description {
            margin-top: 20px;
            font-size: 14px;
            line-height: 1.6;
        }

        .description h4 {
            margin-bottom: 5px;
            color: #071A14;
        }

        .description ul {
            margin-top: 5px;
            padding-left: 20px;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 20px;
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
        <a href="/landing/tiket">TIKET</a>
        <a href="/landing/merchandise">MERCHANDISE</a>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="container">
    <div class="left">
        <img src="/uploads/<?= $merchandise['gambar'] ?>" alt="<?= $merchandise['nama'] ?>">
    </div>
    <div class="right">
        <h2><?= $merchandise['nama'] ?></h2>
        <div class="price">Rp<?= number_format($merchandise['harga'], 0, ',', '.') ?></div>

        <!-- Info Stok -->
        <div class="stok-info">
            Stok Tersisa: <strong><?= $merchandise['stok'] > 0 ? $merchandise['stok'] : 'Habis' ?></strong>
        </div>

        <h4>UKURAN</h4>
        <div class="sizes">
            <button>S</button>
            <button>M</button>
            <button>L</button>
            <button>XL</button>
        </div>

        <!-- Tombol Beli -->
        <?php if ($merchandise['stok'] > 0): ?>
            <button class="buy-button" onclick="window.location.href='/landing/merchandise/<?= $merchandise['id'] ?>/beli'">BELI SEKARANG</button>
        <?php else: ?>
            <button class="buy-button" disabled>STOK HABIS</button>
        <?php endif; ?>

        <div class="description">
            <h4>Deskripsi Produk</h4>
            <p><?= $merchandise['deskripsi'] ?></p>

            <h4>Komposisi dan Perawatan</h4>
            <ul>
                <li>80% Katun</li>
                <li>20% Poliester</li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
