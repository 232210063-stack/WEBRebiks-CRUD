<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Tiket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-image: url('/assets/bg-merch.jpg');
            background-color: #071A14;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .form-wrapper {
            backdrop-filter: blur(15px);
            background-color: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            border-radius: 16px;
            padding: 40px 30px;
            width: 100%;
            max-width: 450px;
            color: white;
        }

        h2 {
            text-align: center;
            color: white;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: white;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        button {
            background-color: #d92027;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 5px;
        }

        button:hover {
            background-color: #a11417;
        }

        .btn-kembali {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            margin-top: 15px;
        }

        .btn-kembali:hover {
            background-color: white;
            color: #071A14;
        }

        @media (max-width: 600px) {
            .form-wrapper {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<div class="form-wrapper">
    <h2>Tambah Tiket</h2>
    <form action="/admin/tiket/store" method="post">
        <label>Nama Laga:</label>
        <input type="text" name="nama_laga" placeholder="Contoh: Rebik's FC vs Macan Bogor" required>

        <label>Tanggal:</label>
        <input type="date" name="tanggal" required>

        <label>Lokasi:</label>
        <input type="text" name="lokasi" placeholder="Contoh: Rebik Arena" required>

        <label>Harga:</label>
        <input type="number" name="harga" placeholder="Harga tiket..." required>

        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" required>

        <button type="submit">Simpan</button>
    </form>

    <form action="/admin/tiket" method="get">
        <button type="submit" class="btn-kembali">Kembali</button>
    </form>
</div>

</body>
</html>
