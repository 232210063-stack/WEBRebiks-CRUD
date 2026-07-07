<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pembelian Tiket | REBIK'S FC</title>
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
            z-index: 1000;
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
            rgb(2, 51, 31);
        }

        .form-wrapper {
            max-width: 500px;
            margin: 80px auto;
            background: rgba(255, 255, 255, 0.08);
            padding: 30px;
            border-radius: 16px;
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        .form-wrapper h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 26px;
            color: #fff;
        }

        label {
            display: block;
            margin-bottom: 5px;
            margin-top: 15px;
            font-weight: bold;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            margin-top: 5px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        .checkbox-group {
            margin-top: 15px;
            display: flex;
            align-items: center;
            font-size: 13px;
        }

        .btn-submit {
            margin-top: 25px;
            width: 100%;
            padding: 14px;
            background-color: #00c776;
            color: white;
            font-weight: bold;
            font-size: 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #009d5d;
        }

        @media screen and (max-width: 600px) {
            .form-wrapper {
                margin: 60px 20px;
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
        <a href="/landing/tiket">TICKET</a>
        <a href="/landing/merchandise">MERCHANDISE</a>
    </div>
</div>

<!-- FORM -->
<div class="form-wrapper">
    <h2>Formulir Pembelian Tiket</h2>
    <form action="/landing/tiket/submit" method="post">
    <input type="hidden" name="item_id" value="<?= $tiket['id'] ?>">

    <label for="nama">Nama Lengkap:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="email">Alamat Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="alamat">Alamat Lengkap:</label>
    <textarea id="alamat" name="alamat" required></textarea>

    <div class="checkbox-group">
        <input type="checkbox" name="konfirmasi" id="konfirmasi" required>
        <label for="konfirmasi">Saya menyetujui pembelian tiket ini.</label>
    </div>

    <button type="submit" class="btn-submit">Bayar Sekarang</button>
</form>

</div>

</body>
</html>
