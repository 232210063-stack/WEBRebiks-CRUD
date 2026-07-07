<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Rebik\'s FC' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Tambahkan CSS navbar di sini */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #071A14;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            display: flex;
            align-items: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        .navbar .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .nav-links a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-links a:hover {
            color: #00FF99;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="/assets/rebiks-logo.png" alt="Rebik's FC">
        Rebik's Football Club
    </div>
    <div class="nav-links">
        <a href="/landing">HOME</a>
        <a href="/landing/tiket">TICKET</a>
        <a href="/landing/merchandise">MERCHANDISE</a>
    </div>
</div>

<!-- Konten Halaman -->
<?= $this->renderSection('content') ?>

</body>
</html>
