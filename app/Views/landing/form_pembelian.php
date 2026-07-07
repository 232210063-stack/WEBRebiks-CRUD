<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pembelian Merchandise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
        }
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
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
            height: 40px;
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
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
            min-height: calc(100vh - 80px);
        }
        .form-box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }
        .form-box h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #071A14;
        }
        .form-box label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        .form-box input,
        .form-box textarea,
        .form-box select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        .form-box input[type="checkbox"] {
            width: auto;
        }
        .form-box button {
            width: 100%;
            padding: 12px;
            background-color: #d92027;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-box button:hover {
            background-color: #b51618;
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

<!-- FORM CONTENT -->
<div class="wrapper">
    <div class="form-box">
        <h2>Form Pembelian Merchandise</h2>
        <form action="/landing/pembelian/store" method="post">
            <!-- Simpan item_id -->
            <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
            <input type="hidden" name="jenis" value="merchandise">

            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat Lengkap:</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="ukuran">Pilih Ukuran:</label>
            <select id="ukuran" name="ukuran" required>
                <option value="">-- Pilih --</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>

            <label for="jumlah">Jumlah Pembelian:</label>
            <input type="number" name="jumlah" min="1" required>

            <label>
                <input type="checkbox" name="konfirmasi" required>
                Saya setuju untuk melakukan pembelian.
            </label>

            <button type="submit">Bayar Sekarang</button>
        </form>
    </div>
</div>

</body>
</html>
