<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rebik's Official Store</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #ffffff;
            overflow-x: hidden;
        }

        /* NAVBAR TRANSPARAN */
        .navbar {
            position: sticky;        
            top: 0;                  
            z-index: 999;            
            background-color: transparent;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            width: 100%;
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

        .hero {
            background: url('/assets/merchandise-banner.png') center/cover no-repeat;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            font-style: italic;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            padding: 50px;
            background-color: #fff;
            grid-template-columns: repeat(4, 1fr); /* 4 kolom */
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: contain;
            transition: opacity 0.3s ease;

        }

        .card .info {
            padding: 15px;
            text-align: center;
        }

        .card .product-name {
            font-weight: bold;
            font-style: italic;
            margin-bottom: 5px;
        }

        .card .price {
            color: #444;
            font-size: 14px;
        }

        .card .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover .overlay {
            opacity: 1;
        }

        .overlay a {
            background-color: white;
            color: #071A14;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .overlay a:hover {
            background-color: #071A14;
            color: white;
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

<!-- HERO SECTION -->
<div class="hero">
</div>

<!-- PRODUCTS SECTION -->
<div class="products">
    <?php foreach ($merchandise as $item): ?>
    <div class="card">
        <img src="/uploads/<?= $item['gambar'] ?>" alt="<?= $item['nama'] ?>">
        <div class="overlay">
            <a href="/landing/merchandise/<?= $item['id'] ?>">Lihat Detail</a>
        </div>
        <div class="info">
            <div class="product-name"><?= $item['nama'] ?></div>
            <div class="price">Rp<?= number_format($item['harga'], 0, ',', '.') ?></div>
        </div>
    </div>
    <?php endforeach ?>
</div>
<?php if (session()->getFlashdata('stok_habis')): ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops!',
        text: '<?= session()->getFlashdata('stok_habis') ?>',
        confirmButtonColor: '#d33'
    });
</script>
<?php endif; ?>
</body>
</html>
